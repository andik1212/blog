<?php use_stylesheet('main.css') ?>
<?php session_start(); ?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Мир через видоискатель</title>
</head>

<body>


    <div class="content">
    	 <ul class="comments">
    <?php foreach ($blog_postss as $blog_posts): ?>

    <li>
      <p>
      <!--<a href="<?php echo url_for('main/show?id='.$blog_posts->getId()) ?>"> 	   <?php echo $blog_posts->getId() ?></a> -->
      <!-- <?php $id=$blog_posts->getId() ?> -->
      <?php echo $blog_posts->getPost() ?>
      <?php //echo $blog_posts->getPhoto() ?>
      <?php //echo $blog_posts->getCreatedAt() ?>
      <?php //echo $blog_posts->getUpdatedAt() ?>
      </p>
<ul class="comets_to_post">

         <a href="#<?//php echo url_for('comment') ?>" title="Читать далее"  class="button_com"> Читать далее </a>
        
    </ul>

    </li>
    <?php endforeach; ?>

         </ul>
    </div>
    <div class="footer">
    	
    </div>
</div>
</body>










<!--

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
-->
  <a href="<?php echo url_for('main/new') ?>">New</a>

