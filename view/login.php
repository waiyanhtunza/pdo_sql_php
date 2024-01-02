<?php require "../partials/head.php";?>

<div class="w-1/3 mx-auto my-24 h-auto bg-white rounded-2xl  p-4 drop-shadow-2xl">
<h1 class="text-center text-3xl font-bold ">Enter Your Profile</h1>
    <form action="../controller/login.php" method="post" class="flex flex-col items-center justify-around">
        <input type="email" name="email" id="" class="border-2 w-8/12  m-4 h-10 rounded-2xl text-center text-gray-600 text-sm drop-shadow-md" placeholder="Email">
        <input type="password" name="password" id="" class="border-2 w-8/12  m-4 h-10 rounded-2xl text-center text-gray-600 text-sm drop-shadow-md" placeholder=" Password">
        <button type="submit" class="border-2 w-1/2 m-6 h-10 rounded-lg text-center bg-sky-500 hover:bg-sky-400 ">Log In</button>
        <div>
                <span class="text-xs">
                    Don't remember password Enter
                </span>
                <a href="login.view.php" class="text-xs text-sky-400 underline"> 
                    Forget Password
                </a>
            </div>
    </form>
</div>

<?php require "../partials/footer.php" ?>