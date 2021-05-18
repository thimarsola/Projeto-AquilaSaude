<aside class="grid__row__aside">
    <!-- logo -->
    <div class="grid__row__aside__logo">
        <i class="aquila-logo"></i>
    </div>
    <!-- end of logo -->

    <!-- list -->
    <div class="grid__row__aside__list">
        <!-- header -->
        <header class="grid__row__aside__list__header">
            <h2>Conheça as nossas especialidades</h2>
        </header>
        <!-- end of header -->

        <ul>
		    <?php
		    $pages = get_pages(['sort_order' => 'acs', 'exclude' => [76, 74]]);
		    foreach ($pages as $page):
			    ?>
                <li <?= $page->post_title  == get_the_title() ? "class='grid__row__aside__list--active'" : ''?>>
				<span>
                    <a href="<?= $page->guid; ?>"><?= $page->post_title; ?></a>
				</span>
                </li>

		    <?php endforeach; ?>
        </ul>
    </div>
    <!-- end of list -->
</aside>