<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('layouts/partials/head'); ?>
<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <?php $this->load->view('layouts/partials/sidebar'); ?>
        </div>
        <div id="main">
            <?php $this->load->view('layouts/partials/navbar'); ?>
            <div class="main-content container-fluid">
                <div class="page-title">
                    <h4><?= $title ? $title : '' ?></h4><hr>
                </div>
                <section class="section">
                    <?= $content ? $content : '' ?>
                </section>
            </div>
            <?php $this->load->view('layouts/partials/footer'); ?>
        </div>
    </div>
    <?php $this->load->view('layouts/partials/scripts'); ?>
</body>
</html>
