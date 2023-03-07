<?php
/**
 * 这是method标签示例
 * 
 * 官方给出的定义是，要在子类中声明父类使用魔术方法来实现的一些非显示存在方法
 * 
 * @method return echo2(string $string) 打印带有换行符的字符串
 */
class MethodClass extends Father{}

class Father
{
    function __call($method, string $params)
    {
        if ($method == 'echo2') {
            echo $params . PHP_EOL;
        }
    }
}