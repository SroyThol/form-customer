<?php

 $cn = new mysqli("localhost","root","","php21");
 if (isset($_GET['id']) ) {
     $id = $_GET['id'];
     $sql = "DELETE FROM tbl_customers WHERE id = $id";
     $cn->query($sql);
 }
 header('location:frm-customer.php');
 
?>