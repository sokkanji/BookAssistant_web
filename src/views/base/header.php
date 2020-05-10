<html>
<div id="header">
    <div class="menubar">
        <a href="..\..\views\base\index.html"><img src="..\..\..\public\img\logo_icon.png" id="logo-img"
                alt="책잡이로고"></img></a>
        <nav>
            <div class="gnb">
                <ul class="dropdown">
                    <li class="mb01">
                        <a href="..\..\..\src\views\introduce\introduce.html" class="m1">소개</a>
                        <ul class="m2">
                            <li><a href="..\..\..\src\views\introduce\introduce.html">책잡이란?</a></li>
                            <li><a href="..\..\..\src\views\introduce\introduce.html">독립서점이란?</a></li>
                        </ul>
                    </li>
                    <li class="mb02">
                        <a href="#" class="m1">찾기</a>
                        <ul class="m2">
                            <li><a href="#">독립서점 검색</a></li>
                            <li><a href="#">인생책 찾기 테스트</a></li>
                            <li><a href="#">서점도서 검색</a></li>
                        </ul>
                    </li>
                    <li class="mb03">
                        <a href="..\..\..\src\views\news\project.html" class="m1">소식</a>
                        <ul class="m2">
                            <li><a href="..\..\..\src\views\news\project.html">책방 프로젝트</a></li>
                            <li><a href="..\..\..\src\views\news\watching.html">독립서점 구경하기</a></li>
                            <li><a href="..\..\..\src\views\news\recommend.html">독립출판물 추천</a></li>
                        </ul>
                    </li>
                    <li class="mb04">
                        <a href="..\..\..\src\views\review\activity.php" class="m1">리뷰</a>
                        <ul class="m2">
                            <li><a href="..\..\..\src\views\review\activity.php">활동 기록하기</a></li>
                            <li><a href="..\..\..\src\views\review\report.html">제보하기</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <?php
        if(!isset($_SESSION['email'])) { 
            echo '<a href="..\..\..\src\views\login\login.html"><img src="..\..\..\public\img\login_icon.png" id="login-img"
                alt="로그인 이미지"></img></a>';
        }
        else{
            echo '<a href="..\..\..\src\views\login\login_Ok.html"><img src="..\..\..\public\img\login_icon.png" id="login-img"
            alt="로그인 이미지"></img></a>';
        }
        ?>
    </div>
</div>

</html>