<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=$title?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=$url?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=$url?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=$url?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=$url?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=$url?>assets/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="<?=$url?>vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css"/>
  <!-- jquery-ui -->
  <link rel="stylesheet" href="<?=$url?>assets/bower_components/jquery/external/jquery-ui/jquery-ui.min.css">

  
  <!-- jQuery 3 -->
  <script src="<?=$url?>assets/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- jquery-ui -->
  <script src="<?=$url?>assets/bower_components/jquery/external/jquery-ui/jquery-ui.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?=$url?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <link href="<?=$url?>vendor/bootstrap-toggle/bootstrap-toggle.min.css" rel="stylesheet">
  <script src="<?=$url?>vendor/bootstrap-toggle/bootstrap-toggle.min.js"></script>
  <script src="<?=$url?>vendor/bootstrap-notify/bootstrap-notify.min.js"></script>
  <script src="<?=$url?>vendor/blockui/jquery.blockUI.js"></script>

  <style type="text/css">
    .no-padding{
      padding: 0px !important;
    }
    .no-margin{
      margin: 0px !important;      
    }
    .no-padd-side {
      padding-left: 0;
      padding-right: 0;
    }
    .mg-bottom-20 {
      margin-bottom: 20px;
    }
  </style>
  <script>
    // $.blockUI({ message: '<h1><img src="<?=$url?>assets/images/loading.gif" /> Just a moment...</h1>' });
    $.blockUI.defaults.message = '<img src="<?=$url?>assets/images/loading.gif?<?=rand(0,1000)?>" width="200px"/>'
    $.blockUI.defaults.css.border = 'none'
    $.blockUI.defaults.css.backgroundColor = 'none'

    $(document).ready(function () {
      $.unblockUI()
    });
  </script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="<?=$url?>vendor/fontawesome/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-black sidebar-collapse">
  <script>
    $.blockUI()
  </script>
          <?=$_content?>
<!-- SlimScroll -->
<script src="<?=$url?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=$url?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=$url?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=$url?>assets/dist/js/demo.js"></script>
<!-- jQuery Highchart
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>

<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script> -->


<!-- <script src="<?=$url?>vendor/jquery-cookie/jquery.cookie.js"></script> -->
<script src="<?=$url?>vendor/js-cookie/js.cookie.min.js"></script>
<!-- -->
<script src="<?=$url?>vendor/canvas-js/canvasjs.min.js"></script>
<script src="<?=$url?>vendor/moment-js/moment.js"></script>
<script src="<?=$url?>vendor/moment-js/locale/id.js"></script>
<script src="<?=$url?>vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>

<script>
  
  ////////////////////////////////////////////////////////////////////////////////////////////////////// 
  function toggleAction(id){
    $('.action-'+id).toggle()
    if($('.action-'+id).css('display') == 'block'){
      $('.caret-'+id).removeClass("fa-caret-up")
      $('.caret-'+id).addClass("fa-caret-down")
    } else {
      $('.caret-'+id).removeClass("fa-caret-down")
      $('.caret-'+id).addClass("fa-caret-up")
    }
  }
  var notifyAlarm
  notifyKeep()
  $('.notifyKeep').hide()
  function notifyKeep(){
    notifyAlarm = $.notify(
      {
        icon: 'fa fa-warning',
        title: '<span class="float-left"><b>ALARM!</b></span></br>',
        message: "",
        // url: '',
        // target: '_self',
      },{
        type: 'danger',
        newest_on_top: true,
        placement: {
          from: "top",
          align: "right"
        },
        delay: 0,
        template: '<div data-notify="container" class="notifyKeep col-xs-11 col-sm-4 alert alert-{0}" role="alert" style="max-height:200px; @media (min-width:200px){overflow-y: scroll;}">' +
                    '<button type="button" aria-hidden="true" class="close minimize" style="width: 20px; border: 1px solid black; color: white">-</button>' +
                    '<span data-notify="icon"></span> ' +
                    '<span data-notify="title">{1}</span> ' +
                    '<span data-notify="message">{2}</span>' +
                    '<div class="progress" data-notify="progressbar">' +
                      '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                    '</div>' +
                    '<div class="text-center">' +
                      // '<a class="btn btn-warning" href="<?=$url.'alarm'?>" target="_self" data-notify="url" style="text-decoration:none">Lihat</a>' +
                    '</div>' +
                  '</div>' 
      }
    )
  }

  $(document).on('click','.minimize',function(e){
    e.preventDefault()
    $(this).parent().hide()
    $(".alarmBadge").show()
    Cookies.set('minimize', true)
    // console.log(Cookies.get().minimize)
  });  
  $(".alarmBadge").click(function (e) { 
    e.preventDefault()
    // notifyKeep()
    $(document).find('.minimize').parent().show()
    $(".alarmBadge").hide()
    Cookies.set('minimize', false)
    // console.log(Cookies.get().minimize)
  });
  // $('.notifyKeep').draggable();
</script>

</body>
</html>
