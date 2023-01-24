<section id="schedule" class="main special">
    <header class="major">
        <h2>Programação</h2>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Horário</th>
                        <th>Atividade</th>
                        <th>Facilitador</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($schedules as $schedule) : ?>
                        <tr>
                            <td><?= $this->e($schedule->time) ?></td>
                            <td><?= $this->e($schedule->activity) ?></td>
                            <td><?= $this->e($schedule->facilitator) ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </header>
    <footer class="major">
        <ul class="actions special">
            <li><a href="#register" class="button">Inscrições</a></li>
        </ul>
    </footer>
</section>