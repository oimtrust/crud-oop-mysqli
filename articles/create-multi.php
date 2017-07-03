<?php
    if(!defined('RESTRICTED'))exit('No direct script access allowed!');

    include_once 'apps/model/class.article.php';

	$article 	= new Article();

	if (isset($_POST['btn_save_multi_article'])) {
		$title 		= $_POST['title'];
		$content	= $_POST['content'];
		$author 	= $_POST['author'];

		$titlem 	= $_POST['titlem'];
		$contentm 	= $_POST['contentm'];
		$authorm 	= $_POST['authorm'];

		$created_at	= date('Y-m-d H:i:s');
		$updated_at	= date('Y-m-d H:i:s');

		if ($title == "") {
			$error[] 	= "Title must be filled!";
		}
		elseif ($content == "") {
			$error[] 	= "Content must be filled";
		}
		elseif ($author == "") {
			$error[] 	= "Author must be filled";
		}
		elseif ($titlem == "") {
			$error[] 	= "Title for Article two must be filled";
		}
		elseif ($contentm == "") {
			$error[] 	= "Content for Article two must be filled";
		}
		elseif ($authorm == "") {
			$error[] 	= "Author for Article two must be filled";
		}
		else {
			try {
				if ($article->create($title, $content, $author, $created_at, $updated_at)) {
					
				 }
				elseif ($article->create_multi($titlem, $contentm, $authorm, $created_at, $updated_at)) {
					
				}
				$article->redirect($baseUrl . 'index.php?page=articles&action=articles&saved');
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}
	}

	include 'apps/views/layouts/header.view.php';
	include 'apps/views/articles/menu.view.php';
	include 'apps/views/articles/create-multi.view.php';
	include 'apps/views/layouts/footer.view.php';
