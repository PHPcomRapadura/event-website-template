<section id="speakers" class="main special">
    <header class="major">
        <h2>Palestrantes</h2>
    </header>
    <ul class="features">

        <?php foreach ($speakers as $speaker) : ?>
            <li>
                <span class="image">
                    <img style="width: 90% !important;" src="<?= $this->e($speaker->image) ?>" alt="<?= $this->e($speaker->name) ?>" />
                </span>
                <h3><?= $this->e($speaker->name) ?></h3>
                <p><?= $this->e($speaker->about) ?></p>
                
                <a href="<?= $this->e($speaker->sm_github) ?>" style="margin-right: 15px"><i class="fa-brands fa-github"></i></a>
                <a href="<?= $this->e($speaker->sm_instagram) ?>" style="margin-right: 15px"><i class="fa-brands fa-instagram"></i></a>
                <a href="<?= $this->e($speaker->sm_twitter) ?>" style="margin-right: 15px"><i class="fa-brands fa-twitter"></i></a>
            </li>
        <?php endforeach ?>
    </ul>
        <ul class="actions special">
            <li><a href="#local" class="button">Local</a></li>
        </ul>
</section>