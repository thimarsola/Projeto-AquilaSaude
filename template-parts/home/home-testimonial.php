<section class="testimonial">
    <div class="container">
        <!-- header -->
        <header class="testimonial__header">
            <h2>O que os clientes dizem sobre a Clínica Áquila!</h2>
        </header>
        <!-- end of header -->

        <!-- carousel -->
        <div class="testimonial__carousel owl-carousel">
            <?php
                    $testimonial = file_get_contents(__DIR__ . "/../../includes/testimonial.json");
                    $testimonialList = json_decode($testimonial, true);

                    foreach($testimonialList['testimonial'] as $testimony) :
                ?>
            <!-- item -->
            <div class="testimonial__carousel__item">
                <p><?= $testimony["description"]; ?></p>
                <p><?= $testimony["name"]; ?></p>
            </div>
            <!-- end of item -->

            <?php endforeach; ?>
        </div>
        <!-- end of carousel -->
    </div>
</section>