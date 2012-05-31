<h1>Blog postss List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Post</th>
      <th>Photo</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($blog_postss as $blog_posts): ?>
    <tr>
      <td><a href="<?php echo url_for('main/show?id='.$blog_posts->getId()) ?>"><?php echo $blog_posts->getId() ?></a></td>
      <td><?php echo $blog_posts->getPost() ?></td>
      <td><?php echo $blog_posts->getPhoto() ?></td>
      <td><?php echo $blog_posts->getCreatedAt() ?></td>
      <td><?php echo $blog_posts->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('main/new') ?>">New</a>
