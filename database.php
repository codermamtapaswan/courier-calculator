<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "cargo_calculator";
 
$con = new mysqli($localhost,$username,$password,$dbname);
if(!$con ){
    echo "DataBase Is Not Connected!";
}


// if(isset($_POST['charges_input'])){
//     $pickuppincode = $_POST['pick-up-pin-code'];
//     $destination = $_POST['destination'];
//     $packtype = $_POST['package-type'];
//     $contactNo = $_POST['contact-no'];
//     $l = $_POST['length'];
//     $w = $_POST['weight'];
//     $h = $_POST['height'];
//     $dimensions = [$l, $w, $h];
//     $dmensions = implode(',', $dimensions);
// }

// $get_charges = "SELECT * FROM `get_charges`";
// $res = $con->query($get_charges);


// while($data = mysqli_fetch_assoc($res)) {
//     $data[] = $data;
//    }
//    foreach ($data as $row){ 
//     $get_pickuppincode = $data['pick-up-pin-code'];
//     $get_destination = $data['destination'];
//     $get_packtype = $data['package-type'];
//     $get_dimensions = $data['dimensions'];
//     $get_charges = $data['charges'];

// }

// if($get_pickuppincode===$pickuppincode && $get_destination===$get_destination && $get_packtype===$packtype){



// }
?>