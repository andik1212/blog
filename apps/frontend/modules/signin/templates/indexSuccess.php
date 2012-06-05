<h1>Blog userss List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>User</th>
      <th>Name</th>
      <th>Pass</th>
      <th>Messages</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($blog_userss as $blog_users): ?>
    <tr>
      <td><a href="<?php echo url_for('signin/show?id='.$blog_users->getId()) ?>"><?php echo $blog_users->getId() ?></a></td>
      <td><?php echo $blog_users->getUserId() ?></td>
      <td><?php echo $blog_users->getName() ?></td>
      <td><?php echo $blog_users->getPass() ?></td>
      <td><?php echo $blog_users->getMessages() ?></td>
      <td><?php echo $blog_users->getCreatedAt() ?></td>
      <td><?php echo $blog_users->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('signin/new') ?>">New</a>
