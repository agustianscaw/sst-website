<?php
include 'db.php';
    if(isset($_POST["idvendor"]))
    {
        $query = "DELETE FROM vendor WHERE idvendor = '".$_POST["idvendor"]."'";
        if(mysqli_query($koneksi, $query))
        {
            echo 'Vendor Data Deleted';
        }
    }

    if($_POST["action"] == "delete")
    {
     $query = "DELETE FROM product WHERE idproduct = '".$_POST["idproduct"]."'";
     if(mysqli_query($koneksi, $query))
     {
      echo 'Product Deleted from Database';
     }
    }
?>

