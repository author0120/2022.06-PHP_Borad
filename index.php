<?php
session_start();
?>

<!doctype html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>광주대학교 자유게시판</title>
    <style>
        * {
            background-color: white;
        }
        header {
            width : 100%
            height : 100px;
        }

        header h1 a {
            color: black;
            text-decoration: none;
        }

        header h1 a:hover {
            color: red;
        }

        nav {
            width: 100%;
            height : 23px;
            border-top: 2px solid green;
            border-bottom: 2px solid green;
            margin-right: 10%;
            background-color: lightgreen;
            color: white;
        }

        nav a {
            background-color: lightgreen;
            color: black;
            text-decoration: none;
        }

        #left {
            position: fixed;
            left: 30px;
            top: 200px;
            bottom: 200px;
            width: 150px;
        }

        #left ul {
            background-color: lightgreen;
            list-style: none;
            margin: 0;
            padding: 0 0 10px 0;
        }

        #left ul li {
            margin-left: 20px;
            padding-top: 5px;
            background-color: lightgreen;
        }

        #left ul li a{
            background-color: lightgreen;
            color: black;
            text-decoration: none;
        }

        #main {
            padding: 20px 0 0 250px;
            top: 200px;
            bottom: 0;
            left: 250px;
            width: 60%;
            height: 500px;
        }

        footer {
            position: fixed;
            width: 100%;
            top: 700px;
            bottom: 0;
            left: 0;
            clear: both;
            text-align: center;
        }



    </style>
</head>
<body>
<!--헤더 시작-->
    <header align="center">
        <h1><a href="index.php">광주대학교 자유게시판</a></h1>
    </header>
<!--헤더 끝-->

<!--nav시작-->
<?php
    if(isset($_SESSION['userid'])) {
        echo "<nav align=right> 안녕하세요 ".$_SESSION['user_nic']."님<a href=''>로그아웃</a><a href=''>마이페이지</a></nav>";
    } else {

?>
    <nav align=right>
        <a href="">로그인</a>
        <a href="">회원가입</a>
    </nav>
<?php
    }
?>
<!--nav끝-->

<!--aside시작-->
    <aside id="left">
        <h4>카테고리</h4>
        <ul>
            <li><a href="">공지사항</a></li>
            <li><a href="">자유게시판</a></li>
            <li><a href="">음악</a></li>
            <li><a href="">영화</a></li>
        </ul>
    </ASIDE>
<!--aside끝-->

<!--section시작-->
    <section id="main">
            <article id="article1">
                <iframe name = "iframe1" src="main.php" width="1000px" height = "700px" seamless></iframe>
            </article>
    </section>
<!--section끝-->

<!--footer시작-->
    <footer>
        Copyright (c) 2022 Jieun_Border
    </footer>
<!--footer끝-->
</body>
</html>