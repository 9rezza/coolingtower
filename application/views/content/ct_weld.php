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
          <a id="" href="#" class="btn btn-default">CT Weld</a>
        </div>
        <div id="btn-motor" class="textbox image-symbol" style="width: 0px; background-color: black">
          <a id="" href="#" class="btn btn-primary">Motor</a>
        </div>
        <div id="btn-ct-in-temp" class="textbox image-symbol" style="width: 0px; background-color: black">
          <a id="ct_in_temp" data-field="temp" href="#" class="btn btn-primary btn-ct">Temperature CT IN</a>
        </div>
        <div id="btn-ct-in-press" class="textbox image-symbol" style="width: 0px; background-color: black">
          <a id="ct_in_press" data-field="press" href="#" class="btn btn-primary btn-ct">Pressure CT IN</a>
        </div>
        <div id="btn-ct-out-temp" class="textbox image-symbol" style="width: 0px; background-color: black">
          <a id="ct_out_temp" data-field="temp" href="#" class="btn btn-primary btn-ct">Temperature CT OUT</a>
        </div>
        <div id="btn-ct-out-press" class="textbox image-symbol" style="width: 0px; background-color: black">
          <a id="ct_out_press" data-field="press" href="#" class="btn btn-primary btn-ct">Pressure CT OUT</a>
        </div>
        <div id="ct-weld-date" class="textbox image-symbol" style="width: 100px; margin: 0; background-color: black">
              <input type="button" name="ctWeldDate" id="ctWeldDate" class="" style="width:100%"/>
        </div>
        <div id="label-set-point" class="textbox image-symbol set-point" style="width: 85px; margin: 0; background-color: none">
          <label>Set point:</label>
        </div>
        <div id="input-set-point-low" class="textbox image-symbol set-point" style="width: 120px; margin: 0; background-color: grey;">
          <input type="number" name="" id="setPointLow" class="form-control text-right" value="" disabled/>
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
  var realtime_ct_weld = false
  var current_ct_modul
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
    $('#ctWeldDate').datetimepicker({
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
  $('#btn-motor').click(function (e) { 
    e.preventDefault();
    window.location.href = "<?=$url?>ct_motor";
  });
            ////////////////////////
  $('#btnSetPoint').click(function (e) {
    e.preventDefault();
    limit = $('#setPoint').val()
    limit_low = $('#setPointLow').val()
    modul = $('.ct-selected').prop('id').toString()
    $.ajax({
      type: "POST",
      url: "<?=$url?>ct_weld_limit_update",
      data: {modul:modul,limit:limit,limit_low:limit_low},
      dataType: "JSON",
      beforeSend: function(response){
        $('#chart1').block()
      },
      success: function (response) {
          chart1.options.axisY.stripLines[0].value = parseFloat(limit);
          chart1.options.axisY.stripLines[1].value = parseFloat(limit_low);
          chart1.options.axisY.maximum = parseFloat(limit*1.05);
          chart1.render()
      },
      complete: function (response) {
        $('#chart1').unblock()        
      }
    })
  })
            ////////////////////////
  $('.btn-ct').on('click', function (e) { 
    e.preventDefault()
    $('.btn-ct').removeClass('btn-default ct-selected')
    $('.btn-ct').addClass('btn-primary')
    $(this).removeClass('btn-primary')
    $(this).addClass('btn-default ct-selected')

    modul = $(this).attr('id')
    date = $('#ctWeldDate').val()
    field = $(this).data('field')
    // console.log(modul,date,field)
    get_data_ct_weld_spec_date(modul, date, field)
  });
  $('#ctWeldDate').on('blur', function (e) { 
    e.preventDefault()
    // alert($(this).attr('id'))
    checkSelected = $('.ct-selected').length
    if(checkSelected == 1){
      modul = $('.ct-selected').prop('id')
      date = $(this).val()
      field = $('.ct-selected').data('field')
      // console.log(modul, date, field)
      get_data_ct_weld_spec_date(modul, date, field)
    }    
  });
            ////////////////////////

  
  // end event capture /////////////////////////////////////////////////////////////////////////////////////////
  
  // ws ////////////////////////////////////////////////////////////////////////////////////////////////////////
  ws_ct_sensor_g()
  function ws_ct_sensor_g(){
    var ct_sensor_g = new WebSocket("ws://"+location.hostname+":1880/ws/ct_sensor_g")
    ct_sensor_g.onerror = function(error) {console.log('Error detected: ' + error)}
    ct_sensor_g.onopen = function(){console.log('websocket ct_sensor_g connect')}
    ct_sensor_g.onclose = function(){
      console.log('websocket ct_sensor_g disconnect')
      ws_ct_sensor_g()
    }
    ct_sensor_g.onmessage = function(event){
      var payload = $.parseJSON(event.data);
      // console.log(payload)
      if(realtime_ct_weld){
        chart1.options.data[1].dataPoints.push({
          x:Date.parse(new Date),
          y:parseFloat(parseFloat(payload[current_ct_modul]).toFixed(2))
        })
        chart1.render();
      }      
    }
  }
</script>
<script>
  // end onload ////////////////////////////////////////////////////////////

  // function goes here ////////////////////////////////////////////////////
  function get_data_ct_weld_spec_date(modul, date, field){
    chart1.options.data[0].dataPoints = []
    chart1.options.data[1].dataPoints = []
    // console.log(modul,date,field)
    
    datetime = new Date(Date.parse(date+" 06:00:00"))
    dateTime6 = moment(datetime).format('YYYY-MM-DD HH:mm:ss')
    nextdateTime6 = moment(datetime).add(1, 'days').format('YYYY-MM-DD HH:mm:ss')
    // console.log(dateTime6)
    $.ajax({
      type: "POST",
      url: "<?=$url?>get_data_ct_weld_spec_date/",
      data: {modul:modul, initial:dateTime6, end:nextdateTime6},
      dataType: "JSON",
      beforeSend: function (response) {
        $.blockUI()
      },
      success: function (response) {
        console.log(response)
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
        $('#setPointLow').val(parseFloat(response.limit_low).toFixed(1))
        chart1.options.axisY.stripLines[0].value = parseFloat(response.limit)
        chart1.options.axisY.stripLines[1].value = parseFloat(response.limit_low)
        chart1.options.axisY.maximum = parseFloat(response.limit*1.05)
        // modul
          if(modul=='ct_in_press'){current_ct_modul='CTInPress'; titleAdd="IN Pressure (bar)";name="Pressure"}
          else if(modul=='ct_in_temp'){current_ct_modul='CTInTemp'; titleAdd="IN Temperature (\u00B0C)";name="Temperature"}
          else if(modul=='ct_out_press'){current_ct_modul='CTOutPress'; titleAdd="OUT Pressure (bar)";name="Pressure"}
          else if(modul=='ct_out_temp'){current_ct_modul='CTOutTemp'; titleAdd="Out Pressure (\u00B0C)";name="Temperature"}
          chart1.options.title.text = "CT "+titleAdd
          chart1.options.data[1].name = name
        // realtime
        if(date == todayDate){
          realtime_ct_weld = true
        } else {          
          realtime_ct_weld = false
        }
        chart1.render()
        console.log(chart1)
      },
      error: function (response) {
        // console.log(response);
        $.unblockUI()
      },
      complete: function (response) {
        // 
        if(modul == 'ct_in_press' || modul == 'ct_out_press'){
          $('#setPointLow').removeAttr('disabled');
        } else {
          $('#setPointLow').attr('disabled', true);
        }
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
        text: "Cooling Tower Pressure & Temperature",
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
          {value:null,label:"",color:"red",showOnTop: true},
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










