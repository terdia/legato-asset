<?php


namespace Legato\Framework\Asset;

use Symfony\Component\Asset\Package;
use Symfony\Component\Asset\VersionStrategy\VersionStrategyInterface;

abstract class Asset
{

    protected $strategy;

    /**
     * Asset constructor.
     * @param $strategy
     */
    public function __construct($strategy)
    {
        $this->strategy = static::setStrategy($strategy);
    }

    /**
     * Set the selected strategy
     *
     * @param VersionStrategyInterface $strategy
     * @return Package
     */
    public static function setStrategy(VersionStrategyInterface $strategy)
    {
        return new Package($strategy);
    }
}