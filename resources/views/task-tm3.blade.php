<!DOCTYPE html>
<html lang="en">

<head>
    <title>BS4 Modal - IS Competition</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&family=Lexend:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        body {
            background-color: #003049;
            color: white;
            font-family: 'Poppins', 'Open Sans', sans-serif;
        }

        .open-sans-judul {
            font-family: "Poppins", "Open Sans", sans-serif;
            font-weight: 400;
            font-size: xx-large;
            font-variation-settings: "wdth" 100;
            color: white;
        }

        .jumbotron-custom {
            background-color: #D62828;
            color: white;
            border-radius: 0 0 1rem 1rem;
        }

        .text-highlight {
            color: #FCBF49;
        }

        .hr-custom {
            border-top: 2px solid #F77F00;
        }

        .btn-custom {
            background-color: #003049;
            color: white;
            border: none;
        }

        .btn-custom:hover {
            background-color: #F77F00;
            color: white;
        }

        a {
            color: #FCBF49;
        }

        .img-fluid {
            border-radius: 10px;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
        }

        .modal-body img {
            width: 70%;
            display: block;
            margin: auto;
        }

        .modal-content {
            color: #000;
        }

        .row h4 {
            font-weight: 600;
        }
    </style>

</head>

<body>
    <div class="container mt-4">
        <div class="jumbotron text-center jumbotron-custom shadow">
            <h1 class="display-3 text-highlight" style="font-family: 'Lexend', sans-serif; font-weight: 600;">Hello,
                Developers</h1>
            <p class="lead">Welcome to the most prestigious IT Competitions in Indonesia!</p>
            <hr class="my-3 hr-custom">
            <p>More info</p>
            <p class="lead">
                <a class="btn btn-custom btn-lg font-weight-bold shadow-sm" href="#" role="button" data-toggle="modal"
                    data-target="#infoModal">
                    Klik Disini
                </a>
            </p>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-8">
                <p class="open-sans-judul"><b>IS Competition</b> merupakan kompetisi teknologi informasi yang diadakan
                    untuk
                    mendorong inovasi dan kreativitas para developer di Indonesia.</p>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col">
                        <img src="https://img.freepik.com/free-vector/young-man-working-laptop-near-window_107791-25880.jpg?semt=ais_hybrid&w=740&q=80"
                            class="img-fluid">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p></p>
                        <p>Sebagai ajang untuk mengembangkan bakat dan kemampuan para developer di Indonesia, IS
                            Competition mengadakan 3 bidang lomba, yakni Data Analyst, Software Engineer, dan UI/UX
                            Designer.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p><a href="#" data-toggle="modal" data-target="#detailModal">
                                Pelajari Lebih Lanjut
                            </a></p>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-4 hr-custom">
        <div class="row text-center">

            <div class="col-4">
                <h4 class="text-highlight">🏆 Prize Pool</h4>
                <p>Total hadiah hingga <b>Rp 50.000.000</b> untuk para pemenang.</p>
            </div>

            <div class="col-4">
                <h4 class="text-highlight">👥 Participants</h4>
                <p>Lebih dari <b>500+ developer</b> dari seluruh Indonesia.</p>
            </div>

            <div class="col-4">
                <h4 class="text-highlight">🗓️ Event Date</h4>
                <p>Kompetisi berlangsung pada <b>Maret - April 2026</b>.</p>
            </div>

        </div>

        <div class="modal fade" id="detailModal">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">IS Competition Categories</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">

                        <h5>1️⃣ Data Analyst Competition</h5>
                        <img src="https://img.freepik.com/free-vector/data-analyst-oversees-governs-income-expenses-with-magnifier-financial-management-system-finance-software-it-management-tool-concept_335657-1891.jpg?semt=ais_rp_progressive&w=740&q=80"
                            class="img-fluid rounded mb-2">
                        <p>
                            Peserta akan diberikan dataset nyata dari dunia industri
                            untuk dianalisis menggunakan tools seperti Python, SQL,
                            atau software analitik lainnya.
                        </p>

                        <p>
                            Tujuannya adalah menghasilkan insight bisnis yang dapat
                            membantu perusahaan dalam mengambil keputusan strategis.
                        </p>

                        <hr>

                        <h5>2️⃣ Software Engineering Competition</h5>
                        <img src="https://img.freepik.com/free-vector/professional-programmer-engineer-writing-code_3446-693.jpg?semt=ais_hybrid&w=740&q=80"
                            class="img-fluid rounded mb-2">
                        <p>
                            Dalam kategori ini peserta akan mengembangkan sebuah
                            aplikasi digital yang dapat menyelesaikan masalah nyata
                            di masyarakat atau dunia bisnis.
                        </p>

                        <p>
                            Teknologi yang digunakan dapat berupa Web Development,
                            Mobile Apps, ataupun sistem berbasis cloud.
                        </p>

                        <hr>

                        <h5>3️⃣ UI / UX Design Competition</h5>
                        <img src="https://img.freepik.com/free-vector/ui-ux-concept-illustration_114360-4967.jpg"
                            class="img-fluid rounded mb-2">
                        <p>
                            Peserta ditantang untuk merancang pengalaman pengguna
                            yang intuitif dan menarik menggunakan tools seperti
                            Figma atau Adobe XD.
                        </p>

                        <p>
                            Fokus utama dari kategori ini adalah bagaimana desain
                            dapat meningkatkan kenyamanan dan efektivitas pengguna
                            saat menggunakan sebuah aplikasi digital.
                        </p>

                        <hr>

                        <h5>Benefit Mengikuti IS Competition</h5>
                        <ul>
                            <li>Networking dengan developer dari seluruh Indonesia</li>
                            <li>Kesempatan menunjukkan kemampuan di bidang teknologi</li>
                            <li>Pengalaman menyelesaikan studi kasus industri</li>
                            <li>Hadiah dan sertifikat nasional</li>
                        </ul>

                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">
                            Close
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="infoModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">About IS Competition</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <h5>📅 Competition Timeline</h5>
                        <ul>
                            <li><b>Pendaftaran Dibuka</b> : 1 Februari 2026</li>
                            <li><b>Batas Akhir Pendaftaran</b> : 18 Maret 2026</li>
                            <li><b>Technical Meeting</b> : 20 Maret 2026</li>
                            <li><b>Babak Penyisihan</b> : 25 – 27 Maret 2026</li>
                            <li><b>Grand Final</b> : 10 April 2026</li>
                        </ul>

                        <hr>

                        <h5>📍 Lokasi Final</h5>
                        <p>
                            Grand Final IS Competition akan diselenggarakan secara hybrid
                            di <b>Jatim Expo Surabaya</b> dan juga disiarkan
                            secara online untuk peserta dari seluruh Indonesia.
                        </p>
                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">
                            Close
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
