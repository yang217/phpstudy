<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
 <input type="text" name="phone" action="<?php echo $_SERVER['PHP_SELF'];?>">
 <button>提交</button>

    </form>
    <<a href="test.php?name=yang&age=22">123</a>
    <?php
    $phone=$_REQUEST['phone'];
    echo $phone;
    

    ?>
    
</body>
</html>