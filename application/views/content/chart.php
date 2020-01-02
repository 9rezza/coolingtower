
<style>
  /* #container{
    border-right: 2px solid grey;
    margin-right: 0px;
    outline
  }
  #container2{
    border-bottom: 2px solid grey;
    margin-left: 0px;
  }
  #container3{
    border-top: 2px solid grey;
    margin-right: 0px;
  }
  #container4{
    border-left: 2px solid grey;
    margin-left: 0px;
  } */
  .col-3, .col-4{
    border-top: 2px solid grey;
  }
  .col-2, .col-4{
    border-left: 2px solid grey;
  }
  .menu-center{
      margin-bottom: 5px;
  }
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
            <div class="row">
              <div class="col-sm-6 col-1">
                <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
              </div>
              <div class="col-sm-6 col-2">
                <div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>                
              </div>
              <div class="col-sm-6 col-3">
                <div id="container3" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
              </div>
              <div class="col-sm-6 col-4">
                <div id="container4" style="min-width: 310px; height: 400px; margin: 0 auto"></div>                
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
</div>

  
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>

  <script>
        Highcharts.chart('container', {
            chart: {
                zoomType: 'x',
                type: 'area',
                animation: Highcharts.svg, // don't animate in old IE
                marginRight: 10,
                events: {
                    load: function (e) {

                        // set up the updating of the chart each second
                        var series = this.series[0];
                        setInterval(function () {
                            var x = Math.floor((new Date()).getTime()/1000)*1000,
                                y = parseFloat((Math.random()*3+12).toFixed(2));
                                series.addPoint([x, y], true, true);
                        }, 1000);
                    }
                }
            },
            time: {
                useUTC: false
            },
            title: {
                text: 'Area Graph '
            },
            // subtitle: {
            //     text: document.ontouchstart === undefined ?
            //         'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
            // },
            xAxis: {
                type: 'datetime',
            },
            yAxis: {
                title: {
                    text: 'Y'
                },
                plotLines: [{
                    value: 14.5,
                    dashStyle: 'dash',
                    zIndex: 2,
                    width: 2,
                    color: '#d33',
                    label: {
                        text: 'Strip line',
                        align: 'right'
                    }
                }]
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                area: {
                    fillColor: {
                        linearGradient: {
                            x1: 0,
                            y1: 0,
                            x2: 0,
                            y2: 1
                        },
                        stops: [
                            [0, Highcharts.getOptions().colors[0]],
                            [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                        ]
                    },
                    marker: {
                        radius: 2
                    },
                    lineWidth: 1,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                }
            },

            series: [{
                type: 'area',
                name: 'Y Value',
                data: <?=json_encode($data)?>
            }]
        });

        
        Highcharts.chart('container2', {
            chart: {
                zoomType: 'x',
                type: 'column',
                animation: Highcharts.svg, // don't animate in old IE
                marginRight: 10,
                events: {
                    load: function (e) {

                        // set up the updating of the chart each second
                        var series = this.series[0];
                        setInterval(function () {
                            var x = Math.floor((new Date()).getTime()/1000)*1000,
                                y = parseFloat((Math.random()*10+20).toFixed(2));
                                series.addPoint([x, y], true, true);
                        }, 1000);
                    }
                }
            },
            time: {
                useUTC: false
            },
            title: {
                text: 'Column Graph'
            },
            // subtitle: {
            //     text: document.ontouchstart === undefined ?
            //         'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
            // },
            xAxis: {
                type: 'datetime',
            },
            yAxis: {
                title: {
                    text: 'Y'
                },
                plotLines: [{
                    value: 27,
                    dashStyle: 'dash',
                    zIndex: 2,
                    width: 2,
                    color: '#d33',
                    label: {
                        text: 'Strip line',
                        align: 'right'
                    }
                }]
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                area: {
                    fillColor: {
                        linearGradient: {
                            x1: 0,
                            y1: 0,
                            x2: 0,
                            y2: 1
                        },
                        stops: [
                            [0, Highcharts.getOptions().colors[0]],
                            [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                        ]
                    },
                    marker: {
                        radius: 2
                    },
                    lineWidth: 1,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                }
            },

            series: [{
                type: 'column',
                name: 'Y Value',
                data: <?=json_encode($data2)?>
            }]
        });

        
        Highcharts.chart('container3', {
            chart: {
                zoomType: 'x',
                type: 'line',
                animation: Highcharts.svg, // don't animate in old IE
                marginRight: 10,
                events: {
                    load: function (e) {

                        // set up the updating of the chart each second
                        var series = this.series[0];
                        setInterval(function () {
                            var x = Math.floor((new Date()).getTime()/1000)*1000,
                                y = parseFloat((Math.random()*50+100).toFixed(2));
                                series.addPoint([x, y], true, true);
                        }, 1000);
                    }
                }
            },
            time: {
                useUTC: false
            },
            title: {
                text: 'Line Graph'
            },
            // subtitle: {
            //     text: document.ontouchstart === undefined ?
            //         'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
            // },
            xAxis: {
                type: 'datetime',
            },
            yAxis: {
                title: {
                    text: 'Y'
                },
                plotLines: [{
                    value: 140,
                    dashStyle: 'dash',
                    zIndex: 2,
                    width: 2,
                    color: '#d33',
                    label: {
                        text: 'Strip line',
                        align: 'right'
                    }
                }]
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                area: {
                    fillColor: {
                        linearGradient: {
                            x1: 0,
                            y1: 0,
                            x2: 0,
                            y2: 1
                        },
                        stops: [
                            [0, Highcharts.getOptions().colors[0]],
                            [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                        ]
                    },
                    marker: {
                        radius: 2
                    },
                    lineWidth: 1,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                }
            },

            series: [{
                type: 'line',
                name: 'Y Value',
                data: <?=json_encode($data3)?>
            }]
        });

        
        Highcharts.chart('container4', {
            chart: {
                zoomType: 'x',
                type: 'scatter',
                animation: Highcharts.svg, // don't animate in old IE
                marginRight: 10,
                events: {
                    load: function (e) {

                        // set up the updating of the chart each second
                        var series = this.series[0];
                        setInterval(function () {
                            var x = Math.floor((new Date()).getTime()/1000)*1000,
                                y = parseFloat((Math.random()*100+1000).toFixed(2));
                                series.addPoint([x, y], true, true);
                        }, 1000);
                    }
                }
            },
            time: {
                useUTC: false
            },
            title: {
                text: ' Scatter Graph'
            },
            // subtitle: {
            //     text: document.ontouchstart === undefined ?
            //         'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
            // },
            xAxis: {
                type: 'datetime',
            },
            yAxis: {
                title: {
                    text: 'Y'
                },
                plotLines: [{
                    value: 1082.5,
                    dashStyle: 'dash',
                    zIndex: 2,
                    width: 2,
                    color: '#d33',
                    label: {
                        text: 'Strip line',
                        align: 'right'
                    }
                }]
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                area: {
                    fillColor: {
                        linearGradient: {
                            x1: 0,
                            y1: 0,
                            x2: 0,
                            y2: 1
                        },
                        stops: [
                            [0, Highcharts.getOptions().colors[0]],
                            [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                        ]
                    },
                    marker: {
                        radius: 2
                    },
                    lineWidth: 1,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                }
            },

            series: [{
                type: 'scatter',
                name: 'Y Value',
                data: <?=json_encode($data4)?>
            }]
        });
        
        $('.highcharts-button').click(function (e) { 
            // e.preventDefault();
            $(".highcharts-menu-item:contains('View data table')" ).addClass("hidden");
            $(".highcharts-menu-item:contains('Open in Highcharts Cloud')" ).addClass("hidden");            
        });
            // $('#container').find(".highcharts-menu-item:contains('View data table')" ).addClass("hidden");
  </script>