<?php
require_once("config.php");
include("head.php");

?>
<div class="d-flex">
    <div class="col-2"><?php include("nav.php"); ?></div>
    <div class="col-10">
        <div class="container mt-2 p-5">
            <form action="" method="post" class="col-12 d-flex">
                <input type="search" name="se" id="" placeholder="Search" class="form-control w-100" style="height:50px">
                <button class="btn btnm col-1 ms-2" style="height:50px;" name="btn1" value="1">search</button>
            </form>
        </div>
        <div class="frame vh-100" style="overflow-y: scroll;">
            <div class="row m-5">
                <?php 
                if(checkp('btn1')){ 
                    $text = $_POST['se'];
                    if($lists = qs("SELECT * FROM things WHERE t_status = 0 AND t_name LIKE '%$text%'")){
                        foreach($lists as $list){ ?>
                            <div class="card p-2 col-2 sc m-3">
                                <div class="headerimage">
                                    <img src="image/things/<?=$list['t_image']?>" alt="" class="col-12">
                                </div>
                                <div class="bodytext">
                                    <h4><?= $list['t_name']?></h4>
                                    <h5>รายละเอียด: <?= $list['t_des']?></h5>
                                    <p>คนที่เจอ: <?= $list['t_username']?></p>
                                    <p>เจอวันที่: <?= $list['t_date']?></p>
                                    <a href="user/pr.php?vid=<?=$list['t_id'] ?>&nt=0"><button class="btn btns w-100">view</button></a>
                                </div>
                            </div>
                        <?php }
                    }
                } else {
                    if($lists1 = qs("SELECT * FROM things WHERE t_status = 0")){
                        foreach($lists1 as $list1){ ?>
                            <div class="card p-2 col-sm-6 col-md-4 col-lg-2 sc m-3">
                                <div class="headerimage">
                                    <img src="image/things/<?=$list1['t_image']?>" alt="" class="col-12">
                                </div>
                                <div class="bodytext">
                                    <h4><?= $list1['t_name']?></h4>
                                    <h5>รายละเอียด: <?= $list1['t_des']?></h5>
                                    <p>คนที่เจอ: <?= $list1['t_username']?></p>
                                    <p>เจอวันที่: <?= $list1['t_date']?></p>
                                    <a href="user/pr.php?vid=<?=$list1['t_id'] ?>&nt=0"><button class="btn btns w-100">view</button></a>
                                </div>
                            </div>
                        <?php }
                    }
                }
                ?>
            </div>
        </div>    
    </div>
</div>
<?php include("footer.php"); ?>


