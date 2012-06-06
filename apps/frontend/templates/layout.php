<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <title> Мир через видоискатель </title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>

<body>

<div class="wrapper">
	<div class="header">
    	<form action="#" name=" registration">
	<?php if(!isset($_SESSION["name"])){ ?>
        <ul class="regist">
        	<li>
        		<label>
                	Login
            		<input type="text" name="Login" value="Введите логин" />
            	</label>
            </li>
            <li>
            	<label>
                	Password
            		<input type="text" name="Password" value="Введите пароль" />
            	</label>
            </li>
            <li>
            	<a href="<?php echo url_for('signin/new') ?>">Регистрация</a> 			<input type="submit" name="Submit" value="Вход" />
            </li>    
	<?php } else { 
		  echo "Hello ".$_SESSION["name"]; ?>
		  <input type="submit" name="Logout" value="Выход" /> 
	<?php } ?>
        </form>
    </div>
  




    <?php echo $sf_content ?>


    <div class="footer">
    	
    </div>
  </body>
</html>
