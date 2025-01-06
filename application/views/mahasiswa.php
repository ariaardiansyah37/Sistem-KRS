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

    <title>Data Mahasiswa</title>

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
                        <a href="" class="nav-link"><i class="typcn typcn-chart-bar-outline"></i>Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=base_url('krs/mata_kuliah')?>" class="nav-link"><i
                                class="typcn typcn-chart-bar-outline"></i>Mata
                            Kuliah</a>
                    </li>
                </ul>
            </div><!-- az-header-menu -->
            <div class="az-header-right">

            </div><!-- az-header-right -->
        </div><!-- container -->
    </div><!-- az-header -->

    <div class="az-content pd-y-20 pd-lg-y-30 pd-xl-y-40">
        <div class="container">

            <div class="az-content-body pd-lg-l-40 d-flex flex-column">
                <div class="az-content-breadcrumb">
                    <span>Home</span>
                    <span>Data Mahasiswa</span>
                </div>
                <h2 class="az-content-title">Data Mahasiswa</h2>

                <div class="az-content-label mg-b-5">Input Data Mahasiswa</div>
                <p class="mg-b-20">Pastikan data mahasiswa terisi dengan benar.</p>

                <div class="row row-sm">
                    <div class="col-lg-4">
                        <p class="mg-b-10"><strong>Nama Mahasiswa</strong></p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Nama Mahasiswa"
                                aria-label="Nama Mahasiswa" name="nama" aria-describedby="basic-addon1">
                        </div><!-- input-group -->
                    </div><!-- col -->
                    <div class="col-lg-4">
                        <p class="mg-b-10"><strong>NIM Mahasiswa</strong></p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="NIM" aria-label="NIM" name="nim"
                                aria-describedby="basic-addon1">
                        </div><!-- input-group -->
                    </div><!-- col -->
                    <div class="col-lg-4">
                        <p class="mg-b-10"><strong>IPK Mahasiswa</strong></p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="IPK" aria-label="IPK" name="ipk"
                                aria-describedby="basic-addon1">
                        </div><!-- input-group -->
                    </div><!-- col -->
                    <div class="col-sm-4 col-md-2"><button class="btn btn-indigo btn-block btnSubmit">Submit</button>
                    </div>
                </div><!-- row -->

                <hr class="mg-y-30">

                <div class="az-content-label mg-b-5">Daftar Mahasiswa</div>
                <p class="mg-b-20">Detail Data Mahasiswa.</p>

                <div class="table-responsive">
                    <table class="table table-hover mg-b-0" id="data-table-basic">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>IPK</th>
                                <th>SKS Maks</th>
                                <th>Matkul Diambil</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; foreach($mahasiswa as $mhs){?>
                            <tr>
                                <th scope="row"><?=$i++;?></th>
                                <td><?=$mhs['namaMhs']?></td>
                                <td><?=$mhs['nim']?></td>
                                <td><?=$mhs['ipk']?></td>
                                <td><?=$mhs['sks']?></td>
                                <td><?=$mhs['matakuliah']?></td>
                                <td>
                                    <a href="<?=base_url('krs/halaman_download_krs/').$mhs['id']?>"><button
                                            class="btn btn-rounded btn-info">Lihat</button></a> |
                                    <a href="<?=base_url('krs/halaman_edit_mhs/').$mhs['id']?>"><button
                                            class="btn btn-rounded btn-warning">Edit</button></a>
                                    <button class="btn btn-rounded btn-danger btnDelete"
                                        data-id="<?=$mhs['id']?>">Hapus</button>
                                </td>
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
    <script>
    // Additional code for adding placeholder in search box of select2
    (function($) {
        var Defaults = $.fn.select2.amd.require('select2/defaults');

        $.extend(Defaults.defaults, {
            searchInputPlaceholder: ''
        });

        var SearchDropdown = $.fn.select2.amd.require('select2/dropdown/search');

        var _renderSearchDropdown = SearchDropdown.prototype.render;

        SearchDropdown.prototype.render = function(decorated) {

            // invoke parent method
            var $rendered = _renderSearchDropdown.apply(this, Array.prototype.slice.apply(arguments));

            this.$search.attr('placeholder', this.options.get('searchInputPlaceholder'));

            return $rendered;
        };

    })(window.jQuery);

    $(document).ready(function() {

        $('.btnSubmit').click(function(event) {
            event.preventDefault();

            var nama = $('[name="nama"]').val();
            var nim = $('[name="nim"]').val();
            var ipk = $('[name="ipk"]').val();

            if (nama === '' || nim === '' || ipk === '') {
                swal({
                    title: "Gagal !",
                    text: "Data mahasiswa wajib lengkap diisi.",
                    timer: 2000
                });
                return;
            }

            $.ajax({
                url: '<?=base_url("krs/tambah_data_mhs")?>',
                type: 'post',
                data: {
                    namaMhs: nama,
                    nimMhs: nim,
                    ipkMhs: ipk
                },
                success: function(response) {
                    if (response.status === 'success') {
                        swal({
                            title: "Sukses !",
                            type: "success",
                            text: "Berhasil menambah data mahasiswa.",
                        }).then(function() {
                            location.href = '<?=base_url('krs/mahasiswa')?>';
                        });
                    } else {
                        swal({
                            title: "Gagal !",
                            type: "warning",
                            text: "Gagal menambah data mahasiswa.",
                            timer: 2000
                        });
                    }
                },
                error: function() {
                    swal({
                        title: "Kesalahan sistem!",
                        text: "Sistem mengalami kesalahan dalam mengirim data.",
                        timer: 2000
                    });
                }
            });
        });

        $('.btnDelete').click(function(event) {
            event.preventDefault();

            var id = $(this).data('id');

            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this data!",
                type: "warning",
                buttons: true,
                dangerMode: true,
                confirmButtonText: "Yes, delete it!",
            }).then(function(willDelete) {
                if (willDelete) {
                    $.ajax({
                        url: '<?=base_url("krs/hapus_data_mhs")?>',
                        type: 'post',
                        data: {
                            id: id
                        },
                        success: function(response) {
                            if (response.status === 'success') {
                                swal({
                                    title: "Sukses !",
                                    type: "success",
                                    text: "Berhasil menghapus data mahasiswa.",
                                }).then(function() {
                                    location.href =
                                        '<?=base_url('krs/mahasiswa')?>';
                                });
                            }
                        },
                        error: function() {
                            swal({
                                title: "Kesalahan sistem!",
                                text: "Sistem mengalami kesalahan dalam mengirim data.",
                                timer: 2000
                            });
                        }
                    });
                } else {

                }
            });
        });

    });
    </script>

</body>

</html>