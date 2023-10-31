@extends('front.layout.main')

@section('content')

<section id="content" style="background-color: white">
    <div class="">
        <div class="">
            <form method="POST" id="signup-form" class="signup-form" action="#">
                <div>
                    <h3>Formulir Aplikasi Pinjaman</h3>
                    <fieldset>
                        <h2>Formulir Aplikasi Pinjaman</h2>
                        <p class="desc">Please enter your infomation and proceed to next step so we can build your account</p>
                        <div class="fieldset-content mb-5">
                            <form>
                                <div class="row">
                                    <div class="col mb-2">
                                        <label for="produk" class="form-label">Produk</label>
                                        <select class="form-select form-select-lg mb-3" aria-label="Large select example" style="font-size: 16px">
                                            <option value="1">Kredit Angsuran</option>
                                            <option value="2">Kredit Musiman</option>
                                            <option value="3">Dana Siaga/KTA</option>
                                            <option value="3">Dana Kalangan</option>
                                            <option value="3">DP 50 K</option>
                                            <option value="3">DP 200 K</option>
                                            <option value="3">DP 500</option>
                                            <option value="3">DP 500 C</option>
                                        </select>
                                    </div>
                                    <div class="col mb-2">
                                        <div class="mb-2">
                                            <label for="plafonpinjaman" class="form-label">Plafon Pinjaman Yang Diminta</label>
                                            <input type="text" class="form-control" id="plafonpinjaman">
                                        </div>
                                        <div class="mb-2">
                                            <label for="plafonpinjaman" class="form-label">Jangka Waktu Pinjaman (bulan)</label>
                                            <input type="text" class="form-control" id="plafonpinjaman">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="card" style="background-color: #f8f8f8">
                                        <div class="card-body">
                                            <h5>Data Pemohon</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <div class="mb-2" style="display: flex; align-items: center;">
                                                        <label for="nama" class="form-label" style="flex: 1;">Nama <i>(sesuai KTP)</i></label>
                                                        <input type="text" class="form-control" id="nama" style="flex: 2;">
                                                    </div>
                                                    <div class="mb-2" style="display: flex; align-items: center;">
                                                        <label for="namapanggilan" class="form-label" style="flex: 1;">Nama Panggilan</label>
                                                        <input type="text" class="form-control" id="namapanggilan" style="flex: 2;">
                                                    </div>                                                    
                                                    <div class="mb-2" style="display: flex; align-items: center;">
                                                        <label for="produk" class="form-label">Jenis Kelamin</label>
                                                        <select class="form-select form-select-lg" aria-label="Large select example" style="font-size: 16px">
                                                            <option value="1">Laki-laki</option>
                                                            <option value="2">Perempuan</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-2" style="display: flex; align-items: center;">
                                                        <label for="noktp" class="form-label" style="flex: 1;">No KTP</label>
                                                        <input type="text" class="form-control" id="noktp" style="flex: 2;">
                                                    </div>  
                                                    <div class="mb-2" style="display: flex; align-items: center;">
                                                        <label for="noktp" class="form-label" style="flex: 1;">KTP Berlaku Sampai</label>
                                                        <input type="text" class="form-control" id="noktp" style="flex: 2;">
                                                    </div>  
                                                    <div class="mb-2" style="display: flex; align-items: center;">
                                                        <label for="tgllahir" class="form-label" style="flex: 1;">Tanggal Lahir</label>
                                                        <input type="text" class="form-control" id="tgllahir" style="flex: 2;">
                                                    </div> 
                                                </div>
                                                <div class="col mb-3">
                                                    <div class="mb-2" style="display: flex; align-items: center;">
                                                        <label for="tempatlahir" class="form-label" style="flex: 1;">Tempat Lahir</label>
                                                        <input type="text" class="form-control" id="tgllahir" style="flex: 2;">
                                                    </div>
                                                    <div class="mb-2" style="display: flex; align-items: center;">
                                                        <label for="pendidikanterakhir" class="form-label" style="flex: 1;">Pendidikan Terakhir</label>
                                                        <input type="text" class="form-control" id="pendidikanterakhir" style="flex: 2;">
                                                    </div>
                                                    <div class="mb-2" style="display: flex; align-items: center;">
                                                        <label for="perkawinan" class="form-label" style="flex: 1;">Status Perkawinan</label>
                                                        <input type="text" class="form-control" id="perkawinan" style="flex: 2;">
                                                    </div>
                                                    <div class="mb-2" style="display: flex; align-items: center;">
                                                        <label for="namaistri" class="form-label" style="flex: 1;">Nama Istri / Suami</label>
                                                        <input type="text" class="form-control" id="namaistri" style="flex: 2;">
                                                    </div>
                                                    <div class="mb-2" style="display: flex; align-items: center;">
                                                        <label for="jmltanggungan" class="form-label" style="flex: 1;">Jumlah Tanggungan <i>(orang)</i></label>
                                                        <input type="text" class="form-control" id="jmltanggungan" style="flex: 2;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="card" style="background-color: #f8f8f8">
                                        <div class="card-body">
                                            <h5>Keterangan Tempat Tinggal</h5>
                                            <hr>
                                            <div class="row">
                                                    <div class="mb-2">
                                                        <label for="nama" class="form-label">Alamat tempat tinggal saat ini</i></label>
                                                        <textarea class="form-control" id="alamat" rows="3"></textarea>
                                                    </div>
                                                    <div class="row mb-2" style="padding-right: 0px;">
                                                        <div class="col">
                                                            <label for="rt" class="form-label">RT</label>
                                                            <input type="text" class="form-control" id="rt">
                                                        </div>
                                                        <div class="col">
                                                            <label for="rw" class="form-label">RW</label>
                                                            <input type="text" class="form-control" id="rw">
                                                        </div>
                                                        <div class="col">
                                                            <label for="kelurahan" class="form-label">Kelurahan</label>
                                                            <input type="text" class="form-control" id="kelurahan">
                                                        </div>
                                                        <div class="col">
                                                            <label for="kecamatan" class="form-label">Kecamatan</label>
                                                            <input type="text" class="form-control" id="kecamatan">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2" style="padding-right: 0px;">
                                                        <div class="col">
                                                            <label for="telepon" class="form-label">Telepon/Fax</label>
                                                            <input type="text" class="form-control" id="telepon">
                                                        </div>
                                                        <div class="col">
                                                            <label for="telepon" class="form-label">No HP</label>
                                                            <input type="text" class="form-control" id="telepon">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2" style="padding-right: 0px;">
                                                        <div class="col">
                                                            <label for="status" class="form-label">Status tempat tinggal saat ini</label>
                                                            <input type="text" class="form-control" id="status">
                                                        </div>
                                                        <div class="col">
                                                            <label for="status" class="form-label">Lama Menempati Rumah</label>
                                                            <input type="text" class="form-control" id="status">
                                                        </div>
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="nama" class="form-label">Alamat sesuai KTP <i>(jika berbeda dgn Alamat Tempat Tinggal Saat Ini)</i></label>
                                                        <textarea class="form-control" id="alamat" rows="3"></textarea>
                                                    </div>
                                                    <div class="row mb-2" style="padding-right: 0px;">
                                                        <div class="col">
                                                            <label for="rt" class="form-label">RT</label>
                                                            <input type="text" class="form-control" id="rt">
                                                        </div>
                                                        <div class="col">
                                                            <label for="rw" class="form-label">RW</label>
                                                            <input type="text" class="form-control" id="rw">
                                                        </div>
                                                        <div class="col">
                                                            <label for="kelurahan" class="form-label">Kelurahan</label>
                                                            <input type="text" class="form-control" id="kelurahan">
                                                        </div>
                                                        <div class="col">
                                                            <label for="kecamatan" class="form-label">Kecamatan</label>
                                                            <input type="text" class="form-control" id="kecamatan">
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="card" style="background-color: #f8f8f8">
                                        <div class="card-body">
                                            <h5>Informasi Pekerjaan dan Keuangan</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12 mb-2">
                                                    <label for="tipependapatan" class="form-label">Tipe Pendapatan</label>
                                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px">
                                                        <option value="1">Wiraswasta</option>
                                                        <option value="2">Pegawai/Karyawan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-md-6 mb-2">
                                                    <label for="rt" class="form-label">Nama Perusahaan</label>
                                                    <input type="text" class="form-control" id="rt">
                                                </div>
                                                <div class="col-12 col-md-6 mb-2">
                                                    <label for="bidangusaha" class="form-label">Bidang Usaha</label>
                                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px">
                                                        <option value="1">Perdagangan</option>
                                                        <option value="2">Perindustrian</option>
                                                        <option value="3">Jasa</option>
                                                        <option value="4">Pertanian</option>
                                                        <option value="5">Nelayan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 mb-2">
                                                    <label for="nama" class="form-label">Alamat</label>
                                                    <textarea class="form-control" id="alamat" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-md-4 mb-2">
                                                    <label for="telepon" class="form-label">Telepon/Fax</label>
                                                    <input type="text" class="form-control" id="telepon">
                                                </div>
                                                <div class="col-12 col-md-4 mb-2">
                                                    <label for="npwp" class="form-label">No. NPWP <i>(Jika ada)</i></label>
                                                    <input type="text" class="form-control" id="npwp">
                                                </div>
                                                <div class="col-12 col-md-4 mb-2">
                                                    <label for="lamausaha" class="form-label">Lama Usaha di Usaha ini</label>
                                                    <input type="text" class="form-control" id="lamausaha">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-md-6 mb-2">
                                                    <label for="omset" class="form-label">Omset Rata-rata per Bulan</label>
                                                    <input type="text" class="form-control" id="omset">
                                                </div>
                                                <div class="col-12 col-md-6 mb-2">
                                                    <label for="keuntungan" class="form-label">Keuntungan Rata-rata per Bulan</label>
                                                    <input type="text" class="form-control" id="keuntungan">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="card" style="background-color: #f8f8f8">
                                        <div class="card-body">
                                            <h5>Informasi Lainnya</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12 mb-2">
                                                    <label for="" class="form-label">Saya ingin menggunakan fasilitas Cash Pick-up</label>
                                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px">
                                                        <option value="1">Ya</option>
                                                        <option value="2">Tidak</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 mb-2">
                                                    <label for="" class="form-label">Jika Ya, Frekuensi Cash Pick-up</label>
                                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px">
                                                        <option value="1">Harian</option>
                                                        <option value="2">Mingguan</option>
                                                        <option value="3">Dwi Mingguan</option>
                                                        <option value="4">Bulanan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 mb-2">
                                                    <label for="" class="form-label">Apakah Anda Memiliki Rekening Tabungan ?</label>
                                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px">
                                                        <option value="1">Ya</option>
                                                        <option value="2">Tidak</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-md-6 mb-2">
                                                    <label for="" class="form-label">Sejak Tahun</label>
                                                    <input type="text" class="form-control" id="">
                                                </div>
                                                <div class="col-12 col-md-6 mb-2">
                                                    <label for="" class="form-label">Saldo Rata-rata</label>
                                                    <input type="text" class="form-control" id="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="card" style="background-color: #f8f8f8">
                                        <div class="card-body">
                                            <h5>Informasi Peruntukan</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12 mb-2">
                                                    <label for="" class="form-label">Tujuan Pengajuan Pinjaman</label>
                                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px">
                                                        <option value="1">Modal Usaha</option>
                                                        <option value="2">Renovasi Kios/ Toko</option>
                                                        <option value="3">Beli Kios/ Toko</option>
                                                        <option value="4">Renovasi Rumah</option>
                                                        <option value="5">Beli Barang Elektronik</option>
                                                        <option value="6">Sekolah</option>
                                                        <option value="7">Beli Kendaraan</option>
                                                        <option value="8">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            
                        </div>
                    </fieldset>

                    <h3>Laporan Penilaian Debitur & Usaha - CO (1/2)</h3>
                    <fieldset>
                        <h2 class="mb-4">Laporan Penilaian Debitur & Usaha - CO (1/2)</h2>
                        <div class="fieldset-content mb-5">
                            <form>
                                <div class="row">
                                    <div class="col mb-2">
                                        <label for="produk" class="form-label">Produk</label>
                                        <select class="form-select form-select-lg mb-3" aria-label="Large select example" style="font-size: 16px">
                                            <option value="1">Kredit Angsuran</option>
                                            <option value="2">Kredit Musiman</option>
                                            <option value="3">Dana Siaga/KTA</option>
                                            <option value="3">Dana Kalangan</option>
                                            <option value="3">DP 50 K</option>
                                            <option value="3">DP 200 K</option>
                                            <option value="3">DP 500</option>
                                            <option value="3">DP 500 C</option>
                                        </select>
                                    </div>
                                    <div class="col mb-2">
                                        <div class="mb-2">
                                            <label for="plafonpinjaman" class="form-label">Plafon Pinjaman Yang Diminta</label>
                                            <input type="text" class="form-control" id="plafonpinjaman">
                                        </div>
                                        <div class="mb-2">
                                            <label for="plafonpinjaman" class="form-label">Jangka Waktu Pinjaman (bulan)</label>
                                            <input type="text" class="form-control" id="plafonpinjaman">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </fieldset>

                    <h3>Laporan Penilaian Debitur & Usaha - CO (2/2)</h3>
                    <fieldset>
                        <h2 class="mb-4">Laporan Penilaian Debitur & Usaha - CO (1/2)</h2>
                        <div class="fieldset-content mb-5">
                            <form>
                                <div class="row">
                                    
                                </div>
                            </form>
                        </div>
                    </fieldset>
                    <h3>Laporan Penilaian Debitur & Usaha - MM</h3>
                    <fieldset>
                        <h2>Set Financial Goals</h2>
                        <p class="desc">Set up your money limit to reach the future plan</p>
                        <div class="fieldset-content">
                            <div class="donate-us">
                                <div class="price_slider ui-slider ui-slider-horizontal">
                                    <div id="slider-margin"></div>
                                    <p class="your-money">
                                        Your money you can spend per month :
                                        <span class="money" id="value-lower"></span>
                                        <span class="money" id="value-upper"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <h3>Laporan Pemeriksaan Jaminan Kios</h3>
                    <fieldset>
                        <h2>Set Financial Goals</h2>
                        <p class="desc">Set up your money limit to reach the future plan</p>
                        <div class="fieldset-content">
                            <div class="donate-us">
                                <div class="price_slider ui-slider ui-slider-horizontal">
                                    <div id="slider-margin"></div>
                                    <p class="your-money">
                                        Your money you can spend per month :
                                        <span class="money" id="value-lower"></span>
                                        <span class="money" id="value-upper"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <h3>Laporan Pemeriksaan Jaminan Tanah Kosong</h3>
                    <fieldset>
                        <h2>Set Financial Goals</h2>
                        <p class="desc">Set up your money limit to reach the future plan</p>
                        <div class="fieldset-content">
                            <div class="donate-us">
                                <div class="price_slider ui-slider ui-slider-horizontal">
                                    <div id="slider-margin"></div>
                                    <p class="your-money">
                                        Your money you can spend per month :
                                        <span class="money" id="value-lower"></span>
                                        <span class="money" id="value-upper"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <h3>Laporan Pemeriksaan Jaminan Tanah & Bangunan</h3>
                    <fieldset>
                        <h2>Set Financial Goals</h2>
                        <p class="desc">Set up your money limit to reach the future plan</p>
                        <div class="fieldset-content">
                            <div class="donate-us">
                                <div class="price_slider ui-slider ui-slider-horizontal">
                                    <div id="slider-margin"></div>
                                    <p class="your-money">
                                        Your money you can spend per month :
                                        <span class="money" id="value-lower"></span>
                                        <span class="money" id="value-upper"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <h3>Laporan Pemeriksaan Jaminan Deposito</h3>
                    <fieldset>
                        <h2>Set Financial Goals</h2>
                        <p class="desc">Set up your money limit to reach the future plan</p>
                        <div class="fieldset-content">
                            <div class="donate-us">
                                <div class="price_slider ui-slider ui-slider-horizontal">
                                    <div id="slider-margin"></div>
                                    <p class="your-money">
                                        Your money you can spend per month :
                                        <span class="money" id="value-lower"></span>
                                        <span class="money" id="value-upper"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <h3>Laporan Pemeriksaan Jaminan Kendaraan</h3>
                    <fieldset>
                        <h2>Set Financial Goals</h2>
                        <p class="desc">Set up your money limit to reach the future plan</p>
                        <div class="fieldset-content">
                            <div class="donate-us">
                                <div class="price_slider ui-slider ui-slider-horizontal">
                                    <div id="slider-margin"></div>
                                    <p class="your-money">
                                        Your money you can spend per month :
                                        <span class="money" id="value-lower"></span>
                                        <span class="money" id="value-upper"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <h3>Memo Persetujuan Kredit </h3>
                    <fieldset>
                        <h2>Set Financial Goals</h2>
                        <p class="desc">Set up your money limit to reach the future plan</p>
                        <div class="fieldset-content">
                            <div class="donate-us">
                                <div class="price_slider ui-slider ui-slider-horizontal">
                                    <div id="slider-margin"></div>
                                    <p class="your-money">
                                        Your money you can spend per month :
                                        <span class="money" id="value-lower"></span>
                                        <span class="money" id="value-upper"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection