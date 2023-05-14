    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <b>Round : </b> <?= round(9876.54321); ?><br>
        <b>Round to 2 decimal places : </b> <?= round(9876.54321, 2); ?><br>
        <b>Round half up : </b> <?= round(1.5, 0, PHP_ROUND_HALF_UP); ?><br>
        <b>Round half down: </b> <?= round(1.5, 0, PHP_ROUND_HALF_DOWN); ?><br>
        <b>Round up : </b> <?= ceil(1.23); ?><br>
        <b>Round down : </b> <?= floor(1.23); ?><br>
        <b>Random number : </b> <?= mt_rand(0, 10); ?><br> <!--refresh la pagina, se va schimba nr--->
        <b>Exponential : </b> <?= pow(4, 5); ?><br>
        <b>Square root : </b> <?= sqrt(16); ?><br> <!--radacina patrata --->
        <b>Is a number : </b> <?= is_numeric(123); ?><br>
        <b>Format number : </b> <?= number_format(12345.6789, 2, ',', ' '); ?><br>
        <b>Date </b> <?= date('Y'); ?> <br>
        <b>Date with days </b> <?= date('Y-d'); ?> <br>
        <b>Date with days and month </b> <?= date('Y-d-m'); ?> <br>
        <b>Hour </b> <?= date('H:i:s'); ?> <br>

    </body>

    </html>