# Section Notes, October 11, 2014

In today's section I encountered two issues while demonstrating how to install and use packages from Packagist. These notes are a follow up to explain those issues and how I resolved them.

## Issue 1: Xi\RandomString

As an example, I searched Packagist and found a package called Xi\RandomString meant to produce a random string of characters:

* [Xi\RandomString on Packagist](https://packagist.org/packages/xi/randomstring)
* [Xi\RandomString on Github](https://github.com/xi-project/xi-randomstring)

After adding the package's require line to `composer.json` and running `composer update`, I attempted to use the package in my `package-test` route as follows:

```php
    echo Xi\RandomString::generate(10);
```

This attempt to use the package had two issues. First, the call produced an error:

<img src="http://laravel-test.higabba.biz/images/section-notes-2014-10-11_1.png">

The issue here is that unlike Paste\Pre, where Paste is the namespace and Pre is the class name, this package's namespace is Xi\RandomString, and the class name within that namespace is RandomStringGenerator. That means you need to reference `Xi\RandomString\RandomStringGenerator` in order to use the package.

However, the following will *still* produce an error:

```php
    echo Xi\RandomString\RandomStringGenerator::generate(10);
```

<img src="http://laravel-test.higabba.biz/images/section-notes-2014-10-11_2.png">

The second issue is that, again unlike Paste\Pre, the RandomStringGenerator class's methods can not be accessed statically. This means you must first instantiate a RandomStringGenerator, and then call the class's methods on that object, as follows:

```php
    $string_generator = new Xi\RandomString\RandomStringGenerator();
    $my_random_string = $string_generator->generate(10);
    echo "Here's a random string: ".$my_random_string."<br><br>";
```

This, finally, will echo a random string of 10 characters! [Success!](http://laravel-test.higabba.biz/package-test)

Some packages, including the two suggested by Professor Buck for P3, will provide some hints in the README about how the package's classes and methods can be accessed and used. If they don't, or if you need more detail, you will likely need to dig into the package's file structure and code to find out how to use it. For instance, [you can see here](https://github.com/xi-project/xi-randomstring/tree/master/library/Xi/RandomString) that RandomStringGenerator.php is the actual class, and it lives in the folders Xi/RandomString. [Looking at the RandomStringGenerator class code itself,](https://github.com/xi-project/xi-randomstring/blob/master/library/Xi/RandomString/RandomStringGenerator.php) you can see that its methods are not static (so you have to instantiate an object to use them). You can also see that the `generate()` method a single parameter, which is the length of the string to be generated.