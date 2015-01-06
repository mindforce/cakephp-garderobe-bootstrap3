<?php
/**
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) MindForce Team (http://mindforce.me)
 * @link          http://mindforce.me Garderobe Bootstrap3 Plugin
 * @since         0.0.1
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace Garderobe\Bootstrap3\View\Helper;

use Cake\View\Helper\HtmlHelper as BaseHtmlHelper;
use Cake\View\Helper\StringTemplateTrait;

/**
 * Html Helper class for easy use of HTML widgets.
 *
 * HtmlHelper encloses all methods needed while working with HTML pages.
 *
 * @link http://book.cakephp.org/2.0/en/core-libraries/helpers/html.html
 */
class HtmlHelper extends BaseHtmlHelper {

/**
 * Creates an HTML link.
 *
 * If $url starts with "http://" this is treated as an external link. Else,
 * it is treated as a path to controller/action and parsed with the
 * UrlHelper::url() method.
 *
 * If the $url is empty, $title is used instead.
 *
 * ### Options
 *
 * - `escape` Set to false to disable escaping of title and attributes.
 * - `escapeTitle` Set to false to disable escaping of title. Takes precedence
 *   over value of `escape`)
 * - `confirm` JavaScript confirmation message.
 *
 * @param string $title The content to be wrapped by <a> tags.
 * @param string|array $url Cake-relative URL or array of URL parameters, or
 *   external URL (starts with http://)
 * @param array $options Array of options and HTML attributes.
 * @return string An `<a />` element.
 * @link http://book.cakephp.org/2.0/en/core-libraries/helpers/html.html#HtmlHelper::link
 */
	public function link($title, $url = null, array $options = array()) {
		if(isset($options['icon'])){
			$title = $this->icon('', ['class' => $options['icon']]).' '.$title;
			unset($options['icon']);
			$options['escape'] = $options['escapeTitle'] = false;
		}
		return parent::link($title, $url, $options);
	}

/**
 * Returns a formatted block tag, i.e DIV, SPAN, P.
 *
 * ### Options
 *
 * - `escape` Whether or not the contents should be html_entity escaped.
 *
 * @param string $name Tag name.
 * @param string $text String content that will appear inside the div element.
 *   If null, only a start tag will be printed
 * @param array $options Additional HTML attributes of the DIV tag, see above.
 * @return string The formatted tag element
 * @link http://book.cakephp.org/2.0/en/core-libraries/helpers/html.html#HtmlHelper::tag
 */
	public function tag($name, $text = null, array $options = array()) {
		if(isset($options['icon'])){
			$text = $this->icon('', ['class' => $options['icon']]).' '.$text;
			unset($options['icon']);
		}

		return parent::tag($name, $text, $options);
	}

	public function icon($text = null, array $options = array()){

		if(!isset($options['class']))
			$options['class'] = 'fa-question';
		$options['class'] = 'fa '.$options['class'];

		return $this->formatTemplate('icon', [
			'attrs' => $this->templater()->formatAttributes($options),
			'content' => $text,
		]);
	}

}
