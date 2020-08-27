<nav>
    <div class="logo">
        <!-- ▼ Logo ▼ -->
        <a href="/index.php"><img src="/img/logo.png" alt="Image Logo"></a>
    </div>
        <ul>
            <!-- ▼ Quick Select List ▼ -->
            <a href="/index.php#top"><li>Home</li></a>
            <a href="/index.php#news-container"><li>News</li></a>
            <a href="/index.php#about-us"><li>About Us</li></a>
            <a href="/sites/games.php"><li>Games</li></a>
            <a href="/index.php#forum"><li>Forum</li></a>
            <a href="/index.php#about-us"><li>Chat</li></a>

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
                echo '<div id="sign-in-user" onmouseenter="showUserPanel(`signed-in-user-panel`)" onmouseleave="showUserPanel(`signed-in-user-panel`)">';
                echo '<li><button>'.getUserName($_SESSION['UserId'],$db).'</button></li>';
                // ===▼ User Panel - List ▼===
                echo '<div id="signed-in-user-panel" style="display: none">';
                echo '<ul id="signed-in-user-panel-ul">';
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

            }
            // ▼ Navigation Bar Sign In Button ▼
            else
            {
                echo '<a href="/sites/signIn.php" id="sign-in-button-a"><div id="sign-in-button">';
                echo '<li>Sign In</li>';
                echo '</div></a>';
                echo '</ul>';
            }
        ?>

    </ul>
</nav>
