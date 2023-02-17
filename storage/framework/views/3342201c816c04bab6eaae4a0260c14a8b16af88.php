
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Adi-EXPO</title>
        <?php echo $__env->make('backend.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>

<body class="g-sidenav-show  bg-gray-100">
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <?php echo $__env->make('backend.leftbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
  <?php echo $__env->make('backend.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<!-- footer -->
<?php echo $__env->make('backend.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- footer -->

</body>
</html><?php /**PATH /home/mappple/Documents/adi-expo/resources/views/home.blade.php ENDPATH**/ ?>