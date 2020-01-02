<!-- <link rel="stylesheet" href="<?=$url?>vendor/datatables/css/jquery.datatables.min.css"> -->
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

<style>
  .no-margin{
    margin: 0;
  }
  .no-padding{
    padding: 0;
  }
  .navbar-nav li{
    border-left: 1px solid white;
    border-right: 1px solid white;
    width: 150px;
    text-align: center;
  }
  .navbar-nav a{
    color: white;
  }
  .navbar-nav .active{
    background-color: #174fa2;
  }
  .alarm-title{
    font-size: 32px;
    margin-top: 10px;
  }
  .table thead tr th{
    text-align: center;
  }
  .table tbody tr{
    min-height: 36px;
  }
</style>
<style>
  .bg-primary .selected{
    background-color: #3434ad !important;
    color: #FFF !important;
  }
</style>
<div class="box-body">
  <div class="col-sm-2 no-padding">
    <div class="form-group">
      <select class="form-control" name="line" id="line">
        <?php foreach($line as $l){ ?>
        <?php if($l->code == "5a"){ ?>
          <option value="<?=$l->code?>"><?=$l->name?></option>
        <?php } ?>
        <?php } ?>
      </select>
    </div>
  </div>
  <div class="col-sm-12 bg-primary no-padding" style="margin-bottom: 20px">
    <div>
      <ul class="nav navbar-nav">
        <li><a class="machine" href="#" data-val="a1">SHEET FEEDER</a></li>
        <li><a class="machine" href="#" data-val="a2">ROBOT</a></li>
        <li><a class="machine" href="#" data-val="a3">PRESS</a></li>
        <li><a class="machine" href="#" data-val="a4">PALLETIZER</a></li>
        <li><a class="machine" href="#" data-val="a5">LOP</a></li>
        <!-- <li><a href="#">ALL</a></li> -->
        <li class="dropdown hidden">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav pull-right">
        <li style="font-size: 2.5em; width: 180px">        
          <input type="checkbox" style="width:0.5em; height: 0.5em" id="autoUpdate">
          <span style="font-size: 20px !important;">Auto update</span>
        </li>
        <li>        
          <a class="no-padding" data-toggle="modal" href='#actionAlarmModal'><i class="fa fa-gear fa-3x" style="margin:4px;"></i></a>
        </li>
      </ul>
    </div>
  </div>
  <!-- <div class="col-sm-12 alarm-title">
    ROBOT    
  </div> -->

  <div class="col-sm-12">
    <table class="table table-striped table-inverse table-responsive table-bordered" id="alarmTable">
      <thead class="thead-inverse">
        <tr>
          <th width="150">TIMESTAMP</th>
          <th width="90">DURASI</th>
          <th width="80">CODE</th>
          <th>KETERANGAN</th>
          <th>ACTION</th>
        </tr>
        </thead>
        <tbody class="table-body">
          <tr height="36"><td scope="row"></td><td></td><td></td><td scope="row" class="text-center text-red">NO DATA</td><td></td></tr>
          <tr height="36"><td scope="row"></td><td></td><td></td><td></td><td></td></tr>
          <tr height="36"><td scope="row"></td><td></td><td></td><td></td><td></td></tr>
          <tr height="36"><td scope="row"></td><td></td><td></td><td></td><td></td></tr>
          <tr height="36"><td scope="row"></td><td></td><td></td><td></td><td></td></tr>
          <tr height="36"><td scope="row"></td><td></td><td></td><td></td><td></td></tr>
          <tr height="36"><td scope="row"></td><td></td><td></td><td></td><td></td></tr>
          <tr height="36"><td scope="row"></td><td></td><td></td><td></td><td></td></tr>
          <tr height="36"><td scope="row"></td><td></td><td></td><td></td><td></td></tr>
          <tr height="36"><td scope="row"></td><td></td><td></td><td></td><td></td></tr>
        </tbody>
    </table>
  </div>
</div>
<!-- /.box-body -->

<div class="modal fade" id="actionAlarmModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"><i class="fa fa-gear text-blue"></i> Konfigurasi action dari alarm</h4>
      </div>
      <div class="modal-body">
        <form action="#" method="POST" role="form" id="actionAlarmForm">
          <h5>Upload file action dari alarm</h5>
          <div class="form-group">
            <label for="uploadFile">Pilih file (*.xlsx):</label>
            <input type="file" class="form-control" id="actionAlarmFile" name="actionAlarmFile">
          </div>
          <div class="text-right">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<script src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<!-- <script src="<?=$url?>vendor/datatables/js/jquery.dataTables.min.js"></script> -->
<script>
  $('.machine').click(function (e) { 
    e.preventDefault()
    $.blockUI();
    $('.machine').removeClass('selected')
    $(this).addClass('selected')
    line = $('#line :selected').val()
    machine = $(this).data('val')
    code = line+machine
    // console.log(code)
    $.ajax({
      type: "POST",
      url: "<?=$url.'get_alarm_by_machine_code'?>",
      data: {code:code},
      dataType: "JSON",
      success: function (response) {
        console.log(response)
        lengthData = response.length
        $('.table-body').children().remove();
        var row
        $.each(response, function (key, value) {
          if(value.end_timestamp){
            substract = new Date(new Date(value.end_timestamp) - new Date(value.timestamp) - (60*60*7*1000))
                  date = new Date(substract)
                  duration = ('00' + date.getHours()).slice(-2) + ':' + 
                      ('00' + date.getMinutes()).slice(-2) + ':' + 
                      ('00' + date.getSeconds()).slice(-2)
          } else {
            duration= "<span class='text-red'>sedang berlangsung</span>"
          }
          row += '<tr height="36">'+
                  '<td scope="row">'+value.timestamp+'</td>'+
                  '<td>'+duration+'</td>'+
                  '<td>'+value.code+'</td>'+
                  '<td>'+value.note+'</td>'+
                  '<td>'+value.action+'</td>'+
                '</tr>'
        });
        if(lengthData == 0){
          minusLengthData = 10 - lengthData
            row += '<tr height="36"><td scope="row"></td><td></td><td></td><td scope="row" class="text-center text-red">NO DATA</td><td></td></tr>'
          for (let i = 1; i < minusLengthData; i++) {
            row += '<tr height="36"><td scope="row"></td><td></td><td></td><td></td><td></td></tr>'
          }
        } else {
          minusLengthData = 10 - lengthData
          for (let i = 0; i < minusLengthData; i++) {
            row += '<tr height="36"><td scope="row"></td><td></td><td></td><td></td><td></td></tr>'
          }
        }
        $('.table-body').append(row)
        $('#alarmTable').DataTable().destroy();
        $('#alarmTable').find('tbody').children().remove();
        $('#alarmTable').find('tbody').append(row);
        // $('#alarmTable').DataTable().draw();
        dtAlarm()
      },
      complete: function (response) {
        $.unblockUI()
      }
    });
  })
///////////////////////////////////////////////////////////////////////////////////////
  $("#actionAlarmForm").submit(function (e) { 
    e.preventDefault();
    var formData = new FormData($('#actionAlarmForm')[0]);
    $.ajax({
      url:'<?=$url?>upload_action_alarm/',
      type:"post",
      data: formData,
      processData: false,
      contentType: false,
      dataType: 'JSON',
      beforeSend: function(){
        $.blockUI();
        $("#actionAlarmModal").block();
      },
      success: function(response){
        // console.log(response);
        // $("#updateChart").click();
        if(response.status == "error"){
          notify('Error!<br/>'+ response.message);
        } else if(response.status == "success"){
          notifys('File uploaded!');
        }
      },
      error: function(response){
        notify("Error!<br/> Internal server error, cannot read the files<br/>The file you are attempting to upload may too large or in wrong format");
      },
      complete: function(){
        $.unblockUI();
        $("#actionAlarmModal").unblock();
        $("#actionAlarmModal").modal('hide');
      }    
    });  
  });

///////////////////////////////////////////////////////////////
  function notify(notification){
    if(notification != ""){
      var notif = $.notify({
                            message: notification,
                          },{
                            type: 'danger',
                            newest_on_top: true,
                            placement: {
                              from: "top",
                              align: "left"
                            },
                            delay: 5000,
                          });
     return notif;
    }
  }
  function notifys(notification){
    if(notification != ""){
      var notif = $.notify({
                            message: notification,
                          },{
                            type: 'success',
                            newest_on_top: true,
                            placement: {
                              from: "top",
                              align: "left"
                            },
                            delay: 5000,
                          });
     return notif;
    }
  }
  /////////////////////////////////////////////////////////////////////////////////////////////////////////
  $(document).ready(function () {
  });
    // $('#alarmTable').DataTable();
    dtAlarm();
    function dtAlarm(){
      $('#alarmTable').dataTable({
        order: [[0, 'desc']],
        "columns": [
          null,
          {"orderable":false,"searchable":false},
          {"orderable":false},
          {"orderable":false},
          {"orderable":false}
        ]
      });
    }
    
    
</script>
<?php if($tag){?>
<script>
  $(document).ready(function () {
    $('#line').val('<?=$selected_line?>')
    $(`.machine[data-val='<?=$selected_machine?>']`).click()
  });
</script>
<?php } ?>











