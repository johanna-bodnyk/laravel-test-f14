<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

use Badcow\LoremIpsum;

Route::get('/', function()
{
	return "Hello World";
});

Route::get('package-test', function ()
{
    //echo Paste\Pre::render($_SERVER,'Server');

    //echo Xi\RandomString::generate(10);

    $generator = new LoremIpsum\Generator();
    $paragraphs = $generator->getParagraphs(5);
    echo implode('<p>', $paragraphs);

});
