<?php 
	include_once 'apps/model/class.article.php';

	$article 	= new Article();

	try {
		$id 	= $_GET['delete_id'];
		if ($article->delete($id)) {
			
		}
		$article->redirect($baseUrl . 'index.php?page=articles&action=articles');
	} catch (Exception $e) {
		echo $e->getMessage();
	}
 ?>