<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Inline Charts
      <small>multiple types of charts</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Charts</a></li>
      <li class="active">Inline Charts</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-xs-12">
        <div class="box box-solid">
          <div class="box-header">
            <i class="fa fa-file"></i>

            <h3 class="box-title">Export</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
            
              <div class="col-xs-12 col-md-12">

                  <?php foreach($area as $ar){ ?>
                    <ul class="list-group" style="display: inline-block">
                      <li class="list-group-item text-center"><?=$ar->nama?></li>
                      <?php $temp = $ar->kode ?>
                      <?php foreach($$temp as $pm){ ?>
                        <li class="list-group-item">
                          <div class="checkbox">
                            <label><input type="checkbox" value=""><?=$pm->nama?></label>
                          </div>
                        </li>
                      <?php } ?>
                    </ul>
                  <?php } ?>

              </div>

              <div class="col-xs-12 col-md-12">
                <form method="POST" class="form-inline" role="form" style="display: inline-block" id="formChart">
                  <div class="form-group">
                    <label class="sr-only" for=""></label>Dari
                    <div class='input-group date datefrom' id='datefrom'>
                        <input type='text' class="form-control datefrom" id="from" value=""/>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for=""></label>Ke
                    <div class='input-group date dateto' id='dateto'>
                        <input type='text' class="form-control dateto" id="to" value=""/>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for=""></label>Interval
                      <select type='text' class="form-control" id="interval">
                        <option data-clause="SECOND" data-arr="00" value="1" selected>1 menit</option>
                        <option data-clause="MINUTE" data-arr="00,10,20,30,40,50"  value="10">10 menit</option>
                        <option data-clause="MINUTE" data-arr="00,30" value="30">30 menit</option>
                        <option data-clause="MINUTE" data-arr="00" value="1">1 jam</option>
                        <option data-clause="HOUR" data-arr="00,04,08,12,16,20" value="4">4 jam</option>
                        <option data-clause="HOUR" data-arr="00,12" value="12">12 jam</option>
                        <option data-clause="HOUR" data-arr="00" value="1">1 hari</option>
                      </select>
                  </div>
                  <button type="submit" class="btn btn-primary" id="export">Export</button>
                </form>
                

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
