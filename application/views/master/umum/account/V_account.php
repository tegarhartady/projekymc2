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
                    <div class="header text-right pull-right"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            tambah
                        </button>
                    </div>
                </div>
                <div class="table-responsive card-body">
                    <table id="table" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kode account</th>
                                <th>Nama name</th>
                                <th>Description</th>
                                <th>Aktif ?</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $no = 1;
                            foreach ($acc as $hasil) {
                            ?>

                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $hasil->kodeakun ?></td>
                                    <td><?php echo $hasil->namaakun ?></td>
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
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Account</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- <form action="<?php echo site_url() . '/master/umum/account/tambah' ?>" method="post">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Kode Bank</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="kodebank" name="kodebank" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Bank</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="namabank" name="namabank" required>
                                </div>
                            </div>
                            <fieldset class="form-group">
                                <div class="row">
                                    <label class="col-form-label col-sm-2 pt-0">Aktif ? </label>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <label><input type="radio" name="aktif" value="Y"> Iya</label>
                                        </div>
                                        <div class="form-check">
                                            <label><input type="radio" name="aktif" value="N"> Tidak</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary"></input>
                            </div>
                        </form> -->
                        <form method="POST" action="<?php echo site_url() . '/master/umum/account/tambah' ?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kode Account</label>
                                    <input type="text" class="form-control" id="kodeacc" name="kodeacc" placeholder="Masukan Kode account">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nama Account</label>
                                    <input type="text" class="form-control" id="namaacc" name="namacc" placeholder="Masukan Nama Account">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Deskripsi</label>
                                    <!-- <input type="text" class="form-control" id="namaacc" name="namacc" placeholder="Masukan Nama Account"> -->
                                    <textarea name="deskripsi" id="deskripsi" cols="60" rows="10"></textarea>
                                </div>
                                <fieldset class="form-group">
                                    <div class="row">
                                        <label class="col-form-label col-sm-2 pt-0">Aktif ? </label>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input type="radio" name="aktif" value="True"> Iya
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" name="aktif" value="False"> Tidak
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
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
</body>

</html>