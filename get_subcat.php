<?php
    $db = mysqli_connect("localhost","root","","db_evplug");
    $vehicletype =$_POST['vehicletype'];
    // echo"<script>alert('$vehicletype')</script>";
    $getvehiclebrandquery = mysqli_query($db,"SELECT * from tbl_vehiclebrand where type='$vehicletype' and status=0");
    while($row=mysqli_fetch_array($getvehiclebrandquery)){
?> 
    <option value="<?php echo $row["brandId"];?>"><?php echo $row["brandName"];?></option>
<?php
    }
?>