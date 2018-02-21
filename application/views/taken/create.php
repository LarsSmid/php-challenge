<?php echo validation_errors(); ?>

<?php echo form_open('task/create'); ?>

    <label for="title">Title</label>
    <input type="input" name="taak" /><br />

    <input type="submit" class="btn btn-success" name="submit" value="Create nieuwe taak" />

</form>
