<?php
/**
 * 这是property包括它的变体[property-read | property-write]标签示例
 *
 * @property mixed $regular 声明常规的读写属性
 * @property-read int $foo 声明只读
 * @property-write string $bar 声明只写
 */

class PropertyClass
{
    private $_thingy;
    private $_bar;
    function __get($var)
    {
        switch ($var) {
            case 'foo':
                return 45;
            case 'regular':
                return $this->_thingy;
        }
    }
    function __set($var, $val)
    {
        switch ($var) {
            case 'bar':
                $this->_bar = $val;
                break;
            case 'regular':
                if (is_string($val)) {
                    $this->_thingy = $val;
                }
        }
    }
}