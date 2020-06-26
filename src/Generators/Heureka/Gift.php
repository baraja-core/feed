<?php

namespace Mk\Feed\Generators\Heureka;

use Mk, Nette;

/**
 * Class Gift
 * @author Martin Knor <martin.knor@gmail.com>
 * @package Mk\Feed\Generators\Heureka
 */
class Gift{

    use Nette\SmartObject;

    /** @var string */
    protected $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Gift constructor.
     * @param $name
     */
    public function __construct($name)
    {

        $this->name = (string)$name;
    }

}
