<style>
    body{
    background-color: black;
    margin-top: 5px;
    margin-left: 10px;
}
.vrtcl{
    position: absolute;
    border-left: 2px solid white;
    height: 0;
    width: 0;
    margin-left: 50%;
    padding: 50%;
}
.sosmed{
    position: absolute;
    margin-left: 53%;
}
.icon {
    padding: 10px;
    border-radius: 5px;
}

.icon a {
    color: white;
    text-decoration: none;
    padding: 20px;
}

.icon a:hover {
    color: yellow;
}
label{
    font-size: 15px;
    color: white;
    margin-left: 10px;
}
input {
    border: 2px solid white;
    border-radius: 4px;
    margin-left: 10px;
}
.alamat{
    height: 320px;
    width: 30%;
}
.hrb{
    width: 30%;
    margin-left: 5px;
}
</style>


 <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/4592f70558.js" crossorigin="anonymous"></script>
    <!-- Akhir Font Awesome -->

     <!-- Judul Pertama -->
    <h3 style="color: white;"> Contact Us </h3>
    <hr style="border: 1px solid white;">
    <!-- akhir Judul Pertama -->

    <!-- Garis Vertical -->
    <div class="vrtcl">
    </div>
    <!-- Akhir Garis Vertical -->

    <!-- Icon -->
    <div class="sosmed">
        <h3 style="color: white;"> Find Us On </h3>
        <div class="icon">
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
        </div>
    <!-- Icon -->

    <!-- Label Input -->
    </div>
    <label for="name">Name</label>
    <br>
    <br>
    <input type="text" name="nama">
    <br>
    <br>
    <label for="Email">Email</label>
    <br>
    <br>
    <input type="text">
    <br>
    <br>
    <label for="Number"> Nomor HP </label>
    <br>
    <br>
    <input type="number">
    <br>
    <br>
    <label for="alamat"> Alamat lengkap </label>
    <br>
    <br>
    <input class="alamat" type="text">
    <br>
    <br>
    <input type="submit" value="submit"> 
    <br>
    <br>
    <hr style="border: 1px solid white;">
    <!-- Akhir Label Input -->

    <!-- Baris bawah -->
    <a href="#"><h4 style="color: white;"> Refound Policy </h4></a>
    <hr class="hrb">