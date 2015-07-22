<?php $this->title = "Create Book"; ?>
<h1><?php echo $this->title; ?></h1>
<?php echo $this->render('_form', ['bookModel' => $bookModel, 'categories' => $categories]); ?>