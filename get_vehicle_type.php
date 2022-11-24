<?php
	$db = mysqli_connect("localhost","root","","db_evplug");
	$vehicletype=$_POST["vehicletype"];
	echo "<script>alert($vehicletype)</script>";
	$result = mysqli_query($db,"SELECT * FROM tbl_vehiclemodel where vehicletype=$vehicletype");
	
	while($row = mysqli_fetch_array($result)){ 
		$currentbrandId = $row['brandId'];
		$checkbrand = "SELECT * from tbl_vehiclebrand where brandId=$currentbrandId";
		$result2 = mysqli_query($db, $checkbrand);
		?>
		<option value="">Select Model</option>
		<?php
		while($row2 = mysqli_fetch_array($result2)) {
		?>
		<option value="<?php echo $row2["brandId"];?>"><?php echo $row2["brandName"];?></option>
		<?php
		}
	?>
	}
?>  