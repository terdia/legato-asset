<?php


namespace Legato\Framework\src\asset;

use Legato\Framework\Asset\Asset;
use Legato\Framework\Asset\AssetStrategyContract;
use Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy as Strategy;

class StaticVersionStrategy extends Asset implements AssetStrategyContract
{

    public function __construct($version, $random = '')
    {
        $strategy = new Strategy($version, $random);
        parent::__construct($strategy);
    }

    public function url($path)
    {
        return $this->strategy->getUrl($path);
    }

    public function getVersion($path)
    {
        return $this->strategy->getVersion($path);
    }

}