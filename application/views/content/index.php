
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
      <div class="col-xs-12 scrollable">
        <div class="box box-solid box-grey">
          <div class="box-header">
            
          <div class="col-xs-4">
              <i class="fa fa-calendar-o"></i>
              <h3 class="box-title">DEMO</h3>
              <i class="fa fa-circle text-success circleEdit" style="display:none">(Edit mode)</i>
            </div>
            <div class="col-xs-4 text-center">
              <a class="btn btn-info btn-sm menu-center" href="<?=$url?>">Electrical</a>
              <a class="btn btn-info btn-sm menu-center" href="<?=$url?>waterpump">Water flow</a>
              <a class="btn btn-info btn-sm menu-center" href="<?=$url?>chart">Graph</a>
              <a class="btn btn-info btn-sm menu-center" href="<?=$url?>production">Production Monitoring 1</a>
              <a class="btn btn-info btn-sm menu-center" href="<?=$url?>monitoring">Production Monitoring 2</a>
            </div>
            <div class="col-xs-4">
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" id="btn-dropdown" ><i class="fa fa-bars"></i>
                  Menu
                </button>
                <div id="myDropdown" class="dropdown-content">
                  <div class="menu-dropdown">
                    <div class="pull-left">
                      <b>Random</b>
                    </div>
                    <div class="pull-right">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" id="toggle-random" data-toggle="toggle" data-size="mini" checked>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="menu-dropdown">
                    <div class="pull-left">
                      <b>Toggle View</b>
                    </div>
                    <div class="pull-right">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" id="toggle-view" data-toggle="toggle" data-size="mini">
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="menu-dropdown">
                    <div class="pull-left">
                      <b>View Mode</b>
                    </div>
                    <div class="pull-right">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" id="view-mode" data-toggle="toggle" data-size="mini">
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
            </div>
            <script>
              $("#btn-dropdown").click(function (){
                $('#myDropdown').toggle();
              });
            </script>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <style>
                /* .min-1080{
                  min-width: 1080px;
                  background-image: url("assets/images/blue-background-2.jpg");
                } */
              </style>
              <div class="col-xs-12 col-md-12 min-1080">

                <style>
                  @font-face {
                    font-family: "Digital-7";
                    src:url("vendor/digital-7/digital-7-webfont.woff") format("woff");
                  }
                  .bg-white{
                    /* background-color: #e8fdff; */
                  }
                  /* .main-header{
                    background-color: #e8fdff;
                    color: white;
                  } */
                  .scrollable{
                    overflow: scroll;
                  }
                  .box-grey{
                    /* background-color: #c6d6ff; */
                    min-width: 1080px;
                    background-image: url("assets/images/blue-background-2.jpg");
                    font-family: Consolas, Arial, sans-serif;
                    font-weight:normal;
                    font-style:normal;
                    /* color: white; */
                  }
                  .box-header h1, h2, h3, h4, h5{
                    /* font-family: 'Digital-7', Arial, sans-serif;
                    font-weight:normal;
                    font-style:normal; */
                    /* color: white; */
                  }
                  .table-main{
                    border: none;
                    width: 100%;
                  }
                  .table-main .vertical-line{
                    width: 2.5%;
                  }
                  .table-main .table-child{
                    width: 10%;
                  }
                  .direction td{
                    height: 5px;
                  }
                  .parent-parameter h1{
                    font-family: Arial, sans-serif;
                    font-weight:normal;
                    font-style:normal;
                    font-size: 40px;
                  }
                  .parent-parameter td{
                    height: 125px;
                    font-weight: bold;
                    /* width: 100%; */
                  }
                  .parent-parameter .core-parameter{
                    -webkit-box-shadow:inset 0px 0px 0px 2px #000;
                    -moz-box-shadow:inset 0px 0px 0px 2px #000;
                    box-shadow:inset 0px 0px 0px 2px #000;

                    margin-left:25%; 
                    margin-right:25%; 
                    height:100%; 
                    position: relative;
                    border-radius: 7px;
                    /* width:50%; */

                    overflow: hidden;
                    text-align:right;
                  }
                  .parent-parameter .core-parameter .title-core{
                    margin-left: 5%;
                    margin-right: 5%;
                    margin-bottom: 5%;
                    margin-top: 2px;
                    padding: 3px 0 3px 0;
                    border-bottom: 2px solid black;
                    font-size: 17px;
                  }
                  .parent-parameter .core-parameter .content-core{
                    margin-right: 4px;
                    font-size: 14px;
                    line-height: 10px;
                    font-weight: bold;
                  }
                  .parent-parameter .core-parameter .content-core .nilai{
                    margin-right: 5px;
                    display: inline-block;
                  }
                  .parent-parameter .core-parameter .content-core .satuan{
                    display: inline-block;
                    text-align: left;
                  }
                  .parent-parameter .core-parameter canvas{
                    position: absolute;
                    width: 97.5%;
                    height: 15px;
                    left: 0px;
                    bottom: 2px;
                    margin-left: 2px;
                    margin-right: 2px;
                    overflow: hidden;
                    border: 1px solid black;
                    background-color: #e8e8e8;
                    border-radius: 5px;
                  }
                  .parent-parameter-second{
                    height: 50px;
                  }
                  .circuit{
                    height: 40px;
                  }
                  .circuit td{
                    position: relative;                    
                  }
                  .circuit canvas{
                    position: absolute;
                    height: 100%;
                    width: 100%;
                    top: 0px;
                    left:0px;
                  }
                  .circuit-half{
                    height: 10px;                    
                  }
                  .circuit-half td{
                    position: relative;                    
                  }
                  .circuit-half canvas{
                    position: absolute;
                    height: 100%;
                    width: 100%;
                    top: 0px;
                    left:0px;
                  }
                  .circuit-trafo td{
                    height: 100px;
                    text-align: center;
                  }
                  .circuit-trafo img{
                    height: 100%;
                  }
                  .child-parameter td{
                    position: relative;
                    /* height: 160px; */
                    padding-bottom: 15px;
                    font-weight: bold;
                    vertical-align: top;
                  }
                  .child-parameter .parameter{
                    -webkit-box-shadow:inset 0px 0px 0px 2px #000;
                    -moz-box-shadow:inset 0px 0px 0px 2px #000;
                    box-shadow:inset 0px 0px 0px 2px #000;
                    border-radius: 7px;
                  }
                  .child-parameter .title-parameter{
                    margin-left: 5%;
                    margin-right: 5%;
                    margin-bottom: 5%;
                    margin-top: 2px;
                    border-bottom: 2px solid black;
                    padding: 3px 0 3px 0;
                    font-size: 16px;
                  }
                  .child-parameter .content-parameter{
                    margin-right: 4px;
                    font-size: 14px;
                    line-height: 10px;
                    font-weight: bold;
                  }
                  .child-parameter .nilai{
                    margin-right: 5px;
                    display: inline-block;
                    width: 68%;
                  }
                  .child-parameter .nilai input{
                    width: 90%;
                    height: 15px;
                    margin-bottom: 5px;
                    vertical-align: top;
                    text-align: right;
                  }
                  .child-parameter .satuan{
                    display: inline-block;
                    text-align: left;
                    width: 20%;
                  }
                  .body-parameter canvas{
                    position: absolute;
                    width: 97.5%;
                    height: 15px;
                    left: 0px;
                    bottom: 2px;
                    margin-left: 2px;
                    margin-right: 2px;
                    overflow: hidden;
                    border: 1px solid black;
                    background-color: #e8e8e8;
                    border-radius: 5px;
                  }
                  /* .content-parameter{
                    vertical-align: middle;                    
                  } */
                  .persentase{
                    border: 2px solid red;
                    border-radius: 50%;
                    width: 60%;
                    margin-left: 20%;
                    height:80px;
                    background-color: red;
                    color: #FFF;
                    /* font-size: 30px; */
                  }
                  .persentase p{
                    font-size: 30px;
                    vertical-align: middle;
                    margin-top: 30px;
                    /* white-space: 0px; */
                  }

                </style>
                
                <table class="table-main">
                  <thead>
                    <tr class="direction">
                    <?php for($i=1;$i<=8;$i++){ ?> 
                      <td class="vertical-line"></td>
                      <td class="table-child"></td>
                    <?php } ?>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="circuit">
                    <?php for($i=1;$i<=8;$i++){ ?>
                      <?php if($i == 3){ ?>
                        <td></td>
                        <td><canvas id="incoming-corner-left" data-value="true"></canvas></td>
                      <?php } else if($i == 4){ ?>
                        <td><canvas id="incoming-horizontal-1" data-value="true"></canvas></td>
                        <td><canvas id="incoming-horizontal-2" data-value="true"></canvas></td>
                      <?php } else if($i == 5){ ?>
                        <td><canvas id="incoming-corner-right" data-value="true"></canvas></td>
                        <td></td>
                      <?php } else { ?>
                        <td></td>
                        <td></td>
                      <?php } ?>
                    <?php } ?>
                    </tr>
                    <tr class="circuit">
                    <?php for($i=1;$i<=8;$i++){ ?>
                      <?php if($i == 3){ ?>
                        <td></td>
                        <td rowspan="" class="text-center" style="font-size: 16px; font-weight: bold; background: #ffff00; back">
                          <img src="<?=$url?>assets/images/logo-pln.png" width="30px;"/>Incoming PLN
                        </td>
                      <?php } else if($i == 5){ ?>
                        <td><canvas id="vertical-core" data-value="true"></canvas></td>
                        <td></td>
                      <?php } else { ?>
                        <td></td>
                        <td></td>
                      <?php } ?>
                    <?php } ?>
                    </tr>
                    <tr class="parent-parameter">
                      <td></td>
                      <td><h1>Area 1</h1></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td class="text-center" rowspan="2"></td>
                      <td colspan="3" rowspan="2">
                        <div class="core-parameter">
                          <div class="text-center title-core">
                            MV Incoming
                          </div>
                          <div class="text-right content-core">
                            <div class="nilai">
                              <p id="incoming-ampere">40</p>
                              <p id="incoming-volt">20200.00</p>
                              <p id="incoming-pf">1.00</p>
                              <p id="incoming-kw">708.55</p>
                              <p id="incoming-kva">808.00</p>
                              <p id="incoming-kwh">0</p>                              
                            </div>
                            <div class="satuan">
                              <p>A</p>
                              <p>V</p>
                              <p>PF</p>
                              <p>kW</p>
                              <p>kVA</p>
                              <p>kWH</p>
                            </div>                            
                          </div>
                          <canvas id="bar-core"></canvas>
                        </div>                      
                      </td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr class="parent-parameter-second">
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr class="circuit-half">
                    <?php for($i=1;$i<=8;$i++){ ?> 
                      <td><canvas id="line-<?=$i?>"></canvas></td>
                      <td><canvas id="parameter-<?=$i?>"></canvas></td>
                    <?php } ?>
                    </tr>
                    <tr class="circuit">
                    <?php for($i=1;$i<=8;$i++){ ?> 
                      <td></td>
                      <td><canvas id="socket-<?=$i?>" class="socket" data-value="true" data-id="<?=$i?>"></canvas></td>
                    <?php } ?>
                    </tr>
                    <tr class="child-parameter">
                      <?php for($i=1;$i<=8;$i++){ ?>
                        
                        <td></td>
                        <td class="parameter">
                          <div class="body-parameter">
                            <div class="text-center title-parameter" id="outgoing-title-<?=$i?>" data-id="<?=$i?>">
                              MV Outgoing <?=$i?>
                            </div>
                            <div class="content-parameter text-right main">
                              <div class="nilai">
                                <p class="outgoing-ampere" id="outgoing-ampere-<?=$i?>" data-id="<?=$i?>">5</p>
                                <input class="outgoing-ampere-input collapse" id="outgoing-ampere-input-<?=$i?>" data-id="<?=$i?>" data-changed="false" value ="5"/>
                                <p class="outgoing-volt" id="outgoing-volt-<?=$i?>" data-id="<?=$i?>">20200.00</p>
                                <input class="outgoing-volt-input collapse" id="outgoing-volt-input-<?=$i?>" data-id="<?=$i?>" data-changed="false" value ="20200.00"/>
                                <p id="outgoing-pf-<?=$i?>">1.00</p>
                                <p id="outgoing-kva-<?=$i?>">101.00</p>
                                <p id="outgoing-kwh-<?=$i?>">0</p>                              
                              </div>
                              <div class="satuan">
                                <p>A</p>
                                <p>V</p>
                                <p>PF</p>
                                <p>kVA</p>
                                <p>kWH</p>
                              </div>                            
                            </div>
                            <div class="content-parameter text-center secondary collapse">
                              <div class="persentase">
                                <p id="persentase-<?=$i?>">70%</p>
                              </div>                            
                            </div>
                            <canvas id="bar-outgoing-<?=$i?>"></canvas>
                          </div>
                        </td>
                      
                      <?php } ?>
                    </tr>
                    <tr class="circuit-trafo">
                    <?php for($i=1;$i<=8;$i++){ ?> 
                      <td></td>
                      <td><img id="trafo-<?=$i?>" src="<?=$circuit?>trafo-on.png"/></td>
                    <?php } ?>
                    </tr>
                    <tr class="child-parameter">
                      <?php for($i=1;$i<=8;$i++){ ?>                        
                        
                        <td class="line"></td>
                        <td class="parameter">
                          <div class="body-parameter">
                            <div class="text-center title-parameter">
                              LV MDB <?=$i?>
                            </div>
                            <div class="content-parameter text-right">
                              <div class="nilai">
                                <p id="mdb-ampere-<?=$i?>">459.09</p>
                                <p id="mdb-volt-<?=$i?>">220.00</p>
                                <p id="mdb-kw-<?=$i?>">91.55</p>
                                <p id="mdb-kva-<?=$i?>">101.00</p>
                                <p id="mdb-kwh-<?=$i?>">0</p>                              
                              </div>
                              <div class="satuan">
                                <p>A</p>
                                <p>V</p>
                                <p>KW</p>
                                <p>kVA</p>
                                <p>kWH</p>
                              </div>                            
                            </div>
                            <canvas id="bar-mdb-<?=$i?>"></canvas>
                          </div>                        
                        </td>
                      
                      <?php } ?>
                    </tr>
                  </tbody>
                </table>
                
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
  <!-- /.content -->
</div>

<script>
  // console.log($("#horizontal1").width());
  // $.notify("Hello World: I was added to the top.", {
  //   newest_on_top: true
  // });
  // $.notify({
  //   message: "Hello World: I was added to the top."+"<br/>"+"Hello World: I was added to the top.",
  // },{
  //   type: 'danger',
  //   newest_on_top: true,
  //   placement: {
  //     from: "top",
  //     align: "left"
  //   },
	//   delay: 0,    
  // });

  $('.outgoing-ampere').dblclick(function (e) { 
    $(this).hide();
    $('#outgoing-ampere-input-'+$(this).data('id')).show();
    $('#outgoing-ampere-input-'+$(this).data('id')).data("changed", true);
    $('#outgoing-ampere-input-'+$(this).data('id')).focus();
  });
  $('.outgoing-ampere-input').on('keypress',function(e) {
    if(e.which == 13) {
      $(this).hide();
      $('#outgoing-ampere-'+$(this).data('id')).show();
      $('#outgoing-ampere-'+$(this).data('id')).html($(this).val());
      setTimeout(() => {
        $('#outgoing-ampere-input-'+$(this).data('id')).data("changed", false);        
      }, 3000);
      // if($(this).val() < 2){
      //   notify("The current on MV Outgoing "+$(this).data('id')+" is too Low")
      // } else if($(this).val() > 20){
      //   notify("The current on MV Outgoing "+$(this).data('id')+" is too High")
      // }
    }
  });

  $('.outgoing-volt').dblclick(function (e) { 
    $(this).hide();
    $('#outgoing-volt-input-'+$(this).data('id')).show();
    $('#outgoing-volt-input-'+$(this).data('id')).data("changed", true);
    $('#outgoing-volt-input-'+$(this).data('id')).focus();
  });
  $('.outgoing-volt-input').on('keypress',function(e) {
    if(e.which == 13) {
      $(this).hide();
      $('#outgoing-volt-'+$(this).data('id')).show();
      $('#outgoing-volt-'+$(this).data('id')).html($(this).val());
      setTimeout(() => {
        $('#outgoing-volt-input-'+$(this).data('id')).data("changed", false);
      }, 3000);
      // if($(this).val() < 2){
      //   notify("The current on MV Outgoing "+$(this).data('id')+" is too Low")
      // } else if($(this).val() > 20){
      //   notify("The current on MV Outgoing "+$(this).data('id')+" is too High")
      // }
    }
  });

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
                            delay: 0,
                          });
     return notif;
    }
  }

  
  i1 = $('#incoming-corner-left');
  leftCorner(i1, 1);
  i1 = $('#incoming-horizontal-1');
  horizon(i1, 1);
  i1 = $('#incoming-horizontal-2');
  horizon(i1, 1);
  i1 = $('#incoming-corner-right');
  rightCorner(i1, 1);

  function circuit(sumber){
    var verticalCore = $('#vertical-core');
    sumber = verticalCore.data('value');
    verticalSocket(verticalCore, pln=1, sumber);
    for(let i = 1; i <= 8; i++){
      line = $('#line-'+i);
      parameter = $('#parameter-'+i);
      if(i==1){      
        leftCorner(parameter, sumber);
      } else if(i==5){
        tUpDown(line, sumber);
        tjunction(parameter, sumber);
      } else if(i==8){
        horizon(line, sumber);
        rightCorner(parameter, sumber);
      } else {
        horizon(line, sumber);
        tjunction(parameter, sumber);
      }
      var socket = $('#socket-'+i);
      var statusSocket = $('#socket-'+i).data('value');
      verticalSocket(socket, sumber, statusSocket);
      var trafoMDB = $('#trafo-'+i);
      trafo(trafoMDB, sumber, statusSocket);
    }
  }

  circuit();
  
  $('#vertical-core').click(function (e) { 
    var incoming = $(this).data('value');
    if (incoming){
      $(this).data('value', false);
      circuit();
    } else {
      $(this).data('value', true);
      circuit();
    }
  });
  $('.socket').click(function (e) { 
    var id = $(this).data('id');
    var status = $(this).data('value');
    if (status){
      $(this).data('value', false);
      var sumber = $('#vertical-core').data('value');
      verticalSocket($(this), sumber, false);
      var trafoMDB = $('#trafo-'+id);
      trafo(trafoMDB, sumber, false);
    } else {
      $(this).data('value', true);
      var sumber = $('#vertical-core').data('value');
      verticalSocket($(this), sumber, true);
      var trafoMDB = $('#trafo-'+id);
      trafo(trafoMDB, sumber, true);
    }
    // console.log($(this).data('value'));
  });

  notifyMe="";
  function randomOutgoing(){
    var toggleRandom = $('#toggle-random').prop('checked');
    var incoming = $('#vertical-core').data('value');
    notification = "";
    // console.log(incoming);
    var incomingValue = {
                          ampere  : 0,
                          volt    : 0,
                          pf      : 0,
                          kw      : 0,
                          kva     : 0,
                          kwh     : 0,
                          active  : 0
                        };
    if(toggleRandom){
      for (let i = 1; i <= 8; i++) {
        var outgoing= {};
        var statusSocket = $('#socket-'+i).data('value');
        var inputAmpere = $('#outgoing-ampere-input-'+i);
        var inputVolt = $('#outgoing-volt-input-'+i);
        if(incoming && statusSocket){
          if(!inputAmpere.data('changed')){
            outgoing.ampere  = ((Math.random()*4 - 2)+parseFloat($('#outgoing-ampere-'+i).html())).toFixed(2);
            outgoing.ampere = outgoing.ampere > 20 ? 19.99 : outgoing.ampere;
            outgoing.ampere = outgoing.ampere < 2 ? 2.01 : outgoing.ampere;            
            $('#outgoing-ampere-input-'+i).val(outgoing.ampere);
          } else {
            outgoing.ampere = (parseFloat($('#outgoing-ampere-'+i).html())).toFixed(2);
          }
          if(!inputVolt.data('changed')){
            outgoing.volt = (20200+Math.random()*600).toFixed(2);
            $('#outgoing-volt-input-'+i).val(outgoing.volt);
            // console.log($($('#outgoing-volt-input-'+$(this).data('id')).data("changed")));
          } else {
            outgoing.volt = (parseFloat($('#outgoing-volt-'+i).html())).toFixed(2);
          }
          
          outgoing.pf = ((Math.random()*0.1-0.05)+parseFloat($('#outgoing-pf-'+i).html())).toFixed(2);
          outgoing.pf = outgoing.pf > 1 ? 0.99 : outgoing.pf;
          outgoing.pf = outgoing.pf < 0.5 ? 0.51 : outgoing.pf;
          ///////////
            incomingValue.active++;
          //////////
        } else {
          var outgoing = {
                        ampere  : 0,
                        volt    : 0,
                        pf      : 0
                      };
        }
        outgoing.kva = ((outgoing.ampere*outgoing.volt)/1000 ).toFixed(2);
        outgoing.kwh = parseFloat($('#outgoing-kwh-'+i).html());
        outgoing.kwh = (outgoing.kwh + (outgoing.kva/3600)).toFixed(2);
        outgoing.persentase = Math.floor(outgoing.kva/7);
        // console.log(outgoing.persentase);
        $('#outgoing-ampere-'+i).html(outgoing.ampere);
        $('#outgoing-volt-'+i).html(outgoing.volt);
        $('#outgoing-pf-'+i).html(outgoing.pf);
        $('#outgoing-kva-'+i).html(outgoing.kva);
        $('#outgoing-kwh-'+i).html(outgoing.kwh);
        
        //notify
        if(outgoing.ampere > 18){
          notification = notification + "Ampere on MV Outgoing "+i+" is too High<br/>";
          $('#outgoing-title-'+i).css("background-color","red");
          $('#outgoing-title-'+i).css("color","white");
        }        
        if(outgoing.volt == 0){
          notification = notification + "NFB MV Outgoing "+i+" is opened<br/>";
          $('#outgoing-title-'+i).css("background-color","red");
          $('#outgoing-title-'+i).css("color","white");
        } else if(outgoing.volt < 19500){
          notification = notification + "Voltage on MV Outgoing "+i+" is too Low<br/>";
          $('#outgoing-title-'+i).css("background-color","red");
          $('#outgoing-title-'+i).css("color","white");
        } else if(outgoing.volt > 20800){
          notification = notification + "Voltage on MV Outgoing "+i+" is too High<br/>";
          $('#outgoing-title-'+i).css("background-color","red");
          $('#outgoing-title-'+i).css("color","white");
        } 
        if (outgoing.ampere < 19 && outgoing.volt > 19500 && outgoing.volt < 20800) {
          $('#outgoing-title-'+i).css("background-color","transparent");
          $('#outgoing-title-'+i).css("color","black");
        }
        //incoming
        incomingValue.ampere = incomingValue.ampere + parseFloat(outgoing.ampere);
        incomingValue.volt = incomingValue.volt + parseFloat(outgoing.volt);
        incomingValue.pf = incomingValue.pf + parseFloat(outgoing.pf);
        incomingValue.kva = incomingValue.kva + parseFloat(outgoing.kva);
        incomingValue.kwh = incomingValue.kwh + parseFloat(outgoing.kwh);

        $('#persentase-'+i).html(outgoing.persentase+'%');
        var barout = $('#bar-outgoing-'+i);
        bar(barout, outgoing.persentase/100);

        if(incoming && statusSocket){
          if(i < 4){
            mdb = {
                        volt: (380+Math.random()*20).toFixed(2),
                        kva: (outgoing.kva*outgoing.pf).toFixed(2),
                      };
          } else {
            mdb = {
                        volt: (200+Math.random()*20).toFixed(2),
                        kva: (outgoing.kva*outgoing.pf).toFixed(2),
                      };
          }
        } else {
          mdb = {
                      volt: 0,
                      kva: (outgoing.kva*outgoing.pf).toFixed(2),
                    };
        }
        mdb.kw = (mdb.kva - Math.random()*10).toFixed(2);
        mdb.ampere = ((mdb.kva/mdb.volt)*1000).toFixed(2);
        mdb.kw = mdb.kw < 0 ? 0 : mdb.kw;
        mdb.ampere = mdb.kw <= 0 ? 0 : mdb.ampere;
        mdb.kwh = parseFloat($('#mdb-kwh-'+i).html());
        mdb.kwh = (mdb.kwh + (mdb.kva/3600)).toFixed(2);
        mdb.persentase = Math.floor(mdb.kva/7);
        
        $('#mdb-ampere-'+i).html(mdb.ampere);    
        $('#mdb-volt-'+i).html(mdb.volt);
        $('#mdb-kw-'+i).html(mdb.kw);
        $('#mdb-kva-'+i).html(mdb.kva);
        $('#mdb-kwh-'+i).html(mdb.kwh);
        
        var barmdb = $('#bar-mdb-'+i);
        bar(barmdb, mdb.persentase/100);
      }

      // console.log(incomingValue);
      incomingValue.persentase = Math.floor(incomingValue.kva/56);
      incomingValue.kw = incomingValue.kva - Math.random()*200;

      $('#incoming-ampere').html((incomingValue.ampere).toFixed(2));
      $('#incoming-volt').html((incomingValue.volt/incomingValue.active).toFixed(2));
      $('#incoming-pf').html((incomingValue.pf/incomingValue.active).toFixed(2));
      $('#incoming-kw').html((incomingValue.kw < 300 ? incomingValue.kva : incomingValue.kw).toFixed(2));
      $('#incoming-kva').html((incomingValue.kva).toFixed(2));
      $('#incoming-kwh').html((incomingValue.kwh).toFixed(2));
      
      var barcore = $('#bar-core');
      bar(barcore , incomingValue.persentase/100);
      
      //generate notify
      if(notification != ""){
        if (notifyMe != ""){
          notifyMe.update('message', notification);
        } else {
          notifyMe = 
            $.notify({
              message: notification,
            },{
              type: 'danger',
              newest_on_top: true,
              placement: {
                from: "top",
                align: "left"
              },
              delay: 0,
              onClosed: (function() {
                notifyMe = "";
              }),
            });
        }
        // console.log(notifyMe);
      } else {
        $.notifyClose();
        notifyMe = "";
      }
    }
  }

  setInterval (() => {
    randomOutgoing();
  }, 1000);
  setInterval(() => {
    var toggleView = $('#toggle-view').prop('checked');
    var viewMode = $('#view-mode').prop('checked');
    if(toggleView){
      $('.main').toggle();
      $('.secondary').toggle();
    } else {
      if(viewMode){
        $('.main').hide();
        $('.secondary').show();
      } else {
        $('.main').show();
        $('.secondary').hide();
      }
      // console.log('toggle = '+viewMode);
      // console.log('mode = '+viewMode);
    }
  }, 1000);





















  function leftCorner(elem, sumber=1){
    var ctx = elem.get(0).getContext("2d");
    var param = {width:elem.width(),height:elem.height()};    
    ctx.canvas.width  = param.width;
    ctx.canvas.height = param.height;

    if(sumber == 1){
      ctx.strokeStyle = "#F00";
    } else {
      ctx.strokeStyle = "#FFF";
    }
    ctx.lineWidth = 4;
    ctx.moveTo((param.width/2)-2,param.height/2);
    ctx.lineTo(param.width,param.height/2);
    ctx.moveTo(param.width/2,param.height/2);
    ctx.lineTo(param.width/2,param.height);
    ctx.stroke();
  }
  
  function rightCorner(elem, sumber=1){
    var ctx = elem.get(0).getContext("2d");
    var param = {width:elem.width(),height:elem.height()};   
    ctx.canvas.width  = param.width;
    ctx.canvas.height = param.height;

    if(sumber == 1){
      ctx.strokeStyle = "#F00";
    } else {
      ctx.strokeStyle = "#FFF";
    }
    ctx.lineWidth = 4;
    ctx.moveTo((param.width/2)+2,param.height/2);
    ctx.lineTo(0,param.height/2);
    ctx.moveTo(param.width/2,param.height/2);
    ctx.lineTo(param.width/2,param.height);
    ctx.stroke();
  }

  function horizon(elem, sumber=1){
    var ctx = elem.get(0).getContext("2d");
    var param = {width:elem.width(),height:elem.height()};   
    ctx.canvas.width  = param.width;
    ctx.canvas.height = param.height;

    if(sumber == 1){
      ctx.strokeStyle = "#F00";
    } else {
      ctx.strokeStyle = "#FFF";
    }
    ctx.lineWidth = 4;
    ctx.moveTo(0,param.height/2);
    ctx.lineTo(param.width,param.height/2);
    ctx.stroke();
  }

  function tjunction(elem, sumber=1){
    var ctx = elem.get(0).getContext("2d");
    var param = {width:elem.width(),height:elem.height()};
    ctx.canvas.width  = param.width;
    ctx.canvas.height = param.height;

    if(sumber == 1){
      ctx.strokeStyle = "#F00";
    } else {
      ctx.strokeStyle = "#FFF";
    }
    ctx.lineWidth = 4;
    ctx.moveTo(0,param.height/2);
    ctx.lineTo(param.width,param.height/2);
    ctx.moveTo(param.width/2,param.height/2);
    ctx.lineTo(param.width/2,param.height);
    ctx.stroke();
  }

  function tUpDown(elem,sumber=1){
    var ctx = elem.get(0).getContext("2d");
    var param = {width:elem.width(),height:elem.height()};
    ctx.canvas.width  = param.width;
    ctx.canvas.height = param.height;

    if(sumber == 1){
      ctx.strokeStyle = "#F00";
    } else {
      ctx.strokeStyle = "#FFF";
    }
    ctx.lineWidth = 4;
    ctx.moveTo(0,param.height/2);
    ctx.lineTo(param.width,param.height/2);
    ctx.moveTo(param.width/2,0);
    ctx.lineTo(param.width/2,param.height/2);
    ctx.stroke();
  }

  function plusjunction(elem){
    var ctx = elem.get(0).getContext("2d");
    var param = {width:elem.width(),height:elem.height()};

    ctx.canvas.width  = param.width;
    ctx.canvas.height = param.height;
    ctx.lineWidth = 4;
    ctx.moveTo(0,param.height/2);
    ctx.lineTo(param.width,param.height/2);
    ctx.moveTo(param.width/2,0);
    ctx.lineTo(param.width/2,param.height);
    ctx.stroke();
  }

  function vertical(elem, status=1){
    var ctx = elem.get(0).getContext("2d");
    var param = {width:elem.width(),height:elem.height()};    
    ctx.canvas.width  = param.width;
    ctx.canvas.height = param.height;
    ctx.lineWidth = 4;
    ctx.moveTo(param.width/2,0);
    ctx.lineTo(param.width/2,param.height);
    ctx.stroke();
  }

  function verticalSocket(elem, sumber=1, status=1){
    var ctx = elem.get(0).getContext("2d");
    var param = {width:elem.width(),height:elem.height()};

    ctx.canvas.width  = param.width;
    ctx.canvas.height = param.height;
    ctx.lineWidth = 4;
    
    if(sumber == 1){
      ctx.beginPath();
      ctx.strokeStyle = "#F00";
      ctx.moveTo(param.width/2,0);
      ctx.lineTo(param.width/2,10+2);
      ctx.moveTo(param.width/2,10);
      ctx.lineTo((param.width/2)+5,10);
      ctx.stroke();
    } else {
      ctx.beginPath();
      ctx.strokeStyle = "#FFF";
      ctx.moveTo(param.width/2,0);
      ctx.lineTo(param.width/2,10+2);
      ctx.moveTo(param.width/2,10);
      ctx.lineTo((param.width/2)+5,10);
      ctx.stroke();      
    }

    if(sumber == 1 && status == 1){
      ctx.beginPath();
      ctx.strokeStyle = "#F00";
      ctx.moveTo(param.width/2,10);
      ctx.lineTo((param.width/2)+13,10);
      ctx.stroke();
    } else if(sumber == 0, status == 1){
      ctx.beginPath();
      ctx.strokeStyle = "#FFF";
      ctx.moveTo(param.width/2,10);
      ctx.lineTo((param.width/2)+13,10);
      ctx.stroke();
    }

    if(sumber == 1 && status == 1){
      ctx.beginPath();
      ctx.strokeStyle = "#F00";
      ctx.moveTo((param.width/2)+12,10);
      ctx.lineTo(param.width/2,30);
      ctx.moveTo(param.width/2,30-2);
      ctx.lineTo(param.width/2,param.height);
    } else if (status == 1){
      ctx.beginPath();
      ctx.strokeStyle = "#FFF";
      ctx.moveTo((param.width/2)+12,10);
      ctx.lineTo(param.width/2,30);
      ctx.moveTo(param.width/2,30-2);
      ctx.lineTo(param.width/2,param.height);
    } else if (status == 0){
      ctx.beginPath();
      ctx.strokeStyle = "#FFF";
      ctx.moveTo((param.width/2)+20,10);
      ctx.lineTo(param.width/2,30);
      ctx.moveTo(param.width/2,30-2);
      ctx.lineTo(param.width/2,param.height);
    }
    // ctx.moveTo(param.width/2,0);
    // ctx.lineTo(param.width/2,param.height);
    ctx.stroke();
  } 

  function bar(elem, val=1){
    var ctx = elem.get(0).getContext("2d");
    var param = {width:elem.width(),height:elem.height()};
    barmeter = val * param.width;
    ctx.canvas.width  = param.width;
    ctx.canvas.height = param.height;

    var gradient = ctx.createLinearGradient(0, 100, ctx.canvas.width, 0);
    
    // console.log(val);
    if(val < 0.1){
      gradient.addColorStop("0", "white");
      gradient.addColorStop("0.5", "green");
      gradient.addColorStop("1.0", "green");
    } else if(val < 0.3){
      gradient.addColorStop("0", "green");
      gradient.addColorStop("0.5", "green");
      gradient.addColorStop("1.0", "red");
    } else if(val < 0.5){
      gradient.addColorStop("0", "orange");
      gradient.addColorStop("0.8", "orange");
      gradient.addColorStop("1.0", "red");
    } else if(val < 0.8){
      gradient.addColorStop("0", "red");
      gradient.addColorStop("0.5", "red");
      gradient.addColorStop("1.0", "red");
    } else if(val <= 1.0){
      gradient.addColorStop("0", "black");
      gradient.addColorStop("0.5", "red");
      gradient.addColorStop("1.0", "black");
    }
    
    ctx.lineWidth = 20;
    ctx.strokeStyle = gradient;
    ctx.moveTo(0,param.height/2);
    ctx.lineTo(barmeter,param.height/2);
    ctx.stroke();
  }

  function trafo (elem, sumber, statusSocket) {
    if(sumber && statusSocket){
      elem.prop('src', '<?=$url?>assets/images/circuit/trafo-on.png?2312');
    } else {
      elem.prop('src', '<?=$url?>assets/images/circuit/trafo-off.png?1231');
    }
  }

  
  // var c = document.getElementById("myCanvas");
  // var ctx = c.getContext("2d");
  // ctx.moveTo(0,0);
  // ctx.lineTo(200,100);
  // ctx.stroke();
</script>