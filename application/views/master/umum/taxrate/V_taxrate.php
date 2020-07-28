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
                    <h1 class="card-title"><?= $title; ?></h1>
                    <div class="header text-right pull-right"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            tambah
                        </button>
                    </div>
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

        <!-- Modal Tambah Start -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Tax Rate</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo site_url() . '/master/umum/taxrate/tambah' ?>" method="post" id="myForm">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Kode Tax Rate</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="kodetaxrate" name="kodetaxrate" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">Nama Tax Rate</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="namataxrate" name="namataxrate" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPercent" class="col-sm-2 col-form-label">Tax Percent</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="taxpercent" name="taxpercent" required> %
                                    <input type="hidden" name="taxpercenttest" id="taxpercenttest">
                                    <!-- <o-percent-input attr="percent" label="Percentage" data="100" read-only="no" required="yes"></o-percent-input> -->
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="taxacct" class="col-sm-2 col-form-label">Tax Acct</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="taxacct" name="taxacct" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="desc" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <!-- <input type="text" class="form-control" id="taxdescripsi" name="taxdescripsi" required> -->
                                    <textarea name="taxdeskripsi" id="taxdeskripsi" cols="50" rows="10"></textarea>
                                </div>
                            </div>
                            <fieldset class="form-group">
                                <div class="row">
                                    <label class="col-form-label col-sm-2 pt-0">Aktif ? </label>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <label><input type="radio" name="aktif" value="1"> Iya</label>
                                        </div>
                                        <div class="form-check">
                                            <label><input type="radio" name="aktif" value="0"> Tidak</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary"></input>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- Modal Tambah Finish -->
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
    <script type="text/javascript">
        document.getElementById('myForm').onsubmit = function() {
            document.getElementById('myFraction').value =
                document.getElementById('myPercent').value / 100;
        }
    </script>
</body>

</html>