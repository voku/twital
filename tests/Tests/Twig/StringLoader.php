<?php
namespace Goetas\Twital\Tests\Twig;

class StringLoader implements \Twig_LoaderInterface, \Twig_ExistsLoaderInterface, \Twig_SourceContextLoaderInterface
{
    public function getSource($name)
    {
        return $name;
    }

    public function getSourceContext($name)
    {
        return new \Twig_Source($name, $name);
    }

    public function exists($name)
    {
        return true;
    }

    public function getCacheKey($name)
    {
        return $name;
    }

    public function isFresh($name, $time)
    {
        return true;
    }
}
