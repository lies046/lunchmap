<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>Lunchmap</title>
    <style>body {padding: 10px;}</style>
  </head>
  <body>
    <h1>お店一覧</h1>

    @foreach($shops as $shop)
      <p>
        {{ $shop->category->name }},
        {{ $shop->name }},
        {{ $shop->address}}
      </p>
    @endforeach
  </body>
</html>