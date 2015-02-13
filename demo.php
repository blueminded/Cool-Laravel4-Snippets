<?php
View::exists('sdfsdfsd');

View::share('key', 'value');


View::make('view-name')->nest('child', 'child.view',data);

View::composer(['profile'], function($myView)
{
    $myView->with('user', 'carlos');
});

View::composer('login', 'MyClass');

View::creator(['view-name'], function(view)
{
    view->with('key', value);
});
Input::hasFile('key');

Input::file('key')->getRealPath();
Input::file('key')->move($dest, 'sdfksdfkjsdf');

HTML::script('js/asdasda.js');
{{HTML::script(js/myfile.js,['key'=>'value']);}}