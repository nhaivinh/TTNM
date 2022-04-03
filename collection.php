<?php
	
?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="StyleSheet" href="./CSS/collection.css">
        <title>Bộ sưu tập</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
	    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="navigator_bar">
            <div class="navigator_bar_item">
                <a href="main_page.php" class="logo">
                    <img src="./img/logo.png" alt="logo">
                </a>
                <a href="" class="guide">HƯỚNG DẪN</a>
                <a href="" class="aboutus">VỀ CHÚNG TÔI</a>
                <a href="./collection.php" class="collection">BỘ SƯU TẬP</a>
                <a href="./logout.php" class="logout">ĐĂNG XUẤT</a>
                <form action="" method="POST">
                    <div class="input_search">
                        <input type="search" name="search" placeholder="NHẬP GÌ ĐÓ">
                    </div>                   
                    <div class="button_search">
                        <input type="submit" name="search" value="TÌM KIẾM">
                    </div> 
                </form>
            </div>
        </div>
        <div class="search_content">
            <form action="" method="POST">
                <div class="input_content_search">
                    <input type="search" name="search_content_input" placeholder="NHẬP GÌ ĐÓ">
                </div>                   
                <div class="content_search_button">
                    <input type="submit" name="search_content" value="TÌM KIẾM">
                </div> 
                <div class="extend_button">
                    <input type="submit" name="extend" value="NÂNG CAO">
                </div> 
            </form>
        </div>
        <div class="collection_content">
            <div class="collection_content_items">
                <img src="./img/tiger.jpg" alt="tiger">
                <div class="heart"> 
                    <img src="./img/nonfill_heart.png">
                </div>
            </div>
            <div class="collection_content_items">
                <img src="./img/tiger.jpg" alt="tiger">
            </div>

            <div class="collection_content_items">
                <img src="./img/tiger.jpg" alt="tiger">
            </div>

            <div class="collection_content_items">
                <img src="./img/tiger.jpg" alt="tiger">
            </div>

            <div class="collection_content_items">
                <img src="./img/tiger.jpg" alt="tiger">
            </div>
            <div class="collection_content_items">
                <img src="./img/tiger.jpg" alt="tiger">
            </div>

            <div class="collection_content_items">
                <img src="./img/tiger.jpg" alt="tiger">
            </div>

            <div class="collection_content_items">
                <img src="./img/tiger.jpg" alt="tiger">
            </div>

            <div class="collection_content_items">
                <img src="./img/tiger.jpg" alt="tiger">
            </div>
            <div class="collection_content_items">
                <img src="./img/tiger.jpg" alt="tiger">
            </div>

            <div class="collection_content_items">
                <img src="./img/tiger.jpg" alt="tiger">
            </div>

            <div class="collection_content_items">
                <img src="./img/tiger.jpg" alt="tiger">
            </div>

            <div class="collection_content_items">
                <img src="./img/tiger.jpg" alt="tiger">
            </div>
            <div class="collection_content_items">
                <img src="./img/tiger.jpg" alt="tiger">
            </div>

            <div class="collection_content_items">
                <img src="./img/tiger.jpg" alt="tiger">
            </div>
        </div>
    </body>
    <footer>
        <div class="content_footer">
            <div class="logo_footer">
                <img src="./img/logo.png" alt="logo">
            </div>
        <form action="" method="POST">
            <div class="search_bar_footer">
                <div class="input_search_footer">
                    <input type="search" name="search" placeholder="NHẬP GÌ ĐÓ">
                </div>                     
            </div>
            <div class="button_search_footer">
                <input type="submit" name="search" value="TÌM KIẾM">
            </div> 
        </form>
        </div>
        <div class="copyright">
            <div class="copyright_content">
                <span class="copyright_content_item">Copyright ©2022 VINZ</span>
            </div>
        </div>
    </footer>
</html>