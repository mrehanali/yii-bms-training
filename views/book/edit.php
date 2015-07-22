<?php $this->title = "Edit Book"; ?>
<h1>Edit Book</h1>
<?php echo $this->render('_form', ['bookModel' => $bookModel, 'categoriesModel' => $categoriesModel, 'categories' => $categories]); ?>