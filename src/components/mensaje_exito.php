<div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" ></button>
    <strong>¡Bien hecho!</strong>
    <?php
    foreach ($messages as $message) {
        echo $message;
    }
    ?>
</div>