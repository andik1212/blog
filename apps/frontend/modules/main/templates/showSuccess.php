<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $blog_posts->getId() ?></td>
    </tr>
    <tr>
      <th>Post:</th>
      <td><?php echo $blog_posts->getPost() ?></td>
    </tr>
    <tr>
      <th>Photo:</th>
      <td><?php echo $blog_posts->getPhoto() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $blog_posts->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $blog_posts->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('main/edit?id='.$blog_posts->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('main/index') ?>">List</a>
