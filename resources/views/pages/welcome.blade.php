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
            <nav><a href="/admin">Admin Login</a></nav>
            <nav><a href="/about">About</a></nav>
            <div class="content">
                <div class="title">Laravel 5</div>
                <form action="">
                    <div class="col-sm-6">
                        <input type="text" placeholder="First Name" name=""><br>
                        <input type="text" placeholder="Last Name" name=""><br>
                        <input type="text" placeholder="Address 1" name=""><br>
                        <input type="text" placeholder="Address 2" name=""><br>
                        <input type="text" placeholder="City" name=""><br>
                        <input type="text" placeholder="State" name=""><br>
                        <input type="text" placeholder="Zipcode" name=""><br>
                        <input type="text" placeholder="Contact Phone" name=""><br>
                        <input type="text" placeholder="Email Address" name=""><br>
                        <input type="text" placeholder="Company Information" name=""><br>
                    </div>

                    <div class="col-sm-6">
                        <input type="text" placeholder="Company Name" name=""> <br>
                        <input type="text" placeholder="Company Address" name=""><br>
                        <input type="text" placeholder="Company City" name=""><br>
                        <input type="text" placeholder="Company State" name=""><br>
                        <input type="text" placeholder="Company Zipcode" name=""><br>
                        <input type="text" placeholder="Company Phone Number" name=""><br>
                        <input type="file" accept="application/pdf" id="exampleInputFile" name="pdf_file" >
                        <!-- <input type="text" placeholder="Invoice Attachment"><br> -->
                    </div>

                    <input class="btn " type="submit">
                </form>

            </div>
        </div>
    </body>
</html>
