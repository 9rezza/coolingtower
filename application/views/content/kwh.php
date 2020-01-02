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
          <a id="" href="#" class="btn btn-default">kWh</a>
        </div>
        <div id="btn-ct" class="textbox image-symbol" style="width: 0px; background-color: black">
          <a id="" href="#" class="btn btn-primary">CT Weld</a>
        </div>
        <div id="btn-motor" class="textbox image-symbol" style="width: 0px; background-color: black">
          <a id="" href="#" class="btn btn-primary">Motor</a>
        </div>
        <div id="kwh-date" class="textbox image-symbol" style="width: 100px; margin: 0; background-color: black">
              <input type="button" name="kwhDate" id="kwhDate" class="" style="width:100%"/>
        </div>
        <div id="label-set-point" class="textbox image-symbol" style="width: 85px; margin: 0; background-color: none">
          <label>Set point:</label>
        </div>
        <div id="input-set-point" class="textbox image-symbol" style="width: 120px; margin: 0; background-color: grey;">
          <input type="number" name="" id="setPoint" class="form-control text-right" value="<?=$limit?>"/>
        </div>
        <div id="btn-set-point" class="textbox image-symbol" style="width: 0px; margin: 0; background-color: grey">
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
    today = new Date(new Date().getTime() - (1000*60*60*6));
    currentTime = new Date();
    firstDayMonth = new Date(currentTime.getFullYear(),currentTime.getMonth(),1);
    fiveMonthAgo = moment(firstDayMonth).subtract(5, 'months');
    console.log()
    $('#kwhDate').datetimepicker({
      locale: 'id',    
      format: 'YYYY-MM',
      minDate : fiveMonthAgo,
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
  $('#btn-ct').click(function (e) { 
    e.preventDefault();
    window.location.href = "<?=$url?>ct_weld";
  });
            ////////////////////////
  $('#btn-motor').click(function (e) { 
    e.preventDefault();
    window.location.href = "<?=$url?>ct_motor";
  });
            ////////////////////////
  $('#btnSetPoint').click(function (e) {
    e.preventDefault();
    kwh_limit = $('#setPoint').val();
    $.ajax({
      type: "POST",
      url: "<?=$url?>kwh_limit_update",
      data: {limit:kwh_limit},
      dataType: "JSON",
      beforeSend: function(response){
        $('#chart1').block()
      },
      success: function (response) {
          chart1.options.axisY.stripLines[0].value = parseFloat(kwh_limit)
          chart1.options.axisY.maximum = parseFloat(kwh_limit*1.15)
          chart1.render();
      },
      complete: function (response) {
        $('#chart1').unblock()        
      }
    });
  });
            ////////////////////////
  $('#kwhDate').on('blur', function (e) { 
    e.preventDefault()
    // alert($(this).val())
    get_data_consumption_specific_month(null,$(this).val())
    
  });
            ////////////////////////

  
  // end event capture /////////////////////////////////////////////////////////////////////////////////////////
  
  // ws ////////////////////////////////////////////////////////////////////////////////////////////////////////
  // ws_ct_kwh()
  // function ws_ct_kwh(){
  //   var ct_kwh = new WebSocket("ws://localhost:1880/ws/ct_kwh")
  //   ct_kwh.onerror = function(error) {console.log('Error detected: ' + error)}
  //   ct_kwh.onopen = function(){console.log('websocket ct_kwh connect')}
  //   ct_kwh.onclose = function(){
  //     console.log('websocket ct_kwh disconnect')
  //     ws_ct_kwh()
  //   }
  //   ct_kwh.onmessage = function(event){
  //     var payload = $.parseJSON(event.data);
  //     console.log(payload)
  //     chart1.options.data[0].dataPoints.push({x:Date.parse(value.date),y:parseFloat(value.kwh)});
  //     chart1.render();
      
  //   }
  // }
</script>
<script>
  // end onload ////////////////////////////////////////////////////////////

  // function goes here ////////////////////////////////////////////////////
  function get_data_consumption_specific_month(modul = null, date = null){
    chart1.options.data[0].dataPoints = [];
    chart1.options.data[1].dataPoints = [];

      date = new Date(date)
      month = date.getMonth() + 1
      year = date.getFullYear()      
      d = new Date(year, month, 0)
      // console.log(d)

    $.ajax({
      type: "POST",
      url: "<?=$url?>get_data_consumption_specific_month/",
      data: {modul:modul, month:month, year:year},
      dataType: "JSON",
      beforeSend: function (response) {
        $.blockUI();
      },
      success: function (response) {
        // console.log(response)
        $.each(response, function (key, value) {
          chart1.options.data[1].dataPoints.push({
            x:Date.parse(value.date),
            y:parseFloat(parseFloat(value.kwh).toFixed(2))
          });
        });
          
          chart1.options.data[0].dataPoints.push({x:Date.parse(year+'-'+month+'-01'),y:null});
          chart1.options.data[0].dataPoints.push({x:Date.parse(year+'-'+month+'-'+d.getDate()),y:null});

        chart1.render();
      },
      error: function (response) {
        // console.log(response);
        $.unblockUI();
      },
      complete: function (response) {
        // 
        $.unblockUI();
      }
    });
  }
  
  
  // chart ////////////////////////////////////////////////////////////////
  var kwh
  var range
  var chart1
    
  window.onload = function () {
    chart1 = new CanvasJS.Chart("chart1", {
      // zoomEnabled: true,
      title: {
        // text: "Temperature (\u2103)",
        text: "Cooling Tower Daily Consumption (kWh)",
        fontFamily: "arial",
      },
      axisX: {
        labelFontSize: 14,
        labelFontFamily: "arial",
        valueFormatString: "DD",
      },
      axisY:{
        includeZero: false,
        title: null,
        labelFontSize: 14,
        labelFontFamily: "arial",
        gridThickness: 0.5,
        minimum: null,
        maximum: <?=$limit*1.15?>,
        stripLines: [
          {value:<?=$limit?>,label:"Alarm",color:"red",showOnTop: true},
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
        type: "column",
        color: "#123aaa",
        xValueType: "dateTime",
        xValueFormatString: "DD-MMM-YY",
        yValueFormatString: "#####.##",
        toolTipContent: "{x}<br/><span style='\"'color: blue;'\"'>{name}</span>: {y}", 
        // showInLegend: true,
        name: "kWh",
        fillOpacity: .4,
        dataPoints: range,
        markerType: null,
      },{				
        type: "column",
        color: "#3434df",
        xValueType: "dateTime",
        xValueFormatString: "DD-MMM-YY",
        yValueFormatString: "#####.##",
        toolTipContent: "{x}<br/><span style='\"'color: blue;'\"'>{name}</span>: {y}",  
        // showInLegend: true,
        name: "kWh",
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
    get_data_consumption()
    function get_data_consumption(modul = null, date = null){
      chart1.options.data[0].dataPoints = [];
      chart1.options.data[1].dataPoints = [];
      
      $.ajax({
        type: "POST",
        url: "<?=$url?>get_data_consumption/",
        data: {modul:modul, date:date},
        dataType: "JSON",
        beforeSend: function (response) {
          // $.blockUI()
        },
        success: function (response) {
          // console.log(response)
          $.each(response, function (key, value) {
            chart1.options.data[1].dataPoints.push({x:Date.parse(value.date),y:parseFloat(parseFloat(value.kwh).toFixed(2))});
          });

          // chart1.options.axisY.stripLines[0].value = <?=$limit*101/100?>;
          date = new Date()
          month = date.getMonth() + 1
          year = date.getFullYear()
          d = new Date(year, month, 0)

            chart1.options.data[0].dataPoints.push({x:Date.parse(year+'-'+month+'-01'),y:null})
            chart1.options.data[0].dataPoints.push({x:Date.parse(year+'-'+month+'-'+d.getDate()),y:null})

          chart1.render()
          // console.log(tempChart);
        },
        error: function (response) {
          console.log(response)
          // $.unblockUI();
        },
        complete: function (response) {
          // 
          $.unblockUI()
        }
      });
    }
  }  
  // end chart ////////////////////////////////////////////////////////////
</script>










