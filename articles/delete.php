<?php 
	include_once '../apps/model/class.article.php';

	$article 	= new Article();

	try {
		$id 	= $_GET['delete_id'];
		if ($article->delete($id)) {
			
		}
		$article->redirect('articles.php');
	} catch (Exception $e) {
		echo $e->getMessage();
	}
 ?>