<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'dataweb' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ui:&a]F2M NM3)]]%3kR~~O B(W}(K3uQ13Vm)xvD617*xj4:KOc3&dWUh&;}___' );
define( 'SECURE_AUTH_KEY',  'V>^I27G,~+*yu4s.p&]_!R#VBM3-Qi xGt)nSN@6FhT7!]xp@S[ ^d^3I`4<{X.F' );
define( 'LOGGED_IN_KEY',    'df;Ifv)YSrAk*}@;fru5J5veA! n1PQ ObJnfpe)qTELes=4{*8Mjq@~4*hw>;+C' );
define( 'NONCE_KEY',        'VLL0S7)AHZ6}|rjArQ/}?$m#^dlRD$`AAvQTqcPs%>6eZL^/^;4k*ZB[cFQL3hzB' );
define( 'AUTH_SALT',        'yM?yZ99;L,,y6exFtGfwN}.V0qY6Gb77A^yjDQ61c?(M78a@C^$WD>bk/s1@$vcj' );
define( 'SECURE_AUTH_SALT', '6QqZRnoL$U:9n/s$yPeb=G=L@FY6!q-%~2*iC.lk+;jNi)Sbk}SWkj,&8Z=FAI`T' );
define( 'LOGGED_IN_SALT',   'sycMwHM=x}mYFl@|hCX}fmRoJvNGHL)vYtUxd(?jGOgb(OL.l4ejd-8sZn/P0S?>' );
define( 'NONCE_SALT',       'U6dEUP&,.LJ038l:+/G!^{8Kk.7ni{/QA(#5oYsx)Jqd[aZ`MPNzm#[)obO+}p/.' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'trong2310_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
