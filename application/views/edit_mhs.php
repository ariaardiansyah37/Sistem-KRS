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

    <title>Edit Data Mahasiswa</title>

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
                    <span>Edit Data KRS Mahasiswa</span>
                </div>
                <h2 class="az-content-title">Data Mahasiswa</h2>

                <div class="az-content-label mg-b-5">Input Data Mahasiswa</div>
                <p class="mg-b-20">Pastikan data mahasiswa terisi dengan benar.</p>

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
                    <div class="col-lg-4">
                        <p class="mg-b-10"><strong>Pilih Matkul</strong></p>
                        <?php $matkulDiambilNama = array_column($matkulDiambil, 'matakuliah'); ?>
                        <select class="form-control select2 chosen" multiple="multiple">
                            <?php foreach ($matkul as $mkl): ?>
                            <?php if (!in_array($mkl['matakuliah'], $matkulDiambilNama)): ?>
                            <option value="<?= $mkl['id'] ?>" data-sks="<?= $mkl['sks'] ?>"
                                data-matakuliah="<?= $mkl['matakuliah'] ?>" data-kelp="<?= $mkl['kelp'] ?>"
                                data-ruangan="<?= $mkl['ruangan'] ?>">
                                <?= $mkl['matakuliah'] ?>
                            </option>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div><!-- col -->
                    <div class="col-lg-4">
                        <p class="mg-b-10"><strong>Sisa Kuota SKS</strong></p>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="sisasks" name="sisasks" id="sisasks"
                                aria-describedby="basic-addon1" value="<?=$mhs['sks']?>" data-sks="<?=$mhs['sks']?>"
                                readonly>

                        </div><!-- input-group -->
                    </div><!-- col -->
                    <div class="col-2">
                        <p class="mg-b-10"><strong>Submit</strong></p>
                        <div class="input-group mb-3">
                            <button class="btn btn-indigo btn-block btnInput">Input KRS</button>
                        </div><!-- input-group -->
                    </div><!-- col -->
                </div>

                <hr class="mg-y-30">

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
                                <th>Aksi</th>
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
                                <td><button class="btn btn-danger notika-btn-success btnDelete" id="sa-warning"
                                        data-iddeletemhs="<?=$jwl['id']?>" data-matkul="<?= $jwl['matakuliah']; ?>"
                                        data-sks="<?= $jwl['sks']; ?>">Hapus</button>
                                </td>
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
        $('.select2').select2({
            placeholder: 'Choose one',
            searchInputPlaceholder: 'Search'
        });

        $('.select2-no-search').select2({
            minimumResultsForSearch: Infinity,
            placeholder: 'Choose one'
        });
    });

    $(document).ready(function() {

        const maxSKS = parseInt($('#sisasks').val()); // SKS maksimal mahasiswa
        let selectedSKS = 0; // Total SKS yang dipilih

        // Fungsi untuk memeriksa validitas dropdown
        function validateDropdown() {
            const remainingSKS = maxSKS - selectedSKS; // Hitung sisa SKS

            $('.chosen option').each(function() {
                const mataKuliahSKS = parseInt($(this).data('sks')) || 0;

                // Jika SKS opsi lebih besar dari sisa SKS, tambahkan kelas disabled
                if (mataKuliahSKS > remainingSKS) {
                    $(this).addClass('disabled-option');
                } else {
                    $(this).removeClass('disabled-option');
                }
            });

            // Refresh dropdown
            $('.chosen').trigger('chosen:updated');
        }

        // Saat ada perubahan pada pilihan
        $('.chosen').change(function() {
            selectedSKS = 0; // Reset total SKS yang dipilih

            // Iterasi semua opsi yang dipilih untuk menghitung SKS total
            $(this).find('option:selected').each(function() {
                selectedSKS += parseInt($(this).data('sks')) || 0;
            });

            // Update sisa SKS
            const remainingSKS = maxSKS - selectedSKS;
            $('#sisasks').val(remainingSKS >= 0 ? remainingSKS : 0);

            // Validasi ulang dropdown
            validateDropdown();
        });

        // Panggil validasi saat halaman dimuat
        validateDropdown();



        $('.btnInput').click(function() {
            var mahasiswaId = $('[name="idmhs"]').val(); // ID mahasiswa
            var selectedMatkul = []; // Array untuk menyimpan data matkul yang dipilih

            // Iterasi semua opsi yang dipilih
            $('.chosen option:selected').each(function() {
                selectedMatkul.push({
                    id: $(this).val(),
                    sks: $(this).data('sks'),
                    matakuliah: $(this).data('matakuliah'),
                    kelp: $(this).data('kelp'),
                    ruangan: $(this).data('ruangan')
                });
            });

            // Validasi apakah ada matkul yang dipilih
            if (selectedMatkul.length === 0) {
                swal({
                    title: "Gagal!",
                    text: "Pilih setidaknya satu mata kuliah!",
                    icon: "warning",
                    timer: 2000,
                });
                return;
            }

            console.log({
                mahasiswa_id: mahasiswaId,
                matkul: selectedMatkul
            });

            // Kirim data ke controller menggunakan AJAX
            $.ajax({
                url: '<?= base_url("krs/tambah_data_krs") ?>',
                type: 'POST',
                contentType: 'application/json',
                data: JSON.stringify({
                    mahasiswa_id: mahasiswaId,
                    matkul: selectedMatkul,
                }),
                success: function(response) {
                    swal({
                        title: "Sukses!",
                        text: "Mata kuliah berhasil ditambahkan.",
                        icon: "success",
                        timer: 2000,
                    }).then(() => {
                        location.reload(); // Reload halaman setelah sukses
                    });
                },
                error: function(xhr, status, error) {
                    swal({
                        title: "Kesalahan Sistem!",
                        text: "Terjadi kesalahan dalam mengirim data.",
                        icon: "error",
                        timer: 2000,
                    });
                    console.error("Error:", error);
                },
            });

        });

        $('.btnDelete').click(function(event) {
            event.preventDefault();

            var mhsId = $(this).data('iddeletemhs'); // Ambil mhs_id dari atribut data
            var matkul = $(this).data('matkul'); // Ambil nama matkul dari atribut data
            var sks = $(this).data('sks'); // Ambil jumlah sks dari atribut data

            // Konfirmasi sebelum menghapus
            swal({
                title: "Yakin ingin menghapus?",
                text: `Mata kuliah ${matkul} akan dihapus.`,
                icon: "warning",
                buttons: true,
                showCancelButton: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    // Kirim request ke server untuk menghapus data
                    $.ajax({
                        url: '<?= base_url("krs/hapus_data_krs") ?>', // Ganti dengan URL controller Anda
                        type: 'POST',
                        data: {
                            id: mhsId,
                            matkul: matkul,
                            sks: sks,
                        },
                        success: function(response) {
                            if (response.status === 'success') {
                                swal("Berhasil!", "Data berhasil dihapus.",
                                        "success")
                                    .then(() => {
                                        location
                                            .reload(); // Reload halaman setelah sukses
                                    });
                            } else {
                                swal("Gagal!", response.message, "error");
                            }
                        },
                        error: function(xhr, status, error) {
                            swal("Kesalahan Sistem!",
                                "Terjadi kesalahan dalam menghapus data.",
                                "error");
                            console.error("Error:", error);
                        },
                    });
                }
            });
        });

    });
    </script>

</body>

</html>