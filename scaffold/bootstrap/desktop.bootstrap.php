<?php
/**
 * Created by PhpStorm.
 * User: csibi
 * Date: 2015.04.07.
 * Time: 9:15
 */

namespace desktop;

class bootstrap extends \Routerunner\BaseBootstrap
{
	public $resource_url = '';
	public $reference = null;
	public $url = '';
	public $urls = array();
	public $breadcrumb = array();
	public $parents = array();
	public $first_child = false;
	public $children = array();
	public $menu_children = array();
	public $content_children = array();
	public $sub_content_children = array();
	public $current = array();
	public $resource = array();

	public $feature_menu = array(3);
	public $product_menu = array(5);
	public $reference_menu = array(6);
	public $testimonial_menu = array(7);
	public $contact_menu = array(8);
	public $form_menu = array(10);

	public $pageproperties_prefix = array(
		'title' => 'Routerunner CMS',
		'keywords' => 'routerunner,cms,tartalomkezelő rendszer,egyszerű,rugalmas,felhasználóbarát,nyílt forrású,keresőoptimalizált,fejleszthető,reszponzív,interaktív,intuitív',
	);
	public $pageproperties_default = array(
		'title' => 'Routerunner CMS - felhasználóbarát, nyílt forrású tartalomkezelő rendszer',
		'keywords' => 'routerunner,cms,tartalomkezelő rendszer,egyszerű,rugalmas,felhasználóbarát,nyílt forrású,keresőoptimalizált,fejleszthető,reszponzív,interaktív,intuitív',
		'description' => 'Sok éves webfejlesztési és tervezési tapasztalatunk gyümölcse a saját fejlesztésű tartalomkezelő rendszerünk, melyben ugyanolyan könnyű és gördülékeny weboldalakat fejleszteni, mint szerkeszteni azokat.',
		'meta' => array(
			'og:title' => 'Routerunner CMS - felhasználóbarát, nyílt forrású tartalomkezelő rendszer',
			'og:type' => 'article',
			'og:description' => 'Sok éves webfejlesztési és tervezési tapasztalatunk gyümölcse a saját fejlesztésű tartalomkezelő rendszerünk, melyben ugyanolyan könnyű és gördülékeny weboldalakat fejleszteni, mint szerkeszteni azokat.',
			'og:image' => null,
		),
		'favicon' => 'favicon.ico',
	);
	public $pageproperties = array();
	public $states = array(
		'active' => 1,
		'begin' => null,
		'end' => null,
		'params' => array(),
	);

	public $lang = false;

	public $params = array();

	public $tree = array();

	public $menus = array('menu');
	public $contents = array('post','banner','product','feature','pricing','referencia','testimonial','client','media','content','portfolio');
	public $resource_types = array('home', 'fixcontent');

	public function __construct()
	{
		$this->resource_types = array_merge($this->resource_types, $this->menus, $this->contents);

		$resources = \Routerunner\Bootstrap::$resources;
		$this->reference = \Routerunner\Bootstrap::$reference;
		$this->resource_url = trim(\Routerunner\Bootstrap::$resourceUri, ' /');
		$this->url = $this->resource_url;
		$this->urls = \Routerunner\Bootstrap::$urls;
		if (count($this->urls)) {
			$this->url = $this->urls[0];
		}

		$this->pageproperties = $this->pageproperties_default;

		foreach (\Routerunner\Bootstrap::$metas as $meta_key => $meta_value) {
			if ($meta_key == "meta" && is_array($meta_value)) {
				foreach ($meta_value as $row_key => $row_value) {
					if (!is_array($this->pageproperties[$meta_key])) {
						$this->pageproperties[$meta_key] = array();
					}
					if ($row_value !== false) {
						$this->pageproperties[$meta_key][$row_key] = $row_value;
					}
				}
			} elseif ($meta_value !== false) {
				$this->pageproperties[$meta_key] = $meta_value;
			}
		}
		$this->states = array_merge_recursive($this->states, \Routerunner\Bootstrap::$states);
		$this->lang = \Routerunner\Bootstrap::$lang;

		$this->tree = \Routerunner\Bootstrap::$tree;

		if ($this->tree['children']) {
			foreach ($this->tree['children'] as $child) {
				$this->children[$child['reference']] = array($child['table_id'] => $child['model_class']);
				if (in_array($child['model_class'], $this->contents)) {
					$this->content_children[$child['reference']] = array($child['table_id'] => $child['model_class']);
				} elseif (in_array($child['model_class'], $this->menus)) {
					$this->menu_children[$child['reference']] = array($child['table_id'] => $child['model_class']);
				}
				if (!$this->first_child) {
					$this->first_child = $child;
				}
			}
			if (!$this->content_children && $this->menu_children) {
				foreach ($this->menu_children as $menu_reference => $menu_table) {
					if ($menu_children = \Routerunner\Bootstrap::children($menu_reference)) {
						foreach ($menu_children as $menu_child) {
							if (in_array($menu_child['model_class'], $this->contents)) {
								$this->sub_content_children[$menu_child['reference']] = array($menu_child['table_id'] => $menu_child['model_class']);
							}
						}
					}
				}
			}
		}

		$parents = array();
		if (isset($this->tree['parents'])) {
			$parents = $this->tree['parents'];
		}
		$current = false;
		if (isset($this->tree['current'])) {
			$current = $this->tree['current'];
		} elseif (isset($resources[0], $resources[1])) {
			$this->current = array($resources[0] => $resources[1]);
		}
		if ($current && is_array($current)) {
			unset($current['ind']);
			$current['lvl'] = 0;
			$parents[] = $current;
		}
		foreach ($parents as $parent) {
			if (isset($parent['model_class']) && $parent['model_class'] !== "lang") {
				if (!isset($this->breadcrumb[$parent['model_class']])) {
					$this->breadcrumb[$parent['model_class']] = $parent['table_id'];
				} else {
					if (!is_array($this->breadcrumb[$parent['model_class']])) {
						$this->breadcrumb[$parent['model_class']] = array($this->breadcrumb[$parent['model_class']]);
					}
					$this->breadcrumb[$parent['model_class']][] = $parent['table_id'];
				}
			}
		}
		if (isset($this->tree['current']['model_class'], $this->tree['current']['table_id'])) {
			$this->current = array($this->tree['current']['model_class'] => $this->tree['current']['table_id']);
		}

		$this->resource = $resources;

		$this->params = \Routerunner\Bootstrap::$params;
	}

	public function __get($name)
	{
		if (isset($this->$name)) {
			return $this->$name;
		} elseif (isset($this->breadcrumb[$name])) {
			return $this->breadcrumb[$name];
		} elseif (isset($this->tree[$name])) {
			return $this->tree[$name];
		} else {
			return false;
		}
	}
}

$debug = 1;