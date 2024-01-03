    </div>
    <script>

    document.addEventListener('DOMContentLoaded', function() {
        var url = new URL(window.location.href);
        var tabId = url.hash.substring(1);

        if (tabId) {
            var tab = new bootstrap.Tab(document.getElementById(tabId));
            tab.show();
        }
    });
    </script>
    
    <script src="<?= base_url('assets') ?>/js/bootstrap.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?= base_url('assets') ?>/swal/sweetalert2.all.min.js"></script>
    <script src="<?= base_url('assets') ?>/swal/swalMe.js"></script>

</body>
</html>