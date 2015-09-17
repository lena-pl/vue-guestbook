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

        <form method="POST" v-on="submit: onSubmitForm">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" v-model="newMessage.name">
          </div>

          <div class="form-group">
            <label for="message">Message:</label>
            <textarea type="text" name="message" id="message" class="form-control" v-model="newMessage.message"></textarea>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-default" v-attr="disabled: errors">Sign Guestbook</button>
          </div>
        </form>

        <hr>

        <article v-repeat="messages">
          <h3>@{{ name }}</h3>
          <div class="body">@{{ message }}</div>
        </article>

      </div>

    </div>

    <script src="{{ elixir('js/all.js') }}"></script>
  </body>

</html>