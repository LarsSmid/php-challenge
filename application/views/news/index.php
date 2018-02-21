
<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>#</th>
      <th>Title</th>
      <th>edit/delete</th>
    </tr>
  </thead>
  <tbody>

<?php foreach ($news as $news_item): ?>
        <tr>
          <th scope="row"><?php echo $news_item['id']; ?></th>
          <td><?php echo $news_item['title']; ?></td>
          <td>
            <a href="/php_challenge/index.php/task/getWhere/<?php echo $news_item['id']; ?>" class="btn btn-info">View</a>
            <a href="/php_challenge/index.php/news/update/<?php echo $news_item['id']; ?>" class="btn btn-warning">edit</a>
            <a href="/php_challenge/index.php/news/delete/<?php echo $news_item['id']; ?>" class="btn btn-danger">delete</a>
          </td>
        </tr>

<?php endforeach; ?>
    </tbody>
</table>
<a href="/php_challenge/index.php/news/create" class="btn btn-primary pull-">Insert</a>
