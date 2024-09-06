<?php
    // session_start();
    // session_destroy();
	// echo '<script>window.location="index.php"</script>';
session_start();
session_unset(); // Hapus semua variabel sesi
session_destroy(); // Hancurkan sesi
header('Location: index.php'); // Redirect ke halaman login
exit();
?>