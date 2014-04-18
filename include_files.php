<?php
$plugins_dir ="plugins/";
$widgets_dir = "widgets/";

foreach (glob($plugins_dir."*/*.php") as $php_plugin)
{
    require_once $php_plugin;

}
foreach (glob($plugins_dir."*/*.js") as $js_plugin)
{
    echo '<script type="text/javascript" src="'.$js_plugin.'"></script>';
}

foreach (glob($plugins_dir."*/*.css") as $css_plugin)
{
    echo '<script type="text/javascript" src="'.$css_plugin.'"></script>';
}

foreach (glob($plugins_dir."*/js") as $js_plugin)
{
    echo '<script type="text/javascript" src="'.$js_plugin.'"></script>';
}

foreach (glob($plugins_dir."*/css") as $css_plugin)
{
    echo '<script type="text/javascript" src="'.$css_plugin.'"></script>';
}

foreach (glob($widgets_dir."*/php/*.php") as $php_widget)
{
    require_once $php_widget;
}

foreach (glob($widgets_dir."*/js/*.js") as $js_widget)
{
    echo '<script type="text/javascript" src="'.$js_widget.'"></script>';
}

foreach (glob($widgets_dir."*/css/*.css") as $css_widget)
{
    echo '<link rel="stylesheet" type="text/css" href="'.$css_widget.'">';
}
?>