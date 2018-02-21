<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

    <label for="title">Title</label>
    <input type="input" name="title" /><br />

    <input type="submit" class="btn btn-success" name="submit" value="Create news item" />

</form>
