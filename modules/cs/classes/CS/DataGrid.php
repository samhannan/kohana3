<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Generates data grid for use in admin centre.
 */

class CS_DataGrid
{
	private $config;
	private $default;
	private $grid;
	private $data;

	public function __construct($config, $default='datagrid/default')
	{
		$this->default =  Kohana::$config->load($default);
		$this->config = $config;
		$this->config['conf'] = arr::merge($this->default['conf'], $this->config['conf']);
		$this->setData();
	}

	public function build()
	{
		$this->open();
		$this->getRows();
		$this->close();

		return $this->grid;
	}

	private function getRows()
	{
		foreach($this->data as $col) {
			$tpl = "<tr>\n%s</tr>\n";
			$data = '';
			foreach($this->config['columns'] as $v) {
				// Data
				$field = arr::merge($this->default['column'], $v);
				$val = $field['child'] ? $col->$field['child']->$field['fieldname'] : $col->$field['fieldname'];
				$responsive = $field['responsive_col'] ? ' class="responsive"' : '';
				$data .= "<td".$responsive.">".$val."</td>\n";
			}
			// Action buttons
			$data .= '<td class="responsive act">';
			// Edit
			$data .= $this->config['conf']['edit'] ? "<a href='".sprintf($this->config['conf']['editlink'], $col->id)."' class='button'>Edit</a>" : '';
			// Delete
			$data .= $this->config['conf']['delete'] ? "<a href='".sprintf($this->config['conf']['deletelink'], $col->id)."' class='button'>Delete</a>" : '';
			$data .= '</td>';
			$this->grid .= sprintf($tpl, $data);
		}
	}

	private function setData()
	{
		$obj = ORM::factory($this->config['conf']['model'])->find_all();
		$this->data = count($obj) ? $obj : false;

	}

	private function open()
	{
		$tpl = "<table class='datagrid' cellspacing='0' callpadding='0'>\n<tr>\n%s<th class='responsive'>&nbsp;</th></tr>";
		$head = '';
		// Build head row
		foreach($this->config['columns'] as $v) {
			$col = arr::merge($this->default['column'], $v);
			$heading = $col['label'] ? $col['label'] : ucwords($col['fieldname']);
			$responsive = $col['responsive_col'] ? ' class="responsive"' : '';
			$head .= "<th".$responsive.">".$heading."</th>\n";
		}
		$this->grid .= sprintf($tpl, $head);
	}

	private function close()
	{
		$this->grid .= "\n</table>";
	}


}