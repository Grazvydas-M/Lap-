<?php if (!empty($messages)) : ?>
<div id="successMessage">
    <?php foreach ($messages as $message) : ?>
    <div class="alert alert-<?= $message['type'] ?>" role="alert">
        <?= $message['msg'] ?>
    </div>
    <?php endforeach ?>
</div>
<?php endif ?>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
    $("#successMessage").delay(3000).slideUp(300);
});
</script>