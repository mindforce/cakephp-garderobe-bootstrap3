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
use Cake\Core\Configure;

Configure::write('Garderobe.Plugin.Bootstrap3', [
    'name' => 'Garderobe/Bootstrap3',
    'helpers' => [
        'Form' => [
            'className' => 'Garderobe/Bootstrap3.Form',
            'errorClass' => 'has-error',
            'widgets' => 'Garderobe/Bootstrap3.widgets',
            'templateClass' => 'Garderobe\Bootstrap3\View\StringTemplate',
            'templates' => 'Garderobe/Bootstrap3.form',
        ],
        'Html' => [
		    'className' => 'Garderobe/Bootstrap3.Html',
		    'templates' => 'Garderobe/Bootstrap3.html',
        ],
        'Paginator' => [
		    'templates' => 'Garderobe/Bootstrap3.paginator',
        ]
    ]
]);
