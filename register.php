<?php

list($DBMS,$host,$dbname,$user,$pass) = ["mysql","sql202.b6b.ir","b6bi_27923181_mobtani","b6bi_27923181","M4060071374m"];
try {
    $db = new PDO("$DBMS:host=$host;dbname=$dbname;", $user, $pass);
    
} catch (PDOException $e) {
    echo "erorr<br>".$e->getMessage();
    echo $e->getLine().PHP_EOL;
}

$sql = "insert into contact (email,title,head,message) VALUES (?,?,?,?) ";
    $stmt = $db->prepare($sql);
    $stmt->execute([$_GET['email'],$_GET['title'],$_GET['head'],$_GET['message']]);
    $alert = "<article role='alert' class='alert alert-success alert-dismissible fade show'>
    پیام شما دریافت شد
             <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </article>";
?>
<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ارتباط با دیتابیس</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
        .alert-success{
            text-align: right;
        }

    </style>
</head>
<body class="container">
    <header></header>
    
    <main>
        <p>
            <?php 
                if(isset($alert)){
                    echo $alert;
                }
            ?>
             
            </p>
    </main>

    <footer></footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
</html>