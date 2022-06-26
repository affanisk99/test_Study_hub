<html>
    <head>
        <title>form js</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <div class="login">
            <form action="#" method="POST" onSubmit="validasi()">
                <div>
                    <label>Nama Lengkap:</label>
                    <input type="text" name="nama" id="nama" />
                </div>
                <div>
                    <label>Email:</label>
                    <input type="email" name="email" id="email" />
                </div>
                <div>
                    <label>Alamat:</label>
                    <textarea cols="40" rows="5" name="alamat" id="alamat"></textarea>
                </div>
                <div>
                    <label>Password:</label>
                    <input type="password" name="password" id="password" />
                </div>
                <div>
                    <input type="submit" value="Daftar" class="tombol">
                </div>
            </form>
        </div>
    </body>
    <script type="text/javascript">
        function validasi() {
            var nama = document.getElementById("nama").value;
            var email = document.getElementById("email").value;
            var alamat = document.getElementById("alamat").value;
            var password = document.getElementById("password").value;
            if (nama != "" && email!="" && alamat !="" && password !="") {
                return true;
            }else{
                alert('Anda harus mengisi data dengan lengkap !');
            }
        }
    </script>
</html>