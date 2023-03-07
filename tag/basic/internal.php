<?php
/**
 * 这是internal标签示例
 * 
 * 应该是我没用懂，但是没有效果
 * 此标签可以生成两份文档，官方说是phpdoc最有用的功能之一
 * {@internal 要访问有关修改此类的指南,见 {@link http://www.baidu.com 指南},或联系你的主管}}}
 * @internal 该类使用私有方法 {@link _foo()} 和 {@link _bar()} 做一些事情
 */

class InternalClass
{
    private function _foo()
    {
    }
    private function _bar()
    {
    }
}