
<?php require_once dirname(__DIR__) .'/header.php' ?>
        <h1>Ajouter une Espèce</h1>
       <?php if(isset($flashMessage)) : ?>
            <?= $flashMessage ?>

        <?php endif ?>



        <form action="species_add.php" method="post">
            <div>
                <label for="species">Nom de l'Espèce:</label> <br>
                <input type="text" id="species" name="species" required>
            </div>
            <button type="submit">Ajouter</button>
        </form>
<?php require_once dirname(__DIR__) .'/footer.php' ?>