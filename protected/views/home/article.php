<div class="containerfull">
    <div class="row-fluid art-cont">
        <div class="art-holder span10 offset1">
            <div class="span8">
                <label class="art-title"><?= $model->title ?></label>
            </div>
        </div>
        <img src="<?= Yii::app()->request->getBaseUrl(true) ?>/media/blog/<?= $model->image ?>" class="width100per">
    </div>
    <div class="row-fluid margintop30">
        <div class="span8 offset2 paddingfull">
            <div class="black-txt">
                <?= $model->details ?>
            </div>
            <p class="text-center margintop30"><img src="<?= Yii::app()->request->getBaseUrl(true) ?>/img/red-line.png"></p>
            <p class="text-center">
                <span class='st_facebook_vcount' displayText='Facebook'></span>
                <span class='st_twitter_vcount' displayText='Tweet'></span>
                <span class='st_googleplus_vcount' displayText='Google +'></span>
                <span class='st_linkedin_vcount' displayText='LinkedIn'></span>
                <span class='st_pinterest_vcount' displayText='Pinterest'></span>
                <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
                <script type="text/javascript">stLight.options({publisher: "6269aa7f-a4c0-4854-9b77-73e1f74d5a30", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
            </p>
        </div>
    </div>
</div>