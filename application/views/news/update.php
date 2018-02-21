<?php echo validation_errors(); ?>

<?php echo form_open('news/update/'. $id); ?>
    <label for="title">Title</label>
    <input type="input" name="title" value="" /><br />

    <input type="submit" class="btn btn-success"  value="Update lijst" />

</form>
