 <?php
    include("database.php");
    if(isset($_POST['charges_input'])){
        $pickuppincode = $_POST['pick-up-pin-code'];
        $destination = $_POST['destination'];
        $packtype = $_POST['package-type'];
        $contactNo = $_POST['contact-no'];
        $l = $_POST['length'];
        $w = $_POST['weight'];
        $h = $_POST['height'];
        $dimensions = [$l, $w, $h];
        $dmensions = implode(',', $dimensions);
    }
    
    $get_charges = "SELECT * FROM `get_charges`";
    $res = $con->query($get_charges);
    $data = mysqli_fetch_assoc($res);
    
    
        $get_pickuppincode = $data['pick-up-pin-code'];
        $get_destination = $data['destination'];
        $get_packtype = $data['package-type'];
        $get_dimensions = $data['dimensions'];
        $get_charges = $data['charges'];
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargo Bazaar Calculator</title>
    <!-- bootsrap css cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   
   <!-- fontawesome icon cdn -->
   <link rel='stylesheet' id='font-awesome-css' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css?ver=4.7.0' type='text/css' media='all' />

   <!-- custom css file -->
   <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1 class="text-center py-3 text-uppercase border border-bottom">Cargo Bazaar Calculator</h1>
    <div class="container box">
        <form action="index.php" method ="post" class="row g-3 needs-validation shadow-sm" novalidate>

            <div class="col-md-4 p-2">
                <label for="validationCustom01" class="form-label">Pick Up Pin Code</label>
                <input type="number" class="form-control" id="validationCustom01" name="pick-up-pin-code" required placeholder="Pick Up Pin Code">
            </div>

            <div class="col-md-4 p-2">
                <label for="validationCustom04" class="form-label">To, Destination</label>
                <select class="form-select" id="validationCustom04" required name="destination">
                    <option selected value=""> -Destination-</option>
                    <?php foreach ($data as $row){?>
                        <option selected value="<?php echo $data['destination']?>"><?php echo $data['destination']?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="col-md-4 p-2">
                <label for="validationCustom04" class="form-label">Package Type</label>
                <select class="form-select" id="validationCustom04" required name="package-type">
                    <option selected="selected" value="">-Package Type-</option>
                    <option value="Document">Document</option>
                    <option value="Parcel">Parcel (Non Document)</option>
                    <option value="Medicines">Medicines</option>
                    <option value="Eatables">Branded Food Items</option>
                    <option value="NonBrandedFood">Homemade Food Items</option>
                    <option value="Electronics">Electrical / Electronics</option>
                    <option value="Clothes">Clothes / Footwear</option>
                    <option value="ArtificialJewellary">Artificial Jewellary</option>
                    <option value="Cosmetics">Cosmetics Items</option>
                    <option value="Other">Other Items</option>
                </select>
            </div>
            <div class="col-md-4 p-2">
                <label for="validationCustom04" class="form-label">Weight</label>
                <select class="form-select" id="validationCustom04" required name="weight">
                    <option value="">-Select Weight-</option>
                    <option value="0.5">Up to 500 Grms</option>
                    <option value="" disabled="disabled">--------</option>
                    <option value="1">1.0 Kg</option>
                    <option value="1.5">1.5 Kg</option>
                    <option value="2">2.0 Kg</option>
                    <option value="2.5">2.5 Kg</option>
                    <option value="3">3.0 Kg</option>
                    <option value="3.5">3.5 Kg</option>
                    <option value="4">4.0 Kg</option>
                    <option value="4.5">4.5 Kg</option>
                    <option value="5">5.0 Kg</option>
                    <option value="5.5">5.5 Kg</option>
                    <option value="6">6.0 Kg</option>
                    <option value="6.5">6.5 Kg</option>
                    <option value="7">7.0 Kg</option>
                    <option value="7.5">7.5 Kg</option>
                    <option value="8">8.0 Kg</option>
                    <option value="8.5">8.5 Kg</option>
                    <option value="9">9.0 Kg</option>
                    <option value="9.5">9.5 Kg</option>
                    <option value="10">10.0 Kg</option>
                    <option value="10.5">10.5 Kg</option>
                    <option value="11">11.0 Kg</option>
                    <option value="11.5">11.5 Kg</option>
                    <option value="12">12.0 Kg</option>
                    <option value="12.5">12.5 Kg</option>
                    <option value="13">13.0 Kg</option>
                    <option value="13.5">13.5 Kg</option>
                    <option value="14">14.0 Kg</option>
                    <option value="14.5">14.5 Kg</option>
                    <option value="15">15.0 Kg</option>
                    <option value="15.5">15.5 Kg</option>
                    <option value="16">16.0 Kg</option>
                    <option value="16.5">16.5 Kg</option>
                    <option value="17">17.0 Kg</option>
                    <option value="17.5">17.5 Kg</option>
                    <option value="18">18.0 Kg</option>
                    <option value="18.5">18.5 Kg</option>
                    <option value="19">19.0 Kg</option>
                    <option value="19.5">19.5 Kg</option>
                    <option value="20">20.0 Kg</option>
                    <option value="21">21.0 Kg</option>
                    <option value="22">22.0 Kg</option>
                    <option value="23">23.0 Kg</option>
                    <option value="24">24.0 Kg</option>
                    <option value="25">25.0 Kg</option>
                    <option value="26">26.0 Kg</option>
                    <option value="27">27.0 Kg</option>
                    <option value="28">28.0 Kg</option>
                    <option value="29">29.0 Kg</option>
                    <option value="30">30.0 Kg</option>
                    <option value="31-35">31.0 Kg to 35.0 Kg</option>

                    <option value="36-40">36.0 Kg to 40.0 Kg</option>
                    <option value="41-45">41.0 Kg to 45.0 Kg</option>
                    <option value="46-50">46.0 Kg to 50.0 Kg</option>
                    <option value="51-55">51.0 Kg to 55.0 Kg</option>
                    <option value="56-60">56.0 Kg to 60.0 Kg</option>
                    <option value="61-65">61.0 Kg to 65.0 Kg</option>
                    <option value="66-70">66.0 Kg to 70.0 Kg</option>
                    <option value="71">More than 70.0 Kg</option>
                </select>
            </div>
            <div class="col-md-4 p-2">
                <label for="validationCustom04" class="form-label">Dimensions in cm</label>
                <div class="d-flex">
                    <div class="col-md-4">
                        <input type="number" class="form-control"  required placeholder="L" name="length">
                    </div>
                    <div class="col-md-4 mx-1">
                        <input type="number" class="form-control"  required placeholder="W" name="weight">
                    </div>
                    <div class="col-md-4">
                        <input type="number" class="form-control"  required placeholder="H" name="height">
                    </div>
                   
                </div>
            </div>
            <div class="col-md-4 p-2">
                <label for="validationCustom03" class="form-label">Contact No.</label>
                <input type="number" class="form-control" id="validationCustom03" required placeholder="Mobile/Phone" name="contact-no">
            </div>

            <div class="col-12 d-flex justify-content-center align-items-center pt-3">
                <input class="btn btn-color" type="submit" name="charges_input" value="Get Charges">
            </div>

            <div class="col-12 d-flex justify-content-center align-items-center pt-3">
                <?php
                    if($get_pickuppincode===$pickuppincode && $get_destination===$destination && $get_packtype===$packtype && $get_dimensions===$dmensions){
                       ?>
                        <button class="btn btn-color"> Rs <?php  echo $get_charges;?>/-</button>
                       <?php
                    }
                ?>
            </div>
        </form>  
    </div>
   
    <!-- bootstrap js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>


    

