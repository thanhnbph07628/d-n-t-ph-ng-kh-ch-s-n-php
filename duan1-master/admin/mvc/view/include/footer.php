<script src="./mvc/Webroot/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="./mvc/Webroot/assets/libs/popper.js/dist/popper.min.js"></script>
<script src="./mvc/Webroot/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./mvc/Webroot/assets/extra-libs/sparkline/sparkline.js"></script>
<script src="./mvc/Webroot/dist/js/waves.js"></script>
<script src="./mvc/Webroot/dist/js/sidebarmenu.js"></script>
<script src="./mvc/Webroot/dist/js/custom.min.js"></script>
<script src="./mvc/Webroot/js/popper.js"></script>
<script>
    $("#khachsan").change(function() {
        var HotelID = $("#khachsan").val();
        $.ajax({
            type: "GET",
            url: "index.php?controller=quanlyphong&action=laydulieuHotel",
            data: 'idht=' + HotelID,
            success: function(data) {
                $("#loaiphong").html(data);
            }
        });

    })
    // console.log(HotelID);
</script>
</body>

</html>