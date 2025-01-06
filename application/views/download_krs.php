<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js')?>) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-90680653-2');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <!-- <meta name="twitter:site" content="@bootstrapdash">
    <meta name="twitter:creator" content="@bootstrapdash">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Azia">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png"> -->

    <!-- Facebook -->
    <!-- <meta property="og:url" content="https://www.bootstrapdash.com/azia">
    <meta property="og:title" content="Azia">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:secure_url" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600"> -->

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Download KRS Mahasiswa</title>

    <!-- vendor css -->
    <link href="<?=base_url('assets/lib/fontawesome-free/css/all.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/lib/ionicons/css/ionicons.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/lib/typicons.font/typicons.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/lib/spectrum-colorpicker/spectrum.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/lib/select2/css/select2.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/lib/ion-rangeslider/css/ion.rangeSlider.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/lib/ion-rangeslider/css/ion.rangeSlider.skinFlat.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/lib/amazeui-datetimepicker/css/amazeui.datetimepicker.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/lib/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/lib/pickerjs/picker.min.css')?>" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/css/azia.css')?>">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.15.10/dist/sweetalert2.min.css" rel="stylesheet">

    <style>
    /* Styling table untuk center alignment */
    #data-table-basic {
        width: 100%;
        border-collapse: collapse;
    }

    #data-table-basic th,
    #data-table-basic td {
        text-align: center;
        /* Horizontal alignment */
        vertical-align: middle;
        /* Vertical alignment */
    }

    #data-table-basic th {
        background-color: #f8f9fa;
        /* Opsional: memberikan warna latar belakang pada header */
        font-weight: bold;
    }

    #data-table-basic td {
        padding: 10px;
        /* Opsional: memberi jarak antara teks dan border */
    }

    .disabled-option {
        color: #ccc !important;
        pointer-events: none;
        /* Menonaktifkan interaksi */
        cursor: not-allowed;
        /* Mengubah kursor menjadi tidak diizinkan */
    }
    </style>

</head>

<body>

    <div class="az-header">
        <div class="container">
            <div class="az-header-left">
                <a href="<?=base_url('')?>" class="az-logo"><span></span> azia</a>
                <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
            </div><!-- az-header-left -->
            <div class="az-header-menu">
                <div class="az-header-menu-header">
                    <a href="<?=base_url('')?>" class="az-logo"><span></span> azia</a>
                    <a href="" class="close">&times;</a>
                </div><!-- az-header-menu-header -->
                <ul class="nav">
                    <li class="nav-item">
                        <a href="<?=base_url('')?>" class="nav-link"><i class="typcn typcn-chart-area-outline"></i>
                            Dashboard</a>
                    </li>
                    <li class="nav-item active show">
                        <a href="<?=base_url('krs/mahasiswa')?>" class="nav-link"><i
                                class="typcn typcn-chart-bar-outline"></i>Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=base_url('krs/mata_kuliah')?>" class="nav-link"><i class="typcn typcn-chart-bar-outline"></i>Mata
                            Kuliah</a>
                    </li>
                </ul>
            </div><!-- az-header-menu -->
            <div class="az-header-right">
            </div>
        </div><!-- az-header-right -->
    </div><!-- container -->
    </div><!-- az-header -->

    <div class="az-content pd-y-20 pd-lg-y-30 pd-xl-y-40">
        <div class="container">

            <div class="az-content-body pd-lg-l-40 d-flex flex-column">
                <div class="az-content-breadcrumb">
                    <span>Home</span>
                    <span>Data Mahasiswa</span>
                    <span>Download KRS</span>
                </div>
                <h2 class="az-content-title">Data Mahasiswa</h2>

                <div class="az-content-label mg-b-5">Download KRS Mahasiswa Sdr. <?=$mhs['namaMhs']?></div>

                <div class="row row-sm">
                    <div class="col-lg-4">
                        <input type="hidden" id="idmhs" name="idmhs" value="<?=$mhs['id']?>">
                        <p class="mg-b-10"><strong>Nama Mahasiswa</strong></p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Nama Mahasiswa"
                                aria-label="Nama Mahasiswa" name="nama" aria-describedby="basic-addon1" readonly
                                value="<?=$mhs['namaMhs']?>">
                        </div><!-- input-group -->
                    </div><!-- col -->
                    <div class="col-lg-4">
                        <p class="mg-b-10"><strong>NIM Mahasiswa</strong></p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="NIM" aria-label="NIM" name="nim"
                                aria-describedby="basic-addon1" readonly value="<?=$mhs['nim']?>">
                        </div><!-- input-group -->
                    </div><!-- col -->
                    <div class="col-lg-4">
                        <p class="mg-b-10"><strong>IPK Mahasiswa</strong></p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="IPK" aria-label="IPK" name="ipk"
                                aria-describedby="basic-addon1" readonly value="<?=$mhs['ipk']?>">
                        </div><!-- input-group -->
                    </div><!-- col -->
                </div><!-- row -->

                <hr class="mg-y-15">

                <div class="row row-sm">
                    <div class="col-2">
                        <div class="input-group mb-3">
                        <a href="<?=base_url('krs/download_krs/').$mhs['id']?>"><button class="btn btn-indigo btn-block btnInput">Download KRS</button></a>
                        </div><!-- input-group -->
                    </div><!-- col -->
                </div>

                <div class="az-content-label mg-b-5">KRS Mahasiswa</div>
                <p class="mg-b-20">Detail Matkul Yang Diambil.</p>

                <div class="table-responsive">
                    <table class="table table-hover mg-b-0" id="data-table-basic">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Mata Kuliah</th>
                                <th>SKS</th>
                                <th>Kelp</th>
                                <th>Ruangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($jadwal){ $i=1; foreach($jadwal as $jwl):?>
                            <tr>
                                <td scope="row"><?=$i++;?></td>
                                <td><?=$jwl['matakuliah']?></td>
                                <td><?=$jwl['sks']?></td>
                                <td><?=$jwl['kelp']?></td>
                                <td><?=$jwl['ruangan']?></td>
                            </tr>
                            <?php endforeach; } else{?>
                            <tr>
                                <td colspan="10">Tidak ada data mata kuliah yang diambil</td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div><!-- table-responsive -->


                <div class="ht-40"></div>


                <div class="az-footer mg-t-auto">
                    <div class="container">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                            bootstrapdash.com 2020</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                                href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap
                                admin templates</a> from Bootstrapdash.com</span>
                    </div><!-- container -->
                </div><!-- az-footer -->
            </div><!-- az-content-body -->
        </div><!-- container -->
    </div><!-- az-content -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="<?=base_url('assets/lib/jquery-ui/ui/widgets/datepicker.js')?>"></script>
    <script src="<?=base_url('assets/lib/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/ionicons/ionicons.js')?>"></script>
    <script src="<?=base_url('assets/lib/jquery.maskedinput/jquery.maskedinput.js')?>"></script>
    <script src="<?=base_url('assets/lib/spectrum-colorpicker/spectrum.js')?>"></script>
    <script src="<?=base_url('assets/lib/select2/js/select2.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/ion-rangeslider/js/ion.rangeSlider.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')?>"></script>
    <script src="<?=base_url('assets/lib/pickerjs/picker.min.js')?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>

    <script src="<?=base_url('assets/js/azia.js')?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert"></script>
    
</body>

</html>