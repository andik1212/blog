<h1>New Blog users</h1>

<?php //include_partial('form', array('form' => $form)) ?>
	
<form action="" method="post" name="signin">
<p>
Логин	
<input type="text" name="name">
</p>
<p>
Пароль	
<input type="password" name="pass">
</p>
<p><input type="submit" name="submit" value="Регистрация"></p>
</form>






<!--
<form action="<?php echo url_for('signin/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('signin/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'signin/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form ?>
    </tbody>
  </table>
</form> -->
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
