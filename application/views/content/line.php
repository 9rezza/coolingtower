
<style>
  .gap-line{
    margin-bottom: 40px;
  }
  .line{
    height: 170px;
    width: 80%;
    border: 2px solid black;
    margin: 10%;
  }
  .line-name{
    border-radius: 10px;
    font-size: 48px;
  }
  .line-scada{
    height: 225px;
    border: 2px solid black;
    border-radius: 10px;
    margin-top: 40px;
  }
  .machine{
    height: 200px;
    border: 2px solid black;
    margin: 1%;
    width: 23%;
    background-color: #a4cdf7;
    font-size: 20px;
    /* padding-top: 35px; */
    padding: 0;
  }
  .motor{
    padding: 0;
    font-size: 18px;
  }
  @media(max-width:916px){
    .content{
      overflow-x: scroll
    }

  }
</style>
<div class="box-body">
  <div class="row parent-hmi">
    <div class="col-xs-12 col-md-12 parent-hmi">

      <div class="hmi">
        <div class="col-sm-12 gap-line">
          <div class="col-sm-1 line-indikator">
              <img width="60px" src="<?=$url?>assets/images/indicatorgreen.png?1"/>
          </div>
          <div class="col-sm-11 line-name text-left">Line 5A</div>
          <div class="col-sm-12 line-scada">
            <div class="col-sm-3 machine">
              <div class="col-sm-6 motor text-left">
                <img class="" width="80px" src="<?=$url?>assets/images/motor-green-left.png?1"/>
                <div class="text-center">1A</div>
              </div>
              <div class="col-sm-6 motor text-right">
                <img class="" width="80px" src="<?=$url?>assets/images/motor-green-right.png?1"/>
                <div class="text-center">1B</div>
              </div>
              <div class="col-sm-12 mesin-gap">Mesin 1</div>
              <div class="col-sm-6 motor text-left">
                <div class="text-center">1C</div>
                <img class="" width="80px" src="<?=$url?>assets/images/motor-green-left.png?1"/>
              </div>
              <div class="col-sm-6 motor text-right">
                <div class="text-center">1D</div>
                <img class="" width="80px" src="<?=$url?>assets/images/motor-green-right.png?1"/>
              </div>
            </div>                      
            <div class="col-sm-3 machine">
              <div class="col-sm-6 motor text-left">
                <img class="" width="80px" src="<?=$url?>assets/images/motor-green-left.png?1"/>
                <div class="text-center">2A</div>
              </div>
              <div class="col-sm-6 motor text-right">
                <img class="" width="80px" src="<?=$url?>assets/images/motor-green-right.png?1"/>
                <div class="text-center">2B</div>
              </div>
              <div class="col-sm-12 mesin-gap">Mesin 2</div>
              <div class="col-sm-6 motor text-left">
                <div class="text-center">2C</div>
                <img class="" width="80px" src="<?=$url?>assets/images/motor-green-left.png?1"/>
              </div>
              <div class="col-sm-6 motor text-right">
                <div class="text-center">2D</div>
                <img class="" width="80px" src="<?=$url?>assets/images/motor-green-right.png?1"/>
              </div>
            </div>                      
            <div class="col-sm-3 machine">
              <div class="col-sm-6 motor text-left">
                <img class="" width="80px" src="<?=$url?>assets/images/motor-grey-left.png?1"/>
                <div class="text-center">3A</div>
              </div>
              <div class="col-sm-6 motor text-right">
                <img class="" width="80px" src="<?=$url?>assets/images/motor-grey-right.png?1"/>
                <div class="text-center">3B</div>
              </div>
              <div class="col-sm-12 mesin-gap">Mesin 3</div>
              <div class="col-sm-6 motor text-left">
                <div class="text-center">3C</div>
                <img class="" width="80px" src="<?=$url?>assets/images/motor-grey-left.png?1"/>
              </div>
              <div class="col-sm-6 motor text-right">
                <div class="text-center">3D</div>
                <img class="" width="80px" src="<?=$url?>assets/images/motor-grey-right.png?1"/>
              </div>
            </div>                      
            <div class="col-sm-3 machine">
              <div class="col-sm-6 motor text-left">
                <img class="motor-4a" width="80px" src="<?=$url?>assets/images/motor-grey-left.png?1"/>
                <img class="motor-4a" width="80px" src="<?=$url?>assets/images/motor-red-left.png?1" style="display:none"/>
                <div class="text-center">4A</div>
              </div>
              <div class="col-sm-6 motor text-right">
                <img class="motor-4b" width="80px" src="<?=$url?>assets/images/motor-grey-right.png?1"/>
                <img class="motor-4b" width="80px" src="<?=$url?>assets/images/motor-red-right.png?1" style="display:none"/>
                <div class="text-center">4B</div>
              </div>
              <div class="col-sm-12 mesin-gap">Mesin 4</div>
              <div class="col-sm-6 motor text-left">
                <div class="text-center">4C</div>
                <img class="motor-4c" width="80px" src="<?=$url?>assets/images/motor-grey-left.png?1"/>
                <img class="motor-4c" width="80px" src="<?=$url?>assets/images/motor-red-left.png?1" style="display:none"/>
              </div>
              <div class="col-sm-6 motor text-right">
                <div class="text-center">4D</div>
                <img class="motor-4d" width="80px" src="<?=$url?>assets/images/motor-grey-right.png?1"/>
                <img class="motor-4d" width="80px" src="<?=$url?>assets/images/motor-red-right.png?1" style="display:none"/>
              </div>
            </div>                      
          </div>
        </div>
        
      </div>

    </div>

  </div>
  <!-- /.row -->
</div>
<!-- /.box-body -->


<script>
  aaa();
  bbb();
  ccc();
  ddd();
  rand = 500;
  function aaa(){
    rand = Math.random()*200 + 400;
    $(".motor-4a").toggle();
    setTimeout(() => {
      aaa();
    }, rand);
  }
  function bbb(){
    rand = Math.random()*200 + 400;
    $(".motor-4b").toggle();
    setTimeout(() => {
      bbb();
    }, rand);
  }  
  function ccc(){
    rand = Math.random()*200 + 400;
    $(".motor-4c").toggle();
    setTimeout(() => {
      ccc();
    }, rand);
  }  
  function ddd(){
    rand = Math.random()*200 + 400;
    $(".motor-4d").toggle();
    setTimeout(() => {
      ddd();
    }, rand);
  }  
</script>











