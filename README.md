HMVC-Templates
==============

A simple yet powerful and flexible library for the Code Igniter framework with the HMVC extension to manage HTML view templates.

This library and templating system makes it very simple and easy to quickly create HTML template files to seperate markup to be visually rendered from the header and footer sections where meta data links, or scripts may be likely to be included and needed for re-use across multiple views.

To use:

Download the files.

Plase the "templte.php" libary file in your Code Igniter application/libary directory.

Place the "templates" folder in the application/modules directory of your HMVC enabled Code Igniter installation.

Place the "empty_module" folder also in the application/modules directory as a notepad module from which to start building your modules.


The libarary can be loaded as any normal CI libary, and is best to be autoloaded for your scripts by includeing the libary in autoload.php


After the installation of the Modular Templates library you will be able to load view data in the template views by using:

$this->template->load($data, $param1, $param2, $param3);

$this->template-load($data, $param1, $param2, $param3);

$param1 : The name of the template view files to be used. If NULL, then 'default' is used.

$param2 : The desired module view to get the content for the template views. Use the veiw filename without '_view.php'

$param3 : The module from which to get the view file (if different than the calling module).

Parameters must be specified in sequence, so to skip a parameter use the NULL value.