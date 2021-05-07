   <!-- 　Header start -->
   <header class="site-header">
      <div class="wrapper site-header__wrapper">
        <a href="../../index.php" class="brand">check_sheet</a>
        <nav class="nav">
          <ul class="nav__wrapper">
            <?php
            if (isset($_SESSION['EMAIL'])) {
              echo "<li class='nav__item'><a href='/logout.php'>ログアウト</a></li>";
            }
            else{
              echo "<li class='nav__item'><a href='loginview.php'>ログイン/新規登録</a></li>";
            }?>
          </ul>
        </nav>
      </div>
    </header>
    <!-- Header end -->