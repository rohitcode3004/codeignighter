<br><br><br><br>
<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php  echo form_open('posts/create') ?>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" placeholder="Title" name="title">
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" id="body" placeholder="Add Body" name="body">
    </textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>