<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrasi Pendaftar PPDB</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="app.js"></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap");

        :root{
            --main-font: 'Poppins', sans-serif;

            --white-color: #f9f9f9;
            --grey-color: #2c2c32;
            --black-color: #19191c
            
        }

        html{
        scroll-behavior: smooth;
        }

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            text-decoration: none;
        }

        .logo{
            display: flex;
            justify-content: center;
            margin-top: 2rem;
            font-family: var(--main-font);
        }

        section form {
            max-width: 600px;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 2rem;
            margin-left: auto;
            margin-right: auto;
            font-family: var(--main-font);
            padding: 40px;
            border-style: solid;
            border-color: var(--black-color);
            border-radius: 20px;
        }
        
        section input[type='text'],
        section input[type='nrp'],
        section input[type='date'],
        section textarea,
        .form-control {
            width: 100%;
            padding: 0.5rem;
            font-size: 1.1rem;
            margin-bottom: 1rem;
            border-radius: 5px;
            border: solid;
            border-color: var(--black-color);
            outline: none;
            background: whitesmoke;
        }
        
        section input[type='text'],
        section input[type='nrp'],
        section input[type='date'] {
            height: 50px;
        }

        section input[type='submit']{
            background-color: #39A7FF;
            font-family: var(--main-font);
            font-weight: 500;
            padding: 10px;
            width: 500px;
            border-radius: 10px;
        }
        section input[type='submit']:hover{
            background-color: #87C4FF;
        }
        
        section textarea {
            height: 200px;
        }

        .title{
            width: fit-content;
            width: 600px;
            margin-left: auto;
            margin-right: auto;
            /* background-color: red; */
            font-size: 18px;
            font-weight: 500;
            font-family: var(--main-font);
        }
        .navbar{
            background-color: #87C4FF;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url('assets/img/kemdikbud.png') ?>" alt="Logo" style="max-width: 50px; max-height: 50px;">
            Penerimaan Peserta Didik Baru 2023
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pengumuman</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Mendaftar <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <section>
        <div class="logo"><h1>Pendaftaran Tahun Ajaran 2023/2024</h1></div>
        <form name="ppdb" onsubmit="return validate()" action="https://my.its.ac.id/" method="post">
            <div class="title"><a>Nama</a></div>
            <input maxlength="50" minlength="1" type="text" name="Nama" placeholder="Nama Lengkap">

            <div class="title"><a>NISN</a></div>
            <input maxlength="20" minlength="8" type="nrp" name="NISN" placeholder="Nomor Induk Siswa Nasional">

            <div class="title"><a>Tempat Lahir</a></div>
            <input maxlength="30" minlength="5" type="text" name="Tempat" placeholder="Tempat Kelahiran">

            <div class="title"><a>Tanggal Lahir</a></div>
            <input maxlength="30" minlength="5" type="date" name="Tanggal" placeholder="Tanggal Kelahiran">

            <input type="submit" value="Submit">
        </form>
    </section>
    <!-- End registration form -->

</body>
</html>