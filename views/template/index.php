<?php require_once $_SERVER['DOCUMENT_ROOT']."/Matrix/WebMatrix/vendor/autoload.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php echo $this->e('titulo') ?>
    </head>
    <body>
        <div class="container-fluid">
            <?php  $this->section('content') ?>
        </div>
        <script src="/WebMatrix/assets/js/jquery.min.js"></script>
        <?php $this->section('scripts') ?>
    </body>
</html>