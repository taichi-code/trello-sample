<?PHP
ini_set("display_errors", 1);
error_reporting(E_ALL);
session_start();
require_once('./dbconnect.php');
require_once('./functions.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['submit'])) {
        create($_POST['submit']);
    } else if (isset($_POST['delete'])) {
        delete($_POST['id']);
    } else if (isset($_POST['update'])) {
        update($_POST['id'], $_POST['title']);
    }
    header('Location: ' . $_SERVER['SCRIPT_NAME']);
    exit;
}
$DATA = fetchAll();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initiascale=1.0,user-scalable=no">
    <meta name="description" content="サイト説明" />
    <title>サイトタイトル</title>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="js/swiper/swiper.min.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="./css/top.css">
</head>

<body>
    <!-- HEADER-------------------------- -->
    <header class="header">
    </header>


    <!-- MAIN---------------------------- -->
    <main class="main">
        <section class="content-wrapper">
            <h2>TODOリスト</h2>
            <form method="post" class="create-form">
                <input type="text" name="submit" required>
                <button type="submit">作成する</button>
            </form>

            <table>
                <?php if ($DATA) : ?>
                    <tr>
                        <th bgcolor="#808080" rowspan="2">
                            <p>TODO</p>
                        </th>
                        <th bgcolor="#808080" rowspan="2">
                            <p>作成日</p>
                        </th>
                        <th bgcolor="#808080" colspan="2" id="action">
                            <p>操作</p>
                        </th>
                    </tr>
                    <tr>
                        <th bgcolor="#808080" headers="action">
                            <p>更新</p>
                        </th>
                        <th bgcolor="#808080" headers="action">
                            <p>削除</p>
                        </th>
                    </tr>
                <?php endif; ?>

                <?php foreach ((array)$DATA as $raw) : ?>
                    <form method="post">
                        <tr>
                            <input type="hidden" name="id" value="<?php echo $raw['id']; ?>">
                            <td>
                                <input type="text" name="title" value="<?php echo $raw['title']; ?>" required>
                            </td>
                            <td>
                                <?php echo $raw['created']; ?>
                            </td>
                            <td>
                                <button type="submit" name="update">更新する</button>
                            </td>
                            <td>
                                <button type="submit" name="delete">削除する</button>
                            </td>
                        </tr>
                    </form>
                <?php endforeach; ?>

            </table>
        </section>

    </main>
    <!-- FOOTER-------------------------- -->
    <footer class="footer">

    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/swiper/swiper.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>