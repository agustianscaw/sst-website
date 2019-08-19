<?php
include 'db.php';
if(isset($_POST["action"]))
{
 
 if($_POST["action"] == "fetch")
 {
  $query = "SELECT idvendor, namaVendor, alamat, telepon FROM vendor ORDER BY namaVendor ASC";
  $result = mysqli_query($koneksi, $query);
  $output = '
   <table class="table table-bordered table-striped">  
    <tr>
     <th width="30%">Nama Vendor</th>
     <th width="30%">Alamat</th>
     <th width="30%">Telepon</th>
     <th width="5%">Change</th>
     <th width="5%">Remove</th>
    </tr>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr> 
     
     <td>'.$row["namaVendor"].'</td>
     <td>'.$row["alamat"].'</td>
     <td>'.$row["telepon"].'</td>
     
     <td><button type="button" name="update" class="btn btn-warning bt-xs update" id="'.$row["idvendor"].'">Change</button></td>
     <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="'.$row["idvendor"].'">Remove</button></td>
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }
if($_POST["action"] == "insert")
{
      $namavendor =  $_POST['namaVendor'];
      $alamat =  $_POST['alamat'];
      $telepon =  $_POST['telepon'];
    
      $query = "INSERT INTO vendor(namaVendor,alamat,telepon) VALUES ('$namavendor','$alamat','$telepon')";
      // mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
      if(mysqli_query($koneksi, $query))
      {
         echo 'vendor Inserted into Database';
      }
      else {
        echo 'gagal';
      }    
 }
 else if($_POST["action"] == "fetch-data")
 { 
     $query = "SELECT * FROM vendor WHERE idvendor = '".$_POST["idvendor"]."'";
     $result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
     $vendor = array();
     while($row = mysqli_fetch_array($result))
     {
       $vendor['idvendor'] = addslashes(htmlentities($row['idvendor']));
       $vendor['namaVendor'] = addslashes(htmlentities($row['namaVendor']));
       $vendor['alamat'] = addslashes(htmlentities($row['alamat']));
       $vendor['telepon'] = addslashes(htmlentities($row['telepon']));
     }
     echo json_encode($vendor);
 }

 else if($_POST["action"] == "update")
 {
   $namavendor =  $_POST['namaVendor'];
   $alamat =  $_POST['alamat'];
   $telepon =  $_POST['telepon'];
   $query = "UPDATE vendor SET namaVendor = '$namavendor', alamat = '$alamat', telepon = '$telepon' WHERE idvendor = '".$_POST["idvendor"]."'";
   mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));  
 }


//delete
 else if($_POST["action"] == "delete")
 {
  $query = "DELETE FROM vendor WHERE idvendor = '".$_POST["idvendor"]."'";
  if(mysqli_query($koneksi, $query))
  {
   echo 'vendor Deleted from Database';
  }
  else
  {
    echo 'gagal';
  }
 }
}
?>
