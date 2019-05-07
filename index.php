<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Database</title>
    <!-- Importo Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!-- Importo Handlebars -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js" charset="utf-8"></script>
    <!-- Importo Miei -->
    <script src="script.js" charset="utf-8"></script>
    <link rel="stylesheet" href="style.css">
    <!-- Template -->
    <script id="list-pending" type="text/x-handlebars-template">
      <div class="box">
        <h1>ID: {{ id }}</h1>
        <hr>
        <h1>{{ price }}€</h1>
      </div>
    </script>
  </head>
  <body>
    <div class="container">
      <h1>PAGAMENTI IN ATTESA</h1>
      <div class="list"></div>
    </div>
  </body>
</html>
