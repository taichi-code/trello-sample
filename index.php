<?PHP
ini_set("display_errors", 1);
error_reporting(E_ALL);
session_start();
require_once('./dbconnect.php');
require_once('./functions.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['submit'])) {
        create($_POST['submit']);
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
            <button id='open-form'>リストを追加する</button>
            <form method="post" class="create-form" id='show-form' style="display: none;">
                <input type="text" name="submit" required>
                <button type="submit">リストを追加</button>
            </form>

            <div class="board-content">
                <div class="board" id="board">
                    <?php if ($DATA) : ?>
                        <?php foreach ((array)$DATA as $raw) : ?>
                            <div class="board-wrap">
                                <div class="board-list">
                                    <h3><?php echo ($raw['list_title']); ?></h3>
                                    <input type="text" name="card_title" placeholder="＋ カードを追加する">
                                    <button class="add-card" type="submit">カードを追加</button>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>


    </main>
    <!-- FOOTER-------------------------- -->
    <footer class="footer">

    </footer>


    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="js/swiper/swiper.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>