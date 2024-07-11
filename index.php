<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MonaFresh</title>
    <link rel="stylesheet" href="upload/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://accounts.google.com/gsi/client" async defer></script>
</head>
<body>
    <!-- Header -->
    <?php include 'view/php/header.php'; ?>
    <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
            case 'home':
                include 'view/php/home.php';
                break;
            case 'about':
                include 'view/php/about.php';
                break;
            case 'store':
                include 'view/php/store.php';
                break;
            case 'knowledge':
                include 'view/php/knowledge.php';
                break;
            case 'directory':
                include 'view/php/directory.php';
                break;
            case 'contact':
                include 'view/php/contact.php';
                break;
            default:
                include 'view/php/home.php';
            }
        } else {
            include 'view/php/home.php';
        }
    ?>
    <!-- Footer -->
    <?php include 'view/php/footer.php'; ?>
</body>
</html>
