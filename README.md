HMVC-Templates
==============

A simple yet powerful and flexible library for the Code Igniter framework with the HMVC extension to manage HTML view templates.

This library and templating system makes it very simple and easy to quickly create HTML template files to seperate markup to be visually rendered from the header and footer sections where meta data links, or scripts may be likely to be included and needed for re-use across multiple views.

To use:

Download the files.

Place the "template.php" libary file in your Code Igniter application/libary directory.

Place the "templates" folder in the application/modules directory of your HMVC enabled Code Igniter installation.

Place the "empty_module" folder also in the application/modules directory as a notepad module from which to start building your modules.


The library can be loaded as any normal CI libary, and is best to be autoloaded for your scripts by including the libary in autoload.php


After the installation of the HMVC Templates library you will be able to load view data in the template views by using:

`$this->template->load($data, $param1, $param2, $param3);`

in your controller modules where you wish to load a view.

$data : Is any data you wish to pass to the view, as you normally would in CI.

$param1 : The name of the template view files to be used. If NULL, then 'default' is used (note* Only supports custom defined "body" view templates at this time. Future support for custom header, body, and footer templates is a todo).

$param2 : The desired module view file to generate the content for the template views. Use the veiw filename without "_view.php". The default view file modules/<module name>/<module name>_view.php of the calling module will be used if the parameter is not specified.

$param3 : The module from which to get the view file (if different than the calling module).

Parameters must be specified in sequence but not all parameters are required. To skip a parameter to specify the subsequent parameter use "NULL" as the value for the paramter to be skipped.
