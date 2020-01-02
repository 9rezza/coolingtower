
<style>
  .menu-center{
      margin-bottom: 5px;
  }
  .dropdown {
    position: relative;
  }
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #e2efff;
    min-width: 170px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    left: -120px;
    font-size: 16px;
    padding: 10px;
    border-radius: 15px;
  }
  .menu-dropdown {
    display: block;
    overflow: hidden;
  }
  .menu-dropdown button.disabled, button.disabled :hover {
    opacity: 0.1;
  }
  .menu-dropdown .checkbox .toggle-off {
    background: #e6e6e6 !important;
  }
  .menu-dropdown .checkbox .toggle-on {
    padding-left: 0 !important;
  }
  .menu-dropdown .checkbox .toggle-handle {
    background: #f4f4f4 !important;
    height: 20px;
  }
  .menu-dropdown .checkbox {
    margin: 0 0 0 0 !important;
    /* height: 20px; */
  }
  /* .menu-dropdown .checkbox .toggle, .toggle-on, .toggle-off, .toggle-group{
    padding: 0 0 0 0 !important;
    height: 20px;
  } */
</style>
<div class="content-wrapper bg-white">
  <!-- Content Header (Page header) -->
  <section class="content-header hidden">
    <h1>
      Judul
      <small>Deskripsi singkat</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Parent</a></li>
      <li class="active">Childern</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-xs-12">
        <div class="box box-solid box-grey">
          <div class="box-header">
            <div class="col-xs-4">
              <i class="fa fa-calendar-o"></i>
              <h3 class="box-title">DEMO</h3>
              <i class="fa fa-circle text-success circleEdit" style="display:none">(Edit mode)</i>
            </div>
            <div class="col-xs-4 text-center">
              <a class="btn btn-default btn-sm menu-center" href="<?=$url?>">Electrical</a>
              <a class="btn btn-default btn-sm menu-center" href="<?=$url?>waterpump">Water flow</a>
              <a class="btn btn-default btn-sm menu-center" href="<?=$url?>chart">Graph</a>
              <a class="btn btn-default btn-sm menu-center" href="<?=$url?>production">Production Monitoring 1</a>
              <a class="btn btn-default btn-sm menu-center" href="<?=$url?>monitoring">Production Monitoring 2</a>
            </div>
            <div class="col-xs-4">
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row parent-hmi">
              <style>
                .parent-hmi{
                  margin: 0;
                  padding: 0;
                  text-align: center;
                }
                .hmi{
                  position: relative;
                  display: inline-block;
                  /* background-image: url("../assets/images/hmi/waterpump.png?123"); */
                  background-repeat: no-repeat;
                  background-color: #dddddd;
                  width: 898px;
                  min-height: 684px;
                  height: 684px;
                  border: 1px solid grey;
                }
                .textbox{
                  position: absolute;
                  z-index: 99999;
                  min-width: 50px;
                  max-width: 350px;
                  /* width: 50px; */
                  min-height: 50px;
                  max-height: 350px;
                  /* height: 50px; */
                  outline: 1px solid #c0c0c0;
                  text-align: center;
                  vertical-align: middle;
                  font-size: 24px;
                  /* line-height: 0px; */
                  letter-spacing: -1px;
                }
                .textbox p,sup{
                  display: inline-block;
                }
                .image-symbol{
                  position: absolute;
                  z-index: 1;
                }
                .focused{
                  outline: 1px dashed #030afa;
                  opacity: 0.5;
                  /* z-index: 99999 !important; */
                }
                <?=join('',$position)?>
              </style>
              <div class="col-xs-12 col-md-12 parent-hmi" style="overflow-x: scroll;">
                <div class="hmi">
                  <?php foreach($images as $s){ ?>
                    <img class="image-symbol" src="<?=$hmi.$s->grup.'/'.$s->color.'/'.$s->src."?".rand(1,1000)?>" id="<?=$s->element?>" data-id="<?=$s->id?>" data-color="<?=$s->color?>"/>
                  <?php } ?>
                  <div class="textbox" id="box_0">
                    <p class="nilai">0.5</p>
                    <p class="satuan">m</p>
                    <sup class="sup">3</sup>
                  </div>
                  <div class="textbox" id="box_1">
                    <p class="nilai">0</p>
                    <p class="satuan">m</p>
                    <sup class="sup">3</sup>
                  </div>
                  <div class="textbox" id="box_2">
                    <p class="nilai">0</p>
                    <p class="satuan">m</p>
                    <sup class="sup">3</sup>
                  </div>
                </div>
              </div>

            </div>
            <!-- /.row -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>      
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <style>
  .side-left{
    position: absolute;
    width: 180px;
    top: 0px;
    left: 0px;
    z-index: 2;
    color: #FFF;
    margin: 10px 10px 10px 10px;
  }
  .side-left a, a:hover{
    text-decoration: none;
    color: #FFF;
  }
  .treeview-menu li{
    padding: 5px 5px 5px 5px;
    white-space: normal !important;
  }
  .symbol{
    max-width: 50px;
  }
  .side-right{
    position: absolute;
    width: 180px;
    top: 0px;
    right: 0px;
    z-index: 2;
    color: #FFF;
    margin: 10px 10px 10px 10px;
  }
  .side-right input, input:focus{
    color: #000;
    background-color: #FFF;
  }
  .table td, th{
    font-size: 12px;
  }
  </style>
  <section class="side-left collapse-in" style="display: none">
  <ul class="sidebar-menu tree" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>

              <?php $oldgrup = ""; ?>
              <?php foreach($symbol as $key=>$sym){ ?>
              <?php //$sym?>
                <?php if($sym->grup != $oldgrup){?>
                  <li class="treeview">
                    <a href="#">
                      <span><?=$sym->grup?></span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li>
                        <img data-src="<?=$sym->path?>" data-grup="<?=$sym->grup?>" data-color="grey" src="<?=$hmi.$sym->grup.'/grey/'.$sym->path?>" class="symbol"/>
                <?php } else { ?>
                        <img data-src="<?=$sym->path?>" data-grup="<?=$sym->grup?>" data-color="grey" src="<?=$hmi.$sym->grup.'/grey/'.$sym->path?>" class="symbol"/>
                <?php } ?>
                
                <?php if(isset($symbol[$key+1]->grup) && $sym->grup != $symbol[$key+1]->grup){?>
                      </li>
                    </ul>
                  </li>
                <?php } ?>
                <?php $oldgrup = $sym->grup; ?>
              <?php } ?>
  </ul>
  </section>
  <section class="side-right collapse-in" style="display: none">
    <div class="">
      <h2>Item</h2>
      <form id="form-item" action="<?=$url?>update_hmi_z_index" method="post">
        <div class="form-group">
          <label for="">Item Name</label>
          <input type="text" class="form-control" id="item-name" value="" placeholder="No image selected" readonly disabled required>
        </div>
        <div class="form-group">
          <label for="">z-index</label>
          <input type="text" class="form-control" id="item-z" required>
        </div>        
        <span class="input-group-btn text-center">
          <button type="submit" class="btn btn-default">Change</button>
        </span>
        
      </form>
    </div>
    <div class="">
      <h3>Hot keys</h3>
      <table class="table">
        <thead>
          <tr>
            <th>Keys</th>
            <th>Function</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td scope="row">CTRL+F9</td>
            <td>Toggle Edit Mode</td>
          </tr>
          <tr>
            <td scope="row">Esc</td>
            <td>unfocused Image</td>
          </tr>
          <tr>
            <td scope="row">Del</td>
            <td>Delete focused Image</td>
          </tr>
          <tr>
            <td scope="row">PageUp</td>
            <td>increase z-index focused image</td>
          </tr>
          <tr>
            <td scope="row">PageDown</td>
            <td>decrease z-index focused image</td>
          </tr>
          <tr>
            <td scope="row">← ↑ → ↓</td>
            <td>move focused image</td>
          </tr>
        </tbody>
      </table>
                  
    </div>
  </section>
  <!-- /.content -->
</div>

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
      console.log(e.keyCode);
  });
  // alert(editMode);
  $('.hmi')
  .on('mousedown', '.image-symbol', function (e) {    
    if(editMode){
      $('.image-symbol').removeClass('focused');
      $(this).addClass('focused');
      setFocus($(this));
    }
  });
  $('.hmi')
  .on('mouseup', '.image-symbol', function (e) { 
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


  $('.hmi')
  .on('mouseup', '.textbox', function (e) { 
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

  // $('.hmi').on('mouseup', '.image-symbol', function (e) {
  //   alert('aha');
  // });

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


  $('#Motor_0, #Rotating_Valve_0, #Rotating_Valve_1').click(function (e) { 
    e.preventDefault();
    if(!editMode){
      src = $(this).attr('src');
      color = $(this).data('color');
      if(color == 'green'){
        $(this).prop('src', src.replace('green', 'red'));
        $(this).data('color', 'red');
      } else if(color == 'red'){
        $(this).prop('src', src.replace('red', 'green'));
        $(this).data('color', 'green');
      }
      if($('#Rotating_Valve_0').data('color') == 'green' || $('#Rotating_Valve_1').data('color') == 'green'){
        $('#Motor_1').prop('src', $('#Motor_1').attr('src').replace('yellow', 'blue'));
      } else {
        $('#Motor_1').prop('src', $('#Motor_1').attr('src').replace('blue', 'yellow'));
      }
    }
  });

  // $('#box_0 .nilai').html(50);
  setInterval(() => {
    waterflow();    
  }, 1000);
  function waterflow(){
    motor  = $('#Motor_0').data('color');
    keran1 = $('#Rotating_Valve_0').data('color');
    keran2 = $('#Rotating_Valve_1').data('color');
    var _tankiBesar = $('#box_0 .nilai');
    var _tankiKecil1 = $('#box_1 .nilai');
    var _tankiKecil2 = $('#box_2 .nilai');
    if(motor == "green"){
      tankiBesar = _tankiBesar.html(parseFloat(_tankiBesar.html())+0.5);
      $('#Arrow_0, #Arrow_1, #Arrow_2, #Arrow_3').show();
    } else {
      tankiBesar = _tankiBesar.html(parseFloat(_tankiBesar.html()));
      $('#Arrow_0, #Arrow_1, #Arrow_2, #Arrow_3').hide();
    }
    if(tankiBesar.html() >= 0.6){
      $('#Arrow_4, #Arrow_5, #Arrow_6, #Arrow_7').show();
      if(keran1 == "green"){
        tankiKecil1 = _tankiKecil1.html((parseFloat(_tankiKecil1.html())+0.3).toFixed(2));
        _tankiBesar.html((parseFloat(_tankiBesar.html())-0.3).toFixed(2));
        $('#Arrow_9').show();
      }
      if(keran2 == "green"){
        tankiKecil2 = _tankiKecil2.html((parseFloat(_tankiKecil2.html())+0.3).toFixed(2));
        _tankiBesar.html((parseFloat(_tankiBesar.html())-0.3).toFixed(2));
        $('#Arrow_8').show();
      }
      if(!(keran1 == "green" || keran2 == "green")){
        $('#Arrow_8, #Arrow_9').hide();
        $('#Arrow_4, #Arrow_5, #Arrow_6, #Arrow_7').hide();
      } else if(!(keran1 == "green")){
        $('#Arrow_9').hide();
      } else if(!(keran2 == "green")){
        $('#Arrow_8').hide();
      }
    } else {
      lowflow = (tankiBesar.html())/2;
      $('#Arrow_4, #Arrow_5, #Arrow_6, #Arrow_7').show();
      // console.log(lowflow);
      if(keran1 == "green" && keran2 == "green"){
        tankiKecil1 = _tankiKecil1.html((parseFloat(_tankiKecil1.html())+lowflow).toFixed(2));
        tankiKecil2 = _tankiKecil2.html((parseFloat(_tankiKecil2.html())+lowflow).toFixed(2));
        _tankiBesar.html(0);
        $('#Arrow_8, #Arrow_9').show();
      } else if (keran1 == "green"){
        $('#Arrow_8').hide();
        $('#Arrow_9').show();
        if(tankiBesar.html() >= 0.3){
          tankiKecil1 = _tankiKecil1.html((parseFloat(_tankiKecil1.html())+0.3).toFixed(2));
          _tankiBesar.html((parseFloat(_tankiBesar.html())-0.3).toFixed(2));
        } else {
          tankiKecil1 = _tankiKecil1.html((parseFloat(_tankiKecil1.html())+lowflow*2).toFixed(2));
          _tankiBesar.html(0);
        }
      } else if (keran2 == "green"){
        $('#Arrow_8').show();
        $('#Arrow_9').hide();
        if(tankiBesar.html() >= 0.3){
          tankiKecil2 = _tankiKecil2.html((parseFloat(_tankiKecil2.html())+0.3).toFixed(2));
          _tankiBesar.html((parseFloat(_tankiBesar.html())-0.3).toFixed(2));
        } else {
          tankiKecil2 = _tankiKecil2.html((parseFloat(_tankiKecil2.html())+lowflow*2).toFixed(2));
          _tankiBesar.html(0);
        }
      } else {
        $('#Arrow_4, #Arrow_5, #Arrow_6, #Arrow_7, #Arrow_8, #Arrow_9').hide();
      }
    }
    // $('#box_0 .nilai').html(tankiBesar+100);
    // console.log(tankiBesar.html());
  }
  
</script>