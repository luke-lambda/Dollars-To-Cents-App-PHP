<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
            crossorigin="anonymous"
        />
        <title>Dollars to Cents</title>
    </head>
    <body>
        <div class="container mt-5 w-50">
            <h1 class="text-center">Dollar to Cents Converter</h1>
            <form action="dollar2centConvert.php" method="POST">
                <div class="form-group">
                    <input type="number" name="dollar" class="form-control" />
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">
                        Convert
                    </button>
                </div>
            </form>
        </div>
    </body>
</html>
