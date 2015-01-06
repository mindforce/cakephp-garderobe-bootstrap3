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
	'basic' => '{{input}}{{label}}',
	'button' => '<button class="btn {{class}}"{{attrs}}>{{text}}</button>',
	'error' => '<div class="text-danger"><i class="fa fa-warning"></i> {{content}}</div>',
	'inputContainer' => '<div class="form-group {{type}}{{required}}">{{content}}</div>',
	'inputContainerError' => '<div class="form-group input-{{type}}{{required}} has-error">{{content}}{{error}}</div>',
	'input' => '<input class="form-control {{class}}" type="{{type}}" name="{{name}}"{{attrs}}>{{help}}',
	'help' => '<p class="help-block">{{content}}</p>',
	'radioWrapper' => '<div class="radio">{{label}}</div>',
	'select' => '<select class="form-control {{class}}" name="{{name}}"{{attrs}}>{{content}}</select>',
	'selectMultiple' => '<select class="form-control {{class}}" name="{{name}}[]" multiple="multiple"{{attrs}}>{{content}}</select>',
	'static' => '<p class="form-control-static {{class}}"{{attrs}}>{{value}}</p>',
	'textarea' => '<textarea class="form-control {{class}}" name="{{name}}"{{attrs}}>{{value}}</textarea>',
	'submitContainer' => '<div class="btn-group">{{content}}</div>',
];
