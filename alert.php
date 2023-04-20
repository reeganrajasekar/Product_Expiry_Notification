<?php require("./layout/db.php"); ?>
<?php require("./layout/Header.php"); ?>
<?php require("./layout/Navbar.php"); ?>
<div class="pagetitle">
    <h1>Today Alert</h1>
</div>
<div class="row">
<?php
    $date=date_create();
    $date=date_add($date,date_interval_create_from_date_string("3 days"));
    $olddate = date_format($date,"Y-m-d");
    $date=date_create();
    $date=date_add($date,date_interval_create_from_date_string("-1 days"));
    $newdate = date_format($date,"Y-m-d");
    $id = $_COOKIE["id"];
    $result = $conn->query("SELECT * FROM product WHERE expiry>='$newdate' and expiry<='$olddate' AND userid='$id'");
    if($result->num_rows > 0){
        $i=0;
        while($row = $result->fetch_assoc()){
            $i++;
            ?>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="card w-100" >
                        <div class="card-body">
                            <h5 class="card-title">Name : <?php echo($row["name"]) ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted">Stock : <?php echo($row["stock"]) ?></h6>
                            <h6 class="card-subtitle mb-2 text-muted">Expiry : <?php echo($row["expiry"]) ?></h6>
                            <form action="/delete.php" method="post" class="mt-4 text-end">
                                <input type="hidden" name="id" value="<?php echo($row["id"]) ?>">
                                <button class="btn btn-danger">delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php
        }
    }else{
?>
<p class="text-center text-secondary">Nothing Found</p>

<?php
    }
?>
</div>
<?php require("./layout/Footer.php"); ?>