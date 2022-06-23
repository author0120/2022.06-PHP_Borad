<!doctype html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>회원가입</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        #sign_up_box {
            position: absolute;
            border: solid 2px gray;
            width: 400px;
            height: 150px;
            left: 50%;
            top: 50%;
            margin-left: -200px;
            margin-top: -100px;
            padding-top: 10px;
            padding-left: 10px;
            background-color: lightgray;
        }
        td {
            /*background-color: darkgray;*/
            padding-bottom: 10px;
            padding-right: 10px;
        }

        #sign_up_button {
            position: absolute;
            left: 40%;
            top: 80%;
        }
    </style>
</head>
<body>
    <div id="sign_up_box">

        <form action="" method="post" id="sign" class="">
            <table>
                <tr>
                    <td>아이디</td>
                    <td><input type="text" name="id" id="uid" style="height:20px;"></td>
                    <td>
                        <button type="button" name="button" onclick="check_id()">중복확인</button>
                        <input type="hidden" id="id_ch" name="" value="0">
                    </td>
                </tr>

                <tr>
                    <td>닉네임</td>
                    <td><input type="text" name="name" id="nic" style="height:20px;"></td>
                    <td>
                        <button type="button" name="button" onclick="check_nic()">중복확인</button>
                        <input type="hidden" id="nik_ch" name="" value="0">
                    </td>
                </tr>

                <tr>
                    <td>비밀번호 확인</td>
                    <td><input type="password" id="pw_ck" name="pass_check" style="height:20px;"></td>
                </tr>
            </table>

            <button id="sign_up_button" type="button" name="button" align="right" onclick="passwordCheck()">회원가입</button>
        </form>
    </div>
</body>
</html>