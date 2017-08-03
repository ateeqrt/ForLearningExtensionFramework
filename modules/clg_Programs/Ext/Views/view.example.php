<?php
if(!defined('sugarEntry')||!sugarEntry) 
	die('Entry Point not valid!');
require_once('include/MVC/View/views/view.detail.php');

class ProgramsViewExample extends viewDetail
{
	function ProgramsViewExample()
	{
		parent::viewDetail();
	}
	function display()
	{
		echo 'Example View';
	}
}