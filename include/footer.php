<?php
//cek session
if (!empty($_SESSION['admin'])) {
?>

    <noscript>
        <meta http-equiv="refresh" content="0;URL='./enable-javascript.html'" />
    </noscript>

    <!-- Footer START -->
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <br />
            </div>
        </div>
        <div class="footer-copyright white darken-1 white-text">
            <div class="container" id="footer" style="background: transparent;">
                <span class="black-text copyright-date">
                    &copy; <?php echo date("Y"); ?> E-Arsip | Developed by KKN UPNVY Kadilanggon Team
                </span>
            </div>
        </div>

    </footer>
    <!-- Footer END -->

    <!-- Javascript START -->
    <script type="text/javascript" src="asset/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="asset/js/materialize.min.js"></script>
    <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="asset/js/jquery.autocomplete.min.js"></script>
    <script data-pace-options='{ "ajax": false }' src='asset/js/pace.min.js'></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown-button").dropdown({
                hover: false
            });
            $('.button-collapse').sideNav({
                menuWidth: 240,
                edge: 'left',
                closeOnClick: true
            });
            $('#tgl_surat,#batas_waktu,#dari_tanggal,#sampai_tanggal').pickadate({
                selectMonths: true,
                selectYears: 10,
                format: "yyyy-mm-dd"
            });
            $('#isi_ringkas').val('');
            $('#isi_ringkas').trigger('autoresize');
            $('select').material_select();
            $('.tooltipped').tooltip({
                delay: 10
            });
            $("#kode").autocomplete({
                serviceUrl: "kode.php",
                dataType: "JSON",
                onSelect: function(suggestion) {
                    $("#kode").val(suggestion.kode);
                }
            });
            $("#alert-message").alert().delay(5000).fadeOut('slow');
            $('.modal-trigger').leanModal();
        });
    </script>
    <!-- Javascript END -->
    <style>
        span.dev {
            display: none !important;
        }
    </style>
<?php
} else {
    header("Location: ../");
    die();
}
?>