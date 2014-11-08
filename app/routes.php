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

Route::get('form-test', function()
{
    return View::make('form-test');
});

Route::post('for-loop', function() {

    // A not very DRY way to print a list of numbers:

    // echo 1;
    // echo '<br>';
    // echo 2;
    // echo '<br>';    
    // echo 3;
    // echo '<br>';
    // echo 4;
    // echo '<br>';
    // echo 5;
    // echo '<br>';


    // A better way to print a list of numbers:

    // for ($i = 1; $i < 6; $i++) {
    //     echo $i;
    //     echo '<br>';
    // }


    // Iterating over an array with a foreach loop:

    // $array = array('Johanna', 'Dan', 'Katy', 'Diana');

    // foreach ($array as $key => $item) {
    //     echo 'Item #'.$key." is ".$item;
    //     echo '<br>';
    // }


    // Printing the contents of a form submission array:

    // print_r($_POST);
    // echo '<br>';


    // Iterating over the array of submitted form values:

    // foreach ($_POST as $key => $value) {
    //     echo "The value of ".$key." is ".$value."<br>";
    // }


    // Accessing a specific form value:

    // echo $_POST['person1'];
    // echo '<br>';


    // Accessing a specific form value the 'Laravel way':

    // echo Input::get('person1');
    // echo '<br>';


    // Getting an array of all form fields except the '_token' field:

    $array = Input::except('_token');


    // Sending that array to a view:

    return View::make('for-loop')
        ->with('array',$array);


    // Testing whether a checkbox was checked:

    // if(isset($array['box'])) {
    //     echo 'The box was checked';
    // }

});

Route::get('mysql-test', function() {

    # Print environment
    echo 'Environment: '.App::environment().'<br>';

    # Use the DB component to select all the databases
    $results = DB::select('SHOW DATABASES;');

    # If the "Pre" package is not installed, you should output using print_r instead
    echo print_r($results);

});


Route::get('phpinfo', function()
{
    echo phpinfo();
});


Route::get('trigger-error', function() {
    return View::make('foo');
});


Route::get('macro-test', function() {
    return Form::fullName();
});


Route::get('package-test', function()
{
    $string_generator = new Xi\RandomString\RandomStringGenerator();
    $my_random_string = $string_generator->generate(10);
    echo "Here's a random string: ".$my_random_string."<br><br>";

    $faker = Faker::create();
    echo $faker->name.'<br>';

    $generator = new LoremGenerator();
    $paragraphs = $generator->getParagraphs(5);
    echo "And here are five paragraphs of lorem ipsum text:<br><br>";
    echo implode('<p>', $paragraphs);
});

Route::get('controller-test', 'TestController@controller_test');
