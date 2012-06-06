<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $blog_comments->getId() ?></td>
    </tr>
    <tr>
      <th>Commentary:</th>
      <td><?php echo $blog_comments->getCommentary() ?></td>
    </tr>
    <tr>
      <th>Photo:</th>
      <td><?php echo $blog_comments->getPhoto() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $blog_comments->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $blog_comments->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('comment/edit?id='.$blog_comments->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('comment/index') ?>">List</a>
