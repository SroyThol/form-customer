<?php
 $cn = new mysqli("localhost","root","","php21");
?>
<?php
if (isset($_POST['btn_submit'])) {
    $name=$_POST['txt-name'];
    $qty=$_POST['txt-qty'];
    $amount=$_POST['txt-amount'];
    if (!empty($name) && !empty($qty) && !empty($amount)) {
        $sql="INSERT INTO tbl_customers VALUES(null,'$name','$qty','$amount')";
        $cn->query($sql);
    }
}
header('location:frm-customer.php');
?>