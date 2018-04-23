<!-- InstanceBeginEditable name="content" -->
<!-- Begin page content -->
<div class="containerfull">
    <?php
        echo Page::model()->findByPk(1)->details;
    ?>
    <div class="row-fluid">
        <?php
        if($articles){
            foreach ($articles as $art){
                ?>
                <div class="blog-post">
                    <a href="article-<?=$art->slug?>" class="blog-btn">Read article</a>
                    <label class="blog-title"><?=$art->title?></label>
                    <img src="<?=Yii::app()->request->getBaseUrl(true)?>/media/blog/<?=$art->image?>" class="blog-img">
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>
<!-- End page content --> 
<!-- InstanceEndEditable <h4 class="text-center margintop50">We are a different kind of financial advice company.</h4>-->