<?php

namespace App\Http\Controllers;

use App\UrlParser;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sampleUrlParser(string $string)
    {
        return (new UrlParser)->url($string)->process();
    }

    public function sampleUrlParserExample()
    {
        return $this->sampleUrlParser('http://www.example.com/news?q=string&f=true&id=1233&sort=true');
    }

}
