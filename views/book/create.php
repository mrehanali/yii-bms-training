<?php
echo $this->title = 'create';
?>
    <p>
        Book Create
    </p>
<?= $this->render('_form-create',['model'=>$model]); ?>