<?php
    $cn = new mysqli("localhost","root","","php21");
    //get auto id
    $sql = "SELECT id FROM tbl_customers ORDER BY id DESC";
    $result = $cn->query($sql);
    $num=$result->num_rows;
    //  echo num_rows;
if ( $num == 0) {
  $id = 1;
}else{
  $row=$result->fetch_array();
  $id = $row[0]+1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../form-customer/style.css">
<!-- bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<title>Hi Form</title>
</head>
<body>
<div class="user-login">
   <center><h2 class="btn btn-danger">Insert and Select data</h2></center>
</div>
<div class="container" style="background: #afb8c7; height: 100%;">
<div class="from-group">
    <form action="action.php" method="post">
          <label for="">ID</label>
          <input type="text" name="txt-id" id="txt-id" class="form-control" readonly="readonly" value="<?php echo $id; ?>">
          <label for="">Name</label>
          <input type="text" name="txt-name" id="txt-name" class="form-control">
          <label for="">qty</label>
          <input type="text" name="txt-qty" id="txt-qty" class="form-control">
          <label for="">amount</label>
          <input type="text" name="txt-amount" id="txt-amount" class="form-control">
          <br>
          <input type="submit" value="Post" name="btn_submit"  class="btn btn-danger">
    </form>
</div>
<br>
<!-- table -->
<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Qty</th>
    <th>Amount</th>
    <th>Action</th>
</tr>
<?php
$sql="SELECT * FROM tbl_customers";
$result = $cn->query($sql);
$num=$result->num_rows;
if ($num > 0) {
  while ($row=$result->fetch_array()) {
    ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['qty']; ?></td>
        <td><?php echo $row['amount']; ?></td>
    <td>
    <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
    </td>
    </tr>
    <?php
  }
}
?>
</table>
</div>
</body>
</html>