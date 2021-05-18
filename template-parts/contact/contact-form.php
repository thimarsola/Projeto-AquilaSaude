<section class="form">
    <div class="container">

        <!-- row -->
        <div class="form__row">

            <!-- information -->
            <div class="form__row__information">

                <!-- logo -->
                <div class="form__row__information__logo">
                    <i class="aquila-logo"></i>
                </div>
                <!-- end of logo -->

                <!-- address -->
                <address class="form__row__information__address">
                    <i class="aquila-target"></i>
                    <a rel="nofollow" href="<?= CONTACT['addressLink']; ?>" title="Venha conhecer a nossa clínica" target="_blank">
						<?= CONTACT["address"]; ?>
                    </a>
                </address>
                <!-- end of address -->

                <!-- phones -->
                <address class="form__row__information__phone">
                    <i class="aquila-phone"></i>
                    <a rel="nofollow" href="tel:<?= formatPhone(CONTACT["phone"]["01"]); ?>" title="Vamos conversar?"><?= CONTACT["phone"]["01"]; ?></a>
                    |
                    <a rel="nofollow" href="tel:<?= formatPhone(CONTACT["phone"]["02"]); ?>" title="Vamos conversar?"><?= CONTACT["phone"]["02"]; ?></a>
                </address>
                <!-- end of phones -->

                <address class="form__row__information__mail">
                    <i class="aquila-mail"></i>
                    <a rel="nofollow" href="mailto:<?= CONTACT["mail"]; ?>" target="_blank" title="Vamos conversar?"><?= CONTACT["mail"]; ?></a>
                </address>

            </div>
            <!-- end of information -->

            <!-- form -->
            <div class="form__row__form">

                <!-- header -->
                <header class="form__row__form__header">
                    <h2>Entre em contato conosco</h2>
                </header>
                <!-- end of header -->

                <form id="form" method="POST" enctype="multipart/form-data">
                    <!-- group -->
                    <div class="form__row__form__group">
                        <label for="name" class="d-none">Nome</label>
                        <input type="text" name="name" placeholder="Nome" id="name" required>
                    </div>
                    <!-- end of group -->

                    <!-- group -->
                    <div class="form__row__form__group">
                        <label for="email" class="d-none">E-mail</label>
                        <input type="email" name="email" placeholder="E-mail" id="email" required>
                    </div>
                    <!-- end of group -->

                    <!-- group -->
                    <div class="form__row__form__group">
                        <label for="phone" class="d-none">Telefone</label>
                        <input type="tel" name="phone" placeholder="Telefone" id="phone">
                    </div>
                    <!-- end of group -->

                    <!-- group -->
                    <div class="form__row__form__group">
                        <label for="mobile" class="d-none">Celular</label>
                        <input type="tel" name="mobile" placeholder="Celular" id="mobile">
                    </div>
                    <!-- end of group -->

                    <!-- group -->
                    <div class="form__row__form__group">
                        <label for="subject" class="d-none">Assunto</label>
                        <input type="text" name="subject" placeholder="Assunto" id="subject">
                    </div>
                    <!-- end of group -->

                    <!-- group -->
                    <div class="form__row__form__group">
                        <label for="message" class="d-none">Mensagem</label>
                        <textarea id="message" name="message" cols="50" rows="4" placeholder="Mensagem"></textarea>
                    </div>
                    <!-- end of group -->

                    <!-- status -->
                    <div class="form__row__form__status">
                        <div class="d-none form__row__form__status--loading">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/spinner.svg" alt="Carregando" loading="lazy">
                        </div>
                    </div>
                    <!-- end of status -->

                    <!-- button -->
                    <div class="form__row__form__button">
                        <button id="button" type="submit" name="submit" value="submit" class="btn btn-blue-500">Enviar mensagem</button>
                    </div>
                    <!-- end of button -->
                </form>


            </div>
            <!-- end of form -->
        </div>
        <!-- end of row -->

    </div>
</section>