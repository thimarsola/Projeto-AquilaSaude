<section id="especialidades" class="specialties">
    <!-- container -->
    <div class="specialties__content">
        <div class="container">
            <!-- header -->
            <header class="specialties__content__header">
                <h2>Clínica Áquila</h2>
                <p>A melhor odontologia do Grande ABC</p>
                <hr>
            </header>
            <!-- end of header -->

            <p>Oferecemos os principais serviços odontológicos, com uma infraestrutura de primeira linha, utilizando
                equipamentos modernos, em um ambiente confortável e seguro.</p>
        </div>
    </div>
    <!-- end of container -->

    <div class="container">
        <!-- grid -->
        <div class="specialties__grid">

            <?php
                $jsonSpecialties = file_get_contents(__DIR__ . "/../../includes/specialties.json");
                $specialtiesList = json_decode($jsonSpecialties, true);

                foreach($specialtiesList['specialties'] as $specialty) :
            ?>

            <!-- card -->
            <article class="specialties__grid__card">
                <!-- header -->
                <header class="specialties__grid__card__header">
                    <i class="aquila-<?= $specialty['vector']; ?>"></i>
                    <h3><?= $specialty['name']; ?></h3>
                </header>
                <!-- end of header -->

                <!-- body -->
                <div class="specialties__grid__card__body">
                    <p><?= $specialty['description']; ?></p>
                </div>
                <!-- end of body -->

                <!-- link -->
                <div class="specialties__grid__card__link">
                    <a href="<?= get_permalink(get_page_by_title($specialty['name'])); ?>" class="btn btn-blue-500"
                        target="_blank" title="Saiba Mais">Saiba mais</a>
                </div>
                <!-- end of link -->
            </article>
            <!-- end of card -->

            <?php endforeach; ?>

        </div>
        <!-- end of grid -->
    </div>
</section>