<nav>
    <script src="/scripts/jsfunctions.js"></script>
    <div class="logo">
        <!-- ▼ Logo ▼ -->
        <a href="/index.php"><img src="/img/Logo-anim-1.gif" alt="Image Logo"><span>3 Pixel</span></a>
    </div>
        <ul>
            <!-- ▼ Quick Select List ▼ -->
            <a href="/index.php#top"><li>Home</li></a>
            <a href="/index.php#news"><li>News</li></a>
            <a href="/index.php#about-us"><li>About Us</li></a>
            <a href="/sites/games.php"><li>Games</li></a>
            <a href="/index.php#forum"><li>Forum</li></a>
            <a href="/index.php#chat"><li>Chat</li></a>
            <?php
            // ▼ Navigation Bar User Panel ▼
            if(isset($_SESSION['SignedIn'])&&$_SESSION['SignedIn'])
                {
                require_once $_SERVER['DOCUMENT_ROOT']."/scripts/functions.php";
                $db = connect_to_db();
                // ===▼ User Panel Links ▼===
                // ======▼ Log Out Link ▼======
                $LogOut = '/scripts/logout.php?token='.$_SESSION["SessionToken"].'';
                $WebHook = '/sites/webhooks.php';
                // ===▼ User Panel - Button ▼===
                echo '<div id="SinUser" onmouseenter="showUserPanel(`.UserPanel`)" onmouseleave="showUserPanel(`.UserPanel`)">';
                echo '<li>'.getUserName($_SESSION['UserId'],$db).'<span> ▼</span></li>';
                // ===▼ User Panel - List ▼===
                echo '<div class="UserPanel" style="display: none">';
                echo '<ul>';
                // ======▼ Link List ▼======
                // =========▼ Administrator Permission ▼=========
                $stmt = $db->query('Select permission_lvl From permissions INNER JOIN users ON permissions.id=users.permission_id WHERE users.id ="'.$_SESSION['UserId'].'"');
                $res = $stmt->fetch(PDO::FETCH_ASSOC);
                if($res['permission_lvl']>=4)
                {
                    echo '<a href="'.$WebHook.'"><li>WebHook</li></a>';
                }
                // =========▼ User Permission ▼=========
                echo '<a href="'.$LogOut.'"><li>Log Out</li></a>';
                // =========================
                echo '</ul>';
                echo '</div>';
                echo '</div>';

                $db = NULL;

            }
            // ▼ Navigation Bar Sign In Button ▼
            else
            {
                echo '<a href="/sites/signIn.php" id="SinBut"><div>';
                echo '<li>Sign In</li>';
                echo '</div></a>';
                echo '</ul>';
            }
        ?>

    </ul>
</nav>
