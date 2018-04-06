<!DOCTYPE html> <html lang="en">
<head>
    <title>Bootstrap Case 2-Columns</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <h1>My first Bootstrap webpage!</h1>
        <p>This page will grow as we add more and more components from Bootstrap...</p>
        <a href="#" class="btn btn-info btn-lg">
            <span class="glyphicon glyphicon-search"></span> Search</a>
    </div>
    <div class="row">
        <div class="col-md-9">
            <h1>Main Content</h1>
            <p><strong> Note 1: On a large screen the content will be displayed as a three-column layout.
                    (Just enlarge the browser window to see the effect).
                </strong></p>
            <p>However, the content will automatically adjust itself into a single-column layout on a small screen.
                So, with Bootstrap, our page is now responsive to the screen size and adjusts itself accordingly.
            </p>
        </div><!-- end main content -->

        <div class="col-md-3">
            <h3>Main Menu Widget</h3>
            <p>
            <ul> <li>Link 1</li>
                <li>Link 2</li>
                <li>Link 3</li>
            </ul> </p>
        </div><!-- end main menu -->
    </div>
</div><!-- end container -->
</body> </html>