<section class="team">
    <div class="container">
        <!-- row -->
        <div class="team__row">
            <!-- image -->
            <div class="team__row__image">
                <picture>
                    <source srcset="<?= get_template_directory_uri(); ?>/assets/images/profissionais-aquila.webp" type="image/webp">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/profissionais-aquila.png" alt="Profissionais Áquila Saúde" loading='lazy'>
                </picture>
            </div>
            <!-- end of image -->

            <!-- body -->
            <div class="team__row__body">
                <!-- header -->
                <header class="team__row__body__header">
                    <h2>Profissionais Experientes e Qualificados</h2>
                </header>
                <!-- end of header -->

                <p>A <b>clínica Áquila Saúde</b> possui uma estrutura diferenciada, tecnologia de última geração e reúne profissionais atualizados e altamente capacitados de todas as áreas da Odontologia.</p>

                <!-- link -->
                <div class="team__row__body__link">
                    <a href="<?= get_permalink(get_page_by_title('Profissionais')); ?>" class="btn btn-blue-500" target="_blank">Conheça a nossa Equipe</a>
                </div>
                <!-- end of link -->
            </div>
            <!-- end of body -->
        </div>
        <!-- end of row -->
    </div>
</section>