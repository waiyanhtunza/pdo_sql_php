<?php require "../partials/head.php" ?>



    <div class="w-1/3 mx-auto my-24 h-auto bg-white rounded-2xl  p-4 drop-shadow-2xl">

        <h1 class="text-center text-3xl font-bold ">Create Account</h1>

        <form action="../controller/register.php" method="post" class="flex flex-col items-center justify-around" >
            <input type="text" name="fname" id="" class="border-2 w-8/12 m-4 h-10 rounded-2xl text-center text-gray-600 text-sm drop-shadow-md" placeholder="First Name">
            <input type="text" name="sname" id="" class="border-2 w-8/12  m-4 h-10 rounded-2xl text-center text-gray-600 text-sm drop-shadow-md" placeholder="Second Name">
            <input type="email" name="email" id="" class="border-2 w-8/12  m-4 h-10 rounded-2xl text-center text-gray-600 text-sm drop-shadow-md" placeholder="Email">
            <input type="password" name="password" id="" class="border-2 w-8/12  m-4 h-10 rounded-2xl text-center text-gray-600 text-sm drop-shadow-md" placeholder="New Password">
            <input type="password" name="spassword" id="" class="border-2 w-8/12  m-4 h-10 rounded-2xl text-center text-gray-600 text-sm drop-shadow-md" placeholder="Comfirm Password">
            <button type="submit" class="border-2 w-1/2 m-6 h-10 rounded-lg text-center bg-sky-500 hover:bg-sky-400 ">Register</button>

            <div>
                <span class="text-xs">
                    If you have already account
                </span>
                <a href="../view/login.php"> 
                    Login
                </a>
            </div>
            
        </form>
    </div>



    
<?php require "../partials/footer.php" ?>