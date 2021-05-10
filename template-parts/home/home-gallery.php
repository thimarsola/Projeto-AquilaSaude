<section class="gallery">
    <div class="container">
        <!-- header -->
        <header class="gallery__header">
            <h2>Conheça o nosso espaço</h2>
            <hr>
        </header>
        <!-- end of header -->

        <!-- grid -->
        <div class="gallery__grid">
            <!-- card -->
            <div class="gallery__grid__card">
                <?php
                    for($img=1; $img < 7; $img++){
                ?>

                <a href="<?= get_template_directory_uri(); ?>/assets/images/galeria-aquila-0<?= $img; ?>.jpg"
                    class="gallery__grid__card__image">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/galeria-aquila-0<?= $img; ?>.jpg"
                        alt="Conheça o nosso espaço - Áquila Saúde" loading="lazy">
                </a>

                <?php
                    }
                ?>
            </div>
            <!-- end of card -->
        </div>
        <!-- end of grid -->
    </div>
</section>