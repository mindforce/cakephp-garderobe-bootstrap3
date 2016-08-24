<?php
namespace Garderobe\Bootstrap3\View\Helper;

use BootstrapUI\View\Helper\FlashHelper as BaseFlashHelper;
/**
 * FlashHelper class to render flash messages.
 *
 */
class FlashHelper extends BaseFlashHelper
{

    /**
     * Default config
     *
     * - class: List of classes to be applied to the div containing message
     * - attributes: Additional attributes for the div containing message
     *
     * @var array
     */
    protected $_defaultConfig = [
        'class' => ['alert', 'alert-dismissible', 'fade', 'in'],
        'attributes' => ['role' => 'alert'],
        'element' => 'Garderobe/Bootstrap3.Flash/default'
    ];

}
