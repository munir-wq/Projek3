<!DOCTYPE html>
<html lang=a"en">
a
<head>
    <title>Pesan</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="bg-contact3" style="background-image: url('images/bp.jpeg');">
        <div class="container-contact3">
            <div class="wrap-contact3">
                <form class="contact3-form validate-form" action="/pesan" method="POST">
                    @csrf
                    <span class="contact3-form-title">
                        Pesan
                    </span>

                    <div class="wrap-input3 validate-input" data-validate="Name is required">
                        <input class="input3" type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap">
                        <span class="focus-input3"></span>
                    </div>

                    <div class="wrap-input3 validate-input" data-validate="Number is required">
                        <input class="input3" type="text" name="no_wa" id="no_wa" placeholder="No. WA">
                        <span class="focus-input3"></span>
                    </div>

                    <div class="wrap-input3 validate-input" data-validate="Number is required">
                        <input class="input3" type="text" name="alamat" id="alamat" placeholder="Alamat">
                        <span class="focus-input3"></span>
                    </div>

                    <div class="wrap-input3 validate-input" data-validate="Message is required">
                        <textarea class="input3" name="deskripsi" placeholder="Deskripsi Kebutuhan" id="deskripsi"></textarea>
                        <span class="focus-input3"></span>
                    </div>

                    <div class="wrap-input3 validate-input" data-validate="Number is required">
                        <input class="input3" type="number" name="dana" placeholder="Dana" id="dana">
                        <span class="focus-input3"></span>
                    </div>
                    
                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                            <use xlink:href="#info-fill" /></svg> 
                        <div>
                            Silahkan Transfer di no rekening <strong>098766899654</strong>
                            <p>Atas nama Bryan O 'ajah</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nota" class="text-white">Upload Nota Transaksi</label>
                        <input type="file" class="form-control-file text-white" id="nota" name="image">
                    </div>

                    <div class="container-contact3-form-btn">
                        <button class="contact3-form-btn">
                            Order Sekarang
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <script>
        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });

    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');

    </script>

</body>

</html>
