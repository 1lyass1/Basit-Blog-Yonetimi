<?php
session_start();

require '../includes/config.php';
require '../includes/function.php';

checkAdminAccess();

include '../includes/header.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="admin_dashboard.php?page=add_blog" class="list-group-item list-group-item-action">Yeni Blog Ekle</a>
                    <a href="admin_dashboard.php?page=lists_blog" class="list-group-item list-group-item-action">Blogları Listele</a>
                    <a href="admin_dashboard.php?page=lists_comments" class="list-group-item list-group-item-action">Yorumları Listele</a>
                    <a href="admin_dashboard.php?page=lists_users" class="list-group-item list-group-item-action">Kullanıcıları Listele</a>
                </div>
            </div>
            <div class="col-md-9">
                <?php
                    switch($page){
                        case 'add_blog':
                            include 'add_blog.php';
                            break;
                        case 'lists_blog':
                            include 'lists_blogs.php';
                            break;
                        case 'lists_comments':
                            include 'list_comments.php';
                            break;
                        case 'lists_users':
                            include 'list_users.php';
                            break;
                        default:
                        echo '<h1>Admin Paneli</h1><p>Bu alanda admin paneli içerikleri yer alacak.</p>';
                        break;
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>