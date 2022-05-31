<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <h1>Отговори: </h1>
    <table class="col-10 mx-auto">
    <tr>
     <td class="p-3">
     Име:
     </td>
     <td class="p-3">
     Email:
     </td>
     <td class="p-3">
      Телефон:
     </td>
     <td class="p-3">
     Ще присъстваш ли?
     </td>
     <td class="p-3">
     Искаш ли Вегетарианско меню?
     </td>
     <td class="p-3">
    Ще нощуваш ли?:
     </td>
     </tr>
    <?php
    /*error_reporting(0);
    ini_set('display_errors', 0);*/
    $result=[];
    $current_data=file_get_contents('guests.json');
    $array_data=json_decode($current_data,true);
    foreach($array_data as $key=>$val){
     echo '
     <tr>
     <td class="p-1">
     '.$val['name'].'
     </td>
     <td class="p-1">
     '.$val['email'].'
     </td>
     <td class="p-1">
    '.$val['phone'].'
     </td>
     <td class="p-1">
     '.$val['agree'].'
     </td>
     <td class="p-1">
     '.$val['vegan'].'
     </td>
     <td class="p-1">
    '.$val['sleep'].'
     </td>
     </tr>
     ';
    }
?>
    <table>
</body>
</html>
<style>
@import url('https://fonts.googleapis.com/css2?family=Alex+Brush&family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300;1,400;1,700&family=Montserrat:ital,wght@0,400;0,700;0,800;1,400&display=swap');
body{
    background-color: #ff7f5054;
}
tbody,tr,td{
    border: 1px solid coral;
}
h1{
    font-family: "Alex Brush";
    color: #62875c;
    text-align: center;
    margin: 20px 0;
}
</style>