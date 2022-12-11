<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Board</title>
    <style>
        table{
            width:300px;
            border:2px solid #000;
            margin:0px;
            padding:0px;
        }
        .td1{
            height:30px;
            width:30px;
            background-color:#fff;
        }
        .td2{
            height:30px;
            width:30px;
            background-color:#000;
        }
    </style>
</head>
<body>
<center>
<h2>Chess Board</h2>
    <table cellspacing="0" cellpadding="0">
        <?php 
            for($i=1;$i<=8;$i++){
                echo "<tr>";
                for($j=1;$j<=8;$j++){
                    $total=$i+$j;
                    // echo $total."<br>";
                    if($total%2==0){
                        echo "<td class='td1'></td>";
                    }else{
                        echo "<td class='td2'></td>";
                    }
                }
                echo "</tr>";
            }
        ?>
    </table>
</center>
</body>
</html>