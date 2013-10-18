<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Wrapper class for Kohanas form helper.
 * Uses config/forms to generate form fields
 */

class FormBuilder
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
				$this->default->get('attributes'),
				$this->config['attributes']
			);
		} else {
			$attr = $this->default->get('attributes');
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
				$this->default->get('attributes'),
				$this->config['submit']['attributes']
			);
		} else {
			$attr = $this->default->get('attributes');
		}
		$this->form .= Form::submit(null, $attr['value'], $attr);
		$this->form .= Form::close()."\n";
	}

	/*
	 * Outputs fields
	 */
	private function getFields()
	{
		$tpl = "<div class='input-wrap'>\n%s\n%s\n</div>\n";

		foreach($this->config['fields'] as $k => $v) {
			$attr = arr::merge(
				$this->default->get('field.attributes'),
				$v['attributes']
			);
			$attr['id'] = $attr['name'];

			// Field
			switch($attr['type']) {
				case 'text':
					$field = Form::input(
						$attr['name'],
						Arr::get(Request::current()->post(), $attr['name'], ''),
						$attr
					);
				break;
				case 'select':
					$field = Form::select(
						$attr['name'],
						$v['options'],
						Arr::get(Request::current()->post(), $attr['name'], ''),
						$attr
					);
				break;
			}

			$this->form .= sprintf($tpl,
				Form::label($attr['name'], $v['label']),
				$field
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
