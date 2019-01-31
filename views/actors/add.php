<?php ob_start(); ?>
    
    <h1>Ajout d'un acteur</h1>

    <form action="save" method="POST">

        <input class="form-control"type="text" name="firstname" placeholder="Prénom">

        <input class="form-control"type="text" name="lastname" placeholder="Nom">
        
        <button type="submit" class="btn btn-primary">Envoyer</button>
    
    </form>
    
<?php $content = ob_get_clean(); ?>
<?php require 'views/template.php' ?>