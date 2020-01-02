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
        /* background-color: none; */
        padding-top: 70px;
        width: 81px;
        max-width: 81px;
        min-width: 81px;        
      }
      .table-param-even .valueParam{
        font-family: monospace;
        font-size: 15px;
        min-width: 60px;
        text-align:right;
        padding-right: 7px;
        line-height: 0px;
      }
      .table-param-even .unitParam{
        font-size: 15px;
        text-align:left;
      }
    </style>
    <div class="col-xs-12 col-md-12 parent-hmi">
      <div class="hmi">
        <?php foreach($images as $s){ ?>
          <img class="image-symbol <?=$s->class?>" src="<?=$hmi.$s->grup.'/'.$s->color.'/'.$s->src."?".rand(1,1000)?>" id="<?=$s->element?>" data-id="<?=$s->id?>" data-color="<?=$s->color?>"/>
        <?php } ?>
        <?php //print_r($images) ?>
        <div id="ct_auto" class="textbox image-symbol" style="text-align:left; width: 150px; background-color: none; font-size: 20px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
          <span>Mode: </span><span id="ct_mode" style="font-weight: bold">Auto</span>
        </div>
        <div id="param6" class="textbox image-symbol motor_param" data-id="6" style="width: 0px; background-color: black">
          <table class="table-param-even" id="tableParam6" style="">
            <tbody>
              <tr>
                <td id="tempM6" class="valueParam">##.##</td>
                <td class="unitParam">°C</td>
              </tr>
              <tr>
                <td id="vibeM6" class="valueParam">##.##</td>
                <td class="unitParam" style="font-size:12px">mm/s</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div id="param7" class="textbox image-symbol" style="width: 0px; background-color: black">
          
        </div>
        <div id="ctParamIn" class="textbox .image-symbol ctParam" data-modul="in" style="width: 0px; background-color: black">
          <table class="table-param-even" id="tableParamIn" style="">
            <tbody>
              <tr>
                <td id="tempCtIn" class="valueParam">##.##</td>
                <td class="unitParam">°C</td>
              </tr>
              <tr>
                <td id="pressCtIn" class="valueParam">##.##</td>
                <td class="unitParam">bar</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div id="ctParamOut" class="textbox .image-symbol ctParam" data-modul="out" style="width: 0px; background-color: black">
          <table class="table-param-even" id="tableParamOut" style="">
            <tbody>
              <tr>
                <td id="tempCtOut" class="valueParam">##.##</td>
                <td class="unitParam">°C</td>
              </tr>
              <tr>
                <td id="pressCtOut" class="valueParam">##.##</td>
                <td class="unitParam">bar</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modal-motor-param" style="z-index: 10000000 !important;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="padding: 5px;">
        <h3 class="modal-title" style="padding-left: 15px;">
          <i class="fa fa-gear" aria-hidden="true" style="color:#00a2ca"></i>
          Pompa #<span id="modal-motor-title"></span>
        </h3>
      </div>
      <div class="modal-body">
        <form class="form-inline">
          <div class="form-group">
            <label for="">Temperature Set point:</label>
            <input type="number" name="temp_limit" id="temp_limit" class="form-control" placeholder="" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <label for="">Vibration Set point:</label>
            <input type="number" name="vibe_limit" id="vibe_limit" class="form-control" placeholder="" aria-describedby="helpId">
          </div>
        </form>
        
      </div>
      <div class="modal-footer" style="padding: 5px; text-align: center">
        <button type="button" class="btn btn-primary" id="save_motor_param" data-id="">Save</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal-ct-param" style="z-index: 10000000 !important;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="padding: 5px;">
        <h3 class="modal-title" style="padding-left: 15px;">
          <i class="fa fa-gear" aria-hidden="true" style="color:#00a2ca"></i>
          Cooling Tower <span id="modal-ct-title"></span>
        </h3>
      </div>
      <div class="modal-body">
        <form class="form-inline">
          <div class="form-group">
            <label for="">Temperature Set point:</label>
            <input type="number" name="temp" id="_temp" class="form-control" placeholder="" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <label for="">Pressure top Set point:</label>
            <input type="number" name="press" id="_press" class="form-control" placeholder="" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <label for="">Pressure bottom Set point:</label>
            <input type="number" name="press_low" id="_press_low" class="form-control" placeholder="" aria-describedby="helpId">
          </div>
        </form>
        
      </div>
      <div class="modal-footer" style="padding: 5px; text-align: center">
        <button type="button" class="btn btn-primary" id="save_ct_param">Save</button>
      </div>
    </div>
  </div>
</div>


<script>
  // initial page load ///////////////////////////////////////////////////////////////////
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
        $('.hmi').css('transform-origin', '1 1')
        $('.hmi').parent().width(1000)
        $('.hmi').parent().height(560)
      }
    })
  })
  // end initial page load ////////////////////////////////////////////////////////////////
</script>
<script>
  // event capture ///////////////////////////////////////////////////////////////////
  $('#next_to_graph').click(function (e) { 
    e.preventDefault()
    window.location.href = "<?=$url?>consumption"
  })
  $('.motor_param').click(function (e) { 
    e.preventDefault()
    id = $(this).data('id')               
    $.ajax({
      type: "POST",
      url: "<?=$url?>get_motor_limit_by_id",
      data: {id:id},
      dataType: "JSON",
      beforeSend: function(){
        $.blockUI()
      },
      success: function (response) {
        // console.log(response)
        $('#temp_limit').val(response.temp_limit)
        $('#vibe_limit').val(response.vibe_limit)
        $('#save_motor_param').data('id', id)
        // console.log($('#save_motor_param').data('id'))
        $('#modal-motor-title').html(id)
        //
        // $('#modal-motor-param').modal('show')
      },
      complete: function (response) {
        // console.log(response)
        $('#modal-motor-param').modal('show')
        $.unblockUI()
      }
    })
  })
  $('#save_motor_param').click(function (e) {
    e.preventDefault()
    id = $('#save_motor_param').data('id').toString()
    console.log($('#save_motor_param').data('id'))
    temp_limit = $('#temp_limit').val()
    vibe_limit = $('#vibe_limit').val()
    $.ajax({
      type: "POST",
      url: "<?=$url?>save_motor_limit_by_id",
      data: {id:id,temp_limit:temp_limit,vibe_limit:vibe_limit},
      dataType: "JSON",
      beforeSend: function(){
        $('#modal-motor-param').block()
      },
      success: function (response) {
        // console.log(response)
        // $('#temp_limit').val(response.temp_limit)
        // $('#vibe_limit').val(response.vibe_limit)
        //
        $('#modal-motor-param').modal('hide')
      },
      complete: function (response) {
        // console.log(response)
        $('#modal-motor-param').unblock()
      }
    })
  })
  $('.ctParam').click(function (e) { 
    e.preventDefault()
    modul = $(this).data('modul')
    $.ajax({
      type: "POST",
      url: "<?=$url?>get_ct_weld_limit",
      data: {modul:modul},
      dataType: "JSON",
      beforeSend: function(){
        $.blockUI()
      },
      success: function (response) {
        // console.log(response)
        $('#_temp').val(response['ct_'+modul+'_temp'])
        $('#_press').val(response['ct_'+modul+'_press'])
        $('#_press_low').val(response['ct_'+modul+'_press_low'])
        $('#save_ct_param').data('modul',modul)
        $('#modal-ct-title').html(modul.toUpperCase())
        //
        $('#modal-ct-param').modal('show')
      },
      complete: function (response) {
        // console.log(response)
        $.unblockUI()
      }
    })
  })
  $('#save_ct_param').click(function (e) {
    e.preventDefault()
    modul = $(this).data('modul').toString()
    temp_limit = $('#_temp').val()
    press_limit = $('#_press').val()
    press_low_limit = $('#_press_low').val()
    $.ajax({
      type: "POST",
      url: "<?=$url?>save_ct_param_by_3name",
      data: {modul:modul,temp_limit:temp_limit,press_limit:press_limit,press_low_limit:press_low_limit},
      dataType: "JSON",
      beforeSend: function(){
        $('#modal-ct-param').block()
      },
      success: function (response) {
        // console.log(response)
        // $('#temp_limit').val(response.temp_limit)
        // $('#vibe_limit').val(response.vibe_limit)
        $('#modal-ct-param').modal('hide')
      },
      complete: function (response) {
        // console.log(response)
        $('#modal-ct-param').unblock()
      }
    })
  })
  // end event capture ////////////////////////////////////////////////////////////////
  
  // ws ///////////////////////////////////////////////////////////////////////////////
  ws_ct_auto()
  function ws_ct_auto(){
    var ct_auto = new WebSocket("ws://"+location.hostname+":1880/ws/ct_auto")
    ct_auto.onerror = function(error) {console.log('Error detected: ' + error)}
    ct_auto.onopen = function(){console.log('websocket ct_auto connect')}
    ct_auto.onclose = function(){
      console.log('websocket ct_auto disconnect')
      ws_ct_auto()
    }
    ct_auto.onmessage = function(event){
      var payload = $.parseJSON(event.data);
      // console.log(payload)
      if(payload.auto == true){
        // console.log('a')
        $('#ct_mode').html('Auto')
      } else {
        // console.log(auto)
        $('#ct_mode').html('Manual')
      }
    }
  }
              /////////////////////////////////////////////////////////
  ws_motor_status()
  function ws_motor_status(){
    var motor_status = new WebSocket("ws://"+location.hostname+":1880/ws/motor_status")
    motor_status.onerror = function(error) {console.log('Error detected: ' + error)}
    motor_status.onopen = function(){console.log('websocket motor_status connect')}
    motor_status.onclose = function(){
      console.log('websocket motor_status disconnect')
      ws_motor_status()
    }
    motor_status.onmessage = function(event){
      var payload = $.parseJSON(event.data);
      // console.log(payload)
      for (let i = 1; i <= 10; i++) {
        if(payload['CTWeldP'+i+'Alm']){
          $('#m'+i).attr('src', '<?=$url?>assets/images/hmi/coolingtower/indicatorred.png')
          $('#m_'+i+'_1').hide();$('#m_'+i+'_2').hide();
        } else if(payload['CTWeldP'+i+'Run']){
          $('#m'+i).attr('src', '<?=$url?>assets/images/hmi/coolingtower/indicatororange.png')
          $('#m_'+i+'_1').show();$('#m_'+i+'_2').show();
        } else {
          $('#m'+i).attr('src', '<?=$url?>assets/images/hmi/coolingtower/indicatorgreen.png')
          $('#m_'+i+'_1').hide();$('#m_'+i+'_2').hide();
        }
      }
      for (let i = 1; i <= 10; i++) {
        if(payload['CTWeldP'+i+'Run']){
          $('.ct_in').show();$('.ct_out').show();      
          break;
        } else if (i == 10){
          $('.ct_in').hide(); $('.ct_out').hide();       
        }
      }
    }
  }
              /////////////////////////////////////////////////////////
  ws_motor_sensor()
  function ws_motor_sensor(){
    var motor_sensor = new WebSocket("ws://"+location.hostname+":1880/ws/motor_sensor")
    motor_sensor.onerror = function(error) {console.log('Error detected: ' + error)}
    motor_sensor.onopen = function(){console.log('websocket motor_sensor connect')}
    motor_sensor.onclose = function(){
      console.log('websocket motor_sensor disconnect')
      ws_motor_sensor()
    }
    motor_sensor.onmessage = function(event){
      var payload = $.parseJSON(event.data);
      // console.log(payload)
      for (let i = 1; i <= 10; i++) {
        $('#vibeM'+i).html(parseFloat(payload['CTWeldP'+i+'Vibe']).toFixed(2))
        $('#tempM'+i).html(parseFloat(payload['CTWeldP'+i+'Temp']).toFixed(2))
        // $('#tableParam'+i).css('background', 'linear-gradient(90deg, rgba(52,121,159,0.3981967787114846) 0%, rgba(51,182,255,0.6306897759103641) 44%, rgba(29,121,172,0.3533788515406162) 100%)')
        // $('#tableParam'+i).css('border', '1px solid rgb(52,121,159)')
        // $(selector).css(propertyName, value);
      }
    }
  }
              /////////////////////////////////////////////////////////
  ws_motor_alarm()
  function ws_motor_alarm(){
    var motor_alarm = new WebSocket("ws://"+location.hostname+":1880/ws/motor_alarm")
    motor_alarm.onerror = function(error) {console.log('Error detected: ' + error)}
    motor_alarm.onopen = function(){console.log('websocket motor_alarm connect')}
    motor_alarm.onclose = function(){
      console.log('websocket motor_alarm disconnect')
      ws_motor_alarm()
    }
    motor_alarm.onmessage = function(event){
      var payload = $.parseJSON(event.data)
      $(payload.alarm).each(function( i, val ) {
        id = Object.keys(val)
        if(val[id]){
          $('#tableParam'+id).css('background', 'linear-gradient(90deg, rgba(255,84,84,0.8547794117647058) 0%, rgba(221,0,0,1) 44%, rgba(252,66,66,0.742734593837535) 100%)')
          // $('#tableParam'+id).css('background', 'background: rgb(255,84,84);')
          $('#tableParam'+id).css('border', '1px solid #000')
        } else {
          $('#tableParam'+id).css('background', 'linear-gradient(90deg, rgba(52,121,159,0.3981967787114846) 0%, rgba(51,182,255,0.6306897759103641) 44%, rgba(29,121,172,0.3533788515406162) 100%)')
          $('#tableParam'+id).css('border', '1px solid rgb(52,121,159)')
        }
      });      
    }
  }
              /////////////////////////////////////////////////////////
  ws_ct_sensor()
  function ws_ct_sensor(){
    var ct_sensor = new WebSocket("ws://"+location.hostname+":1880/ws/ct_sensor")
    ct_sensor.onerror = function(error) {console.log('Error detected: ' + error)}
    ct_sensor.onopen = function(){console.log('websocket ct_sensor connect')}
    ct_sensor.onclose = function(){
      console.log('websocket ct_sensor disconnect')
      ws_ct_sensor()
    }
    ct_sensor.onmessage = function(event){
      var payload = $.parseJSON(event.data);
      // console.log(payload)
      $('#tempCtIn').html(parseFloat(payload['CTInTemp']).toFixed(2))
      $('#pressCtIn').html(parseFloat(payload['CTInPress']).toFixed(2))
      $('#tempCtOut').html(parseFloat(payload['CTOutTemp']).toFixed(2))
      $('#pressCtOut').html(parseFloat(payload['CTOutPress']).toFixed(2))
      
      $('#tableParamIn').css('background', 'linear-gradient(90deg, rgba(52,121,159,0.3981967787114846) 0%, rgba(51,182,255,0.6306897759103641) 44%, rgba(29,121,172,0.3533788515406162) 100%)')
      $('#tableParamIn').css('border', '1px solid rgb(52,121,159)')
      
      $('#tableParamOut').css('background', 'linear-gradient(90deg, rgba(52,121,159,0.3981967787114846) 0%, rgba(51,182,255,0.6306897759103641) 44%, rgba(29,121,172,0.3533788515406162) 100%)')
      $('#tableParamOut').css('border', '1px solid rgb(52,121,159)')
    }
  }
              /////////////////////////////////////////////////////////
  ws_ct_sensor_alarm()
  function ws_ct_sensor_alarm(){
    var ct_sensor_alarm = new WebSocket("ws://"+location.hostname+":1880/ws/ct_sensor_alarm")
    ct_sensor_alarm.onerror = function(error) {console.log('Error detected: ' + error)}
    ct_sensor_alarm.onopen = function(){console.log('websocket ct_sensor_alarm connect')}
    ct_sensor_alarm.onclose = function(){
      console.log('websocket ct_sensor_alarm disconnect')
      ws_ct_sensor_alarm()
    }
    ct_sensor_alarm.onmessage = function(event){
      var payload = $.parseJSON(event.data)
      // console.log(payload)
      if(payload.in){
        $('#tableParamIn').css('background', 'linear-gradient(90deg, rgba(255,84,84,0.8547794117647058) 0%, rgba(221,0,0,1) 44%, rgba(252,66,66,0.742734593837535) 100%)')
        // $('#tableParam'+id).css('background', 'background: rgb(255,84,84);')
        $('#tableParamIn').css('border', '1px solid #000')
      } else {
        $('#tableParamIn').css('background', 'linear-gradient(90deg, rgba(52,121,159,0.3981967787114846) 0%, rgba(51,182,255,0.6306897759103641) 44%, rgba(29,121,172,0.3533788515406162) 100%)')
        $('#tableParamIn').css('border', '1px solid rgb(52,121,159)')
      }
      if(payload.out){
        $('#tableParamOut').css('background', 'linear-gradient(90deg, rgba(255,84,84,0.8547794117647058) 0%, rgba(221,0,0,1) 44%, rgba(252,66,66,0.742734593837535) 100%)')
        // $('#tableParam'+id).css('background', 'background: rgb(255,84,84);')
        $('#tableParamOut').css('border', '1px solid #000')
      } else {
        $('#tableParamOut').css('background', 'linear-gradient(90deg, rgba(52,121,159,0.3981967787114846) 0%, rgba(51,182,255,0.6306897759103641) 44%, rgba(29,121,172,0.3533788515406162) 100%)')
        $('#tableParamOut').css('border', '1px solid rgb(52,121,159)')
      }
    }
  }
  // end ws /////////////////////////////////////////////////////////////////////////////
  
  // function ///////////////////////////////////////////////////////////////////////////
  function param_status(elem, status){

  }
  // toggle5aScada()
  // function toggle5aScada(){
  //   setTimeout(() => {
  //     if(indicatorScada5a){
  //       $("#line_5a").attr("src", "<?=$url?>assets/images/hmi/symptom//5a_red.png?<?=rand(1,1000)?>")
  //       setTimeout(() => {
  //         $("#line_5a").attr("src", "<?=$url?>assets/images/hmi/symptom//5a.png?<?=rand(1,1000)?>")
  //       }, 500);
  //     }
  //     setTimeout(() => {
  //       toggle5aScada()
  //     }, 500);
  //   }, 500);
  // }
  
  // end function ////////////////////////////////////////////////////////////////////////
</script>
<script>
  var editMode = false;
  if(editMode){
    $('.image-symbol').draggable();
    $('.textbox').draggable();
    $('.circleEdit').toggle();
    $('.content-wrapper').css("margin-left", "200px");
    $('.content-wrapper').css("margin-right", "200px");
    $('.side-left').show();
    $('.side-right').show();
  }
  $(document).keydown(function(e) {
      if(e.ctrlKey && e.keyCode == 120){
        e.preventDefault();
        if(editMode){
          editMode = false;
          $('.circleEdit').toggle();
          $('.content-wrapper').css("margin-left", "0px");
          $('.content-wrapper').css("margin-right", "0px");
          $('.side-left').hide('fast');
          $('.side-right').hide('fast');
          $('.image-symbol').removeClass('focused');
          removeFocus();
          // alert(editMode);
        } else {
          editMode = true;
          $('.circleEdit').toggle();
          $('.content-wrapper').css("margin-left", "200px");
          $('.content-wrapper').css("margin-right", "200px");
          $('.side-left').show(400);
          $('.side-right').show(400);
        }
        $('.image-symbol').draggable({disabled:!editMode});
        $('.textbox').draggable({disabled:!editMode});
      } else if(e.keyCode == 27){
        e.preventDefault();
        if(editMode){
          $('.image-symbol').removeClass('focused');
          removeFocus();
        }
      } else if (e.keyCode == 37 || e.keyCode == 38 || e.keyCode == 39 || e.keyCode == 40){
        e.preventDefault();
        if(editMode){
          find = $('.hmi').find('.focused');
          if(find.length){
            var rect = find[0].getBoundingClientRect();
            var recta = $('.hmi')[0].getBoundingClientRect();
            var x = Math.floor(rect.left - (recta.left+1));
            var y = Math.floor(rect.top - (recta.top+1));
            switch (e.keyCode) {
              case 37:
                x = x-1;
                find.css({ left: x, top: y});
                break;
              case 38:
                y = y-1;
                find.css({ left: x, top: y});
                break;
              case 39:
                x = x+1;
                find.css({ left: x, top: y});
                break;
              case 40:
                y = y+1;
                find.css({ left: x, top: y});
                break;
            }
            $.ajax({
              type: "POST",
              url: "<?=$url?>hmi_update_postition",
              data: {id:find.data('id'), x:x, y:y},
              dataType: "JSON",
              success: function (response) {
                // console.log(response);
              }
            });
          }
        }
      } else if(e.keyCode == 46) {
        e.preventDefault();
        if(editMode){
          find = $('.hmi').find('.focused');
          if(find.length){
            $.ajax({
              type: "POST",
              url: "<?=$url?>hmi_delete",
              data: {id:find.data('id')},
              dataType: "JSON",
              success: function (response) {
                // console.log(response);
                find.remove();
                removeFocus();
              }
            });
          }
        }
      } else if(e.keyCode == 33 || e.keyCode == 34) {
        e.preventDefault();
        if(editMode){
          find = $('.hmi').find('.focused');
          if(find.length){
            e.preventDefault();
            var z = parseInt(find.css('z-index'));
            var element = find.attr('id');
            switch (e.keyCode) {
              case 33:
                z = z+1;
                break;
              case 34:
                z = z-1;
                break;
            }
            $.ajax({
              type: "POST",
              url: "<?=$url?>update_hmi_z_index",
              data: {element:element, z:z},
              dataType: "JSON",
              success: function (response) {
                // console.log(response);
                find.css('z-index', z);
                $('#item-z').val(z);
              }
            });
          }
        }
      }
      // console.log(e.keyCode);
  });
  // alert(editMode);
  $('.hmi').on('mousedown', '.image-symbol', function (e) {    
    if(editMode){
      $('.image-symbol').removeClass('focused');
      $(this).addClass('focused');
      setFocus($(this));
    }
  });
  $('.hmi').on('mouseup', '.image-symbol', function (e) { 
    if(editMode){
      e.preventDefault();
      var rect = e.target.getBoundingClientRect();
      var recta = $('.hmi')[0].getBoundingClientRect();
      var x = Math.floor(rect.left - (recta.left+1));
      var y = Math.floor(rect.top - (recta.top+1));
      // console.log(Math.floor(rect.left - (recta.left+1)), Math.floor(rect.top - (recta.top+1)));
      $.ajax({
        type: "POST",
        url: "<?=$url?>hmi_update_postition",
        data: {id:$(this).data('id'), x:x, y:y},
        dataType: "JSON",
        success: function (response) {
          console.log(response);
        }
      });
    }
  });
  $('.hmi').on('mouseup', '.textbox', function (e) { 
    if(editMode){
      e.preventDefault();
      var rect = e.target.getBoundingClientRect();
      var recta = $('.hmi')[0].getBoundingClientRect();
      var x = Math.floor(rect.left - (recta.left+1));
      var y = Math.floor(rect.top - (recta.top+1));
          console.log($(this).attr('id'));
      // console.log(Math.floor(rect.left - (recta.left+1)), Math.floor(rect.top - (recta.top+1)));
      $.ajax({
        type: "POST",
        url: "<?=$url?>textbox_update_postition",
        data: {element:$(this).attr('id'), x:x, y:y},
        dataType: "JSON",
        success: function (response) {
          console.log(response);
        }
      });
    }
  });

  function setFocus(elem){
    $('#item-name').val(elem.attr('id'));
    $('#item-z').val(elem.css('z-index'));
  }
  function removeFocus(){
    $('#item-name').val('');
    $('#item-z').val('');
  }

  $('#form-item').submit(function (e) { 
    e.preventDefault();
    var element = $('#item-name').val();
    var z = $('#item-z').val();
    $.ajax({
      type: "POST",
      url: $(this).attr('action'),
      data: {element:element, z:z},
      dataType: "JSON",
      success: function (response) {
        // console.log(response);
        $('#'+element).css('z-index', z);
      }
    });
  });

  $('.symbol').draggable({
    disabled:false,
    revert: true
  });
  $('.hmi').droppable({
    accept: '.symbol',
    drop: function(event, ui) {
      event.revert = true;
      src = ui.draggable.data("src");
      grup = ui.draggable.data("grup");
      color = ui.draggable.data("color");
      // console.log('success');
      console.log(src, grup, color);
      $.ajax({
        type: "POST",
        url: "<?=$url?>insert_image_symbol",
        data: {src:src, color:color, grup:grup},
        dataType: "JSON",
        success: function (response) {
          s = response;
          src = '<?=$hmi?>'+s.grup+'/'+s.color+'/'+s.src;
          id= s.element;
          // content = '<img class="image-symbol" src="'+src+'" id="'+s.element+'" data-id="'+s.id+'"/>';
          content = $('<img>',{id:s.element, src:src});
          content.css('z-index', 1);
          content.data('id', s.id);
          content.addClass('image-symbol');
          console.log(response);
          $('.hmi').prepend(content);
          $('.image-symbol').draggable();
          // $('.image-symbol').mousedown(function (e) {
          //   $('.image-symbol').removeClass('focused');
          //   $(this).addClass('focused');
          // });
        }
      });
    }
  });  
</script>










