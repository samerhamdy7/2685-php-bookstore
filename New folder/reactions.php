<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/e0941f6e21.js" crossorigin="anonymous"></script>

    <title>Reactions</title>
</head>

<body class="bg-gray-600 flex flex-wrap justify-center">


    <?php

$host = 'localhost';
$database = '2685_php_posts';
$user = 'root';
$password = '';

$db = new mysqli($host , $user, $password , $database);

$qry = "SELECT * FROM `pst_reaction_types`;";

$res = $db->query($qry);

$data = MYSQLI_FETCH_ALL($res , MYSQLI_BOTH);

?>

    <h2
        class="w-full text-center text-2xl font-bold text-black border-4 p-2 rounded-xl border-gray-800 hover:text-gray-800 hover:border-black">
        All Reactions</h2>

    <?php 
        foreach($data as $r):
            ?>

    <div class="w-full sm:w-1/1 sm:justify-center sm:items-center md:w-1/2 lg:w-1/3 p-2">
        <div class="overflow-hidden shadow-lg p-8 rounded-xl bg-gray-500">
            <div class="border-2 border-black rounded-md p-2 mx-auto ">
                <p class="text-xl font-bold">ID : <?= $r['id']?></p>
                <p class="text-xl font-bold">TYPE :
                    <?php $shap = match($r['type']){
                    'Love' =>'<i class="fa-solid fa-heart"></i>' ,
                    'Like' => '<i class="fa-solid fa-thumbs-up"></i>',
                    'Care' => '<i class="fa-solid fa-face-kiss-wink-heart"></i>',
                    'Happy' => '<i class="fa-solid fa-face-laugh-beam"></i>',
                    'Sad' => '<i class="fa-solid fa-face-sad-tear"></i>',
                    'Laugh' => '<i class="fa-solid fa-face-laugh-squint"></i>',

                     default => 'gray'} ;
                     
                     ?>
                    <?php  
                      echo "<p class='text-xl font-bold'>TYPE: <span> {$r['type']} {$shap}</span></p>";
                       ?>
                <div class="border-4 border-gray-700 flex justify-center items-center flex-wrap gap-2 rounded-lg">
                    <p class="text-white font-bold p-1 flex gap-6"><span
                            class="text-green-800">Created_at:</span><?= $r['created_at'] ?> </p>
                    <p class="text-white font-bold p-1 flex gap-6"><span
                            class="text-yellow-700">Updated_at:</span><?= $r['updated_at'] ?> </p>
                    <p class="text-white font-bold p-1 flex gap-6"><span class="text-red-900">Deleted_at:</span>
                        <?php if(is_null($r['deleted_at'])): ?>
                        <span>Not Deleted</span>
                        <?php else: ?> <span>
                            <? echo $r['Deleted_at']?>
                        </span>
                    </p>
                    <?php endif ?>

                </div>
            </div>

        </div>

    </div>
    <?php endforeach ?>
</body>

</html>