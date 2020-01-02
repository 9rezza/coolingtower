

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  
  <link rel="stylesheet" href="<?=$url?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <script src="<?=$url?>assets/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="<?=$url?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <p class="">LED BOARD <small id="haha"></small></p>
        <p class="">LED PIN GTIO 1 <small id="hihi"></small></p>
      </div>
    </div>
  </div>
</body>
</html>
<script>

  $.ajax({
    type: "GET",
    crossDomain: true,
    // cache: false,
            headers: {
                'Access-Control-Allow-Origin': "*",
                'Access-Control-Allow-Methods': "GET",
                'Access-Control-Allow-Headers': "Access-Control-Allow-Headers, Origin, Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers",
                'Content-Type':'application/x-www-form-urlencoded; charset=UTF-8'
            },
    url: "http://192.168.1.99/json",
    // data: "data",
    dataType: "json",
    // contentType : 'application/x-www-form-urlencoded; charset=UTF-8',
    success: function (response) {
      // console.log(response);
      $('#haha').html(response.LED);
      $('#hihi').html(response.LED2);
    }
  });
</script>