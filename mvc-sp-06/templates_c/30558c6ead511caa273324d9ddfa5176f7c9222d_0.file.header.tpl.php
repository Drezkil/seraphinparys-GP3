<?php
/* Smarty version 4.3.2, created on 2024-01-29 13:47:56
  from 'C:\laragon\www\seraphinparys\mvc-sp-04\public\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65b7ac8c9f51f2_49302580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30558c6ead511caa273324d9ddfa5176f7c9222d' => 
    array (
      0 => 'C:\\laragon\\www\\seraphinparys\\mvc-sp-04\\public\\header.tpl',
      1 => 1706024924,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b7ac8c9f51f2_49302580 (Smarty_Internal_Template $_smarty_tpl) {
?>       <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>


                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="pblic/images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#A VOUS D'ECRIRE LE LIEN"><i class="fa fa-power -off"></i><?php echo $_smarty_tpl->tpl_vars['deconnexion']->value;?>
</a>
                        </div>
                    </div>
                        <div class="user-area">
                        Bienvenue <?php echo $_smarty_tpl->tpl_vars['login']->value;?>

                        </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
<?php }
}
