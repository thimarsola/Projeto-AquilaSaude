<div class="grid">
    <div class="container">
        <!-- row -->
        <div class="grid__row">
            <!--content-->
            <article class="grid__row__content">
		        <?= get_the_content() ?>
            </article>
            <!--end of content-->

            <!--aside-->
	        <?php get_template_part('template-parts/specialties/specialties', 'aside'); ?>
            <!--end of aside-->
        </div>
        <!-- end of row -->
    </div>
</div>