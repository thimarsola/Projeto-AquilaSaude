<section class="hero">
    <!-- row -->
    <div class="hero__row">
        <!-- image -->
        <div class="hero__row__image">
            <picture>
                <source srcset="<?= get_template_directory_uri(); ?>/assets/images/imagem-home.webp" type="image/webp">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/imagem-home.jpg" alt="Clínica <?= SITE['name']; ?>" loading="lazy">
            </picture>
        </div>
        <!-- end of image -->
        <!-- content -->
        <div class="hero__row__content">
            <!-- image -->
            <div class="hero__row__content__image">
                <picture>
                    <source srcset="<?= get_template_directory_uri(); ?>/assets/images/clinica-aquila.webp" type="image/webp">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/clinica-aquila.jpg" alt="Clínica <?= SITE['name']; ?>" loading="lazy">
                </picture>
            </div>
            <!-- end of image -->
            <!-- text -->
            <div class="hero__row__content__text">
                <!-- header -->
                <header class="hero__row__content__text__header">
                    <h2>O <span>Sorriso</span> que você sempre quis<span>!</span></h2>
                </header>
                <!-- end of header -->
                <p>Aqui na Áquila Saúde, oferecemos um atendimento rápido e eficiente. Trabalhamos com equipamentos de alta tecnologia e profissionais qualificados.</p>
                <!-- link -->
                <div class="hero__row__content__text__link">
                    <a href="#quem-somos">
                        <i class="aquila-down-arrow"></i>
                    </a>
                </div>
                <!-- end of link -->
            </div>
            <!-- end of text -->
        </div>
        <!-- end of content -->
    </div>
    <!-- end of row -->
</section>