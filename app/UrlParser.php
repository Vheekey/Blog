<?php

namespace App;

class UrlParser
{
    protected $delimiter;

    protected $string;

    public function url(string $string)
    {
        $this->string = $string;

        return $this;
    }

    public function process()
    {

    }

    protected function delimiter()
    {
        $this->delimiter = '?';

        if (strpos($this->string, '?') === false) {
            $this->delimiter = '/';
        }

        return $this;
    }
}
