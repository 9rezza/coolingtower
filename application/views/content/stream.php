

<link href="https://vjs.zencdn.net/7.6.0/video-js.css" rel="stylesheet">

<!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
<script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>


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
            </div>
            <div class="col-xs-4 text-center">
              <a class="btn btn-info btn-sm" href="<?=$url?>">Electrical</a>
              <a class="btn btn-info btn-sm" href="<?=$url?>waterpump">Water flow</a>
              <a class="btn btn-info btn-sm" href="<?=$url?>chart">Graph</a>
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
            
    <embed type="application/x-vlc-plugin" pluginspage="http://www.videolan.org"
       width="320"
       height="240"
       target="rtsp://admin:abcd1234@192.168.1.111:554/ISAPI/streaming/channels/101"
       id="vlc" />
    <script type="text/javascript"></script>
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


<script src='https://vjs.zencdn.net/7.6.0/video.js'></script>















































