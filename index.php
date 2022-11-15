<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' />

    <title>Toko Makmur</title>
</head>

<body>
    <!-- MENU  -->
    <div class="nav_menu">
        <a href="#">Toko Makmur</a>
        <a href="#">Home</a>
        <a href="#">Produk Bangunan</a>
        <a href="#">Bahan Pokok</a>
        <a href="#">Produk Pertanian</a>
        <a href="#">Kontak Kita</a>
        <a href="#" class="icon" onclick="show_menu()"><i class="fas fa-bars"></i></a>
    </div>
    <!-- END MENU  -->

    <div class="container">
        <!-- KONTEN DISINI  -->
    </div>




    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js' integrity='sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A==' crossorigin='anonymous'></script>

    <script>
        function show_menu() {
            $('.nav_menu').toggleClass('show');
        }
    </script>
</body>

</html>