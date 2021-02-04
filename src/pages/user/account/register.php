<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>register</title>
    <style>
        *{ margin: 0; padding: 0;}
        body{ background: #ededed; }
    </style>
    <link rel="stylesheet" href="../../../resources/css/form.css">
</head>
<body>
<form action="../../../action/register.php" method="POST">
    <input type="text" name="email" class="form-first-input" placeholder="이메일" autocomplete="off">
    <input type="text" name="name" placeholder="이름" autocomplete="off">
    <input type="password" name="password" placeholder="비밀번호">
    <input type="text" name="phone" class="form-last-input" placeholder="전화번호" autocomplete="off">
    <input type="submit" value="회원가입">
</form>
</body>
</html>