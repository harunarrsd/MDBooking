<html lang="en">
<head>
    <title><?php echo $main['title']; ?></title>
    <?php $this->load->view('layout/head') ?>
</head>
<body>
    <!-- header -->
    <?php $this->load->view('layout/header')?>
    <!-- END header -->

    <!-- pages -->
    <?php echo $main['pages']; ?>
    <!-- END pages -->
    
    <!-- footer -->
    <?php $this->load->view('layout/footer')?>
    <!-- END footer -->

    <!-- javascript -->
    <?php $this->load->view('layout/javascript')?>
    <!-- END javascript -->
</body>
</html>