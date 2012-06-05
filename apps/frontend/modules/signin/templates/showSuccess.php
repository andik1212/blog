<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $blog_users->getId() ?></td>
    </tr>
    <tr>
      <th>User:</th>
      <td><?php echo $blog_users->getUserId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $blog_users->getName() ?></td>
    </tr>
    <tr>
      <th>Pass:</th>
      <td><?php echo $blog_users->getPass() ?></td>
    </tr>
    <tr>
      <th>Messages:</th>
      <td><?php echo $blog_users->getMessages() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $blog_users->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $blog_users->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('signin/edit?id='.$blog_users->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('signin/index') ?>">List</a>
