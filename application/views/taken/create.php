<?php echo validation_errors(); ?>

<?php echo form_open('task/create'); ?>

    <label for="title">Title</label>
    <input type="input" name="taak" /><br />
      <input type="hidden" name="group_id" value="<?php echo $id ?>"></input>

    <input type="submit" class="btn btn-success" name="submit" value="Create nieuwe taak" />

</form>
