<?php echo validation_errors(); ?>

<?php echo form_open('task/update/'. $id); ?>
    <label for="taak">taak</label>
    <input type="input" name="taak" value="" /><br />

    <input type="submit" class="btn btn-success"  value="Update lijst" />

</form>
