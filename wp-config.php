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
define('DB_NAME', 'duoc');

/** Username của database */
define('DB_USER', 'root');

/** Mật khẩu của database */
define('DB_PASSWORD', '');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '!mrEx{3eeU?lKirpTnWHY;rc.K!+,^hyX,p_KNVt?s4Qe%JJwbca9u)m]YC~yjdA');
define('SECURE_AUTH_KEY',  '/%{B${@*sd3{L)x0bI!@5&:S},jBM..-d$9`p@=4t/!N{3,z7rdL9P$0Tk:=c.dW');
define('LOGGED_IN_KEY',    '+Ny+sSxS_Ac(EypG?YA(j*5vW/B/*st|]^Sz V:gAEd@9[#$H{x/^p3R_`eFG~pa');
define('NONCE_KEY',        'ZABO<0agho2Fu7L|S`Sr#(pWIi#TGG=g5d4e;{{uZP/Rc^B&e%S5t .Kp2B0* mm');
define('AUTH_SALT',        '|}o*KNLkq=E.?%$Xch$lP,;.PZ&r/kPyz/1GKeCWqUkc:CC%(&$YK|3g4.hblsm3');
define('SECURE_AUTH_SALT', '?!j&J7^S]d_V)C`&L8$mX|iYF-:z[!RawEbN%_BtFy]fZ!Q;[(kB=9CkD4[;cxb ');
define('LOGGED_IN_SALT',   'clc6war.qaID~+S}}Ii2L7ljw>;JC6Y]NZ,%uL~!r{iXCqc5-)86mOY76jE=/f5~');
define('NONCE_SALT',       'h5P}SmFYi2%Qe~.<Ck&T*17dvZQ+vJiC^cZE~f+5%Pb`,=F;5HY-w_o&BHc/}8%;');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

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
define('WP_MEMORY_LIMIT', '256M');
define( 'WP_AUTO_UPDATE_CORE', false );
define(‘AUTOSAVE_INTERVAL’, 180 ); //Tự động lưu sau 180 giây


/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
