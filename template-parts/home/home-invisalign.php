<section class="invisalign">
    <div class="container">
        <!-- header -->
        <header class="d-none">
            <h2>Invisalign</h2>
        </header>
        <!-- end of header -->

        <!-- row -->
        <div class="invisalign__row">
            <!-- card -->
            <article class="invisalign__row__card">
                <!-- image -->
                <div class="invisalign__row__card__image">
                    <picture>
                        <source src="<?= get_template_directory_uri(); ?>/assets/images/bruno-gagliasso.webp"
                            type="image/webp">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/bruno-gagliasso.png"
                            alt="Bruno Gagliasso - Insivalign" loading="lazy">
                    </picture>
                </div>
                <!-- end of image -->

                <!-- body -->
                <div class="invisalign__row__card__body">
                    <!-- header -->
                    <header class="invisalign__row__card__body__header">
                        <h3>Você conhece o tratamento Invisalign<sup>&REG;</sup>?</h3>
                    </header>
                    <!-- end of header -->

                    <p>O Invisalign é um sistema que utiliza alinhadores transparentes para corrigir as posições
                        dentárias.</p>
                    <br>
                    <p>Usando o scanner iTero Element<sup>&REG;</sup>, seu ortodontista poderá digitalizar o seu sorriso
                        em 3D de forma rápida e precisa e poderá fazer um mapeamento do seu tratamento personalizado
                        especialmente para você.</p>
                </div>
                <!-- end of body -->
            </article>
            <!-- card -->
        </div>
        <!-- end of row -->

        <!-- row -->
        <div class="invisalign__row">
            <!-- card -->
            <article class="invisalign__row__card">
                <!-- body -->
                <div class="invisalign__row__card__body">
                    <!-- header -->
                    <header class="invisalign__row__card__body__header">
                        <h3>Quanto custa o Invisalign?</h3>
                    </header>
                    <!-- end of header -->

                    <p>O valor do tratamento ortodôntico com Invisalign é determinado pelas necessidades do seu caso,
                        como o tipo de correção que será feita, a complexidade e a duração do tratamento. Somente o
                        ortodontista, após uma avaliação, poderá informar o valor do tratamento com Invisalign.</p>

                    <!-- link -->
                    <div class="invisalign__row__card__body__link">
                        <a rel="nofollow"
                            href="https://api.whatsapp.com/send?phone=55<?= formatPhone(CONTACT["whatsapp"]["number"]); ?>&text=<?= urlencode("Olá, gostaria de agendar uma avaliação para o Invisalign");?>"
                            class="btn btn-blue-500" target="_blank" title="Vamos agendar?">Agende sua avaliação</a>
                    </div>
                    <!-- end of link -->
                </div>
                <!-- end of body -->

                <!-- image -->
                <div class="invisalign__row__card__image">
                    <picture>
                        <source src="<?= get_template_directory_uri(); ?>/assets/images/aparelho-invisalign.webp"
                            type="image/webp">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/aparelho-invisalign.jpg"
                            alt="Bruno Gagliasso - Invisalign" loading="lazy">
                    </picture>
                </div>
                <!-- end of image -->
            </article>
            <!-- card -->
        </div>
        <!-- end of row -->
    </div>
</section>