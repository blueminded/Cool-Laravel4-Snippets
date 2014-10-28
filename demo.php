<?php
return Response::view('response')->header('Content-type', type);
return Response::make('content')->withCookie($wshit);
return Response::json(['key'=>'value']);
return Response::json(['key'=>'value'])->setCallback(Input::get('callBack'));
return Response::download('asdasdasd', name, headers);

Response::macro('name', function(value){
        return Response::make(value, 200);
        });