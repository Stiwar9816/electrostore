<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong>Error!</strong>
    <?php
    foreach ($errors as $error) {
        echo $error;
    }
    ?>
</div>