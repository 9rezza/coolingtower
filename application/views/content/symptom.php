
<style>
  .no-padding{
    padding: 0;
  }
  .no-padding-right{
    padding-right: 0;
  }
  .no-padding-bottom{
    padding-bottom: 0;
  }
  .no-margin-bottom{
    margin-bottom: 0;
  }
  .height-50{
    height: 50px;
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
  .graph-title{
    font-size: 32px;
    margin-top: 10px;
  }
  .table thead tr th{
    text-align: center;
  }
  .table tbody tr{
    min-height: 36px;
  }
  .form-check-label{
    margin-bottom: 0;    
  }
  .form-check-input{
    margin-left: 5px !important;    
  }
  .form-group select{
    
  }
</style>
<div class="box-body">
  <div class="col-sm-12 no-padding">
      <form class="form" method="post" action="<?=$url?>" id="formSymptom">
        <div class="col-sm-4">
          <div class="col-sm-4 no-padding-right">
            <div class="form-group">
              <select class="form-control" id="line" required>
                <option value="">--Pilih Line--</option>
                <?php foreach($line as $l){ ?>
                  <option value="<?=$l->code?>" data-id="<?=$l->id?>"><?=$l->name?></option>
                <?php }?>
              </select>
            </div>
          </div>
          <div class="col-sm-4 no-padding-right">
            <div class="form-group">
              <select class="form-control" id="machine" required>
                <option value="">--Pilih Mesin--</option>
                <option value="m1">Mesin 1</option>
                <option value="m2">Mesin 2</option>
                <option value="m3">Mesin 3</option>
                <option value="m4">Mesin 4</option>
              </select>
            </div>
          </div>
          <script>
            // $("#line").change(function (e) { 
            //   e.preventDefault();
            //   $.blockUI();
            //   $("#machine").children().remove();
            //   $("#machine").append('<option value="">--Pilih Machine--</option>');
            //   var line_id = $("#line option:selected").data('id');
            //   // console.log(line_id)
            //   $.ajax({
            //     type: "post",
            //     url: "<?=$url?>get_machine_line",
            //     data: {line_id:line_id},
            //     dataType: "json",
            //     success: function (response) {
            //       // console.log(response)
            //       $(response).each(function( i, val ) {
            //         $("#machine").append('<option value="'+val.code+'">'+val.name+'</option>');
            //       });
            //     },
            //     complete: function (response) {
            //       $.unblockUI();
            //     }
            //   });
            // });
          </script>
          <div class="col-sm-4 no-padding-right">
            <div class="form-group">
              <input type="text" name="" id="chartDate" class="form-control">
            </div>
          </div>
        </div>
        <!-- <div class="col-sm-5"> -->
          <!-- <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" value=""> Temperature Motor
              <input type="checkbox" class="form-check-input" value=""> Temperature Motor
              <input type="checkbox" class="form-check-input" value=""> Temperature Motor
              <input type="checkbox" class="form-check-input" value=""> Temperature Motor
            </label>
          </div>
          <div class="form-check">
            
              <input type="checkbox" class="form-check-input" value=""> Vibration Motor
              <input type="checkbox" class="form-check-input" value=""> Vibration Motor
              <input type="checkbox" class="form-check-input" value=""> Vibration Motor
              <input type="checkbox" class="form-check-input" value=""> Vibration Motor
            
          </div> -->
          <!-- <table>
            <tr>
              <td><label class="form-check-label"><input type="checkbox" class="form-check-input" value=""> Temp Motor 1</label></td>
              <td><label class="form-check-label"><input type="checkbox" class="form-check-input" value=""> Temp Motor 2</label></td>
              <td><label class="form-check-label"><input type="checkbox" class="form-check-input" value=""> Temp Motor 3</label></td>
              <td><label class="form-check-label"><input type="checkbox" class="form-check-input" value=""> Temp Motor 4</label></td>
            </tr>
            <tr>
              <td><label class="form-check-label"><input type="checkbox" class="form-check-input" value=""> Vibration Motor 1</label></td>
              <td><label class="form-check-label"><input type="checkbox" class="form-check-input" value=""> Vibration Motor 2</label></td>
              <td><label class="form-check-label"><input type="checkbox" class="form-check-input" value=""> Vibration Motor 3</label></td>
              <td><label class="form-check-label"><input type="checkbox" class="form-check-input" value=""> Vibration Motor 4</label></td>
            </tr>
          </table> -->
        <!-- </div> -->
        <div class="col-sm-4">
          <button type="submit" class="btn btn-primary" id="updateChart">Show</button>
          <!-- <button type="button" class="btn btn-primary" id="configChart"><i class="fa fa-gear"></i> Config</button> -->
          <a class="btn btn-primary" data-toggle="modal" href='#standardModal'><i class="fa fa-gear"></i> Setting standar</a>
        </div>
      </form>
      <div class="col-sm-12" style="margin-left:15px;">
        <span style="font-size: 24px;">Dies Active:</span>
        <span class="text-green" id="diesActive" style="font-size: 24px;"></span>
      </div>
  </div>
  <div class="col-sm-11 col-sm-offset-1 graph-title hidden">
    ROBOT
  </div>

  <div class="col-sm-12">
    <div id="tempChartContainer" style="height: 310px; width: 100%;"></div>
    <div id="vibeChartContainer" style="height: 310px; width: 100%;"></div>
    <!-- <div id="chart3" style="height: 140px; width: 45%;"></div>
    <div id="chart4" style="height: 140px; width: 45%;"></div> -->
  </div>
</div>
<!-- /.box-body -->

<div class="modal fade" id="standardModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"><i class="fa fa-gear text-blue"></i> Konfigurasi standar grafik</h4>
      </div>
      <div class="modal-body">
        <form action="#" method="POST" role="form" id="standardForm">
          <h5>Upload standar grafik temperature dan vibration</h5>
          <div class="form-group">
            <label for="uploadFile">Pilih file (*.xlsx):</label>
            <input type="file" class="form-control" id="standardFile" name="standardFile">
          </div>
          <div class="text-right">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<script src="<?=$url?>vendor/moment-js/moment.js"></script>
<script src="<?=$url?>vendor/moment-js/locale/id.js"></script>
<script src="<?=$url?>vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script src="<?=$url?>vendor/canvas-js/canvasjs.min.js"></script>
<script src="<?=$url?>vendor/bootstrap-notify/bootstrap-notify.min.js"></script>

<script>

  var today = new Date(new Date().getTime() - (1000*60*60*6));
  var weekago = new Date(new Date().getTime() - (1000*60*60*24*7) - (1000*60*60*6));
  $('#chartDate').datetimepicker({
    locale: 'id',    
    format: 'YYYY-MM-DD',
    minDate : weekago,
    maxDate : today,
    defaultDate:today
  });
  ////////////////////////////////////////////////////////////////////////////////////////////////////
  var temperature1 = []; var vibration1 = [];
  var temperature2 = []; var vibration2 = [];
  var temperature3 = []; var vibration3 = [];
  var temperature4 = []; var vibration4 = [];
  var length1 = [];//new Array(10000);
  var length2 = [];//new Array(10000);
  var init = 1;
  var end = 1;

    var last_timestamp;
    var realtime;
    var tempChart;
    var vibeChart;

    setTimeout(() => {
      // console.log(tempChart);
    }, 1000);
      // console.log(tempChart);
    
  window.onload = function () {
    tempChart = new CanvasJS.Chart("tempChartContainer", {
      zoomEnabled: true,
      title: {
        text: "Temperature (\u2103)",
        fontFamily: "arial",
      },
      axisX: {
        labelFontSize: 14,
        labelFontFamily: "arial",
      },
      axisY:{
        // includeZero: true,
        title: null,
        labelFontSize: 14,
        labelFontFamily: "arial",
        gridThickness: 0.5,
        minimum: null,
        maximum: null,
        stripLines: [
          {value:null,/*label:"Warning",*/color:"orange",showOnTop: true,},
          {value:null,label:"Alarm",color:"red",showOnTop: true,},
        ]
      }, 
      toolTip: {
        shared: true,
        fontFamily: "arial",
      },
      legend: {
        cursor:"pointer",
        verticalAlign: "top",
        fontFamily: "Consolas",
        fontSize: 18,
        fontColor: "dimGrey",
        itemclick : tempToggleDataSeries
      },
      data: 
      [{				
        type: "line",
        color: "#b3003f",
        yValueFormatString: "#####.##",
        toolTipContent: "{z}<br><span style='\"'color: red;'\"'>{name}</span>: {y}", 
        showInLegend: true,
        name: "Motor1",
        fillOpacity: .4,
        dataPoints: temperature1,
        markerType: null,
      },{				
        type: "line",
        color: "#3434df",
        yValueFormatString: "#####.##",
        showInLegend: true,
        name: "Motor2",
        fillOpacity: .4,
        dataPoints: temperature2,
        markerType: null,
      },{				
        type: "line",
        color: "#267326",
        yValueFormatString: "#####.##",
        showInLegend: true,
        name: "Motor3",
        fillOpacity: .4,
        dataPoints: temperature3,
        markerType: null,
      },{				
        type: "line",
        color: "#00cccc",
        yValueFormatString: "#####.##",
        showInLegend: true,
        name: "Motor4",
        fillOpacity: .4,
        dataPoints: temperature4,
        markerType: null,
      },{ 
        type: "line",
        showInLegend: false,
        toolTipContent: null,
        markerType: null,
        fillOpacity: .2,
        dataPoints: length1
      }]
    });

    function tempToggleDataSeries(e) {
      if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
        e.dataSeries.visible = false;
      }
      else {
        e.dataSeries.visible = true;
      }
      tempChart.render();
    }
      ///////////////////////////////////////////////////////////////////////////////////////
    vibeChart = new CanvasJS.Chart("vibeChartContainer", {
      zoomEnabled: true,
      title: {
        text: "Vibration (mm/s)",
        fontFamily: "arial",
      },
      axisX: {
        labelFontSize: 14,
        labelFontFamily: "arial",
      },
      axisY:{
        // includeZero: true,
        title: null,
        labelFontSize: 14,
        labelFontFamily: "arial",
        gridThickness: 0.5,
        minimum: null,
        maximum: null,
        stripLines: [
          {value:null,/*label:"Warning",*/color:"orange",showOnTop: true,},
          {value:null,label:"Alarm",color:"red",showOnTop: true,},
        ]
      }, 
      toolTip: {
        shared: true,
        fontFamily: "arial",
      },
      legend: {
        cursor:"pointer",
        verticalAlign: "top",
        fontFamily: "arial",
        fontSize: 18,
        fontColor: "dimGrey",
        itemclick : vibeToggleDataSeries
      },
      data: 
      [{				
        type: "line",
        color: "#b3003f",
        yValueFormatString: "#####.##",
        toolTipContent: "{z}<br><span style='\"'color: red;'\"'>{name}</span>: {y}", 
        showInLegend: true,
        name: "Motor1",
        fillOpacity: .4,
        dataPoints: vibration1,
        markerType: null,
      },{				
        type: "line",
        color: "#3434df",
        yValueFormatString: "#####.##",
        showInLegend: true,
        name: "Motor2",
        fillOpacity: .4,
        dataPoints: vibration2,
        markerType: null,
      },{				
        type: "line",
        color: "#267326",
        yValueFormatString: "#####.##",
        showInLegend: true,
        name: "Motor3",
        fillOpacity: .4,
        dataPoints: vibration3,
        markerType: null,
      },{				
        type: "line",
        color: "#00cccc",
        yValueFormatString: "#####.##",
        showInLegend: true,
        name: "Motor4",
        fillOpacity: .4,
        dataPoints: vibration4,
        markerType: null,
      },{ 
        type: "line",
        showInLegend: false,
        toolTipContent: null,
        markerType: null,
        fillOpacity: .2,
        dataPoints: length2
      }]
    });

    function vibeToggleDataSeries(e) {
      if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
        e.dataSeries.visible = false;
      }
      else {
        e.dataSeries.visible = true;
      }
      vibeChart.render();
    }

    tempChart.render();
    vibeChart.render();
    // get_data();
      

    $("#formSymptom").submit(function (e) { 
      e.preventDefault();
      var modul = $("#line").val()+$("#machine").val();
      var date = $("#chartDate").val();
      // console.log(modul);
      get_data(modul, date)
      
    });
    function get_data(modul, date){
      tempChart.options.data[0].dataPoints = [];
      tempChart.options.data[1].dataPoints = [];
      tempChart.options.data[2].dataPoints = [];
      tempChart.options.data[3].dataPoints = [];
      tempChart.options.data[4].dataPoints = [];
      vibeChart.options.data[0].dataPoints = [];
      vibeChart.options.data[1].dataPoints = [];
      vibeChart.options.data[2].dataPoints = [];
      vibeChart.options.data[3].dataPoints = [];
      vibeChart.options.data[4].dataPoints = [];
      
      tempChart.options.axisY.stripLines[0].value = null;
      tempChart.options.axisY.stripLines[1].value = null;
      vibeChart.options.axisY.stripLines[0].value = null;
      vibeChart.options.axisY.stripLines[1].value = null;
      $('#diesActive').html("");
      
      $.ajax({
        type: "POST",
        url: "<?=$url?>get_data/",
        data: {modul:modul, date:date},
        dataType: "JSON",
        beforeSend: function (response) {
          $.blockUI();
        },
        success: function (response) {
          // console.log(response);
          $.each(response.motor_1, function (key, value) {
            tempChart.options.data[0].dataPoints.push({y: parseFloat(value.temperature),z: value.timestamp});
            vibeChart.options.data[0].dataPoints.push({y: parseFloat(value.vibration),z: value.timestamp});
          });
          $.each(response.motor_2, function (key, value) {
            tempChart.options.data[1].dataPoints.push({y: parseFloat(value.temperature),z: value.timestamp});
            vibeChart.options.data[1].dataPoints.push({y: parseFloat(value.vibration),z: value.timestamp});
          });
          $.each(response.motor_3, function (key, value) {
            tempChart.options.data[2].dataPoints.push({y: parseFloat(value.temperature),z: value.timestamp});
            vibeChart.options.data[2].dataPoints.push({y: parseFloat(value.vibration),z: value.timestamp});
          });
          $.each(response.motor_4, function (key, value) {
            tempChart.options.data[3].dataPoints.push({y: parseFloat(value.temperature),z: value.timestamp});
            vibeChart.options.data[3].dataPoints.push({y: parseFloat(value.vibration),z: value.timestamp});
          });

          var foo = new Array(2000);
          $.each(foo, function (key, value) {
            tempChart.options.data[4].dataPoints.push({y: parseFloat(value)});
            vibeChart.options.data[4].dataPoints.push({y: parseFloat(value)});
          });
          $.unblockUI();
          tempChart.render();
          vibeChart.render();
          // console.log(tempChart);
        },
        error: function (response) {
          console.log(response);
          $.unblockUI();
        },
        complete: function (response) {
          $.unblockUI();
          dateToday = moment(today).format("YYYY-MM-DD");
          // console.log(date);
          // console.log(dateToday);
          if(date == dateToday){
            if (ws.readyState) {
              ws.close();
              wsock(modul);
            } else {
              wsock(modul);
            }
          } else {
            if (ws.readyState) {
              ws.close();
            }
            // $('#diesActive').html("");
            // tempChart.options.axisY.stripLines[0].value = null;
            // tempChart.options.axisY.stripLines[1].value = null;
            // vibeChart.options.axisY.stripLines[0].value = null;
            // vibeChart.options.axisY.stripLines[1].value = null;
            tempChart.render();
            vibeChart.render();
          }
        }
      });      
    }
    var ws = new Set();
    function wsock(modul){
      ws = new WebSocket("ws://localhost:1880/ws/"+modul)
      ws.onerror = function(error) {console.log('Error detected: ' + error)}
      ws.onopen = function(){console.log('websocket connect');/*ws.send("websocket connect");*/}
      ws.onclose = function(){console.log('websocket disconnect')}
      var dies;
      var diesNew;
      ws.onmessage = function(event){
        var payload = $.parseJSON(event.data);
        // console.log(payload);
        diesNew = payload.dies.code;
        if(dies == diesNew){
          // $('#diesActive').html(dies);
        } else {
          // console.log(diesNew)
          $('#diesActive').html(diesNew);
          temperature_warning = payload.dies.temperature_warning;
          temperature_alarm = payload.dies.temperature_alarm;
          vibration_warning = payload.dies.vibration_warning;
          vibration_alarm = payload.dies.vibration_alarm;
          
          tempChart.options.axisY.stripLines[0].value = parseInt(temperature_warning);
          tempChart.options.axisY.stripLines[1].value = parseInt(temperature_alarm);
          tempChart.options.axisY.maximum = parseInt(temperature_alarm)*1.1;
          vibeChart.options.axisY.stripLines[0].value = parseInt(vibration_warning);
          vibeChart.options.axisY.stripLines[1].value = parseInt(vibration_alarm);
          vibeChart.options.axisY.maximum = parseInt(vibration_alarm)*1.1;
        }
        dies = diesNew;
        tempChart.options.data[0].dataPoints.push({y: parseFloat(payload.motor_1.temperature),z: payload.timestamp});
        vibeChart.options.data[0].dataPoints.push({y: parseFloat(payload.motor_1.vibration),z: payload.timestamp});
        tempChart.options.data[1].dataPoints.push({y: parseFloat(payload.motor_2.temperature),z: payload.timestamp});
        vibeChart.options.data[1].dataPoints.push({y: parseFloat(payload.motor_2.vibration),z: payload.timestamp});
        tempChart.options.data[2].dataPoints.push({y: parseFloat(payload.motor_3.temperature),z: payload.timestamp});
        vibeChart.options.data[2].dataPoints.push({y: parseFloat(payload.motor_3.vibration),z: payload.timestamp});
        tempChart.options.data[3].dataPoints.push({y: parseFloat(payload.motor_4.temperature),z: payload.timestamp});
        vibeChart.options.data[3].dataPoints.push({y: parseFloat(payload.motor_4.vibration),z: payload.timestamp});
        tempChart.render();
        vibeChart.render();
      }
    }
  }
  /////////////////////////////////////////////////////////////////////////////////////////////////////

  $('#standardForm').submit(function(e){
    e.preventDefault();
    var formData = new FormData($('#standardForm')[0]);
    $.ajax({
      url:'<?=$url?>upload_standard/',
      type:"post",
      data: formData,
      processData: false,
      contentType: false,
      dataType: 'JSON',
      beforeSend: function(){
        $.blockUI();
        $("#standardModal").block();
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
        $("#standardModal").unblock();
        $("#standardModal").modal('hide');
      }
      
    });
  });
  //////////////////////////////////////////////////////////////////////////////////////////////////////  
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



</script>

<?php if($tag){?>
<script>
  $(document).ready(function () {
    $('#line').val('<?=$selected_line?>')
    $(`#machine`).val('<?=$selected_machine?>')
    $(`#updateChart`).click()
  });
</script>
<?php } ?>










