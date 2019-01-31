<?php ob_start(); ?>

    <h1>Liste des acteurs</h1>

    <ul class="list-group">
        
        <?php foreach ($listActs as $a) : ?>

            <li class="list-group-item"><a href="<?= url('actors/' . $a['id']) ?>"><?= $a['firstname']; ?> <?= $a['lastname'] ?></a></li>

        <?php endforeach; ?>

    </ul>

    <a href="<?= url('actors/add') ?>" class="btn btn-primary" role="button">Ajouter un acteur</a>

<?php $content = ob_get_clean(); ?>
<?php require 'views/template.php'; ?>