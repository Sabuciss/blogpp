<?php

return [
  'GET' => [
    '/' => 'BlogController@index',
    '/posts' => 'BlogController@index',
    '/posts/create' => 'BlogController@create',
    '/posts/{id}' => 'BlogController@show',
    '/posts/{id}/edit' => 'BlogController@edit',
  ],
  'POST' => [
    '/posts' => 'BlogController@store',
    '/posts/{id}/update' => 'BlogController@update',
    '/posts/{id}/delete' => 'BlogController@destroy',
  ],
];