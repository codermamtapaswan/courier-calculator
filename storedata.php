<?php
include("database.php");
 if(isset($_POST["Import_Data"])){
		print_r($_FILES);
		$filename=$_FILES["uploadFile"]["tmp_name"];		
		 if($_FILES["uploadFile"]["size"] > 0)
		 {
		  	$file = fopen($filename, "r");
	        while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
	           $sql = "INSERT into get_charges (`pick-up-pin-code`, `destination`, `package-type`, `weight`, `dimensions`, `charges`)values('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."')";
                   $result = mysqli_query($con, $sql);
				if(!isset($result))
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"storedata.php\"
						  </script>";		
				}
				else {
					  echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"storedata.php\"
					</script>";
				}
	         }
			
	         fclose($file);	
		 }
	}	 


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Data From Csv file</title>
     <!-- bootsrap css cdn -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   
   <!-- fontawesome icon cdn -->
   <link rel='stylesheet' id='font-awesome-css' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css?ver=4.7.0' type='text/css' media='all' />

   <!-- custom css file -->
   <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<h1 class="text-center py-3 text-uppercase border border-bottom">Store Data From Csv file</h1>
    <div class="container box">
        <form action="storedata.php" method ="post" enctype="multipart/form-data" name="upload_excel">
            <div class="col-12 justify-content-center align-items-center p-3">
                <input class="btn btn-color mb-5" type="file" name="uploadFile">
                <br>
                <input class="btn btn-primary" type="submit" name="Import_Data" value="Upload csv file">
            </div>            
        </form>  
    </div>
   
</body>
</html>