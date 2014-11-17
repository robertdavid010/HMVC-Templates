<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class empty_module extends MX_Controller {

	
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * This is the default controller for this CI application.
	 *
	 * This application is built for an HMVC enabled Code Ingniter installation.
	 * 
	 * ************ From the HMVC documentation ***************************
 	 *
	 * To use HMVC functionality, such as Modules::run(), controllers must
	 * extend the MX_Controller class.
	 *
	 * To use Modular Separation only, without HMVC, controllers will extend
	 * the CodeIgniter Controller class.
	 * 
	 * You must use PHP5 style constructors in your controllers. ie:
	 * 
     * :::php
     * <?php
	 * class Xyz extends MX_Controller 
	 * {
	 * 	function __construct()
	 * 	{
	 * 		parent::__construct();
	 * 	}
	 * }
	 *
	 * ********************************************************************
	 *
   * To use this empty module as a default module to use with the Module Templates.
   * copy the module folder "modules/empty_module" renaming the folder and
	 * the files inside as well as editing the code comments in the files respectively.. 
	 * 
	 * Renaming the the controller file to the same name as the module directory
	 * allows the controller to be called by just calling the module name
	 * in HVMC as you would in noraml CodeIgniter framework.
	 *
	 * Renaming the view file to <module_name>_view.php makes that file the 
	 * default view file for this templating system.
	 *
	 */
	public function index()
	{

    // Initialize the array with a 'title' element for use for the <title> tag.
		$data = array(
			'title' => 'Our templated module',
		);


		/*
		|
		| We can load views in a variety of ways with the 'templates' module.
    | It also has the flexibility in that no arguments need be specified at all
    | and will result in the default view file being use from the module:
		| application/modules/<module_name>/<module_name>_view.php		
		|
		*/

		// The default CodeIgniter way of loading a view still usable of course.
		// $this->load->view('empty_module_view');

		/*
		|
		| Our custome template library takes any one, all, or none
		| of up to four parameters that may be specified.
		| The parameters are: <data object>, <template_name>, <custom_view>, <module_name>
    | You call it like:
    | $this->template-load($paramter1, $parameter2, $parameter3, $parameter4);
    | $parameter1 : The $data object to be passed to the view files. This may be an array or object
    | $parameter2 : The template name if desired to be other than the default template views.
    | $parameter3 : The custom module view to load if other than the default is desired.
    | Parameters must be specified in sequence, so to skip a parameter use the NULL value.
		| *note: specifying <module_name> has not been thoroughly tested):
		|
		*/

    // Load the Modular Template CI library if not already loaded in autoload.php
		// $this->load->library('template'); //set to load in autoload.php

		// This will load the template as a module which can pass data to.
    // With the 'templates.php' libary installed in the simplest way to load view
    // data in the template view is using the template library.

		$this->template->load($data, null, 'empty_module');

		// We can load and pass data as well as <template_name> as optional 2nd param
    //
    //
    // The template module can also be loaded directly, exposing its functions locally
    // which allows us another way to load the views in the templates.
		// $this->load->module('templates');
		// $this->templates->index($data); // why does this work only if using index?

		// The template module can be run as a module within this module.
		// however it will not work unless $data['body'] is passed.
		// as debug_backtrace() will not get the calling class this way.
		// $data['body'] = "Initiaizing 'body' element";
		// echo Modules::run('templates', $data);
	}
}

/* End of file empty_module.php */
/* Location: ./application/modules/empty_module/controllers/empty_module.php */


