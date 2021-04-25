<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?= base_url('assets/beranda'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>
</head>

<body style="background-color: #519ECD;">

    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card mx-auto d-block shadow-lg p-3 mb-5 bg-white rounded" style="width: 30rem; margin-top:10%; height: 30rem;">
                        <div class="card-body">
                            <h3 class="card-title text-center">Login</h3>
                            <span class="m2"><?php echo $this->session->flashdata('pesan') ?></span>
                            <hr>
                            <form action="<?= base_url('auth/login_aksi'); ?>" method="POST">
                                <div class="form-group">
                                    <label for="username">Username :</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Tulis disini.." autocomplete="off" autofocus>
                                    <?php echo form_error('username', '<div class="text-danger text-small">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="username">Password :</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Tulis disini..">
                                    <?php echo form_error('password', '<div class="text-danger text-small">', '</div>') ?>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-info btn-block">Login</button>
                                    <a href="<?= base_url('beranda/'); ?>" class="btn btn-warning btn-block">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>