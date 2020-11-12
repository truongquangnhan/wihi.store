<?php
// chỉ được nhúng code không được gọi từ URL tránh hacker đọc file thông qua url
if (!defined('IN_SITE')) die ('Đường dẫn hợp lệ nhưng thực chất không hợp lệ bạn ơi');
?>
<?php
session_start();
// Gán session (SET)
function session_set($key, $val) {
    $_SESSION[$key] = $val;
}
// Lấy session (GET)
function session_get($key) {
    //toán tử 3 ngôi 
    return (isset($_SESSION[$key])) ? $_SESSION[$key] : false;
}

// Xóa session (DELETE)
function session_delete($key) {
    if (isset($_SESSION[$key])) {
        unset($_SESSION[$key]);
    }
}
  
//session_set('domain', 'WIHI.STORE');
//echo session_get('domain');
//session_delete('domain');
//echo session_get('domain');