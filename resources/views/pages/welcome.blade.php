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
                <a href="/admin">Admin Login</a>
                <a href="/about">About</a>
                <a href="/posts/create">Create</a>
            </nav>
            <div class="content">
                <div class="title">ZX Company</div>


                <form action="posts/create" method="POST" >
                    <div class="col-sm-6">
                        <input type="text" placeholder="First Name" name="fname"><br>
                        <input type="text" placeholder="Last Name" name="lname"><br>
                        <input type="text" placeholder="Address 1" name="address"><br>
                        <input type="text" placeholder="Address 2" name="address2"><br>
                        <input type="text" placeholder="City" name="city"><br>
                        <input type="text" placeholder="State" name="state"><br>
                        <input type="text" placeholder="Zipcode" name="zipcode"><br>
                        <input type="text" placeholder="Contact Phone" name="phone"><br>
                        <input type="text" placeholder="Email Address" name="email"><br>
                        <input type="text" placeholder="Company Information" name="company_info"><br>
                    </div>

                    <div class="col-sm-6">
                        <input type="text" placeholder="Company Name" name="company_name"> <br>
                        <input type="text" placeholder="Company Address" name="company_address"><br>
                        <input type="text" placeholder="Company City" name="company_city"><br>
                        <input type="text" placeholder="Company State" name="company_state"><br>
                        <input type="text" placeholder="Company Zipcode" name="company_zipcode"><br>
                        <input type="text" placeholder="Company Phone Number" name="company_phone"><br>
                        <input type="file" accept="application/pdf" id="exampleInputFile" name="pdf_file" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <!-- <input type="text" placeholder="Invoice Attachment"><br> -->
                    </div>

                    <input class="btn btn-success btn-block " type="submit">
                </form>

            </div>
        </div>
    </body>
</html>
