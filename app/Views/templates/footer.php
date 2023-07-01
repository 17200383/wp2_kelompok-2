<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    var popupMessage = "<?= session()->getFlashdata('popup_message') ?>";
    if (popupMessage) {
        alert(popupMessage);
    }
});
</script>

</body>
</html>