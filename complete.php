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
        <!-- <div class="header__logo">
            <h1 class="logo">
                <a href="#" class="logo__link"><img src="images/logo.svg" class="logo__img" alt="PDN DESIGN"></a>
            </h1>
        </div>
        <nav class="global-nav">
            <ul class="global-nav__list">
                <li class="global-nav__item">
                    <a href="#" class="global-nav__link">news</a>
                </li>
                <li class="global-nav__item">
                    <a href="#" class="global-nav__link">service</a>
                </li>
                <li class="global-nav__item">
                    <a href="#" class="global-nav__link">works</a>
                </li>
                <li class="global-nav__item">
                    <a href="#" class="global-nav__link">company</a>
                </li>
                <li class="global-nav__item">
                    <a href="#" class="global-nav__link">recruit</a>
                </li>
                <li class="global-nav__item">
                    <a href="#" class="global-nav__link">contact</a>
                </li>
            </ul>
        </nav>
        <button type="button" class="btn-menu">
            <span class="btn-menu__line"></span>
        </button> -->
    </header>


    <!-- MAIN---------------------------- -->
    <main class="main">
        <div class="content-wrapper">
            <form action="complete.php" method="POST">
                <h2>登録完了ページ</h2>
                <div class="input-area">
                    <p class="input-title">予定タイトル</p>
                    <p class="complete_text"><?php echo($_POST['todo-title']); ?></p>
                </div>
                <div class="input-area">
                    <p class="input-title">優先度</p>
                    <p class="complete_text"><?php echo($_POST['todo-priority']); ?></p>
                </div>
                <div class="input-area">
                    <p class="input-title">予定種別</p>
                    <p class="complete_text"><?php echo($_POST['todo-kind']); ?></p>
                </div>
                <div class="input-area">
                    <p class="input-title">予定詳細</p>
                    <p class="complete_text"><?php echo($_POST['todo-desc']); ?></p>
                </div>

            </form>
        </div>

    </main>
    <!-- FOOTER-------------------------- -->
    <footer class="footer">

    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/swiper/swiper.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>