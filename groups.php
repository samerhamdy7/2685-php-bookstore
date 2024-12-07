<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 

    $group_2685 = ['Maged Yassen' , 'Nour' , 'Salma El-Qady' , 'Hager Essam' , 'Ahmed Khaled' , 'Nada Ahmed' ,'Mahmoued Sahwan' , 'Samer Hamdy' , 'Adam Sherif', 'Youssif Elsayed' , 'Amr Safy' , 'Mayar Ali' ,'Maya Younes' , 'Mahmoued Nader', 'Zeyad Dewedar' , 'Ahmed Sayed' , 'Ahmed Khalid' , 'Alyaa' , 'Ahmed Wallied' , 'Karim Fawzy'];

    /*$check_name = ''; 
    if(in_array($check_name, $group_2685)) {
        echo 'true';

    }else {
        echo 'false';
    };*/

 

    $f_c = [];


    foreach($group_2685 as $g){

        $names = explode(' ', $g);

        $FL = strtoupper($names[0][0]);

        $lname = end($names);

        $SL = strtoupper($lname[0][0]);

        $init = $FL . $SL;

        $f_c[] = $init;

    };

    foreach($f_c as $i){
        echo " <div class = 'container'>
        <div class='icon-image'>
        <div class='icon'>
          <span>$i </span>
        </div>
        <div class='hover-image'>
          <div class='img'>
            <span>$i</span>
          </div>
          <div class='content'>
            <div class='details'>
              <div class='name'>$i</div>
              <div class='local_name'></div>
              <div></div>
              <div><strong></strong></div>
            </div>
          </div>
        </div>
      </div>
      </div>";
    }



 
   
   
   
    
    
    ?>
</body>
</html>