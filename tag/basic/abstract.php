<?php
/**
 * 这是abstract的标签示例
 * 
 * 如果类中有最少一个抽象方法的话，那么类应该被声明为抽象类
 * 但是生成的文档里面没有类为抽象类的说明
 */

abstract class AbstractClass
{
    /**
    * 这是一个抽象方法a
    *
    * @abstract
    */
    abstract function abstractFunc1(){}

    /**
    * 这是一个普通的方法b
    */
    function abstractFunc2(){}

}