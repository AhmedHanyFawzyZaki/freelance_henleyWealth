
<style type="text/css">


    body.dragging, body.dragging * {
        cursor: move !important;
    }

    .dragged {
        position: absolute;
        opacity: 0.5;
        z-index: 2000;
    }

    ol.example li.placeholder {
        position: relative;
        /** More li styles **/
    }
    ol.example li.placeholder:before {
        position: absolute;
        /** Define arrowhead **/
    }
    .example{

        width: 100%;
    }
    ol.example li{
        float: left;
        width: 48%;
    }
</style>


<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/inettuts.css" rel="stylesheet" type="text/css" />
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/inettuts.js.css" rel="stylesheet" type="text/css" />


<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/im.css" type="text/css" rel="stylesheet" />

<div id="columns">

    <div class="row-fluid">
        <div class="span3">
            <div class="circle-tile">
                <a href="<?= Yii::app()->request->baseUrl ?>/user?type=2">
                    <div class="circle-tile-heading dark-blue">
                        <i class="icon-user mrgr-10 muted"></i>
                    </div>
                </a>
                <div class="circle-tile-content dark-blue">
                    <p>
                        <?= Yii::t('translate', 'Administrators'); ?>
                    </p>
                    <span>
                        <?= count(User::model()->findAll(array('condition' => 'user_type=2 and id !=1'))); ?>

                        <i class="ion ion-stats-bars"></i>

                    </span>
                    <a href="<?= Yii::app()->request->baseUrl ?>/user?type=2" class="circle-tile-footer"><?= Yii::t('translate', 'More Info'); ?> <i class="fa fa-chevron-circle-right"></i></a>
                </div>
            </div>
        </div>

        <div class="span3">
            <div class="circle-tile">
                <a href="<?= Yii::app()->request->baseUrl ?>/blogPost?active=1">
                    <div class="circle-tile-heading bg-yellow">
                        <i class="icon-list-alt mrgr-10 muted"></i>
                    </div>
                </a>
                <div class="circle-tile-content bg-yellow">
                    <p>
                        <?= Yii::t('translate', 'Published Blog Posts'); ?>
                    </p>
                    <span>
                        <?= count(BlogPost::model()->findAll(array('condition' => 'active=1'))); ?>

                        <i class="ion ion-stats-bars"></i>

                    </span>
                    <a href="<?= Yii::app()->request->baseUrl ?>/blogPost?active=1" class="circle-tile-footer"><?= Yii::t('translate', 'More Info'); ?> <i class="fa fa-chevron-circle-right"></i></a>
                </div>
            </div>
        </div>

        <div class="span3">
            <div class="circle-tile">
                <a href="<?= Yii::app()->request->baseUrl ?>/blogPost?active=0">
                    <div class="circle-tile-heading blue-background">
                        <i class="icon-list-alt mrgr-10 muted"></i>
                    </div>
                </a>
                <div class="circle-tile-content blue-background">
                    <p>
                        <?= Yii::t('translate', 'Unpublished Blog Posts'); ?>
                    </p>
                    <span>
                        <?= count(BlogPost::model()->findAll(array('condition' => 'active!=1'))); ?>

                        <i class="ion ion-stats-bars"></i>

                    </span>
                    <a href="<?= Yii::app()->request->baseUrl ?>/blogPost?active=0" class="circle-tile-footer"><?= Yii::t('translate', 'More Info'); ?> <i class="fa fa-chevron-circle-right"></i></a>
                </div>
            </div>
        </div>

        <div class="span3">
            <div class="circle-tile">
                <a href="<?= Yii::app()->request->baseUrl ?>/page">
                    <div class="circle-tile-heading red">
                        <i class="icon-location-arrow mrgr-10 muted"></i>
                    </div>
                </a>
                <div class="circle-tile-content red">
                    <p>
                        <?= Yii::t('translate', 'Pages'); ?>
                    </p>
                    <span>
                        <?= Page::model()->count(); ?>

                        <i class="ion ion-stats-bars"></i>

                    </span>
                    <a href="<?= Yii::app()->request->baseUrl ?>/page" class="circle-tile-footer"><?= Yii::t('translate', 'More Info'); ?> <i class="fa fa-chevron-circle-right"></i></a>
                </div>
            </div>
        </div>

    </div>

    <div class="row-fluid well" style="width:96.5%;">
        <ul class="shortcuts span12">
            <li class="events">
                <a class="btn" href="<?php echo Yii::app()->baseUrl; ?>/settings">
                    <span class="fa icon-gear"></span>
                    <span class="shortcuts-label">Settings</span>
                </a>
            </li>
            <li class="events">
                <a class="btn" href="<?php echo Yii::app()->baseUrl; ?>/user">
                    <span class="fa icon-user"></span>
                    <span class="shortcuts-label">Administrators</span>
                </a>
            </li>
            <li class="events">
                <a class="btn" href="<?php echo Yii::app()->baseUrl; ?>/page">
                    <span class="fa icon-tags"></span>
                    <span class="shortcuts-label">Pages</span>
                </a>
            </li>
            <li class="events">
                <a class="btn" href="<?php echo Yii::app()->baseUrl; ?>/blogPost">
                    <span class="fa icon-list-alt"></span>
                    <span class="shortcuts-label">Blog Posts</span>
                </a>
            </li>
        </ul>

        <div class="span7">
        </div>
    </div>

    <!--<div class="row-fluid">

        <div class="span6 block2 box-header">
            <h3>Users</h3>

            <div class="panel panel-default">

                <div class="panel-body">
                    <div id="morris-line-chart"></div>
                </div>
            </div>
        </div>



        <div class="span6 block2 box-header2">
            <h3>Products</h3>

            <div class="panel panel-default">

                <div class="panel-body">
                    <div id="morris-donut-chart"></div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {

            Morris.Donut({
            element: 'morris-donut-chart',
                    data: [
                    {
                    label: "<?php echo Yii::t('translate', 'Off Target'); ?>",
                            value: < ? //Target::model()->count(array('condition' => 'in_off = 0'))?>
                    }, {
                    label: "<?php echo Yii::t('translate', 'On Target'); ?>",
                            value: < ? //Target::model()->count(array('condition' => 'in_off = 1'))?>
                    }
                    ],
                    resize: true
            });
                    Morris.Line({
                    element: 'morris-line-chart',
                            data: [
    <?php
    $date = date('Y') - 7;
    for ($date; $date <= date('Y'); $date++) {
        ?>
                                    {
                                    y: '<?= $date ?>',
                                            a: < ? //Lead::model()->getCountByYear($date) ?>,
                                            b: < ? //Opportunity::model()->getCountByYear($date) ?>
                                    },
    <?php } ?>
                            ],
                            xkey: 'y',
                            ykeys: ['a', 'b'], labels: ['Leads', 'Opportunities'],
                            hideHover: 'auto',
                            resize: true
                    });
            });</script>




    </div>-->

    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/morris/morris.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/custom.js"></script>

    <div class="clear"></div>
    <!-- /.outer -->
</div>
<!-- END CONTENT -->
