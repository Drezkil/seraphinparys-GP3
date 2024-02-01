<?php
/* Smarty version 4.3.2, created on 2024-02-01 08:17:17
  from 'C:\laragon\www\seraphinparys\mvc-sp-08\mod_authentification\vue\authentificationVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65bb538dc37760_02224326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70ae79e5c99a1149dfdee263de7e396db9a675b8' => 
    array (
      0 => 'C:\\laragon\\www\\seraphinparys\\mvc-sp-08\\mod_authentification\\vue\\authentificationVue.tpl',
      1 => 1706629249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65bb538dc37760_02224326 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Séraphin PARYS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="public/assets/css/normalize.css">
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/assets/css/themify-icons.css">
    <link rel="stylesheet" href="public/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="public/assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="public/assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
> -->

</head>
<body class="bg-dark">

<div class="container">
    <div class="row content mt-lg-5">
        <div class="col-lg-3"></div>

        <div class="col-lg-6">
            <div class="card rounded">
                <div class="card-header text-center">Authentification</div>
                <div class="card-body card-block">
                    <div <?php if (AuthentificationTable::getMessageErreur() != '') {?> class="alert alert-danger" role="alert" <?php }?>>
                        <?php echo AuthentificationTable::getMessageErreur();?>

                    </div>
                    <form action="index.php" method="post">
                        <input type="hidden" class="form-control" name="gestion" value="authentification">
                        <input type="hidden" class="form-control" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
                        <div class="form-group">
                            <label><br></label>
                            <div class="input-group">
                                <div class="input-group-addon">Utilisateur</div>
                                <input type="text" id="username3" name="login" class="form-control"
                                       value="<?php echo $_smarty_tpl->tpl_vars['unVendeur']->value->getLogin();?>
">
                        <div class=" input-group-addon"><i class="fa fa-user"></i></div>
                        </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">Mot de passe</div>
                        <input type="password" id="password3" name="motdepasse" class="form-control" value="">
                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                    </div>
                </div>
                <div class="form-actions form-group">
                    <button type="submit" class="btn btn-primary btn-sm rounded col-md-3">Se Connecter</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-3"></div>

</div>
<?php echo '<script'; ?>
 src="public/assets/js/vendor/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/assets/js/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/assets/js/plugins.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/assets/js/main.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
