<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../form-customer/style.css">
<!-- bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Hi Post-data</title>
</head>
<body>
<center><h3>POST_DATA</h3></center>
<div class="container">
    <div class="from-group">
        <form method="post" class="upl">
            <label for="">ID</label>
            <input type="text" name="txt-id" id="txt-id" class="form-control">
            <label for="">Name</label>
            <input type="text" name="txt-name" id="txt-name" class="form-control">
            <label for="">qty</label>
            <input type="text" name="txt-qty" id="txt-qty" class="form-control">
            <label for="">amount</label>
            <input type="text" name="txt-amount" id="txt-amount" class="form-control">
            <br>
            <a class="btn btn-danger" href="" id="post-data">Save</a>
        </form>
    </div>
</div>
</body>
<script>
 $(document).ready(function(){
  $('.btn-danger').click(function(){
    var eThis = $(this);
    var form = eThis.closest('form.upl');
    var frm_data = new FormData(form[0]);

    $.ajax({
      url:'save-data.php',
      type:'POST',
      data:frm_data,
      contentType:false,
      cache:false,
      processData:false,
      dataType:"json",
      beforeSend:function(){
        // work before success
      },
      success:function(data){
        //   work before success
      }
    });
  });
 });
</script>
</html>