<?php

namespace StrawKit\Straws\Straw\Concerns;

trait Configurable
{
    protected $config = [];

    public function setConfig(array $config)
    {
        $this->config = $config;
    }

    public function config()
    {
        return $this->config;
    }
}