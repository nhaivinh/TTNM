<?php
	require_once("HTMLprocess.php");
    session_start();
    function setURLforCollectionPage($page){
		$setURL = "./collection.php?page=".$page;
		return $setURL;
	}
    if(!isset($_SESSION['username'])){
        $_SESSION['collection_status'] = "Hãy đăng nhập trước khi vào bộ sưu tập";
        header("Location: main_page.php");
    }
    if(!isset($_GET['page'])){
        $_GET['page'] = '1';
    }
    else {
        $page_number = (int) $_GET['page'];
        if($page_number < 1){
            $_GET['page'] = '1';
        }
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
    <script>
        function choosePage(index){
			strPage = "pageNumber" + index;
			document.getElementById(strPage).classList.add("current");
		}
    </script>
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
                $cur_page = $_GET['page'];
                $id_user = getIDUserByUsername($_SESSION['username']);
                $favoriteList = getFavoriteList($id_user);
                $total_animal = getCountFavoriteList($id_user);
                $total_page = ceil($total_animal/12);
                for($i=$cur_page*12-12;$i<$cur_page*12;$i++){
                    if($i < $total_animal){
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
                    else{
                        break;
                    }
                }

                $page_left = -1;
                $page_right = -1;
                if($cur_page == 1){
                    $page_left = 1;
                }
                else{
                    $page_left = $cur_page - 1;
                }
                if($cur_page == $total_page){
                    $page_right = $cur_page;
                }
                else{
                    $page_right = $cur_page + 1;
                }

                echo '<div class="collection_content_page">';
                    echo '<div class="page_choose">';
                        echo '<ul>';
                            if($total_page > 1){
                                echo '
                                    <a href="'.setURLforCollectionPage($page_left).'">
                                        <li>
                                            <i class="arrow left"></i>
                                        </li>
                                    </a>
                                ';
                            }
                            if($cur_page < 3){
                                if($total_page < 5){
                                    for($i=1;$i<=$total_page;$i++){
                                        echo '<a href="'.setURLforCollectionPage($i).'">
                                            <li class="pageitem" id="pageNumber'.$i.'">
                                                '.$i.'
                                            </li>
                                        </a>';
                                    }
                                }
                                else{
                                    echo '<a href="'.setURLforCollectionPage(1).'">
                                        <li class="pageitem" id="pageNumber1">
                                            1
                                        </li>
                                    </a>';
                                    echo '<a href="'.setURLforCollectionPage(2).'">
                                        <li class="pageitem" id="pageNumber2">
                                            2
                                        </li>
                                    </a>';
                                    echo '<a href="'.setURLforCollectionPage(3).'">
                                        <li class="pageitem" id="pageNumber3">
                                            3
                                        </li>
                                    </a>';	
                                    echo '<a href="'.setURLforCollectionPage(4).'">
                                        <li class="pageitem" id="pageNumber4">
                                            4
                                        </li>
                                    </a>';
                                    echo '<a href="'.setURLforCollectionPage(5).'">
                                        <li class="pageitem" id="pageNumber5">
                                            5
                                        </li>
                                    </a>';
                                }
                                echo '<script type="text/javascript">choosePage('.$cur_page.');</script>';
                            }
                            else if($cur_page > $total_page-2){
                                if($total_page > 4){
                                    echo '<a href="'.setURLforCollectionPage($total_page-4).'">
                                        <li class="pageitem" id="pageNumber'.($total_page-4).'">
                                            '.($total_page-4).'
                                        </li>
                                    </a>';
                                    
                                    echo '<a href="'.setURLforCollectionPage($total_page-3).'">
                                        <li class="pageitem" id="pageNumber'.($total_page-3).'">
                                        '.($total_page-3).'
                                        </li>
                                    </a>';
                                    echo '<a href="'.setURLforCollectionPage($total_page-2).'">
                                        <li class="pageitem" id="pageNumber'.($total_page-2).'">
                                        '.($total_page-2).'
                                        </li>
                                    </a>';	
                                    echo '<a href="'.setURLforCollectionPage($total_page-1).'">
                                        <li class="pageitem" id="pageNumber'.($total_page-1).'"> 
                                        '.($total_page-1).'
                                        </li>
                                    </a>';
                                    echo '<a href="'.setURLforCollectionPage($total_page).'">
                                        <li class="pageitem" id="pageNumber'.$total_page.'">
                                        '.$total_page.'
                                        </li>
                                    </a>';
                                    echo '<script type="text/javascript">choosePage('.$cur_page.');</script>';
                                }
                                else{
                                    for($i=1;$i<=$total_page;$i++){
                                        echo '<a href="'.setURLforCollectionPage($i).'">
                                            <li class="pageitem" id="pageNumber'.$i.'">
                                                '.$i.'
                                            </li>
                                        </a>';
                                    }
                                }
                            }
                            else{
                                echo '<a href="'.setURLforCollectionPage($cur_page-2).'">
                                    <li class="pageitem" id="pageNumber'.($cur_page-2).'">
                                        '.($cur_page-2).'
                                    </li>
                                </a>';
                                echo '<a href="'.setURLforCollectionPage($cur_page-1).'">
                                    <li class="pageitem" id="pageNumber'.($cur_page-1).'">
                                    '.($cur_page-1).'
                                    </li>
                                </a>';
                                echo '<a href="'.setURLforCollectionPage($cur_page).'">
                                    <li class="pageitem" id="pageNumber'.$cur_page.'">
                                    '.$cur_page.'
                                    </li>
                                </a>';	
                                echo '<a href="'.setURLforCollectionPage($cur_page+1).'">
                                    <li class="pageitem" id="pageNumber'.($cur_page+1).'">
                                    '.($cur_page+1).'
                                    </li>
                                </a>';
                                echo '<a href="'.setURLforCollectionPage($cur_page+2).'">
                                    <li class="pageitem" id="pageNumber'.($cur_page+2).'">
                                    '.($cur_page+2).'
                                    </li>
                                </a>';
                                echo '<script type="text/javascript">choosePage('.$cur_page.');</script>';
                            }
                            if($total_page > 1){
                                echo '
                                    <a href="'.setURLforCollectionPage($page_right).'">
                                        <li>
                                            <i class="arrow right"></i>
                                        </li>
                                   </a>				
                                ';
                            }
                        echo '</ul>';
                    echo '</div>';
                echo '</div>';
            ?>
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