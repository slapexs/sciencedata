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


// Lab4 Search element and calculate atomicweight
$isError = false;

if (isset($_POST['findelem'])) {
    include_once('./dbconnect.php');

    $elem = $_POST['findelem'];
    // $elem = "H2ONa2 C3Co";
    // Check regex a
    $regex1 = "/^[a-z0-9ก-ฮ]/";
    if (preg_match($regex1, $elem)) {
        $isError = true;
    }

    // Check regex aa
    $regex2 = "/[a-zก-ฮ][a-zก-ฮ]/";
    if (preg_match($regex2, $elem)) {
        $isError = true;
    }

    $del_space = str_replace(" ", "", $elem);

    $regex_upper = "/[A-Z]/";
    $regex_lower = "/[a-z]/";
    $regex_number = "/[0-9]/";

    $replace1 = "$0,";
    $msg1 = $del_space;
    $arr_elem = [];
    $ref1 = preg_replace($regex_lower, $replace1, $msg1);

    $replace2 = ",$0";
    $ref2 = preg_replace("/(\d+)/", $replace2, $ref1);

    $replace3 = ",$0";
    $ref3 = preg_replace($regex_upper, $replace3, $ref2);
    

    $cutcomma = explode(",", $ref3);
    foreach ($cutcomma as $key => $value) {
        if ($value != "") {
            array_push($arr_elem, $value);
        }
    }

    $sum = 0;
    $value_elements = [];
    for ($i = 0; $i < count($arr_elem); $i++) {
        if (preg_match($regex_upper, $arr_elem[$i])) {
            if (preg_match($regex_number, $arr_elem[$i + 1])) {
                $element_name = $arr_elem[$i];
                $sql = "SELECT * FROM periordictable WHERE Symbol = '$element_name'";
                $query = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($query);
                $elem_value = $row['AtomicWeight'] * $arr_elem[$i + 1];
                $sum += $elem_value;
                array_push($value_elements, $elem_value);
            } else {
                $element_name = $arr_elem[$i];
                $sql = "SELECT * FROM periordictable WHERE Symbol = '$element_name'";
                $query = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($query);
                $elem_value = $row['AtomicWeight'] * 1;
                $sum += $elem_value;
                array_push($value_elements, $elem_value);
            }
        }
    }
    
    $response = ['data' => $isError, 'element_set' => $del_space, 'sum' => $sum, 'list_elements' => $arr_elem, 'value_elem' => $value_elements];
    echo json_encode($response);
}
