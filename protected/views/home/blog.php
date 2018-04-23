<div class="containerfull">
    <?php
    if ($blogs) {
        foreach ($blogs as $bl) {
            ?>
            <div class="row-fluid art-cont">
                <div class="art-holder span10 offset1">
                    <div class="span8">
                        <label class="art-title"><?=$bl->title?></label>
                        <p class="art-desc"><?=$bl->introduction?></p>
                    </div>
                    <div class="span4">
                        <a href="<?= Yii::app()->request->getBaseUrl(true) ?>/article-<?=$bl->slug?>" class="art-btn">Read article</a>
                    </div>
                </div>
                <img src="<?= Yii::app()->request->getBaseUrl(true) ?>/media/blog/<?=$bl->image?>" class="width100per">
            </div>
            <?php
        }
    }
    ?>
</div>