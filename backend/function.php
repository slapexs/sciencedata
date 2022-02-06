<?php

include_once('./backend/dbconnect.php');
$iserror = false;
if (isset($_POST['searchdata'])) {
    $category = $_POST['category'];
    $searchbox = $_POST['searchbox'];

        $sql = "SELECT * FROM periordictable WHERE $category = '$searchbox'";
    
    $query = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($query);

    if ($count > 0) {
        $result = mysqli_fetch_assoc($query);
        $iserror = false;
    } else {
        $iserror = true;
        echo "<script>
      alert('ไม่พบข้อมูล');
      window.location.href = './program2.php';
      </script>";
    }
}
