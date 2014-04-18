<?php
foreach (glob("/homeserver/sites/*/php/*.php") as $php_file)
{
    include $php_file;
}

foreach (glob("/homeserver/plugins/*/*.php") as $php_plugin)
{
    include $php_plugin;
}
foreach (glob("/homeserver/plugins/*/*.js") as $js_plugin)
{
    echo '<script type="text/javascript" src="'+$js_plugin+'"></script>';
}

foreach (glob("/homeserver/plugins/*/*.css") as $css_plugin)
{
    echo '<script type="text/javascript" src="'+$css_plugin+'"></script>';
}

foreach (glob("/homeserver/sites/*/js/*.js") as $js_file)
{
    echo '<script type="text/javascript" src="'+$js_file+'"></script>';
}

foreach (glob("/homeserver/sites/*/css/*.css") as $css_file)
{
    echo '<link rel="stylesheet" type="text/css" href="'+$css_file+'">';
}

?>