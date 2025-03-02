<?php 
require_once("config.php");
include("head.php");
if(checkp('btn')){
    if($_POST['usern'] && $_POST['userp'] != ""){
        $usern = $_POST['usern'];
        $userp = $_POST['userp'];
        $res = qs("SELECT * FROM user WHERE user_name = '$usern' AND user_password = '$userp'");
        if($res->num_rows == 1){
            $re = $res->fetch_array(MYSQLI_ASSOC);
            $_SESSION['profile'] = $re;
            $_SESSION['is_login'] = 1;
            go("user/index.php");
        }else{
            alert("ไม่พบข้อมูลขอลท่าน");
        }
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
                    <h1 class="text-center tm">Login Account</h1>
                </div>
                <div class="">
                    <form action="" method="post" class="mt-5">
                        <input type="text" placeholder="Username" name="usern" class="mt-2 form-control" require>
                        <input type="password" placeholder="Password" name="userp" class="mt-2 form-control" require>
                        <p class="mt-2">If you don'have accout <a href="register.php">click Here</a></p>
                        <button class="btn btnm w-100 mt-3 bx" name="btn" value="1">Sign In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include("footer.php"); ?>
