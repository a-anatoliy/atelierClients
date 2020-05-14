<?php

/***
 * Class Breadcrumb
 * Source: https://snipp.ru/php/class-breadcrumb
 * Статический класс для формирования и вывода хлебных крошек с разметкой Shema.org.
 *  How to use:
   ------------
    Breadcrumb::add('/category/', 'Категория');
    Breadcrumb::add('/category/article', 'Статья');
    echo Breadcrumb::out();
   ------------
 */

class Breadcrumb {
	private static $_items = array();

	public static function add($url, $name) { self::$_items[] = array($url, $name); }

	public static function out() {
		$res = '<div class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList" id="breadcrumbs">
			<span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
				<a href="/" itemprop="item">
					Главная
					<meta itemprop="name" content="Главная">
				</a>
				<meta itemprop="position" content="1">
			</span>';

		$i = 1;
		foreach (self::$_items as $row) {
			$res .= '<span class="breadcrumb_item" itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
				<a href="' . $row[0] . '" itemprop="item">
					' . $row[1] . '
					<meta itemprop="name" content="' . $row[1] . '">
				</a>
				<meta itemprop="position" content="' . ++$i . '">
			</span>';
		}
		$res .= '</div>';

		return $res;
	}
}
