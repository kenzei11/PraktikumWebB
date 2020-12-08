<?php
require(APPROOT . "/Views/include/header.php");
$error = Message();
?>

<?php if ($error != null) : ?>
    <div class="container-fluid" style="max-width:90%;">
        <div class="alert alert-danger" role="alert">
            <?php echo $error; ?>
        </div>
    </div>

<?php endif ?>

<div class="container-fluid regist" style="max-width: 90%;">
    <div class="row mt-5 mb-5 justify-content-center">
        <div class="col-10">
            <div class="card">
                <div class="card-body p-5">
                    <div class="row justify-content-center">
                        <a href="<?php echo BASEURL ?>">
                            <h1 class="title col-12 mt-1">
                                <span class="green">Petani</span><span class="orange">Kita</span>
                            </h1>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-7">
                            <form class="row justify-content-center" action="<?php echo BASEURL ?>register" method="post">
                                <div class="col-12">
                                    <div class="row mb-3">
                                        <label for="name" class="form-label">Nama</label>
                                        <div class="col-6">
                                            <input type="text" name="nama_depan" id="nama_depan" class="form-control form-control-sm" />
                                            <div id="" class="form-text">Nama Depan</div>
                                        </div>
                                        <div class="col-6">
                                            <input type="text" name="nama_belakang" id="nama_belakang" class="form-control form-control-sm" />
                                            <div id="" class="form-text">Nama Belakang</div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" name="username" id="username" class="form-control form-control-sm" />
                                        </div>
                                        <div class="col-6">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" name="email" id="email" class="form-control form-control-sm" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" id="password" class="form-control form-control-sm" />
                                        </div>
                                        <div class="col-6">
                                            <label for="cpassword" class="form-label">Confirm Password</label>
                                            <input type="password" name="cpassword" id="cpassword" class="form-control form-control-sm" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <label for="no_telp" class="form-label">No Telp</label>
                                            <input type="text" name="no_telp" id="no_telp" class="form-control form-control-sm" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <label for="jalan" class="form-label">Jalan</label>
                                            <input type="text" name="jalan" id="jalan" class="form-control form-control-sm" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <label for="kota" class="form-label">Kota</label>
                                            <input type="text" name="kota" id="kota" class="form-control form-control-sm" />
                                        </div>
                                        <div class="col-6">
                                            <label for="kabupaten" class="form-label">Kabupaten</label>
                                            <input type="text" name="kabupaten" id="kabupaten" class="form-control form-control-sm" />
                                        </div>
                                    </div>
                                    <div class="row mb-3 justify-content-end">
                                        <div class="col-12">
                                            <div class="d-grid gap-2 col-12 mx-auto mt-4">
                                                <button class="btn btn-primary" id="registerBtn" type="submit">
                                                    Sign Up
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-5 bg-card"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
require(APPROOT . "/Views/include/footer.php");
?>