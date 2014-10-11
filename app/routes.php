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

Route::get('/', function()
{
	$name = "Johanna";
    return View::make('index')
        ->with('name', $name);
});

Route::get('package-test', function ()
{
    $string_generator = new Xi\RandomString\RandomStringGenerator();
    $my_random_string = $string_generator->generate(10);
    echo "Here's a random string: ".$my_random_string."<br><br>";
    
    $generator = new LoremGenerator();
    $paragraphs = $generator->getParagraphs(2);
    echo implode('<p>', $paragraphs);
});
