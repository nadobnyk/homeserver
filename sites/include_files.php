<?php
echo "<br>import->start<br>";
foreach (glob("/sites/*/php/*.php") as $php_file)
{
    include $php_file;
}

foreach (glob("/plugins/*/*.php") as $php_plugin)
{
    include $php_plugin;
}
foreach (glob("/plugins/*/*.js") as $js_plugin)
{
    echo '<script type="text/javascript" src="'+$js_plugin+'"></script>';
}

foreach (glob("/plugins/*/*.css") as $css_plugin)
{
    echo '<script type="text/javascript" src="'+$css_plugin+'"></script>';
}

foreach (glob("/sites/*/js/*.js") as $js_file)
{
    echo '<script type="text/javascript" src="'+$js_file+'"></script>';
}

foreach (glob("/sites/*/css/*.css") as $css_file)
{
    echo '<link rel="stylesheet" type="text/css" href="'+$css_file+'">';
}

echo "<br>import->end<br>";
?>