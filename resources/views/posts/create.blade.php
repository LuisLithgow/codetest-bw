<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <nav>
              <a href="/"> Home </a>
              <a href="/admin"> Admin Login </a>
              <a href="/about"> About </a>
            </nav>
            <div class="content">
                <form action="" class="form-group">
                  <h3>Signup</h3>
                  <input type="text" placeholder="name" name="name">
                  <input type="text" placeholder="email" name="email">
                  <input type="text" placeholder="password" name="password">
                  <input type="submit">
                </form>


            </div>
        </div>
    </body>
</html>
