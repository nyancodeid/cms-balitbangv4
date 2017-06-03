<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Template
{
	var $ci;
	 
	function __construct()
	{
		$this->ci =& get_instance();
	}

	/*
	 * Load Template
	 *
	 * @return view
	 */
	public function load($Template, $Section = null, $Data = null)
	{
		if (! is_null($Section))
		{
			if (file_exists(APPPATH."views/Templates/".$Template."/".$Section.".blade.php"))
			{
				$Section__path = "Templates/".$Template."/".$Section;
			} else {
				show_error("Unable to load the requested file: "."Templates/".$Template."/".$Section);
			}

			if (is_null($Data))
			{
				$Data = array();
			}
			$Data['balitbangConfig'] = json_encode($this->ci->config->item('balitbang.config'));
			$Data['pathTheme'] = "Templates/".$Template."/";

			$this->ci->blade->render($Section__path, $Data);
		}
	}
}