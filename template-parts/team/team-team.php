<div class="team">
	<div class="container">

		<!-- row -->
		<div class="team__row">
            <?php
                $jsonTeam = file_get_contents(__DIR__ . "/../../includes/team.json");
                $teamList = json_decode($jsonTeam, true);

                foreach ($teamList['team'] as $doctor):
            ?>

                <!-- card -->
                <article class="team__row__card">
                    <!-- image -->
                    <div class="team__row__card__image">
                        <source srcset="<?= get_template_directory_uri(); ?>/assets/images/<?= $doctor['image'] ?>.webp" type="image/webp">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/<?= $doctor['image'] ?>.png" alt="<?= $doctor['name']; ?>" loading="lazy">
                    </div>
                    <!-- end of image -->

                    <!-- body -->
                    <div class="team__row__card__body">
                        <!-- header -->
                        <header class="team__row__card__body__header">
                            <h2><?= $doctor['name']; ?></h2>
                        </header>
                        <!-- end of header -->
                        <p><?= $doctor['specialty']; ?></p>
                        <p><small><?= $doctor['registry']; ?></small></p>
                    </div>
                    <!-- end of body -->
                </article>
                <!-- end of card -->

            <?php endforeach; ?>
		</div>
		<!-- end of row -->

	</div>
</div>