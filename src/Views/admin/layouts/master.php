<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?=$meta['title']?></title>
    <link rel="stylesheet" href="<?=url('public/admin/vendors/feather/feather.css')?>">
    <link rel="stylesheet" href="<?=url('public/admin/vendors/ti-icons/css/themify-icons.css')?>">
    <link rel="stylesheet" href="<?=url('public/admin/vendors/css/vendor.bundle.base.css')?>">
    <link rel="stylesheet" href="<?=url('public/admin/vendors/font-awesome/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?=url('public/admin/vendors/datatables.net-bs5/dataTables.bootstrap5.css')?>">
    <link rel="stylesheet" href="<?=url('public/admin/vendors/jquery-toast-plugin/jquery.toast.min.css')?>">
    <link rel="stylesheet" href="<?=url('public/admin/vendors/ti-icons/css/themify-icons.css')?>">
    <link rel="stylesheet" href="<?=url('public/admin/js/select.dataTables.min.css')?>">
    <link rel="stylesheet" href="<?=url('public/admin/css/style.css')?>">
    <link rel="shortcut icon" href="<?=url('public/admin/images/favicon.png')?>" />

    <script src="<?=url('public/admin/vendors/js/vendor.bundle.base.js')?>"></script>
    <script src="<?=url('public/admin/vendors/chart.js/chart.umd.js')?>"></script>
    <script src="<?=url('public/admin/vendors/datatables.net/jquery.dataTables.js')?>"></script>
    <script src="<?=url('public/admin/vendors/datatables.net-bs5/dataTables.bootstrap5.js')?>"></script>
    <script src="<?=url('public/admin/vendors/jquery-toast-plugin/jquery.toast.min.js')?>"></script>

    <script src="<?=url('public/admin/js/dataTables.select.min.js')?>"></script>
    <script src="<?=url('public/admin/js/off-canvas.js')?>"></script>
    <script src="<?=url('public/admin/js/hoverable-collapse.js')?>"></script>
    <script src="<?=url('public/admin/js/template.js')?>"></script>
    <script src="<?=url('public/admin/js/settings.js')?>"></script>
    <script src="<?=url('public/admin/js/todolist.js')?>"></script>
    <script src="<?=url('public/admin/js/jquery.cookie.js')?>"></script>
    <script src="<?=url('public/admin/js/dashboard.js')?>"></script>
</head>
<body>
<?=$content ?? null?>

<?php if($this->session->hasFlashData()): ?>
    <?php $title = $this->session->getFlash('title'); ?>
    <?php $message = $this->session->getFlash('message'); ?>
    <?php $status = $this->session->getFlash('status'); ?>
    <script>
        resetToastPosition = function() {
            $('.jq-toast-wrap').removeClass('bottom-left bottom-right top-left top-right mid-center');
            $(".jq-toast-wrap").css({
                "top": "",
                "left": "",
                "bottom": "",
                "right": ""
            });
        }

        resetToastPosition();
        $.toast({
            heading: '<?=$title?>',
            text: '<?=$message?>',
            showHideTransition: 'slide',
            icon: '<?=$status?>',
            loaderBg: '<?=($status === 'success' ? '#f96868' : $status === 'error' ? '#f2a654' : $status === 'info' ? '#46c35f' : '#57c7d4')?>',
            position: 'bottom-right'
        });
    </script>
<?php endif; ?>
</body>
</html>