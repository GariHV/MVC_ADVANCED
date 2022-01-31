<select name='gender' id='inputgender' class='form-control' value='<?= isset($id) ?  $gender : '' ?>' >
    <option selected >Choose...</option>
    <option value="1" <?php if ($gender == 1){ echo 'selected = "selected"';}?>>
    Male </option>
    <option value="2" <?php if ($gender == 2){ echo 'selected = "selected"';}?>> Female </option>
</select>