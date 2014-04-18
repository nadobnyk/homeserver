<?php
echo "<br>import->start<br>";

$plugins_dir ="../plugins/";
$widgets_dir = "";

$glob = glob("*.php");
echo $glob[0];

foreach (glob($plugins_dir+"*/*.php") as $php_plugin)
{
    include $php_plugin;
}
foreach (glob($plugins_dir+"*/*.js") as $js_plugin)
{
    echo '<script type="text/javascript" src="'+$js_plugin+'"></script>';
}

foreach (glob($plugins_dir+"*/*.css") as $css_plugin)
{
    echo '<script type="text/javascript" src="'+$css_plugin+'"></script>';
}

foreach (glob($widgets_dir+"*/php/*.php") as $php_widget)
{
    include $php_widget;
}
foreach (glob($widgets_dir+"*/js/*.js") as $js_widget)
{
    echo '<script type="text/javascript" src="'+$js_widget+'"></script>';
}

foreach (glob($widgets_dir+"*/css/*.css") as $css_widget)
{
    echo '<link rel="stylesheet" type="text/css" href="'+$css_widget+'">';
}

echo "<br>import->end<br>";
?>