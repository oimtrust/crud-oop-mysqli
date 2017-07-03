<?php 
	include_once 'apps/model/class.article.php';

	$article 	= new Article();

	// $id 		= $_GET['edit_id'];

	// $stmt 		= $article->execute("SELECT id, title, content, author FROM articles WHERE id='{$id}'");
	// $data 		= $stmt->fetch_object();
	
	if (isset($_GET['edit_id']) && !empty($_GET['edit_id'])) {
		$id 		= $_GET['edit_id'];
		$stmt 		= $article->execute("SELECT id, title, content, author FROM articles WHERE id='{$id}'");
		$data 		= $stmt->fetch_object();
	}
	else {
		$article->redirect($baseUrl . 'index.php?page=articles&action=articles&error');
	}

	if (isset($_POST['btn_update_article'])) {
		$id 		= $_POST['id'];
		$title 		= $_POST['title'];
		$content	= $_POST['content'];
		$author 	= $_POST['author'];
		$updated_at = date('Y-m-d H:i:s');
		
		if ($id == "") {
			$error[] 	= "Opss...! Something went wrong! Refresh your browser and try again.";
		}
		elseif ($title == "") {
			$error[] 	= "Title must be filled!";
		}
		elseif ($content == "") {
			$error[] 	= "Content must be filled!";
		}
		elseif ($author == "") {
			$error[] 	= "Author must be filled!";
		}
		else {
			try {
				if ($article->update($title, $content, $author, $updated_at, $id)) {
					
				}
				$article->redirect($baseUrl . 'index.php?page=articles&action=articles&saved');
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}
	}

	include 'apps/views/layouts/header.view.php';
	include 'apps/views/articles/menu.view.php';
	include 'apps/views/articles/edit.view.php';
	include 'apps/views/layouts/footer.view.php';
 ?>