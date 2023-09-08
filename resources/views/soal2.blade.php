<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <div class="container">

        <div class="header" style="border:  double #32a1ce;blue;width: 700px;padding: 10px">

            <center>
                <h1>Form Data Pegawai</h1>
            </center>



        </div>

        <form class="body" style="border:  double #32a1ce;blue;width: 700px;padding: 10px" method="POST">
            @csrf

            <label for="">Nama Pegawai</label>
            <input type="text" name="nama_pegawai">


        </form>

    </div>


</body>

</html>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $('#tampilkan').click(function() {
            // var selectedCif = $(this).val();
            // alert('asd')

            var nama_lengkap = $("#nama_lengkap").val();
            var ttl = $("#tempat_lahir").val() + ", " + $("#tanggal_lahir").val() + "/" + $(
                "#bulan_lahir").val() + "/" + $("#tahun_lahir").val();

            var alamat = $("#alamat").val();
            var no_telp = $("#no_telp").val();
            var jk = $("#jk").val();
            var agama = $("#agama").val();
            var h1 = $("#hobi").val();

            // var agama = 

            // var h1 = 


            var hasil = `Nama Lengkap: ` + nama_lengkap + "\n" +
                `Tempat, Tanggal Lahir: ` + ttl + '\n' + `Alamat: ` + alamat + '\n' + `No Telp/HP: ` +
                no_telp + '\n' + `Jenis Kelamin: ` + jk + '\n' + `Agama: ` + agama + '\n' + `Hobi: ` +
                h1;

            alert(hasil)

            // console.log(selectedCif)


        });




    });
</script>
