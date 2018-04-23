<!-- InstanceBeginEditable name="content" -->
<!-- Begin page content -->
<div class="containerfull">
    <!--<div class="row-fluid">
        <div class="span12">
            <div id="myCarousel" class="carousel slide">
                <div class="carousel-inner">
                    <div class="active item how-help-page-top" style="background: url('<?= Yii::app()->request->getBaseUrl(true) ?>/img/investment1.jpg') no-repeat;"><span class="carousel-overlay"></span><h1 class="carousel-text">Saftey</h1></div>
                    <div class="item how-help-page-top" style="background: url('<?= Yii::app()->request->getBaseUrl(true) ?>/img/investment2.jpg') no-repeat;"><span class="carousel-overlay"></span><h1 class="carousel-text">Saving Costs</h1></div>
                    <div class="item how-help-page-top" style="background: url('<?= Yii::app()->request->getBaseUrl(true) ?>/img/investment3.jpg') no-repeat;"><span class="carousel-overlay"></span><h1 class="carousel-text">Growth</h1></div>
                </div>
                
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </div>-->
    <?php
    echo Page::model()->findByPk(4)->details;
    ?>
    <script>
        $(document).ready(function () {
            $('.triple-column').hover(function () {
                $(this).find("span").slideDown(700);
            });
            $('.triple-column').mouseleave(function () {
                $(this).find("span").slideUp(700);
            });
        });
    </script>
</div>
<!-- End page content --> 
<!-- InstanceEndEditable <h4 class="text-center margintop50">We are a different kind of financial advice company.</h4>-->