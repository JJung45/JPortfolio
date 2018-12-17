<?php header("Content-Type:text/html;charset=UTF-8") ?>
<?php

session_start();
session_destroy();

echo "
<script>
    alert('안전하게 로그아웃 되셨습니다!');
    location.href='earthtory.php';
</script>";
exit;

?>