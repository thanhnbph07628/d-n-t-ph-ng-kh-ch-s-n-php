<option  value="" data-display="Thành phố">Khách sạn</option>
<?php
foreach ($dataRoomType as $key => $value) {
    ?>
    <option value="<?php echo $value["HotelID"] ?>"><?php echo $value["NameHotel"] ?></option>
<?php
}
?>
