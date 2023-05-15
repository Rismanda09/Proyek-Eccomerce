<?php
require_once '../../dbkoneksi.php';
?>

<?php
$_id = isset($_GET['id']) ? $_GET['id'] : null;
if (!empty($_id)) {
    $sql = "SELECT * FROM restock WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
} else {
    $row = [];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SB Admin</title>
    <link href="../css/styles.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="../index.php">Beauty Admin</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="../../index.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="../index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Data Admin
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="../customer/customer.php">Customer</a>
                                <a class="nav-link" href="../orders/orders.php">Order</a>
                                <a class="nav-link" href="../produk/produk.php" id="col-hover">Produk</a>
                                <a class="nav-link" href="../type produk/type.php">Type Produk</a>
                                <a class="nav-link" href="../restock/restock.php">Restock</a>
                                <a class="nav-link" href="../supplier/supplier.php"> Supplier</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                            aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Pages
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Authentication
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                                    data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="login.php">Login</a>
                                        <a class="nav-link" href="register.php">Register</a>
                                        <a class="nav-link" href="password.php">Forgot Password</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseError" aria-expanded="false"
                                    aria-controls="pagesCollapseError">
                                    Error
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                                    data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="401.php">401 Page</a>
                                        <a class="nav-link" href="404.php">404 Page</a>
                                        <a class="nav-link" href="500.php">500 Page</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="charts.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Charts
                        </a>
                        <a class="nav-link" href="tables.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tables
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Admin
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main id="main-content">
            <form method="POST" action="proses_restock.php">
            <div class="form-group row">
                    <label for="restock_number" class="col-4 col-form-label">Restock Number</label>
                    <div class="col-8">
                        <?php
                        $sqlrestock_number = "SELECT * FROM restock";
                        $rsrestock_number = $dbh->query($sqlrestock_number);
                        ?>
                        <select id="restock_number" name="restock_number" class="custom-select">
                            <?php
                            foreach ($rsrestock_number as $rowrestock_number) {
                                ?>
                                <option value="<?= $rowrestock_number['id'] ?>"><?= $rowrestock_number['restock_number'] ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="date" class="col-4 col-form-label">Date</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            </div>
                            <input id="date" name="date" type="text" class="form-control" value="<?php if (isset($row['date']))
                                echo $row['date']; ?>">
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="qty" class="col-4 col-form-label">Qty</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            </div>
                            <input id="qty" name="qty" value="<?php if (isset($row['qty']))
                                echo $row['qty']; ?>" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="price" class="col-4 col-form-label">Price</label>
                    <div class="col-8">
                        <?php
                        $sqlprice = "SELECT * FROM restock";
                        $rsprice = $dbh->query($sqlprice);
                        ?>
                        <select id="price" name="price" class="custom-select">
                            <?php
                            foreach ($rsprice as $rowprice) {
                                ?>
                                <option value="<?= $rowprice['id'] ?>"><?= $rowprice['price'] ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="supplier_id" class="col-4 col-form-label">Supplier Id</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            </div>
                            <input id="supplier_id" name="supplier_id" value="<?php if (isset($row['supplier_id']))
                                echo $row['supplier_id']; ?>" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <br>
            <div class="form-group row">
                <div class="offset-4 col-8">
                        <?php
                        $button = (empty($_id)) ? "Update" : "Update";
                        ?>
                        <input type="submit" name="proses" type="submit" class="btn btn-outline-primary"
                            value="<?= $button ?>" />
                        <input type="hidden" name="id" value="<?= $_id ?>" />
                    </div>
                </div>
            </form>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023 By Rismanda Aulia Putri</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../assets/demo/chart-area-demo.js"></script>
    <script src="../assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="../js/datatables-simple-demo.js"></script>
</body>

</html>
<form>