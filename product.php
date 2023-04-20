<?php require("./layout/db.php"); ?>
<?php require("./layout/Header.php"); ?>
<?php require("./layout/Navbar.php"); ?>
<div class="pagetitle" style="color:#2b74e2;display:flex;flex-direction:row;justify-content:space-between">
    <h1>Products</h1>
    <button type="button" style="color:#fff;background-color:#012970"  class="btn" data-bs-toggle="modal" data-bs-target="#myModal">
        Add Product
    </button>
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="color:#012970">Add Product</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form onsubmit="document.getElementById('loader').style.display='block'" style="color:#012970" action="/add.php" method="post">
                    <div class="form-floating mb-3 ">
                        <input required type="text" class="form-control"  name="name" placeholder="Product Name">
                        <label>Product Name</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <input required type="number" class="form-control"  name="stock" placeholder="Stock">
                        <label>Stock</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <input required type="date" class="form-control"  name="expiry" placeholder="Expiry Date">
                        <label>Expiry Date</label>
                    </div>
                    <div style="display:flex;justify-content:flex-end">
                        <button class="btn  w-25" style="background-color:#012970;color:#fff">Add</button>
                    </div>
                </form>
            </div>

            </div>
        </div>
    </div>
</div>
<div class="row">
<?php
    $date=date_create();
    $date=date_add($date,date_interval_create_from_date_string("3 days"));
    $date = date_format($date,"Y-m-d");
    $userid = $_COOKIE["id"];
    $result = $conn->query("SELECT * FROM product WHERE userid='$userid'");
    if($result->num_rows > 0){
        $i=0;
        while($row = $result->fetch_assoc()){
            $i++;
            ?>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card" style="width: 18rem;">
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