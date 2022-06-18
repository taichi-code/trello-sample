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
                <h2>ToDoリスト 入力ページ</h2>
                <div class="input-area">
                    <p class="input-title">予定タイトル</p>
                    <input type="text" name="todo-title" placeholder="例）買い物" required>
                </div>
                <div class="input-area">
                    <p class="input-title">優先度</p>
                    <div class="radio-area">
                        <label><input type="radio" name="todo-priority" value="高" checked>高</label>
                        <label><input type="radio" name="todo-priority" value="中">中</label>
                        <label><input type="radio" name="todo-priority" value="低">低</label>
                    </div>
                </div>
                <div class="input-area">
                    <p class="input-title">予定種別</p>
                    <select name="todo-kind" required>
                        <option value="">--選択--</option>
                        <option value="仕事">仕事</option>
                        <option value="外出">外出</option>
                        <option value="勉強">勉強</option>
                    </select>
                </div>

                <div class="input-area">
                    <p class="input-title">予定詳細</p>
                    <textarea name="todo-desc" rows="5" placeholder="例）具体的な内容を記載"></textarea>
                </div>

                <div class="input-area">
                    <input type="submit" name="submit" value="送信する" class="btn-submit">
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