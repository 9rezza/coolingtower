<!-- Untuk shop------------------------------------------------------------ -->
<style>
  .main-footer{
    display: none;
  }
  .box-header{
    display: none;
  }
  .box-body{
    padding: 0px !important;
  }
  .box-solid{
    margin: 0px !important;    
  }
  .content{
    padding: 0px !important;
    margin: 0px !important;
  }
</style>
<!-- ------------------------------------------------------------ -->
<style>
  .parent-line{
    margin-bottom: 40px;
  }
  .line{
    height: 170px;
    width: 80%;
    border: 2px solid black;
    margin: 10%;
  }
  .line-name{
    height: 135px;
    border-radius: 10px;
    font-size: 48px;
    padding-top: 25px;
  }
  .line-scada{
    height: 135px;
    border: 2px solid black;
    border-radius: 10px;
  }
  .line-scada:hover, .line-scada:hover > .machine{
    background-color: #ccc;
    color: #FFF;
    cursor: pointer;
  }
  .machine{
    height: 110px;
    border: 2px solid black;
    margin: 2%;
    width: 21%;
    background-color: #a4cdf7;
    color: #000;
    font-size: 20px;
    padding-top: 35px;
  }
  @media(max-width:916px){
    .content{
      overflow-x: scroll;
      padding: 0px;
    }

  }
</style>
<div class="box-body">
  <!-- <div class="row parent-hmi"> -->
  <div class="row no-margin">
    <style>
      .box{
        min-width: 480px;
      }
      .box-body{
        min-width: 480px;
      }
      .parent-hmi{
        margin: 0;
        padding: 0;
        text-align: center;
        /* height: auto; */
        background-color: #fff;
        /* border: 1px solid #000; */
      }
      .hmi{
        position: relative;
        display: inline-block;
        /* background-image: url("../assets/images/hmi/waterpump.png?123"); */
        background-repeat: no-repeat;
        /* background-color: #dddddd; */
        background-color: #fff;
        width: 1000px;
        /* min-height: 684px; */
        height: 565px;
        /* border: 1px solid #fff; */
        /* transform: scale(0.5,0.5);
        transform-origin: 50% 0%; */
      }
      .image-symbol{
        position: absolute;
        z-index: 1;
      }
      .textbox{
        position: absolute;
        font-family: monospace;
      }
      .focused{
        outline: 1px dashed #030afa;
        opacity: 0.5;
        /* z-index: 99999 !important; */
      }
      <?=join('',$position)?>

      .table-param-even{
        font-family: arial;
        font-size: 12px;
        line-height: 18px;
        font-weight: bold;
        background-color: #aaa;
        padding-top: 70px;
        width: 81px;
        max-width: 81px;
        min-width: 81px;        
      }
      .table-param-even .valueParam{
        font-size: 15px;
        min-width: 60px;
        text-align:right;
        padding-right: 7px;
      }
      .table-param-even .unitParam{
        font-size: 15px;
        text-align:left;
      }
      .bootstrap-datetimepicker-widget{
        width: 280px !important;
        font-size: 24px;
      }
      .set-point{
        /* display: none */
      }
      #btn-ct-motor a{
        display: inline-block
      }
      #btn-ct-motor-temp a, #btn-ct-motor-vibe a{
        padding-top: 2px;
        padding-bottom: 3px;
      }
      /* .bootstrap-datetimepicker-widget .datepicker-month .month{ */
        /* width: 40px !important; */
        /* height: 600px !important; */
        /* font-size: 32px; */
      /* } */
    </style>
    <div class="col-xs-12 col-md-12 parent-hmi">
      <div class="hmi">
        <?php foreach($images as $s){ ?>
          <img class="image-symbol" src="<?=$hmi.$s->grup.'/'.$s->color.'/'.$s->src."?".rand(1,1000)?>" id="<?=$s->element?>" data-id="<?=$s->id?>" data-color="<?=$s->color?>"/>
        <?php } ?>
        <div id="btn-kwh" class="textbox image-symbol" style="width: 0px; background-color: black">
          <a id="" href="#" class="btn btn-primary">kWh</a>
        </div>
        <div id="btn-ct" class="textbox image-symbol" style="width: 0px; background-color: black">
          <a id="" href="#" class="btn btn-primary">CT Weld</a>
        </div>
        <div id="btn-motor" class="textbox image-symbol" style="width: 0px; background-color: black">
          <a id="" href="#" class="btn btn-default">Motor</a>
        </div>
        <div id="btn-ct-motor" class="textbox image-symbol text-left" style="width: 600px; background-color: none">
          <a id="ct_m1" data-field="m1" href="#" class="btn btn-primary btn-ct-motor disabled">M1</a>
          <a id="ct_m2" data-field="m2" href="#" class="btn btn-primary btn-ct-motor disabled">M2</a>
          <a id="ct_m3" data-field="m3" href="#" class="btn btn-primary btn-ct-motor disabled">M3</a>
          <a id="ct_m4" data-field="m4" href="#" class="btn btn-primary btn-ct-motor disabled">M4</a>
          <a id="ct_m5" data-field="m5" href="#" class="btn btn-primary btn-ct-motor disabled">M5</a>
          <a id="ct_m6" data-field="m6" href="#" class="btn btn-primary btn-ct-motor">M6</a>
          <a id="ct_m7" data-field="m7" href="#" class="btn btn-primary btn-ct-motor disabled">M7</a>
          <a id="ct_m8" data-field="m8" href="#" class="btn btn-primary btn-ct-motor disabled">M8</a>
          <a id="ct_m9" data-field="m9" href="#" class="btn btn-primary btn-ct-motor disabled">M9</a>
          <a id="ct_m10" data-field="m10" href="#" class="btn btn-primary btn-ct-motor disabled">M10</a>
        </div>
        <div id="btn-ct-motor-temp" class="textbox image-symbol" style="width: 0px; background-color: black">
          <a id="_temp" data-field="temp" href="#" class="btn btn-primary btn-ct-param">Temp</a>
        </div>
        <div id="btn-ct-motor-vibe" class="textbox image-symbol" style="width: 0px; background-color: black">
          <a id="_vibe" data-field="vibe" href="#" class="btn btn-primary btn-ct-param">Vibe</a>
        </div>
        <div id="ct-weld-date" class="textbox image-symbol" style="width: 100px; margin: 0; background-color: black">
              <input type="button" name="ctMotorDate" id="ctMotorDate" class="" style="width:100%"/>
        </div>
        <div id="label-set-point" class="textbox image-symbol set-point" style="width: 85px; margin: 0; background-color: none">
          <label>Set point:</label>
        </div>
        <div id="input-set-point" class="textbox image-symbol set-point" style="width: 120px; margin: 0; background-color: grey;">
          <input type="number" name="" id="setPoint" class="form-control text-right" value="" disabled/>
        </div>
        <div id="btn-set-point" class="textbox image-symbol set-point" style="width: 0px; margin: 0; background-color: grey">
          <input type="button" id="btnSetPoint" value="update"/>
        </div>
        <div id="chart-1" class="textbox image-symbol" style="width: 600px; background-color: black">
          <div id="chart1" style="height: 310px; width: 100%;"></div>
        </div>
        <!-- <div id="apalah" class="textbox image-symbol" style="width: 600px; background-color: none; left: 200px; top:150px">
          <img src="<?=$url?>assets/images/loading.gif"/>
        </div> -->
      </div>
    </div>
  </div>
</div>

<script src="<?=$url?>vendor/moment-js/moment.js"></script>
<script src="<?=$url?>vendor/moment-js/locale/id.js"></script>
<script src="<?=$url?>vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script src="<?=$url?>vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script>
  // inital load goes here ////////////////////////////////////////////////////////////////////////////////////  
  var realtime_ct_motor = false
  var current_ct_motor_modul
  var today = new Date(new Date().getTime() - (1000*60*60*6))
  var todayDate = moment(today).format('YYYY-MM-DD')
  var oldWidth = $(window).width()
  $(document).ready(function () {
    if($(window).width() < 1000){
      scale = ($(window).width())/1000
      // scale = 0.50
      $('.hmi').css('transform', 'scale('+scale+')')
      $('.hmi').css('transform-origin', '0% 0%')
      $('.hmi').parent().width($(window).width())
      $('.hmi').parent().height($(window).height())
      // alert($(window).width())
      $('.hmi').width($(window).width())
      $('.hmi').height($(window).height())
      // $('.hmi').parent().width(1000*scale)
      // $('.hmi').parent().height(560*scale)
    }
    $(window).resize(function() {
      newWidth = $(window).width()
      if(newWidth < 1000){
        scale = (newWidth - 20)/1000
        $('.hmi').css('transform', 'scale('+scale+')')
        $('.hmi').css('transform-origin', '0% 0%')
        // $('.hmi').css('transform-origin', '50% 0%')
        $('.hmi').parent().width(1000*scale)
        $('.hmi').parent().height(560*scale)
      } else {
        $('.hmi').css('transform', 'scale(1)')
        // $('.hmi').css('transform-origin', '1 1')
        $('.hmi').parent().width(1000)
        $('.hmi').parent().height(560)
      }
    })
              ////////////////////////////////
    middleNight = new Date(today.getFullYear(),today.getMonth(),today.getDate(),00,00,00);
    weeksAgo = moment(middleNight).subtract(13, 'days');
    $('#ctMotorDate').datetimepicker({
      locale: 'id',    
      format: 'YYYY-MM-DD',
      minDate : weeksAgo,
      maxDate : today,
      defaultDate:today,
    });
  })
  // end Inital //////////////////////////////////////////////////////////////////////////////////////////////

  // event capture ////////////////////////////////////////////////////////////////////////////////////////////
  $('#back_to_ct').click(function (e) { 
    e.preventDefault();
    window.location.href = "<?=$url?>";
  });
            ////////////////////////
  $('#btn-kwh').click(function (e) { 
    e.preventDefault();
    window.location.href = "<?=$url?>consumption";
  });
            ////////////////////////
  $('#btn-ct').click(function (e) { 
    e.preventDefault();
    window.location.href = "<?=$url?>ct_weld";
  });
            ////////////////////////
  $('#btnSetPoint').click(function (e) {
    e.preventDefault();
    limit = $('#setPoint').val()
    field = $('.ct-param-selected').data('field')+'_limit'
    name = $('.ct-motor-selected').prop('id')
    $.ajax({
      type: "POST",
      url: "<?=$url?>ct_motor_limit_update",
      data: {name:name,field:field,limit:limit},
      dataType: "JSON",
      beforeSend: function(response){
        $('#chart1').block()
      },
      success: function (response) {        
          chart1.options.axisY.stripLines[0].value = parseFloat(limit);
          chart1.options.axisY.maximum = parseFloat(limit*1.05);
          chart1.render()
      },
      complete: function (response) {
        $('#chart1').unblock()        
      }
    })
  })
            ////////////////////////
  $('.btn-ct-motor').on('click', function (e) { 
    e.preventDefault()
    if(!$(this).hasClass('disabled')){
      $('.btn-ct-motor').removeClass('btn-default ct-motor-selected')
      $('.btn-ct-motor').addClass('btn-primary')
      $(this).removeClass('btn-primary')
      $(this).addClass('btn-default ct-motor-selected')
      checkParam = $('.ct-param-selected').length
      if(checkParam == 1){
        motor = $(this).prop('id')
        param = $('.ct-param-selected').prop('id')
        field = $('.ct-param-selected').data('field')
        modul = motor+param
        date = $('#ctMotorDate').val()
        // console.log(modul)
        get_data_ct_motor_spec_date(modul, date, field)
      }
    }
  });
  $('.btn-ct-param').on('click', function (e) { 
    e.preventDefault()
    $('.btn-ct-param').removeClass('btn-default ct-param-selected')
    $('.btn-ct-param').addClass('btn-primary')
    $(this).removeClass('btn-primary')
    $(this).addClass('btn-default ct-param-selected')
    checkMotor = $('.ct-motor-selected').length
    if(checkMotor == 1){
      motor = $('.ct-motor-selected').prop('id')
      param = $(this).prop('id')
      field = $('.ct-param-selected').data('field')
      modul = motor+param
      date = $('#ctMotorDate').val()
      // console.log(modul)
      get_data_ct_motor_spec_date(modul, date, field)
    }
  });
  $('#ctMotorDate').on('blur', function (e) { 
    e.preventDefault()
    // alert($(this).attr('id'))
    checkMotor = $('.ct-param-selected').length
    checkParam = $('.ct-motor-selected').length
    if(checkMotor == 1 && checkParam == 1){
      motor = $('.ct-motor-selected').prop('id')
      param = $('.ct-param-selected').prop('id')
      field = $('.ct-param-selected').data('field')
      modul = motor+param
      date = $(this).val()
      // console.log(modul, date)
      get_data_ct_motor_spec_date(modul, date, field)
    }    
  });
            ////////////////////////

  
  // end event capture /////////////////////////////////////////////////////////////////////////////////////////
  
  // ws ////////////////////////////////////////////////////////////////////////////////////////////////////////
  ws_ct_motor_g()
  function ws_ct_motor_g(){
    var ct_motor_g = new WebSocket("ws://"+location.hostname+":1880/ws/ct_motor_g")
    ct_motor_g.onerror = function(error) {console.log('Error detected: ' + error)}
    ct_motor_g.onopen = function(){console.log('websocket ct_motor_g connect')}
    ct_motor_g.onclose = function(){
      console.log('websocket ct_motor_g disconnect')
      ws_ct_motor_g()
    }
    ct_motor_g.onmessage = function(event){
      var payload = $.parseJSON(event.data);
      console.log(payload)
      if(realtime_ct_motor){
        chart1.options.data[1].dataPoints.push({
          x:Date.parse(new Date),
          y:parseFloat(parseFloat(payload[current_ct_motor_modul]).toFixed(2))
        })
        chart1.render();
      }      
    }
  }
</script>
<script>
  // end onload ////////////////////////////////////////////////////////////

  // function goes here ////////////////////////////////////////////////////
  function get_data_ct_motor_spec_date(modul, date, field){
    chart1.options.data[0].dataPoints = []
    chart1.options.data[1].dataPoints = []
    // console.log(modul,date,field)
    
    datetime = new Date(Date.parse(date+" 06:00:00"))
    dateTime6 = moment(datetime).format('YYYY-MM-DD HH:mm:ss')
    nextdateTime6 = moment(datetime).add(1, 'days').format('YYYY-MM-DD HH:mm:ss')
    // console.log(dateTime6)
    $.ajax({
      type: "POST",
      url: "<?=$url?>get_data_ct_motor_spec_date/",
      data: {modul:modul, initial:dateTime6, end:nextdateTime6},
      dataType: "JSON",
      beforeSend: function (response) {
        $.blockUI()
      },
      success: function (response) {
        // console.log(response)
        // data
        $.each(response.data, function (key, value) {
          chart1.options.data[1].dataPoints.push({
            x:Date.parse(value.datetime),
            y:parseFloat(parseFloat(value.val).toFixed(2))
          })
        })
        // range
        chart1.options.data[0].dataPoints.push({x:Date.parse(dateTime6),y:null})
        chart1.options.data[0].dataPoints.push({x:Date.parse(nextdateTime6),y:null})
        //set point
        $('#setPoint').val(parseFloat(response.limit).toFixed(1))
        chart1.options.axisY.stripLines[0].value = parseFloat(response.limit)
        chart1.options.axisY.maximum = parseFloat(response.limit*1.05)
        // modul
          id = parseInt(modul.replace(/[A-Za-z$-$_]/g, ""))
          // console.log(id)
          if(field=='temp'){current_ct_motor_modul='CTWeldP'+id+'Temp'; titleAdd="M"+id+" Temperature (\u00B0C)";name="Temperature"}
          else if(field=='vibe'){current_ct_motor_modul='CTWeldP'+id+'Temp'; titleAdd="M"+id+" Vibration (mm/s)";name="Vibration"}
          chart1.options.title.text = "CT "+titleAdd
          chart1.options.data[1].name = name
        // realtime
        if(date == todayDate){
          realtime_ct_motor = true
        } else {          
          realtime_ct_motor = false
        }
        chart1.render()
        // console.log(chart1)
      },
      error: function (response) {
        // console.log(response);
        $.unblockUI()
      },
      complete: function (response) {
        // 
        $('#setPoint').removeAttr('disabled');
        $.unblockUI()
      }
    });
  }
  
  
  // chart ////////////////////////////////////////////////////////////////
  var kwh = []
  var range = []
  var chart1
    
  window.onload = function () {
    chart1 = new CanvasJS.Chart("chart1", {
      // zoomEnabled: true,
      title: {
        // text: "Temperature (\u2103)",
        text: "CT Motor Vibration & Temperature",
        fontFamily: "arial",
      },
      axisX: {
        labelFontSize: 14,
        labelFontFamily: "arial",
        valueFormatString: "HH:mm",
      },
      axisY:{
        includeZero: true,
        title: null,
        labelFontSize: 14,
        labelFontFamily: "arial",
        gridThickness: 0.5,
        // minimum: null,
        maximum: null,
        stripLines: [
          {value:null,label:"Alarm",color:"red",showOnTop: true},
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
        color: "#123aaa",
        xValueType: "dateTime",
        xValueFormatString: "DD-MMM HH:mm",
        yValueFormatString: "#####.##",
        toolTipContent: "{x}<br/><span style='\"'color: blue;'\"'>{name}</span>: {y}", 
        // showInLegend: true,
        // name: "kWh",
        fillOpacity: .4,
        dataPoints: range,
        markerType: null,
      },{				
        type: "line",
        color: "#3434df",
        xValueType: "dateTime",
        xValueFormatString: "DD-MMM HH:mm",
        yValueFormatString: "#####.##",
        toolTipContent: "{x}<br/><span style='\"'color: blue;'\"'>{name}</span>: {y}", 
        // showInLegend: true,
        name: "Data",
        fillOpacity: .4,
        dataPoints: kwh,
        markerType: null,
      }]
    });
    function tempToggleDataSeries(e) {
      if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
        e.dataSeries.visible = false;
      }
      else {
        e.dataSeries.visible = true;
      }
      chart1.render();
    }
    set_range_chart()
    function set_range_chart(){
      chart1.options.data[0].dataPoints = [];
      // var datetime = new Date() - (1000*60*60*6)
      // initial = moment(datetime).format('YYYY-MM-DD 06:00:00')
      // datetime = datetime  + (1000*60*60*24)
      // end = moment(datetime).format('YYYY-MM-DD 05:59:00')

      // chart1.options.data[0].dataPoints.push({x:Date.parse(initial),y:100})
      // chart1.options.data[0].dataPoints.push({x:Date.parse(end),y:100})
      chart1.render()
    }
  }  
  // end chart ////////////////////////////////////////////////////////////
</script>










