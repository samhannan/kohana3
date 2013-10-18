<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frontend extends Controller {
	protected $content;
	protected $template = 'master';
	protected $template_dir = 'template';
	protected $page_title;
	protected $page_desc;
	protected $page_keywords;
	protected $linked_js;
	protected $linked_css;
	protected $view_head = 'component/header';
	protected $view_foot = 'component/footer';
	protected $extra_vars = array();

	public function after()
	{
		$template = View::factory($this->template_dir.'/'.$this->template,
			arr::merge(array(
				'header' => $this->getHeader(),
				'footer' => $this->getFooter(),
				'content' => $this->content
			), $this->extra_vars)
		);
		$this->response->body($template->render());
	}

	/**
	* Get footer html
	*/
	public function getHeader()
	{
		$this->set_meta();
		$this->get_assets();

		$head = View::factory($this->view_head, array(
			'page_title' => $this->page_title,
			'page_desc' => $this->page_desc,
			'page_keywords' => $this->page_keywords,
			'linked_js' => $this->linked_js,
			'linked_css' => $this->linked_css
		));
		return $head->render();
	}

	/**
	* Get footer html
	*/
	public function getFooter()
	{
		$this->set_meta();
		$foot = View::factory($this->view_foot, array());
		return $foot->render();
	}

	/**
	* Get meta values
	*/
	public function set_meta()
	{
		/**
		 * Check if meta available in template (controller defines get priority)
		 */
		if(empty($this->page_title) && preg_match('<!--@page_title(.+)@-->', $this->content, $arr)) {
			if(count($arr) > 1)
				$this->page_title = trim($arr[1]);
		}
		if(empty($this->page_desc) && preg_match('<!--@page_description(.+)@-->', $this->content, $arr)) {
			if(count($arr) > 1)
				$this->page_desc = trim($arr[1]);
		}
		if(empty($this->page_keywords) && preg_match('<!--@page_keywords(.+)@-->', $this->content, $arr)) {
			if(count($arr) > 1)
				$this->page_keywords = trim($arr[1]);
		}

		/**
		 * Set defaults if still empty
		 */
		if(empty($this->page_title))
			$this->page_title = Kohana::$config->load('page.defaults.meta.page_title');

		if(empty($this->page_desc))
			$this->page_desc = Kohana::$config->load('page.defaults.meta.page_desc');

		if(empty($this->page_keywords))
			$this->page_keywords = Kohana::$config->load('page.defaults.meta.page_keywords');

	}

	public function get_assets()
	{
		$js_tpl = '<script type="text/javascript" source="%s"></script>';
		$js = false;

		$css_tpl = '<script type="text/javascript" source="%s"></script>';
		$css = false;

		// JS
		if($this->linked_js) {
			if(is_array($this->linked_js) && count($this->linked_js)) {
				foreach($this->linked_js as $link) {
					$js .= sprintf($js_tpl, $link)."\n";
				}
			}
		}
		if($js) $this->linked_js = $js;

		// CSS
		if($this->linked_css) {
			if(is_array($this->css) && count($this->css)) {
				foreach($this->css as $link) {
					$css .= sprintf($css_tpl, $link)."\n";;
				}
			}
		}
		if($css) $this->linked_css = $css;

	}

}
