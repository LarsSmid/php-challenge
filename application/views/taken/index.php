
<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>#</th>
      <th>Title</th>
      <th>group id</th>
      <th>edit/delete</th>
    </tr>
  </thead>
  <tbody>

<?php foreach ($taken as $taak): ?>
        <tr>
          <th scope="row"><?php echo $taak['id']; ?></th>
          <td><?php echo $taak['taak']; ?></td>
          <td><?php echo $taak['group_id']; ?></td>
          <td>
            <a href="/php_challenge/index.php/task/update/<?php echo $taak['id']; ?>" class="btn btn-warning">edit</a>
            <a href="/php_challenge/index.php/task/delete/<?php echo $taak['id']; ?>" class="btn btn-danger">delete</a>
          </td>
        </tr>

<?php endforeach; ?>
    </tbody>
</table>
<a href="/php_challenge/index.php/task/create" class="btn btn-primary pull-">Insert</a>
