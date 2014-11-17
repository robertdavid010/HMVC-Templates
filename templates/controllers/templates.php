<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class templates extends MX_Controller {

	/**
	 *
	 * This is the Modular Template controller. Pass a data object here and it loads the data into view templates.
	 * This controller is called from the templates.php library.
	 *
	 * It can also be loaded as a module using:
	 * $this->load->module('templates');
	 * making the method and its functions available:
	 * $this->templates->index($data);
	 * *note: requires index function explicitly
	 *
	 * It can also be run as a module using:
	 * echo Modules::run('templates', $data);
	 * *note: requires data['body'] be defined.
 	 */

	public function index($data, $template_name = null)
	{

		/*
		|
		| If $data['body'] is null then we will get the content from the
		| module's default view file, which is <module_name>_view.php
		| within the application/modules/<module_name>/views directory
		|
		*/

		if ( ! array_key_exists('body', $data) )
		{		
      // We get the name of the class that called this method so we
      // can get its view file.
			$caller = debug_backtrace();
			$caller_module = strtolower($caller[1]['class']);

			// Get the default view file for the module and return as a string.
    	$data['body'] = $this->load->view($caller_module.'/'.$caller_module.'_view', $data, TRUE);
		}
		
		if ( ! isset($template_name) )
		{
      // If there is no template name parameter passed, we just use the default.
			$template_name = 'default';
		}
		
    // With the $data['body'] we now can load the template views.
    // Note that currently there is no value included to specify any
    // header or footer file other than default.

		$this->load->view('default_header_view', $data);
		$this->load->view($template_name.'_body_view', $data);
		$this->load->view('default_footer_view', $data);

	}
}

/* End of file templates.php */
/* Location: ./application/modules/templates/controllers/templates.php */
