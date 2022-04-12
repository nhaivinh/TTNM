<?php
	require_once("HTMLprocess.php");
    session_start();
    if(!isset($_SESSION['username'])){
        $_SESSION['collection_status'] = "Hãy đăng nhập trước khi vào bộ sưu tập";
        header("Location: main_page.php");
    }
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
            <?php
                $id_user = getIDUserByUsername($_SESSION['username']);
                $favoriteList = getFavoriteList($id_user);
                for($i=0;$i<count($favoriteList);$i++){
                    $id_animal = $favoriteList[$i]['ID_Animal'];
                    $link_pic = getLinkDefaultPicAnimalByID($id_animal);
                    $ten_animal = getAnimalByID($id_animal)['Ten_TV'];
                    $link_detail = "detail_page.php?id_animal=".$id_animal;
                    echo '<div class="collection_content_items">
                        <a href="'.$link_detail.'">
                            <img src="'.$link_pic.'" alt="'.$ten_animal.'">
                        </a>
                    </div>';
                }
            ?>
            <div class="collection_content_page">
                <div class="page_choose">
                    <ul>
                        <li>
                            <i class="arrow left"></i>
                        </li>
                        <li class="current">1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                        <li>6</li>
                        <li>7</li>
                        <li>8</li>
                        <li>
                            <i class="arrow right"></i>
                        </li>
                    </ul>
                </div>
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