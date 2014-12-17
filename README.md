#HMVC-Templates
===

A simple yet powerful and flexible library for the Code Igniter framework with the HMVC extension to manage HTML view templates.

This library and templating system makes it very simple and easy to quickly create HTML template files to separate markup to be visually rendered from the header and footer sections where meta data links, or scripts may be likely to be included and needed for re-use across multiple views.

### To install:

Download the files.

1. Place the "template.php" library file in your Code Igniter application/library directory.

2. Place the "templates" folder in the application/modules directory of your HMVC enabled Code Igniter installation.

3. Place the "empty_module" folder also in the application/modules directory as a notepad module from which to start building your modules.


4. The library can be loaded as any normal CI library, and is best to be auto-loaded for your scripts by including the library in autoload.php

### To use:

After the installation of the HMVC Templates library you will be able to load view data in your template views by using:

`$this->template->load($data, $param1, $param2, $param3);`

in your controllers where you wish to load a view.

`$data` : Is any data you wish to pass to the view, as you normally would in CI.

`$param1` : The name of the template view files to be used. If NULL, then 'default' is used (note* Only supports custom defined "body" view templates at this time. Future support for custom header, body, and footer templates is a todo).

`$param2` : The desired module view file to generate the content for the template views. Use the view filename without "_view.php". The default view file modules/module_name/module_name_view.php of the calling module will be used if the parameter is not specified.

`$param3` : The module from which to get the view file (if different than the calling module).

Parameters must be specified in sequence but not all parameters are required. To skip a parameter to specify the subsequent parameter use "NULL" as the value for the parameter to be skipped.
