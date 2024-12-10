<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Users</title>

</head>

<body class='bg-gray-600 flex flex-wrap justify-center'>
    
<nav class='w-full flex items-center justify-around gap-3 outline-none bg-gray-500 p-2 m-2 rounded-xl font-bold hover:text-blue-400 '>
    <a class='hover:text-blue-900' href="/" id="home">Home</a>
    <a class='hover:text-blue-900' href="comment.php">Comments</a>
    <a class='hover:text-blue-900' href="status.php">Post Status</a>
    <a class='hover:text-blue-900' href="posts.php">Posts</a>
    <a class='hover:text-blue-900' href="reactions.php">ٌReactions</a>



</nav>
    
    
</html>


<?php 

$host = 'localhost';
$database = '2685_php_posts';
$user = 'root';
$password = '';


function dd ($item){
    echo '<pre>';
    var_dump($item);
    echo '</pre>';
};


$db = new mysqli($host, $user, $password, $database);

$qry = "SELECT * FROM `pst_users`;";

$res = $db->query($qry);

$data = mysqli_fetch_all($res, MYSQLI_BOTH);

//dd($data);
?>
<h2 class="w-full text-center text-2xl font-bold text-black border-4 p-2 rounded-xl border-gray-800 hover:text-gray-800 hover:border-black">
    All Users</h2>
<?php
foreach($data as $d):
    ?>
<div class="w-full sm:w-1/1 sm:justify-center sm:items-center md:w-1/2 lg:w-1/3 p-2">
    <div class=" overflow-hidden shadow-lg p-8 rounded-xl bg-gray-500">
        <div class="text-center mb-6">
            <img src="back developer.png" alt="User Image" class="w-full rounded-full mx-auto" />
        </div>
        <div class="flex-col items-center justify-evenly border-2 border-black rounded-md p-2 mx-auto">
            <h2 class="text-xl font-bold">ID: <?= $d['id'] ?></h2>
            <p class="text-white font-bold p-1 flex gap-4"><span class ="text-gray-900">Role:</span>
             <?php $color = match($d ['roles']) {'admin' => 'green', 'moderator' => 'black' , 'user' => 'yellow' , 'guest' => 'blue', default => 'white'} ?> 
             <span style="color: <?= $color ?>"><?=$d['roles']?> </span>
            </p>
            <p class="text-white font-bold p-1 flex gap-4"><span class ="text-gray-900">Name:</span> <?= $d ['name']?></p>
            <p class="text-white font-bold p-1 flex gap-4"><span class = "text-gray-900">Email:</span> <?= $d ['email'] ?> </p>
            <p class="text-white font-bold p-1 flex gap-4"><span class = "text-gray-900">Mobile:</span><?= $d['mobile'] ?> </p>
            <div class ="border-4 border-gray-700 flex justify-center items-center flex-wrap gap-2 rounded-lg">
                <p class="text-white font-bold p-1 flex gap-6"><span class = "text-green-800">Created_at:</span><?= $d['created_at'] ?> </p>
                <p class="text-white font-bold p-1 flex gap-6"><span class = "text-yellow-700">Updated_at:</span><?= $d['updated_at'] ?> </p>
                <p class="text-white font-bold p-1 flex gap-6"><span class = "text-red-900">Deleted_at:</span>
                <?php if(is_null($d['deleted_at'])): ?>
                    <span>Not Deleted</span>
                     <?php else: ?> <span><? echo $d['Deleted_at']?></span></p>
                    <?php endif ?>

            </div>
        </div>
    </div>
</div>

<?php
     
    endforeach;
    ?>

</body>