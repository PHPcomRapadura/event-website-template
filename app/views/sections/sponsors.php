<section id="sponsors" class="main special">
    <header class="major">
        <h2>Patrocinadores</h2>
    </header>
    <ul class="features">

        <?php foreach ($sponsors as $sponsor) : ?>
            <li>
                <span class="image">
                    <img style="width: 90% !important;" src="<?= $this->e($sponsor->logo) ?>" alt="<?= $this->e($sponsor->name) ?>" />
                </span>
                <h2><?= $this->e($sponsor->name) ?></h2>
                <h4><?= $this->e($sponsor->type) ?></h4>
                <p><?= $this->e($sponsor->about) ?></p>

                <a href="<?= $this->e($sponsor->website) ?>" target="_blank" class="button small">Site</a>
            </li>
        <?php endforeach ?>
    </ul>
    <ul class="actions special">
        <li><a href="#" class="button primary">Seja patrocinador!</a></li>
    </ul>
</section>
</div>