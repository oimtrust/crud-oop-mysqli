<?php
    define('RESTRICTED', 1);

    //Ensure that a session exists (just in case)
    if (!session_id())
    {
        session_start();
    }

    require 'apps/config/app.php';
    require 'apps/model/class.article.php';

    //here our routes
    $page   = (!empty($_GET['page'])) ? $_GET['page'] : null;
    $action = (!empty($_GET['action'])) ? $_GET['action'] : null;

    switch ($page)
    {
        case 'articles':
            if ($action == 'create')
            {
                require 'articles/create.php';
            }
            elseif ($action == 'createMulti')
            {
                require 'articles/create-multi.php';
            }
            elseif ($action == 'delete')
            {
                require 'articles/delete.php';
            }
            elseif ($action == 'detail')
            {
                require 'articles/detail.php';
            }
            elseif ($action == 'update')
            {
                require 'articles/edit.php';
            }
            else
            {
                require 'articles/articles.php';
            }
            break;

            default:
                require 'home.php';
                break;
    }
