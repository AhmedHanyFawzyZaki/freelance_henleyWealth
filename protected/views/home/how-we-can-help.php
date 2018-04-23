<!-- InstanceBeginEditable name="content" -->
<!-- Begin page content -->
<div class="containerfull">
    <?php
    echo Page::model()->findByPk(3)->details;
    ?>
    <script>
        $(document).ready(function () {
            $('.cover-img').hover(function () {
                $(this).find("label").slideUp(700);
            });
            $('.cover-img').mouseleave(function () {
                $(this).find("label").slideDown(700);
            });
        });
    </script>
</div>
<!-- End page content --> 
<!-- InstanceEndEditable <h4 class="text-center margintop50">We are a different kind of financial advice company.</h4>-->