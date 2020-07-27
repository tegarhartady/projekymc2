<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>YMC2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->load->view('master/template/css.php'); ?>
    <!-- Tell the browser to be responsive to screen width -->
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php $this->load->view('master/template/navbar.php'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <!-- <h1 class="m-0 text-dark"><?= $title; ?></h1> -->
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <?php $this->load->view('master/template/breadcrumb.php'); ?>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><?= $title; ?></h3>
                </div>
                <div class="table-responsive card-body">
                    <table id="table" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Kode Tax Rate</th>
                                <th>Nama Tax Rate</th>
                                <th>Tax Percent</th>
                                <th>Tax Acct</th>
                                <th>Deksripsi</th>
                                <th>Aktif ?</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $no = 1;
                            foreach ($tax as $hasil) {
                            ?>

                                <tr>
                                    <td><?php echo $hasil->kodetax ?></td>
                                    <td><?php echo $hasil->namatax ?></td>
                                    <td><?php echo $hasil->persentax ?></td>
                                    <td><?php echo $hasil->acct ?></td>
                                    <td><?php echo $hasil->deksripsi ?></td>
                                    <td><?php echo $hasil->aktif ?></td>

                                </tr>

                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php $this->load->view('master/template/sidebar.php'); ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <?php $this->load->view('master/template/js.php'); ?>
</body>

</html>