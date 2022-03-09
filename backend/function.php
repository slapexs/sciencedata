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
      window.location.href = './?lab=2';
      </script>";
    }
}


// Lab4 Search element and calculate atomicweight
$isError = false;

if (isset($_POST['search_element'])) {

    $elem = $_POST['find_elements'];
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

    // ดึงข้อมูลน้ำหนักอะตอมจากฐานข้อมูล
    $data_elem = [];
    // รวมธาตุใส่ Array ใหม่
    $temp_elem = [];
    $result_elem = [];
    $value_elem = [];
    $sum = 0;
    $bad_elems = "";
    for ($i = 0; $i < count($arr_elem); $i++) {
        if (preg_match($regex_upper, $arr_elem[$i])) {
            if (preg_match($regex_number, $arr_elem[$i + 1])) {
                $getelem = "SELECT * FROM periordictable WHERE Symbol = '$arr_elem[$i]'";
                $qgetelem = mysqli_query($conn, $getelem);
                $rgetelem = mysqli_fetch_assoc($qgetelem);
                if (mysqli_num_rows($qgetelem) > 0){
                        $elems = $arr_elem[$i]."<sub>".$arr_elem[$i+1]."</sub>";
                        array_push($value_elem, $rgetelem['AtomicWeight']*$arr_elem[$i + 1]);
                    }else{
                        $elems = '<small class="text-danger">'.$arr_elem[$i]."<sub>".$arr_elem[$i+1].'</sub></small>';
                        array_push($value_elem, 0);

                    }

            } else {
                $elems = $arr_elem[$i];
                $getelem = "SELECT * FROM periordictable WHERE Symbol = '$arr_elem[$i]'";
                $qgetelem = mysqli_query($conn, $getelem);
                $rgetelem = mysqli_fetch_assoc($qgetelem);
                    if (mysqli_num_rows($qgetelem) > 0){
                        array_push($value_elem, $rgetelem['AtomicWeight']);
                    }else{
                        $elems = '<span class="text-danger">'.$arr_elem[$i].'</span>';
                        $bad_elems = '<small class="text-danger">ไม่พบธาตุ'.$arr_elem[$i].'</small>';
                        array_push($value_elem, 0);
                    }
            }
            array_push($temp_elem, $elems);
            
        }
    }

    $result_elem = implode("", $temp_elem);
    // Sum element value
    foreach ($value_elem as $key => $value) {
        $sum += $value;
    }
}
