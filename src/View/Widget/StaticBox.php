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
namespace Garderobe\Bootstrap3\View\Widget;

use Cake\View\Form\ContextInterface;
use Cake\View\Widget\WidgetInterface;

class StaticBox implements WidgetInterface {

/**
 * StringTemplate instance.
 *
 * @var \Cake\View\StringTemplate
 */
	protected $_templates;

/**
 * Constructor.
 *
 * @param \Cake\View\StringTemplate $templates Templates list.
 */
	public function __construct($templates) {
		$this->_templates = $templates;
	}

	public function render(array $data, ContextInterface $context) {
		$value = '';
		if(isset($data['val'])) {
			$value = $data['val'];
		}
        return $this->_templates->format('static', [
            'value' => $value,
	        'attrs' => $this->_templates->formatAttributes($data, ['val', 'name', 'type'])
        ]);
    }

	public function secureFields(array $data) {
		return [];
	}

}
