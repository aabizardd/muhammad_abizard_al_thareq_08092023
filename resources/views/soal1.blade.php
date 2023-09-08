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
                <h1>Form Data Diri</h1>
            </center>



        </div>

        <div class="body" style="border:  double #32a1ce;blue;width: 700px;padding: 10px">


            <table>
                <tr>
                    <td width=150>Nama Lengkap</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama_lengkap" id="nama_lengkap">
                    </td>
                </tr>

                <tr>
                    <td width=150>Tempat, Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="tempat_lahir" id="tempat_lahir">,<input type="number"
                            name="tanggal_lahir" id="tanggal_lahir" style="width: 10%">,<input type="numbear"
                            name="bulan_lahir" id="bulan_lahir" style="width: 10%">,<input type="number"
                            name="tahun_lahir" id="tahun_lahir" style="width: 20%">
                    </td>
                </tr>

                <tr>
                    <td width=150>Alamat</td>
                    <td>:</td>
                    <td>
                        <textarea name="alamat" id="alamat" cols="40" rows="5"></textarea>
                    </td>
                </tr>


                <tr>
                    <td width=150>No Telp/HP</td>
                    <td>:</td>
                    <td>
                        <input type="number" name="no_telp" id="no_telp">
                    </td>
                </tr>

                <tr>
                    <td width=150>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" value="Laki-laki" id="jk">
                        <label for="html">Laki-laki</label>

                        <input type="radio" name="jk" value="Perempuan">
                        <label for="html">Perempuan</label><br>
                    </td>
                </tr>

                <tr>
                    <td width=150>Agama</td>
                    <td>:</td>
                    <td>

                        <select name="agama" id="agama">
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                        </select>

                    </td>
                </tr>

                <tr>
                    <td width=150>Hobi</td>
                    <td>:</td>
                    <td>

                        <input type="checkbox" id="hobi1" name="hobi" value="Baca Buku">
                        <label for="hobi1"> Baca Buku</label>

                        <input type="checkbox" id="hobi2" name="hobi" value="Olah Raga">
                        <label for="hobi2"> Olah Raga</label>

                        <input type="checkbox" id="hobi3" name="hobi" value="Main Game">
                        <label for="hobi3"> Main Game</label>


                        <input type="checkbox" id="hobi4" name="hobi" value="Hiking">
                        <label for="hobi4"> Hiking</label>


                    </td>
                </tr>


                <tr>
                    <td width=150></td>
                    <td></td>
                    <td>

                        <button id="tampilkan" ty>Tampilkan</button>
                        <button type="reset">Reset</button>

                    </td>
                </tr>





            </table>

        </div>

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
            var jk = [];
            var agama = $("#agama").val();
            var h1 = $("#hobi1").val();
            var h2 = $("#hobi2").val();
            var h3 = $("#hobi3").val();
            // var h1 = $("#hobi").val();

            var hobi = [];
            $("input:checkbox[name=hobi]:checked").each(function() {
                hobi.push($(this).val());
            });

            $("input:radio[name=jk]:checked").each(function() {
                jk.push($(this).val());
            });


            // alert(hobi)
            // alert($("input[type='checkbox']").val())


            // var agama = 

            // var h1 = 


            var hasil = `Nama Lengkap: ` + nama_lengkap + "\n" +
                `Tempat, Tanggal Lahir: ` + ttl + '\n' + `Alamat: ` + alamat + '\n' + `No Telp/HP: ` +
                no_telp + '\n' + `Jenis Kelamin: ` + jk + '\n' + `Agama: ` + agama + '\n' + `Hobi: ` +
                hobi;

            alert(hasil)

            // console.log(selectedCif)


        });




    });
</script>
