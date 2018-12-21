<?php
/**
 * Created by PhpStorm.
 * User: Holaverse
 * Date: 2018/12/21
 * Time: 16:22
 */

namespace HelloWorld;

class HelloWorld
{
    protected $author;

    /**
     * HelloWorld constructor.
     * @param string $author
     */
    public function __construct($author = 'shuru')
    {
        $this->author = $author;
    }

    /**
     * 执行方法
     * @return string
     */
    public function info()
    {
        $info = "Hello World ! \n";
        $info .= "\t--Power By ";
        $info .= $this->author . "\n";
        return $info;
    }
}