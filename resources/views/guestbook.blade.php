<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Vue and Laravel Powered Guestbook</title>

    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
  </head>

  <body>
    <div class="container">

      <h1>Guestbook</h1>

      <div id="guestbook">

        <article v-repeat="messages">
          <h3>@{{ name }}</h3>
          <div class="body">@{{ message }}</div>
        </article>

      </div>

    </div>

    <script src="{{ elixir('js/all.js') }}"></script>
  </body>

</html>