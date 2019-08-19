<?php
include 'db.php';
if(isset($_POST["action"]))
{
 
 if($_POST["action"] == "fetch")
 {
  $query = "SELECT idservice,service.foto as sfoto,service.namaService as snamaService ,service.deskripsi as sdeskripsi,vendor.namaVendor as namavendor, product.namaProduct as namaproduct FROM service inner join vendor on service.product_idvendor = vendor.idvendor INNER JOIN product on service.product_idproduct = product.idproduct ORDER BY service.namaService ASC";
  $result = mysqli_query($koneksi, $query);
  $output = '
   <table class="table table-bordered table-striped">  
    <tr>
     <th width="20%">Image</th>
     <th width="20%">Nama Service</th>
     <th width="20%">Deskripsi</th>
     <th width="10%">Product</th>
     <th width="20%">Vendor</th>
     <th width="5%">Change</th>
     <th width="5%">Remove</th>
    </tr>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr> 
     <td>
      <img src="data:image/jpeg;base64,'.base64_encode($row['sfoto'] ).'" height="60" width="75" class="img-thumbnail" />
     </td>
     <td>'.$row["snamaService"].'</td>
     <td>'.$row["sdeskripsi"].'</td>
     <td>'.$row["namaproduct"].'</td>
     <td>'.$row["namavendor"].'</td>
     <td><button type="button" name="update" class="btn btn-warning bt-xs update" id="'.$row["idservice"].'">Change</button></td>
     <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="'.$row["idservice"].'">Remove</button></td>
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }
if($_POST["action"] == "insert")
{
    $namaservice =  $_POST['namaService'];
    $deskripsi =  $_POST['deskripsi'];
    $idproduct =  $_POST['product_idproduct'];
    $idvendor =  $_POST['product_idvendor'];
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $query = "INSERT INTO service(namaService,deskripsi,foto,product_idproduct,product_idvendor) VALUES ('$namaservice','$deskripsi','$file','$idproduct','$idvendor')";
    // mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
    if(mysqli_query($koneksi, $query))
    {
      echo 'Service Inserted into Database';
    }  
 }

 else if($_POST["action"] == "update")
 {
  $namaservice =  $_POST['namaService'];
  $deskripsi =  $_POST['deskripsi'];
  $idproduct =  $_POST['product_idproduct'];
  $idvendor =  $_POST['product_idvendor'];
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $query = "UPDATE service SET foto = '$file', namaService = '$namaservice', deskripsi = '$deskripsi', product_idproduct = '$idproduct' , product_idvendor = '$idvendor' WHERE idservice = '".$_POST["idservice"]."'";
  if(mysqli_query($koneksi, $query))
  {
    echo 'Service Updated into Database';
  }  
 }

 else if($_POST["action"] == "fetch-data")
 { 
     $query = "SELECT * FROM service WHERE idservice = '".$_POST["idservice"]."'";
     $result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
     $service = array();
     while($row = mysqli_fetch_array($result))
     {
       $service['idservice'] = addslashes(htmlentities($row['idservice']));
       $service['namaService'] = addslashes(htmlentities($row['namaService']));
       $service['deskripsi'] = addslashes(htmlentities($row['deskripsi']));
       $service['product_idproduct'] = addslashes(htmlentities($row['product_idproduct']));
       $service['product_idvendor'] = addslashes(htmlentities($row['product_idvendor']));
       $service['foto'] = addslashes(htmlentities($row['foto']));

     }

     echo json_encode($service);
    
 }

//delete
 else if($_POST["action"] == "delete")
 {
  $query = "DELETE FROM service WHERE idservice = '".$_POST["idservice"]."'";
  if(mysqli_query($koneksi, $query))
  {
   echo 'Service Deleted from Database';
  }
  else
  {
    echo 'gagal';
  }
 }
}
?>
