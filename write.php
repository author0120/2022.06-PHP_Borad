<!doctype html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>게시판 글쓰기</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }
        h4 {
            padding-bottom: 20px;
            text-align: center;
        }
        textarea {

        }
        #board_write {
            position: absolute;
            /*border: solid 2px gray;*/
            left: 50%;
            top: 20%;
            margin-left: -200px;
            margin-top: -100px;
            padding-top: 10px;
            padding-left: 10px;
            /*background-color: lightgray;*/
        }
        .bt_se {
            position: absolute;
            left: 40%;
            top: 110%;
        }
    </style>
</head>
<body>
<?php
    # $border_id=$_GET['border_id'];
?>
    <div id="board_write">
        <h4>게시판 글 작성</h4>
            <div id="write_area">
                <form enctype="multipart/form-data" action="" method="post">
                    <div id="in_title">
                        <textarea name="title" id="utitle" cols="55" rows="2" placeholder="제목" maxlength="100" required></textarea>
                    </div>

                    <div class="wi_line"></div>
                    <div id="in_content">
                        <textarea name="content" id="ucontent" placeholder="내용" cols="55" rows="20" required></textarea>
                    </div>

                    <input type="file" name="SelecFile">

                    <div class="bt_se">
                        <button type="submit">글 작성</button>
                    </div>
                </form>
            </div>
    </div>
</body>
</html>