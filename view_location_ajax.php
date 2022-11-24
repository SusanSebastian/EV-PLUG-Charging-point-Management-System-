 <?php
    
    $db = mysqli_connect("localhost","root","","db_evplug");
    $query2 = "SELECT * from tbl_station where status=1";
    $result2 = mysqli_query($db,$query2);
    $serviceQuery = "SELECT * FROM tbl_mapping";
    $serviceQueryResult = mysqli_query($db,$serviceQuery);
    $serviceRow = mysqli_fetch_assoc($serviceQueryResult);

    if($serviceRow!=null){
        $sid = "Available";
    }

    else{
        $sid = "Not available";
    }

    while($row1 = mysqli_fetch_array($result2)){ ?>
                                              
        <tr>
            <td><?php echo $row1['stationName']; ?></td>
            <td><?php echo $row1['contact']; ?></td>
            <td><?php echo $row1['noOfports']; ?></td>
            <td><?php echo $sid; ?></td>
            <td>
                <button style="width:80px" class="btn btn-primary">
                  <a style="color:white" href="#">Book</button>
                
            </td>
        </tr>  
<?php } ?>