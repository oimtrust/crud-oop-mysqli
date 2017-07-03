<?php
    if(!defined('RESTRICTED'))exit('No direct script access allowed!');

    include_once 'apps/model/class.article.php';

	$article 	= new Article();

	include 'apps/views/layouts/header.view.php';
	include 'apps/views/articles/menu.view.php';
	include 'apps/views/articles/index.view.php';
	include 'apps/views/layouts/footer.view.php';
