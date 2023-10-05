<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ログインエラー</title>
    </head>
    <body>
            ログインできませんでした。。。
            <br>
            <br>
            @isset($method)
            method:&nbsp;{{{ $method }}}
            <br>
            @endisset
            @isset($adcode)
            adcode:&nbsp;{{{ $adcode }}}
            <br>
            @endisset
    </body>
</html>
