<option value="">---Chọn loại phòng---</option>
<?php
foreach ($dataRoomType as $key => $value) {
    ?>
    <option value="<?php echo $value["RoomTypeID"] ?>" ><?php echo $value["NameRoomType"] ?></option>
<?php
}
?>