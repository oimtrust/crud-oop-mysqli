<?php
	include_once 'apps/model/class.connection.php';

	$connect 	= new Connection();

	$id 		= $_GET['detail_id'];

	$stmt 		= $connect->execute(
		"SELECT title, content, author, created_at, updated_at FROM articles WHERE id='{$id}'"
		);

	$data 		= $stmt->fetch_object();

	include 'apps/views/layouts/header.view.php';
	include 'apps/views/articles/menu.view.php';
	include 'apps/views/articles/detail.view.php';
	include 'apps/views/layouts/footer.view.php';
 ?>