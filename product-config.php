<?php
include 'db.php';
if(isset($_POST["action"]))
{
 if($_POST["action"] == "fetch")
 {
  $query = "SELECT idproduct,foto,namaProduct,deskripsi,harga,vendor.namaVendor as namavendor FROM product inner join vendor WHERE product.idvendor = vendor.idvendor ORDER BY product.namaProduct ASC";
  $result = mysqli_query($koneksi, $query);
  $output = '
   <table class="table table-bordered table-striped">  
    <tr>
     <th width="20%">Image</th>
     <th width="20%">Nama Product</th>
     <th width="20%">Deskripsi</th>
     <th width="10%">Harga</th>
     <th width="20%">Vendor</th>
     <th width="5%">Change</th>
     <th width="5%">Remove</th>
    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '

    <tr> 
     <td>
      <img src="data:image/jpeg;base64,'.base64_encode($row['foto'] ).'" height="60" width="75" class="img-thumbnail" />
     </td>
     <td>'.$row["namaProduct"].'</td>
     <td>'.$row["deskripsi"].'</td>
     <td>'.$row["harga"].'</td>
     <td>'.$row["namavendor"].'</td>
     <td><button type="button" name="update" class="btn btn-warning bt-xs update"  id="'.$row["idproduct"].'">Change</button></td>
     <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="'.$row["idproduct"].'">Remove</button></td>
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }

 else if($_POST["action"] == "insert")
 {
  $namaProduct =  $_POST['namaProduct'];
  $deskripsi =  $_POST['deskripsi'];
  $harga =  $_POST['harga'];
  $idvendor =  $_POST['idvendor'];  
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $query = "INSERT INTO product(namaProduct,deskripsi,harga,foto,idvendor) VALUES ('$namaProduct','$deskripsi','$harga','$file','$idvendor')";
    if(mysqli_query($koneksi, $query))
    {
       echo 'Product Inserted into Database';
    }
  }

  else if($_POST["action"] == "update")
  {
    $namaProduct =  $_POST['namaProduct'];
    $deskripsi =  $_POST['deskripsi'];
    $harga =  $_POST['harga'];
    $idvendor =  $_POST['idvendor']; 
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $query = "UPDATE product SET foto = '$file', namaProduct = '$namaProduct', deskripsi = '$deskripsi', harga = '$harga' , idvendor = '$idvendor' WHERE idproduct = '".$_POST["idproduct"]."'";
    mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));  
  }

  else if($_POST["action"] == "fetch-data")
  { 
      $query = "SELECT * FROM product WHERE idproduct = '".$_POST["idproduct"]."'";
      $result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
      $product = array();
      while($row = mysqli_fetch_array($result))
      {
        $product['idproduct'] = addslashes(htmlentities($row['idproduct']));
        $product['namaProduct'] = addslashes(htmlentities($row['namaProduct']));
        $product['deskripsi'] = addslashes(htmlentities($row['deskripsi']));
        $product['harga'] = addslashes(htmlentities($row['harga']));
        $product['foto'] = addslashes(htmlentities($row['foto']));
        $product['idvendor'] = addslashes(htmlentities($row['idvendor']));
      }
      echo json_encode($product);
  }
}
?>
