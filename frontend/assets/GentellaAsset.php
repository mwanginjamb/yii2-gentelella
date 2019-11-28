<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class GentellaAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'gentella-assets/bootstrap/dist/css/bootstrap.min.css',
        'gentella-assets/vendors/font-awesome/css/font-awesome.min.css',
        'gentella-assets/vendors/nprogress/nprogress.css',
        'gentella-assets/iCheck/skins/flat/green.css',
        'gentella-assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css',
        'gentella-assets/jqvmap/dist/jqvmap.min.css',
        'gentella-assets/bootstrap-daterangepicker/daterangepicker.css',
        'gentella-assets/build/css/custom.min.css',
        'gentella-assets/datatables.net-bs/css/dataTables.bootstrap.min.css',
        'gentella-assets/datatables.net-buttons-bs/css/buttons.bootstrap.min.css',
        'gentella-assets/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css',
        'gentella-assets/datatables.net-responsive-bs/css/responsive.bootstrap.min.css',
        'gentella-assets/datatables.net-scroller-bs/css/scroller.bootstrap.min.css',

    ];
    public $js = [
        'gentella-assets/jquery/dist/jquery.min.js',
        'gentella-assets/bootstrap/dist/js/bootstrap.bundle.min.js',
        'gentella-assets/fastclick/lib/fastclick.js',
        'gentella-assets/nprogress/nprogress.js',
        'gentella-assets/Chart.js/dist/Chart.min.js',
        'gentella-assets/gauge.js/dist/gauge.min.js',
        'gentella-assets/bootstrap-progressbar/bootstrap-progressbar.min.js',
        'gentella-assets/iCheck/icheck.min.js',
        'gentella-assets/skycons/skycons.js',
        'gentella-assets/Flot/jquery.flot.js',
        'gentella-assets/Flot/jquery.flot.pie.js',
        'gentella-assets/Flot/jquery.flot.time.js',
        'gentella-assets/Flot/jquery.flot.stack.js',
        'gentella-assets/Flot/jquery.flot.resize.js',
        'gentella-assets/flot.orderbars/js/jquery.flot.orderBars.js',
        'gentella-assets/flot-spline/js/jquery.flot.spline.min.js',
        'gentella-assets/flot.curvedlines/curvedLines.js',
        'gentella-assets/DateJS/build/date.js',
        'gentella-assets/jqvmap/dist/jquery.vmap.js',
        'gentella-assets/jqvmap/dist/maps/jquery.vmap.world.js',
        'gentella-assets/jqvmap/examples/js/jquery.vmap.sampledata.js',
        'gentella-assets/moment/min/moment.min.js',
        'gentella-assets/bootstrap-daterangepicker/daterangepicker.js',
        'gentella-assets/build/js/custom.min.js',
        'gentella-assets/datatables.net/js/jquery.dataTables.min.js',
        'gentella-assets/datatables.net-bs/js/dataTables.bootstrap.min.js',
        'gentella-assets/datatables.net-buttons/js/dataTables.buttons.min.js',
        'gentella-assets/datatables.net-buttons-bs/js/buttons.bootstrap.min.js',
        'gentella-assets/datatables.net-buttons/js/buttons.flash.min.js',
        'gentella-assets/datatables.net-buttons/js/buttons.html5.min.js',
        'gentella-assets/vendors/datatables.net-buttons/js/buttons.print.min.js',
        'gentella-assets/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js',
        'gentella-assets/datatables.net-keytable/js/dataTables.keyTable.min.js',
        'gentella-assets/datatables.net-responsive/js/dataTables.responsive.min.js',
        'gentella-assets/datatables.net-responsive-bs/js/responsive.bootstrap.js',
        'gentella-assets/datatables.net-scroller/js/dataTables.scroller.min.js',
        'gentella-assets/jszip/dist/jszip.min.js',
        'gentella-assets/pdfmake/build/pdfmake.min.js',
        'gentella-assets/pdfmake/build/vfs_fonts.js',
    
       

    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
