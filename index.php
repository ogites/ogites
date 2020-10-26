<?php  require_once 'header.php'; ?>

<body>
    <input class="c-checkbox" type="checkbox" id="checkbox">
    <div class="c-formContainer">
        <form class="c-form" action="">
            <input class="c-form__input" placeholder="Trouver un gîte" type="text" required>
            <label class="c-form__buttonLabel" for="checkbox">
                <button class="c-form__button" type="button">Rechercher</button>
            </label>
            <label class="c-form__toggle" for="checkbox" data-title="Recherche"></label>
        </form>
    </div>
</body>

<?php require_once 'footer.php'; ?> 