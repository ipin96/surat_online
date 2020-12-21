<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM LOGIN ADMIN</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css">
    
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/app.css">

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body>

    <div id="auth">
        
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 mx-auto">
                    <div class="card pt-4">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <h3>FORM LOGIN ADMIN</h3>
                                <p>Isikan form dengan benar untuk lanjut ke sistem.</p>
                            </div>
                            <form method="post" action="<?= site_url('login/validate') ?>">
                                <div class="form-group position-relative has-icon-left">
                                    <label for="username">Username</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control <?= form_error('username') ? 'is-invalid' : '' ?>" name="username" value="<?= set_value('username') ?>">
                                        <div class="form-control-icon">
                                            <i data-feather="user"></i>
                                            <div class="invalid-feedback">
                                                <?= form_error('username') ?>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left">
                                    <div class="clearfix">
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="position-relative">
                                        <input type="password" class="form-control <?= form_error('password') ? 'is-invalid' : '' ?>" name="password" value="<?= set_value('password') ?>">
                                        <div class="form-control-icon">
                                            <i data-feather="lock"></i>
                                            <div class="invalid-feedback">
                                                <?= form_error('password') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class='form-check clearfix my-4'>
                                    <div class="checkbox float-left">
                                        <input type="checkbox" id="checkbox1" class='form-check-input' >
                                        <label for="checkbox1">Remember me</label>
                                    </div>
                                    <div class="float-right">
                                        <a href="">Don't have an account?</a>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <button type="submit" class="btn btn-primary float-right"><i class="fa fa-sign-in"></i> Masuk</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="<?= base_url() ?>assets/js/feather-icons/feather.min.js"></script>
    <script src="<?= base_url() ?>assets/js/app.js"></script>
    
    <script src="<?= base_url() ?>assets/js/main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script type="text/javascript">
        <?php if($this->session->flashdata('message_success')){ ?>
            toastr.success("<?php echo $this->session->flashdata('message_success'); ?>");
        <?php }else if($this->session->flashdata('message_error')){  ?>
            toastr.error("<?php echo $this->session->flashdata('message_error'); ?>");
        <?php }else if($this->session->flashdata('message_warning')){  ?>
            toastr.warning("<?php echo $this->session->flashdata('message_warning'); ?>");
        <?php }else if($this->session->flashdata('message_info')){  ?>
            toastr.info("<?php echo $this->session->flashdata('message_info'); ?>");
        <?php } ?>
    </script>
</body>

</html>
