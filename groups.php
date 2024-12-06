<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Our Group</h1>
    <?php 

    $group_2685 = ['Maged Yassen' , 'Nour' , 'Salma El-Qady' , 'Hager Essam' , 'Ahmed Khaled' , 'Nada Ahmed' ,'Mahmoued Sahwan' , 'Samer Hamdy' , 'Adam Sherif', 'Youssif Elsayed' , 'Amr Safy' , 'Mayar Ali' ,'Maya Younes' , 'Mahmoued Nader', 'Zeyad Dewedar' , 'Ahmed Sayed' , 'Ahmed Khalid' , 'Alyaa' , 'Ahmed Wallied' , 'Karim Fawzy' , 'Nada Fouad'];

    $check_name = ''; 
    if(in_array($check_name, $group_2685)) {
        echo 'true';

    }else {
        echo 'false';
    };


    var_dump($group_2685);

    
    ?>
</body>
</html>