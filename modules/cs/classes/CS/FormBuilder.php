<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Wrapper class for Kohanas form helper.
 * Uses config/forms to generate form fields
 */

class CS_FormBuilder
{
	private $config;
	private $default;
	private $form;

	public function __construct($config, $default='forms/default')
	{
		$this->config = $config;
		$this->default =  Kohana::$config->load($default);
	}

	/*
	 * Begin build
	 */
	public function build()
	{
		if(!is_array($this->config)) {
			return false;
		}
		$this->open();
		$this->getFields();
		$this->close();

		return $this->form;
	}

	/*
	 * Opens form
	 */
	private function open()
	{
		if(array_key_exists('attributes', $this->config)) {
			$attr = arr::merge(
				$this->default['attributes'],
				$this->config['attributes']
			);
		} else {
			$attr = $this->default['attributes'];
		}

		$this->form .= Form::open($attr['action'], $attr)."\n";;
	}

	/*
	 * Closes form
	 */
	private function close()
	{
		if(array_key_exists('submit', $this->config)) {
			$attr = arr::merge(
				$this->default['submit']['attributes'],
				$this->config['submit']['attributes']
			);
		} else {
			$attr = $this->default['submit']['attributes'];
		}
		$tpl = "<div class='input-wrap close'>\n%s\n</div>\n";
		$submit = Form::submit(null, $attr['value'], $attr);
		$this->form .= sprintf($tpl, $submit);

		$this->form .= Form::close()."\n";
	}

	/*
	 * Outputs fields
	 */
	private function getFields()
	{
		$tpl = "<div class='input-wrap'>\n%s\n%s\n%s\n</div>\n";

		foreach($this->config['fields'] as $k => $v) {
			$conf = arr::merge(
				$this->default['field'],
				$v
			);
			$conf['attributes']['id'] = $conf['attributes']['name'];

			// Field
			switch($conf['attributes']['type']) {
				case 'text':
				case 'password':
					$field = Form::input(
						$conf['attributes']['name'],
						$conf['attributes']['type'] != 'password' ? Arr::get(Request::current()->post(), $conf['attributes']['name'], '') : '',
						$conf['attributes']
					);
				break;
				case 'select':
					$field = Form::select(
						$conf['attributes']['name'],
						$conf['options'],
						Arr::get(Request::current()->post(), $conf['attributes']['name'], ''),
						$conf['attributes']
					);
				break;
			}

			// Tooltip
			$tooltip = false;
			if($conf['tooltip']['message']) {
				if(Request::current()->param('id') || $conf['tooltip']['update']) {
					$tooltip = true;
				}
			}
			if($tooltip) {
				$tooltip = "<span class='glyphicon glyphicon-question-sign tooltip' title='".$conf['tooltip']['message']."'></span>";
			}

			$this->form .= sprintf($tpl,
				Form::label($conf['attributes']['name'], $conf['label']),
				$field,
				$tooltip
			);
		}
	}

	/*
	 * Gets select options from specified model and columns
	 */
	public static function getSelectOptions($model, $cols, $default=true)
	{
		try {
			$obj = ORM::factory($model)->find_all();
			$arr = array();
			$arr[0] = 'Please Select';
			foreach($obj as $r) {
				$arr[$r->$cols['key']] = ucwords($r->$cols['label']);
			}
		} catch(Exception $e) {
			return false;
		}
		return $arr;
	}
}
