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
$config = [
    //Garderobe specific fields
    'button'   => 'Garderobe\Bootstrap3\View\Widget\ButtonWidget',
    'checkbox' => 'Garderobe\Bootstrap3\View\Widget\CheckboxWidget',
    'radio'    => ['Garderobe\Bootstrap3\View\Widget\RadioWidget', 'nestingLabel'],
    'static'   => 'Garderobe\Bootstrap3\View\Widget\StaticBox',
    '_default' => 'Garderobe\Bootstrap3\View\Widget\BasicWidget',
];
