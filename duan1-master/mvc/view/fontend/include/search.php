<?php
$mydate = getdate(date("U"));
$ngaynhan = $mydate["year"] . '-' . $mydate["mon"] . '-' . ($mydate["mday"] + 1);
$ngaytra = $mydate["year"] . '-' . $mydate["mon"] . '-' . ($mydate["mday"] + 2);
if (!isset($_SESSION["ngaynhan"]) && !isset($_SESSION["ngaytra"])) {
    $_SESSION["ngaynhan"] = $ngaynhan;
    $_SESSION["ngaytra"] = $ngaytra;
}

?>
<div class="boking_table">
    <form action="" method="GET">
        <div class="row">
            <div class="col-md-4">
                <div class="book_tabel_item">
                    <div class="form-group">
                        <div class="input-group" id="">
                            <input onchange="minNgay()" class="ngay" type="date" name="ngaynhan" id="ngaydat" value="<?php echo $_SESSION["ngaynhan"] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group date" id="">
                            <div class="input-group" id="">
                                <input onchange="maxNgay()" class="ngay" type="date" name="ngaytra" id="ngaytra" value="<?php echo $_SESSION["ngaytra"] ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .ngay {
                    background: transparent;
                    background-image: initial;
                    background-position-x: initial;
                    background-position-y: initial;
                    background-size: initial;
                    background-repeat-x: initial;
                    background-repeat-y: initial;
                    background-attachment: initial;
                    background-origin: initial;
                    background-clip: initial;
                    background-color: transparent;
                    color: #777777;
                    border: 1px solid #2b3146;
                    width: 250px;
                    height: 40px;
                    padding: 10px
                }
            </style>
            <script>
                var today = new Date();
                var dd = today.getDate();
                var mm = today.getMonth() + 1; //January is 0!
                var yyyy = today.getFullYear();

                if (dd < 10) {
                    dd = '0' + dd
                }
                if (mm < 10) {
                    mm = '0' + mm
                }
                today = yyyy + '-' + mm + '-' + dd;
                // ngaydi = yyyy + '-' + mm + '-' + (dd + 1);
                // ngaytra = yyyy + '-' + mm + '-' + (dd + 2);
                // var x = document.getElementById("ngaydat").value = ngaydi;
                // var y = document.getElementById("ngaytra").value = ngaytra;
                document.getElementById("ngaydat").setAttribute("min", today);

                function minNgay() {
                    var mindat = document.getElementById("ngaydat").value;
                    document.getElementById("ngaytra").setAttribute("min", mindat);
                }

                function maxNgay() {
                    var maxtra = document.getElementById("ngaytra").value;
                    document.getElementById("ngaydat").setAttribute("max", maxtra);
                }
            </script>
            <div class="col-md-4">
                <div class="book_tabel_item">
                    <div class="form-group">
                        <div class="input-group">

                            <select class="wide form-control" name="id" id="city" style="width: 250px;height:40px" required>
                                <option value="">
                                    Thành phố
                                </option>

                                <?php
                                foreach ($dataCity as $key => $value) {
                                    ?>
                                    <option value="<?php echo $value["CityID"] ?>"><?php echo $value["NameCity"] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <select name="nameHotel" class="wide form-control" id="namehotel" style="width: 250px;height:40px">
                                <option data-display="Thành phố">Khách sạn</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                select {
                    display: block !important;
                }

                .nice-select {
                    display: none !important;
                }
            </style>
            <div class="col-md-4">
                <div class="book_tabel_item">
                    <!-- <div class="input-group">
                    <select class="wide" style="display: none;">
                        <option data-display="Từ khóa">Từ khóa</option>
                        <option value="1">Room 01</option>
                        <option value="2">Room 02</option>
                        <option value="3">Room 03</option>
                    </select>
                    <div class="nice-select wide" tabindex="0"><span class="current">Từ khóa</span>
                        <ul class="list">
                            <li data-value="Từ khóa" data-display="Từ khóa" class="option selected focus">Từ khóa</li>
                            <li data-value="1" class="option">Room 01</li>
                            <li data-value="2" class="option">Room 02</li>
                            <li data-value="3" class="option">Room 03</li>
                        </ul>
                    </div>
                </div> -->
                    <input class="book_now_btn button_hover" style="cursor: pointer" name="search" type="submit" value="Đặt ngay">
                </div>
            </div>
        </div>
    </form>
</div>