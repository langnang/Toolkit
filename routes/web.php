<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('index', [
    "contents" => [
      [
        "name" => "crypto",
        "contents" => [
          [
            "title" => "MD5加密",
          ]
        ],
      ],
      [
        "name" => "Random",
        "contents" => [
          [
            "title" => "Color",
          ]
        ],
      ],
      [
        "name" => "Spider",
        "contents" => [
          [
            "slug" => "spider_siteinfo",
            "title" => "SiteInfo",
          ]
        ],
      ]
    ],
    "links" => [
      ["url" => "https://www.julinghu.com/", "title" => "牛站工具网",],
      ["url" => "https://tools.kui.li/", "title" => "奎箱 - 小工具聚集地",],
    ],
  ]);
});

Route::match(['get', 'post'], '/{meta}/{content}', function ($meta, $content, Request $request) {
  $data = ["meta" => $meta, "content" => $content, "data" => $request->all(), "refs" => [
    ["title" => "owner888/phpspider", "url" => "https://doc.phpspider.org/",],
    ["title" => "XPath 教程 - W3school", "url" => "https://www.w3school.com.cn/xpath/index.asp"],
  ]];

  if (file_exists(__DIR__ . "/../resources/views/$meta/$content.blade.php")) {
    return view("$meta.$content", $data);
  }
  return $data;
});
