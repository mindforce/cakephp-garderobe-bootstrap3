<?php
/**
* Licensed under The MIT License
* For full copyright and license information, please see the LICENSE.txt
* Redistributions of files must retain the above copyright notice.
*
* @copyright     Copyright (c) Mindforce Team (http://mindforce.me)
* @link          http://mindforce.me RearEngine CakePHP 3 Plugin
* @since         0.0.1
* @license       http://www.opensource.org/licenses/mit-license.php MIT License
*/

$class = array_unique((array)$params['class']);
$message = (isset($params['escape']) && $params['escape'] === false) ? $message : h($message);

if (in_array('alert-dismissible', $class)) {
    if(in_array('alert-success', $class, true)){
        $this->Html->scriptBlock("
            $(document ).ready( function(){
                setTimeout(function () { $('.alert').alert('close'); }, 8000);
            });
        ", ['block' => true]);
    }
    $message = $this->Form->button(
        $this->Html->tag('span', '&times;', ['aria-hidden' => 'true']),
        ['type' => 'button',  'class' => 'close', 'data-dismiss' => 'alert', 'aria-label' => __d('garderobe_bootstrap3', 'Close')]
    ) . $message;
}

echo $this->Html->div($class, $message, $params['attributes']);
?>
