<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'home';


ob_start();


switch ($page) {
    case 'home':
        include 'home.php';
        break;
    case 'posts':
        include 'posts.php';
        break;
    case 'about':
        include 'about.php';
        break;
    case 'contact':
        include 'contact.php';
        break;
    case 'add_post':
        include 'add_post.php';
        break;
    default:
        include 'home.php';
        break;
}


$content = ob_get_clean();


$pageTitle = ucfirst($page);
?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?> | Väike Retseptisahtel</title>
    <link rel="icon" href="https://i.pinimg.com/originals/0d/ec/ba/0decba8b2aae254082331aac32259d52.jpg" type="image/x-icon">
    
    <link rel="stylesheet" href="/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <header>
        <?php include 'navbar.php'; ?>
    </header>
    <main>
        <?php echo $content; ?>
    </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>
