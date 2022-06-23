<!doctype html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>로그인</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        #login_box {
            background-color: lightgray;
            width: 400px;
            height: 150px;
            border: solid 2px gray;
            position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -200px;
            margin-top: -100px;
        }
        .submit {
            position: absolute;
            border-radius: 5px;
            width: 80px;
            height: 70px;
            left: 50%;
            top: 50%;
            margin-left: 80px;
            margin-top: -60px;
        }
        a {
            color: black;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div id="login_box">
        <form name="loginForm" action="" method="post">
            <table width="300" height="100" border="0">
                <tr>
                    <th align="right">아 이 디 :</th>
                    <td><input type="text" name="userid"></td>
                </tr>

                <tr>
                    <th align="right">패스워드 :</th>
                    <td><input type="password" name="userpw"></td>
                </tr>
            </table>
            <input type="submit" class="submit" value="로그인">
            <p align="center">
                <a href="">회원가입</a>
                |
                <a href="">비밀번호 찾기</a>
            </p>
        </form>

    </div>
</body>
</html>