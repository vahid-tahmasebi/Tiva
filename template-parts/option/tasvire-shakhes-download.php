<div class="card-wrapper main-content-inner">
    <div class="box-img-shakhes-download">
        <?php if (intval($post_thumbnail_mata) !== 1): ?>
        <div class="box-img-shakhes-download <?php echo tiva_get_css_class_post_format(get_the_ID()); ?>">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'tiva-post-thum'); ?>"
                 class="box-img-shakhes-download" alt="<?php echo the_title(); ?>"
                 title="<?php echo the_title(); ?>">
        </div>
        <?php endif; ?>


        <div class="bax-buttom-tasvir-shakhes">
            <div>

                <a title="پیش نمایش آنلاین" href="  <?php echo site_url(); ?>" class="bottom-box-download">
                    <i class="fa fa-user-plus" aria-hidden="true"></i> پیش نمایش آنلاین
                </a>

                <a title="تصاویر محصول" href="  <?php echo site_url(); ?>" class="bottom-box-download">
                    <i class="fa fa-user-plus" aria-hidden="true"></i>تصاویر محصول
                </a>

            </div>
        </div>
    </div>
</div>

