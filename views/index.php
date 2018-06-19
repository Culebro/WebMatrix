<?php
        $templateManager = new League\Plates\Engine('views');
        echo $templateManager->render('index', array('titulo' => 'Principal'))
?>
<?php  $this->layout('template/index')?>










