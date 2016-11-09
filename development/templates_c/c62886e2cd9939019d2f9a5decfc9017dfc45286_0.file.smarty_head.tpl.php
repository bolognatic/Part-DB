<?php
/* Smarty version 3.1.30, created on 2016-11-08 22:43:43
  from "C:\xampp\htdocs\part-db\templates\nextgen\smarty_head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5822470f2edea3_73520959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c62886e2cd9939019d2f9a5decfc9017dfc45286' => 
    array (
      0 => 'C:\\xampp\\htdocs\\part-db\\templates\\nextgen\\smarty_head.tpl',
      1 => 1478641418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5822470f2edea3_73520959 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php if (isset($_smarty_tpl->tpl_vars['http_charset']->value)) {?><meta charset=<?php echo $_smarty_tpl->tpl_vars['http_charset']->value;?>
>
        <?php } else { ?><meta charset="utf-8"><?php }?>
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title> 
        
        <!-- Include Bootstrap -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['relative_path']->value;?>
css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Include Awsome Font -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['relative_path']->value;?>
css/font-awesome.min.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->
        
        <!-- Includes Sidebar -->
        <!-- <link href="<?php echo $_smarty_tpl->tpl_vars['relative_path']->value;?>
templates/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/simple-sidebar.css" rel="stylesheet"> -->
        
        <!-- Checkboxes -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['relative_path']->value;?>
css/awesome-bootstrap-checkbox.css" rel="stylesheet">
        
        <!-- Fileinput -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['relative_path']->value;?>
css/fileinput.min.css" media="all" rel="stylesheet"/>
       
        <!-- Include Part-DB Theme -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['relative_path']->value;?>
templates/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/nextgen.css" rel="stylesheet">
        <!-- <link href="<?php echo $_smarty_tpl->tpl_vars['relative_path']->value;?>
templates/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/partdb.css" rel="stylesheet"> -->
        <?php if (isset($_smarty_tpl->tpl_vars['custom_css']->value)) {?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['relative_path']->value;
echo $_smarty_tpl->tpl_vars['custom_css']->value;?>
"> <?php }?>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['relative_path']->value;?>
js/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>
        
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['relative_path']->value;?>
js/bootstrap.min.js"><?php echo '</script'; ?>
>   
        
        <!-- jQuery Form lib -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['relative_path']->value;?>
js/jquery.form.min.js"><?php echo '</script'; ?>
>   
        
        
        
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['relative_path']->value;?>
DataTables-1.10.12/css/jquery.dataTables.min.css"/>
 
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['relative_path']->value;?>
DataTables-1.10.12/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['relative_path']->value;?>
DataTables-1.10.12/js/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
        
        <?php if (isset($_smarty_tpl->tpl_vars['javascript_files']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['javascript_files']->value, 'file');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
?>
            <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['relative_path']->value;?>
javascript/<?php echo $_smarty_tpl->tpl_vars['file']->value['filename'];?>
.js"><?php echo '</script'; ?>
>

            <?php if ($_smarty_tpl->tpl_vars['file']->value['filename'] == "calculator") {?>
                <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['relative_path']->value;?>
templates/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/tools_calculator.php/calculator.css" type="text/css">
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php }?>
                
        <!-- Redirect -->
       
        
    </head>
    
<body>

    
    <!-- Treeview -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['relative_path']->value;?>
js/bootstrap-treeview.js"><?php echo '</script'; ?>
>
    
    <!-- FileInput -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['relative_path']->value;?>
js/fileinput.min.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['relative_path']->value;?>
templates/nextgen/js/part-db.js"><?php echo '</script'; ?>
>
    

   
     <header>
      <nav class="navbar navbar-default">
         <div class="container-fluid">
         <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['relative_path']->value;?>
startup.php">Part-DB</a>
          </div>

          <!-- Navbar -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <!-- Searchbar -->

               <form class="navbar-form navbar-right" action="<?php echo $_smarty_tpl->tpl_vars['relative_path']->value;?>
show_search_parts.php" method="get">
                  <div class=class="navbar-form navbar-right">
                     <div class="btn-group">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Suchoptionen
                        <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="SearchOptions">
                           <li class="checkbox"><input type="checkbox" name="search_name" value="true" checked>
                                <label for="search_name">Name</label></li>
                           <li class="checkbox"><input type="checkbox" class="styled" name="search_category" value="true" checked>
                               <label for="search_category">Kategorie</label></li>
                           <li class="checkbox"><input type="checkbox" name="search_description" value="true" checked>
                               <label for="search_description"></label>Beschreibung</li>
                           <li class="checkbox"><input type="checkbox" name="search_storelocation" value="true" checked>
                               <label for="search_storelocation">Lagerort</label></li>
                           <li class="checkbox"><input type="checkbox" name="search_comment" value="true" checked>
                               <label for="search_comment">Kommentar</label></li>
                           <li class="checkbox"><input type="checkbox" name="search_supplierpartnr" value="true" checked>
                               <label for="search_supplierpartnr">Bestellnr.</label></li>
                           <li class="checkbox"><input type="checkbox" name="search_supplier" value="true">
                               <label for="search_supplier">Lieferant</label></li>
                           <li class="checkbox"><input type="checkbox" name="search_manufacturer" value="true">
                               <label for="search_manufacturer">Hersteller</label></li>
                           <li class="checkbox"><input type="checkbox" name="search_footprint" value="true">
                               <label for="search_footprint">Footprint</label></li>
                        </ul>
                     </div>
                     
                    <input type="search" class="form-control" placeholder="Suche" name="keyword">
                    <button type="submit" class="btn btn-default">Los!</button>
                 
                 
                  </div>
               </form>
      
          
    
         </div><!-- /.navbar-collapse -->
     
      </div><!-- /.container-fluid -->
    </nav>
   </header>
   
   <main>
      <div class="container-fluid">
   
           <div class="row">
                <aside>
                    <div class="col-sm-3 col-md-2 sidebar">
                        <ul class="nav nav-sidebar">
                            <div id="categories">
                               <h4>Kategorien</h4>
                                <div id="tree-categories"/>
                            </div>
                            <div id="devices">
                                <h4>Baugruppen</h4>
                                <div id="tree-devices"/>
                            </div>
                            <div id="tools">
                                <h4>Verwaltung</h4>
                                <div id="tree-tools"/>
                            </div>
                        </ul>
                        
                        <ul class="nav nav-sidebar" id="tree-managment">

                        </ul>
                    </div>
                </aside>
                <div class="col-xs-12 col-sm-9 col-md-10" id="main" main >
                   <div class="container-fluid" id="content">
                       <?php if (isset($_smarty_tpl->tpl_vars['messages']->value)) {?>
                        <div class="panel panel-error">
                            <?php if (isset($_smarty_tpl->tpl_vars['messages_div_title']->value)) {?><div class="panel-heading"><h2><?php echo $_smarty_tpl->tpl_vars['messages_div_title']->value;?>
</h2></div><?php }?>
                            <div class="panel-body">
                                <form action="" method="post">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['msg']->value['text'])) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['msg']->value['strong']) {?><strong><?php }?>
                                            <?php if (isset($_smarty_tpl->tpl_vars['msg']->value['color'])) {?><font color="<?php echo $_smarty_tpl->tpl_vars['msg']->value['color'];?>
"><?php }?>
                                            <?php echo $_smarty_tpl->tpl_vars['msg']->value['text'];?>

                                            <?php if (isset($_smarty_tpl->tpl_vars['msg']->value['color'])) {?></font><?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['msg']->value['strong']) {?></strong><?php }?>
                                        <?php }?>

                                        <?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['html']->value;?>

                                        <?php }?>

                                        <?php if (!$_smarty_tpl->tpl_vars['no_linebreak']->value) {?><br><?php }?>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                                    <?php if (isset($_smarty_tpl->tpl_vars['reload_link']->value)) {?>
                                        <br>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['reload_link']->value;?>
">
                                            <button>Seite neu laden</button>
                                        </a>
                                    <?php }?>
                                </form>
                            </div>
                        </div>
                    <?php }
}
}