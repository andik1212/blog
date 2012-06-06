<h1>Blog commentss List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Commentary</th>
      <th>Photo</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($blog_commentss as $blog_comments): ?>
    <tr>
      <td><a href="<?php echo url_for('comment/show?id='.$blog_comments->getId()) ?>"><?php echo $blog_comments->getId() ?></a></td>
      <td><?php echo $blog_comments->getCommentary() ?></td>
      <td><?php echo $blog_comments->getPhoto() ?></td>
      <td><?php echo $blog_comments->getCreatedAt() ?></td>
      <td><?php echo $blog_comments->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('comment/new') ?>">New</a>
