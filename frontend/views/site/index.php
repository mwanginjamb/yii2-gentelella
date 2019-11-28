<?php
use yii\web\View;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-md-12">
                <h2>Navision Purchase Doc Lines</h2>
            <table class="table ">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td><b>Doc Type</b></td>
                            <td><b>buyFromVendorNumber</b></td>
                            <td><b>expectedReceiptDate</b></td>
                            <td><b>description</b></td>
                           <td><b>Unit of Measure</b></td>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            $i = 0;
                         foreach($purchases as $p):
                            ++$i;
                          ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $p->documentType ?></td>
                                <td><?= $p->buyFromVendorNumber ?></td>
                                <td><?= $p->expectedReceiptDate ?></td>
                                <td><?= $p->description ?></td>
                                <td><?= $p->unitOfMeasure ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            

                
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>


 <?php 

$this->registerJs(
    "
    
            $('.table').DataTable();
    ",	
	
	View::POS_READY,
	'CustomButtonHandler'
);  
    
?>
