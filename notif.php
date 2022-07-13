<?php if (!empty($_SESSION['notif'])) : ?>
    <script>
        Swal.fire(
          'Berhasil!',
          '<?php echo $_SESSION["notif"] ?>',
          'success'
        )
    </script> 
    <?php unset($_SESSION['notif']) ?> 
<?php endif; ?>

<?php if (!empty($_SESSION['gagal'])) : ?>
    <script>
        Swal.fire(
          'Gagal!',
          '<?php echo $_SESSION["gagal"] ?>',
          'error'
        )
    </script> 
    <?php unset($_SESSION['gagal']) ?> 
<?php endif; ?>