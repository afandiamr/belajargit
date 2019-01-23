<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>

    <?=
    $this->Html->css([
        '../plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css',
        '../bootstrap/dist/css/bootstrap.min.css',
        'animate.css',
        '../plugins/bower_components/toast-master/css/jquery.toast.css',
        'style.css', 'colors/blue.css'
    ])
    ?>
    <?= $this->fetch('css') ?>
    <?=
    $this->Html->script([
        '../plugins/bower_components/jquery/dist/jquery.min.js',
        '../bootstrap/dist/js/tether.min.js',
        '../bootstrap/dist/js/bootstrap.min.js',
        '../plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js',
        '../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js',
        'jquery.slimscroll.js',
        'waves.js',
        'custom.min.js',
        '../plugins/bower_components/toast-master/js/jquery.toast.js',
        'toastr.js',
        '../plugins/bower_components/styleswitcher/jQuery.style.switcher.js'
    ])
    ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('script') ?>
</head>
<?php echo $this->Flash->render() ?>
<?php echo $this->fetch('content') ?>
