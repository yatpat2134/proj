<?php 
require_once("config.php");
include("head.php");
if(checkp('btn')){
    if($_POST['usern'] && $_POST['userp'] && $_POST['usert'] != ""){
        $usern = $_POST['usern'];
        $userp = $_POST['userp'];
        $usert = $_POST['usert'];
        $res = qs("INSERT INTO user(user_name, user_password, user_tell)VALUE('$usern', '$userp', '$usert')");
        alert("Sign UP Success");
        go("login.php");
    }else{
        alert("กรุณากรอกข้อมูลให้ครบ");
    }
}
?>
<body class="bg-ld">
    <div class="container mt-5 p-5 col-5">
        <div class="card bg-w p-5 bs">
            <div class="btext  p-5">
                <div class="">
                    <h1 class="text-center tm">Creat Account</h1>
                </div>
                <div class="">
                    <form action="" method="post" class="mt-5">
                        <input type="text" placeholder="Username" name="usern" class="mt-2 form-control" require>
                        <input type="password" placeholder="Password" name="userp" class="mt-2 form-control" require>
                        <input type="text" placeholder="Tell(เบอร์โทรศัพท์)" name="usert" class="mt-2 form-control" require>
                        <p class="mt-2">If you have accout <a href="login.php">click Here</a></p>
                        <button class="btn btnm w-100 mt-3 bx" name="btn" value="1">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include("footer.php"); ?>