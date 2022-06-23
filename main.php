<?php

?>

<!doctype html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>메인 페이지</title>
    <style>
        table, tr, th, td{
            border-bottom: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }
        table {
            border-top: 3px solid green;
        }

    </style>
</head>
<body>
    <div id="board_area">
        <h1>공지사항</h1>
        <table class="list-table">
        <thead>
            <tr>
                <th width="70">번호</th>
                <th width="500">제목</th>
                <th width="120">글쓴이</th>
                <th width="100">작성일</th>
                <th width="100">조회수</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td width="70">1</td>
                <td width="500">2</td>
                <td width="120">3</td>
                <td width="100">4</td>
                <td width="100">5</td>
            </tr>

            <tr>
                <td width="70">6</td>
                <td width="500">7</td>
                <td width="120">8</td>
                <td width="100">9</td>
                <td width="100">10</td>
            </tr>
        </tbody>
        </table>
            <br><br><br>
            <h1>자유게시판</h1>
        <table class="list-table">
        <thead>
            <tr>
                <th width="70">번호</th>
                <th width="500">제목</th>
                <th width="120">글쓴이</th>
                <th width="100">작성일</th>
                <th width="100">조회수</th>
            </tr>
        </thead>

            <tbody>
            <tr>
                <td width="70">1</td>
                <td width="500">2</td>
                <td width="120">3</td>
                <td width="100">4</td>
                <td width="100">5</td>
            </tr>

            <tr>
                <td width="70">6</td>
                <td width="500">7</td>
                <td width="120">8</td>
                <td width="100">9</td>
                <td width="100">10</td>
            </tr>
            </tbody>
        </table>

    </div>
</body>
</html>