<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gentelella Alela! | </title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/login.less', 'css/login.css');
        ?>
        <link rel="stylesheet" href="css/login.css">
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
    <?php include '../57/57-content.php'; ?>

    <script>
    Function checkInput ( )

{

//Kiểm tra user name:

         If ( document.flogin.username.value= =””)

{

         Alert( “invalidEmail, Vui lòng nhập địa chỉ Email của bạn:”);

         document.flogin.username.focus( );

         return false;

}

//Kiểm tra password

         If ( document.flogin.password.value= =””)

{

         Alert( “ Vui lòng nhập password của bạn vào:”);

         document.flogin.password.focus( );

         return false;

}

Return true;

}
    </script>

    </body>
</html>