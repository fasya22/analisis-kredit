@extends('front.layout.main')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<script>document.getElementsByTagName("html")[0].className += " js";</script>

<style>
    ol, ul {
    padding-left: 0px;
}
</style>

<section id="content" style="">
    <div class="cd-tabs cd-tabs--vertical js-cd-tabs">
    <nav class="cd-tabs__navigation">
      <ul class="cd-tabs__list">
        <li>
          <a href="#tab-aplikasi" class="cd-tabs__item cd-tabs__item--selected">
            <svg aria-hidden="true" class="icon icon--xs"><path d="M12.7,0.3c-0.4-0.4-1-0.4-1.4,0l-7,7C4.1,7.5,4,7.7,4,8v3c0,0.6,0.4,1,1,1h3 c0.3,0,0.5-0.1,0.7-0.3l7-7c0.4-0.4,0.4-1,0-1.4L12.7,0.3z M7.6,10H6V8.4l6-6L13.6,4L7.6,10z"></path><path d="M15,10c-0.6,0-1,0.4-1,1v3H2V2h3c0.6,0,1-0.4,1-1S5.6,0,5,0H1C0.4,0,0,0.4,0,1v14c0,0.6,0.4,1,1,1h14 c0.6,0,1-0.4,1-1v-4C16,10.4,15.6,10,15,10z"></path></svg>
            <span>Aplikasi</span>
          </a>
        </li>

        <li>
          <a href="#tab-lpdu1" class="cd-tabs__item">
            <svg aria-hidden="true" class="icon icon--xs"><path d="M12.7,0.3c-0.4-0.4-1-0.4-1.4,0l-7,7C4.1,7.5,4,7.7,4,8v3c0,0.6,0.4,1,1,1h3 c0.3,0,0.5-0.1,0.7-0.3l7-7c0.4-0.4,0.4-1,0-1.4L12.7,0.3z M7.6,10H6V8.4l6-6L13.6,4L7.6,10z"></path><path d="M15,10c-0.6,0-1,0.4-1,1v3H2V2h3c0.6,0,1-0.4,1-1S5.6,0,5,0H1C0.4,0,0,0.4,0,1v14c0,0.6,0.4,1,1,1h14 c0.6,0,1-0.4,1-1v-4C16,10.4,15.6,10,15,10z"></path></svg>
            <span>LPDU 1</span>
          </a>
        </li>

        <li>
          <a href="#tab-lpdu2" class="cd-tabs__item">
            <svg aria-hidden="true" class="icon icon--xs"><path d="M12.7,0.3c-0.4-0.4-1-0.4-1.4,0l-7,7C4.1,7.5,4,7.7,4,8v3c0,0.6,0.4,1,1,1h3 c0.3,0,0.5-0.1,0.7-0.3l7-7c0.4-0.4,0.4-1,0-1.4L12.7,0.3z M7.6,10H6V8.4l6-6L13.6,4L7.6,10z"></path><path d="M15,10c-0.6,0-1,0.4-1,1v3H2V2h3c0.6,0,1-0.4,1-1S5.6,0,5,0H1C0.4,0,0,0.4,0,1v14c0,0.6,0.4,1,1,1h14 c0.6,0,1-0.4,1-1v-4C16,10.4,15.6,10,15,10z"></path></svg>
            <span>LPDU 2</span>
          </a>
        </li>

        <li>
          <a href="#tab-lpdu-um" class="cd-tabs__item">
            <svg aria-hidden="true" class="icon icon--xs"><path d="M12.7,0.3c-0.4-0.4-1-0.4-1.4,0l-7,7C4.1,7.5,4,7.7,4,8v3c0,0.6,0.4,1,1,1h3 c0.3,0,0.5-0.1,0.7-0.3l7-7c0.4-0.4,0.4-1,0-1.4L12.7,0.3z M7.6,10H6V8.4l6-6L13.6,4L7.6,10z"></path><path d="M15,10c-0.6,0-1,0.4-1,1v3H2V2h3c0.6,0,1-0.4,1-1S5.6,0,5,0H1C0.4,0,0,0.4,0,1v14c0,0.6,0.4,1,1,1h14 c0.6,0,1-0.4,1-1v-4C16,10.4,15.6,10,15,10z"></path></svg>
            <span>LPDU UM</span>
          </a>
        </li>

        <li>
          <a href="#tab-lpj-kios" class="cd-tabs__item">
            <svg aria-hidden="true" class="icon icon--xs"><path d="M12.7,0.3c-0.4-0.4-1-0.4-1.4,0l-7,7C4.1,7.5,4,7.7,4,8v3c0,0.6,0.4,1,1,1h3 c0.3,0,0.5-0.1,0.7-0.3l7-7c0.4-0.4,0.4-1,0-1.4L12.7,0.3z M7.6,10H6V8.4l6-6L13.6,4L7.6,10z"></path><path d="M15,10c-0.6,0-1,0.4-1,1v3H2V2h3c0.6,0,1-0.4,1-1S5.6,0,5,0H1C0.4,0,0,0.4,0,1v14c0,0.6,0.4,1,1,1h14 c0.6,0,1-0.4,1-1v-4C16,10.4,15.6,10,15,10z"></path></svg>
            <span>LPJ Kios</span>
          </a>
        </li>

        <li>
          <a href="#tab-lpj-tanahkosong" class="cd-tabs__item">
            <svg aria-hidden="true" class="icon icon--xs"><path d="M12.7,0.3c-0.4-0.4-1-0.4-1.4,0l-7,7C4.1,7.5,4,7.7,4,8v3c0,0.6,0.4,1,1,1h3 c0.3,0,0.5-0.1,0.7-0.3l7-7c0.4-0.4,0.4-1,0-1.4L12.7,0.3z M7.6,10H6V8.4l6-6L13.6,4L7.6,10z"></path><path d="M15,10c-0.6,0-1,0.4-1,1v3H2V2h3c0.6,0,1-0.4,1-1S5.6,0,5,0H1C0.4,0,0,0.4,0,1v14c0,0.6,0.4,1,1,1h14 c0.6,0,1-0.4,1-1v-4C16,10.4,15.6,10,15,10z"></path></svg>
            <span>LPJ Tanah Kosong</span>
          </a>
        </li>

        <li>
          <a href="#tab-lpj-tanahbangunan" class="cd-tabs__item">
            <svg aria-hidden="true" class="icon icon--xs"><path d="M12.7,0.3c-0.4-0.4-1-0.4-1.4,0l-7,7C4.1,7.5,4,7.7,4,8v3c0,0.6,0.4,1,1,1h3 c0.3,0,0.5-0.1,0.7-0.3l7-7c0.4-0.4,0.4-1,0-1.4L12.7,0.3z M7.6,10H6V8.4l6-6L13.6,4L7.6,10z"></path><path d="M15,10c-0.6,0-1,0.4-1,1v3H2V2h3c0.6,0,1-0.4,1-1S5.6,0,5,0H1C0.4,0,0,0.4,0,1v14c0,0.6,0.4,1,1,1h14 c0.6,0,1-0.4,1-1v-4C16,10.4,15.6,10,15,10z"></path></svg>
            <span>LPJ Tanah & Bangunan</span>
          </a>
        </li>

        <li>
          <a href="#tab-lpj-deposito" class="cd-tabs__item">
            <svg aria-hidden="true" class="icon icon--xs"><path d="M12.7,0.3c-0.4-0.4-1-0.4-1.4,0l-7,7C4.1,7.5,4,7.7,4,8v3c0,0.6,0.4,1,1,1h3 c0.3,0,0.5-0.1,0.7-0.3l7-7c0.4-0.4,0.4-1,0-1.4L12.7,0.3z M7.6,10H6V8.4l6-6L13.6,4L7.6,10z"></path><path d="M15,10c-0.6,0-1,0.4-1,1v3H2V2h3c0.6,0,1-0.4,1-1S5.6,0,5,0H1C0.4,0,0,0.4,0,1v14c0,0.6,0.4,1,1,1h14 c0.6,0,1-0.4,1-1v-4C16,10.4,15.6,10,15,10z"></path></svg>
            <span>LPJ Deposito</span>
          </a>
        </li>

        <li>
          <a href="#tab-lpj-kendaraan" class="cd-tabs__item">
            <svg aria-hidden="true" class="icon icon--xs"><path d="M12.7,0.3c-0.4-0.4-1-0.4-1.4,0l-7,7C4.1,7.5,4,7.7,4,8v3c0,0.6,0.4,1,1,1h3 c0.3,0,0.5-0.1,0.7-0.3l7-7c0.4-0.4,0.4-1,0-1.4L12.7,0.3z M7.6,10H6V8.4l6-6L13.6,4L7.6,10z"></path><path d="M15,10c-0.6,0-1,0.4-1,1v3H2V2h3c0.6,0,1-0.4,1-1S5.6,0,5,0H1C0.4,0,0,0.4,0,1v14c0,0.6,0.4,1,1,1h14 c0.6,0,1-0.4,1-1v-4C16,10.4,15.6,10,15,10z"></path></svg>
            <span>LPJ Kendaraan</span>
          </a>
        </li>

        <li>
          <a href="#tab-lpj-mpk" class="cd-tabs__item">
            <svg aria-hidden="true" class="icon icon--xs"><path d="M12.7,0.3c-0.4-0.4-1-0.4-1.4,0l-7,7C4.1,7.5,4,7.7,4,8v3c0,0.6,0.4,1,1,1h3 c0.3,0,0.5-0.1,0.7-0.3l7-7c0.4-0.4,0.4-1,0-1.4L12.7,0.3z M7.6,10H6V8.4l6-6L13.6,4L7.6,10z"></path><path d="M15,10c-0.6,0-1,0.4-1,1v3H2V2h3c0.6,0,1-0.4,1-1S5.6,0,5,0H1C0.4,0,0,0.4,0,1v14c0,0.6,0.4,1,1,1h14 c0.6,0,1-0.4,1-1v-4C16,10.4,15.6,10,15,10z"></path></svg>
            <span>MPK</span>
          </a>
        </li>
      </ul> <!-- cd-tabs__list -->
    </nav>

    <ul class="cd-tabs__panels">
      <li id="tab-aplikasi" class="cd-tabs__panel cd-tabs__panel--selected text-component">
        <h3 style="font-weight: bold">Formulir Aplikasi Pinjaman</h3>
        <div class="fieldset-content mb-5">
            <form>
                <div class="col mb-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
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
                    </div>
                </div>
                <div class="col mb-3 mt-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <h5>Data Pemohon</h5>
                            <hr class="mb-3 mt-3 border border-secondary border-1 opacity-25">
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
                                        <label for="produk" class="form-label" style="flex: 1;">Jenis Kelamin</label>
                                        <select class="form-select form-select-lg" aria-label="Large select example" style="font-size: 16px; flex: 2;">
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
                <div class="col mb-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <h5>Keterangan Tempat Tinggal</h5>
                            <hr class="mb-3 mt-3 border border-secondary border-1 opacity-25">
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
                <div class="col mb-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <h5>Informasi Pekerjaan dan Keuangan</h5>
                            <hr class="mb-3 mt-3 border border-secondary border-1 opacity-25">
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="tipependapatan" class="form-label">Tipe Pendapatan</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px">
                                        <option value="1">Wiraswasta</option>
                                        <option value="2">Pegawai/Karyawan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="rt" class="form-label">Nama Perusahaan</label>
                                    <input type="text" class="form-control" id="rt">
                                </div>
                                <div class="col-md-6 mb-2">
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
                                <div class="col mb-2">
                                    <label for="nama" class="form-label">Alamat</label>
                                    <textarea class="form-control" id="alamat" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-2">
                                    <label for="telepon" class="form-label">Telepon/Fax</label>
                                    <input type="text" class="form-control" id="telepon">
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label for="npwp" class="form-label">No. NPWP <i>(Jika ada)</i></label>
                                    <input type="text" class="form-control" id="npwp">
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label for="lamausaha" class="form-label">Lama Usaha di Usaha ini</label>
                                    <input type="text" class="form-control" id="lamausaha">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="omset" class="form-label">Omset Rata-rata per Bulan</label>
                                    <input type="text" class="form-control" id="omset">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="keuntungan" class="form-label">Keuntungan Rata-rata per Bulan</label>
                                    <input type="text" class="form-control" id="keuntungan">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <h5>Informasi Lainnya</h5>
                            <hr class="mb-3 mt-3 border border-secondary border-1 opacity-25">
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Saya ingin menggunakan fasilitas Cash Pick-up</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px">
                                        <option value="1">Ya</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-2">
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
                                <div class="col mb-2">
                                    <label for="" class="form-label">Apakah Anda Memiliki Rekening Tabungan ?</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px">
                                        <option value="1">Ya</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Sejak Tahun</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Saldo Rata-rata</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <h5>Informasi Peruntukan</h5>
                            <hr class="mb-3 mt-3 border border-secondary border-1 opacity-25">
                            <div class="row">
                                <div class="col mb-2">
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
            <a href="/cetakaplikasi"><button type="button" class="btn btn-primary">Cetak</button></a>
        </div>
      </li>

      <li id="tab-lpdu1" class="cd-tabs__panel text-component">
        <h3 style="font-weight: bold">Laporan Penilaian Debitur & Usaha - CO (1/2)</h3>
        <div class="fieldset-content mb-5">
            <form>
                <div class="col mb-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <div class="row"> 
                                <div class="col mb-2">
                                    <div class="mb-2" style="display: flex; align-items: center;">
                                        <label for="" class="form-label" style="flex: 1;">Tanggal Penilaian</i></label>
                                        <input type="text" class="form-control" id="" style="flex: 2;">
                                    </div>
                                    <div class="mb-2" style="display: flex; align-items: center;">
                                        <label for="" class="form-label" style="flex: 1;">No. Aplikasi</i></label>
                                        <input type="text" class="form-control" id="" style="flex: 2;">
                                    </div>
                                    <div class="mb-2" style="display: flex; align-items: center;">
                                        <label for="" class="form-label" style="flex: 1;">Status Permmohonan</i></label>
                                        <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px; flex: 2;">
                                            <option value="1">Baru</option>
                                            <option value="2">Ulang</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col mb-2">
                                    <div class="mb-2" style="display: flex; align-items: center;">
                                        <label for="" class="form-label" style="flex: 1;">KP/KC/KK</i></label>
                                        <input type="text" class="form-control" id="" style="flex: 2;">
                                    </div>
                                    <div class="mb-2" style="display: flex; align-items: center;">
                                        <label for="" class="form-label" style="flex: 1;">Nama Calon Debitur</i></label>
                                        <input type="text" class="form-control" id="" style="flex: 2;">
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-5 mt-3 border border-secondary border-1 opacity-25">
                            <div class="row"> 
                                <div class="col mb-2">
                                    <div class="mb-2" style="display: flex; align-items: center;">
                                        <label for="" class="form-label" style="flex: 1;">Nama orang yang ditemui</i></label>
                                        <input type="text" class="form-control" id="" style="flex: 2;">
                                    </div>
                                </div>
                                <div class="col mb-2">
                                    <div class="mb-2" style="display: flex; align-items: center;">
                                        <label for="" class="form-label" style="flex: 1;">Hubungan</i></label>
                                        <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px; flex: 2;">
                                            <option value="1">Pemohon Sendiri</option>
                                            <option value="2">Pejabat Setempat</option>
                                            <option value="3">Istri/Suami YBS</option>
                                            <option value="4">Tetangga</option>
                                            <option value="5">Karyawan YBS</option>
                                            <option value="6">Rekan Usaha</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <h5>Informasi Tempat Usaha</h5>
                            <hr class="mb-3 mt-3 border border-secondary border-1 opacity-25">
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Nama Perusahaan</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Bidang Usaha</label>
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
                                <div class="col mb-2">
                                    <label for="" class="form-label">Alamat Usaha</label>
                                    <textarea class="form-control" id="" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Telepon/Fax</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">Lama Usaha di Usaha ini</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Status Tempat Usaha</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px">
                                        <option value="1">Milik Sendiri-Beli</option>
                                        <option value="2">Milik Sendiri-Warisan</option>
                                        <option value="3">Milik Keluarga</option>
                                        <option value="4">Kredit</option>                                                <option value="5">Sewa</option>
                                        <option value="6">Lainnya</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Jenis Tempat Usaha</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px">
                                        <option value="1">Kios/Los</option>
                                        <option value="2">Toko/Ruko</option>
                                        <option value="3">Warung/Tenda</option>
                                        <option value="4">Gerobak/Berpindah</option>
                                        <option value="5">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Aspek Pemasaran</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px">
                                        <option value="1">Eceran</option>
                                        <option value="2">Grosir</option>
                                        <option value="3">Jasa</option>
                                        <option value="4">Agen</option>
                                        <option value="5">MLM</option>                                                <option value="6">Sewa</option>
                                        <option value="7">Lainnya</option>
                                    </select>
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">Lokasi Usaha yang akan dibiayai</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px">
                                        <option value="1">< 2 km dalam pasar</option>
                                        <option value="2">2-5 km dalam pasar</option>
                                        <option value="3">> 5 km dalam pasar</option>
                                        <option value="4">< 2 km luar pasar</option>
                                        <option value="5">2-5 km luar pasar</option>
                                        <option value="6">> 5 km luar pasar</option>
                                    </select>
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">Jenis Usaha</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px">
                                        <option value="1">Sayur-mayur/ Buah-buahan</option>
                                        <option value="2">Sembako/ Kelontong</option>
                                        <option value="3">Pakaian/ Alas Kaki</option>
                                        <option value="4">Rongsokan/ Barang Bekas</option>
                                        <option value="5">Rumah Makan, Katering, dsb</option>
                                        <option value="6">Elektronik</option>
                                        <option value="7">Daging/ Unggas/ Ikan</option>
                                        <option value="8">Peralatan Rumah Tangga</option>
                                        <option value="9">Industri Rumahan</option>
                                        <option value="10">Bahan Bangunan/ Material</option>
                                        <option value="11">Transportasi</option>
                                        <option value="12">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <h5>Analisa Keuangan (per bulan)</h5>
                            <hr class="mb-3 mt-3 border border-secondary border-1 opacity-25">
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <div class="col">
                                        <label for="" class="form-label">Pendapatan Usaha/ Sales</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">Harga Pokok Penjualan</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">Sewa/ Kontrak</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">Gaji Pegawai</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">Telpon, Listrik, & Air</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">Transportasi</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">Pengeluaran Lainnya</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">Pengeluaran Usaha</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">Keuntungan Usaha</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">Penghasilan Istri/ Suami</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">Penghasilan Lainnya</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">Total Penghasilan</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="col">
                                        <label for="" class="form-label">Belanja Rumah Tangga</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">Sewa/ Kontrak Rumah</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">Pendidikan</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">Telpon, Listrik, & Air</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">Transportasi</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">Pengeluaran Lainnya</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">Total Pengeluaran</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">Sisa Penghasilan</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">Angsuran Pinjaman saat ini</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">Rekomendasi Angsuran Pinjaman</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">Disposable Income</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">IDIR</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <h5>Hubungan Dengan Bank/ Institusi Keuangan Lainnya</h5>
                            <hr class="mb-3 mt-3 border border-secondary border-1 opacity-25">
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <div class="col mb-2">
                                        <label for="" class="form-label">Nama Kreditur</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col mb-2">
                                        <label for="" class="form-label">Jumlah Plafon Pinjaman</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col mb-2">
                                        <label for="" class="form-label">Angsuran per Bulan</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="col mb-2">
                                        <label for="" class="form-label">Outstanding Terakhir</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col mb-2">
                                        <label for="" class="form-label">Kolektibilitas</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="col mb-2">
                                        <label for="" class="form-label">Bentuk Pinjaman</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Rekomendasi Produk</label>
                                    <div class="d-flex align-items-center">
                                        <select class="form-select form-select-lg" aria-label="Large select example" style="font-size: 16px; margin-right: 10px;">
                                            <option value="1">Kredit Angsuran</option>
                                            <option value="2">Kredit Musiman</option>
                                            <option value="2">Dana Siaga/ KTA</option>
                                            <option value="2">Dana Talangan</option>
                                            <option value="2">DP 50 K</option>
                                            <option value="2">DP 200 K</option>
                                            <option value="2">DP 500</option>
                                            <option value="2">DP 500 C</option>
                                        </select>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">Rekomendasi Plafon Pinjaman</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Jangka Waktu Pinjaman</label>
                                    <div class="d-flex align-items-center">
                                        <input type="text" class="form-control" id="" style="margin-right: 5px">
                                        <span>bulan</span>
                                    </div>
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">Bunga per Bulan</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Persediaan/ Inventory</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">DOH</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">Piutang Dagang</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">DOH</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-2">
                                    <label for="" class="form-label">Utang Dagang</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="" class="form-label">DOH</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Working Investment</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Dengan menandatangani formulir ini, Saya menyatakan bahwa Saya telah melakukan verifikasi dan konfirmasi terhadap kelayakan data Pemohon. Saya merekomendasikan agar aplikasi ini :</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px">
                                        <option value="1">Disetujui</option>
                                        <option value="2">Tidak Disetujui</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <a href="/cetaklpdu1"><button type="button" class="btn btn-primary">Cetak</button></a>
        </div>
      </li>

      <li id="tab-lpdu2" class="cd-tabs__panel text-component">
        <h3 style="font-weight: bold">Laporan Penilaian Debitur & Usaha - CO (2/2)</h3>
        <div class="fieldset-content mb-5">
            <form>
                <div class="col mb-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <div class="row"> 
                                <div class="col mb-2">
                                    <div class="mb-2" style="display: flex; align-items: center;">
                                        <label for="" class="form-label" style="flex: 1;">Tanggal Penilaian</i></label>
                                        <input type="text" class="form-control" id="" style="flex: 2;">
                                    </div>
                                    <div class="mb-2" style="display: flex; align-items: center;">
                                        <label for="" class="form-label" style="flex: 1;">No. Aplikasi</i></label>
                                        <input type="text" class="form-control" id="" style="flex: 2;">
                                    </div>
                                </div>
                                <div class="col mb-2">
                                    <div class="mb-2" style="display: flex; align-items: center;">
                                        <label for="" class="form-label" style="flex: 1;">KP/KC/KK</i></label>
                                        <input type="text" class="form-control" id="" style="flex: 2;">
                                    </div>
                                    <div class="mb-2" style="display: flex; align-items: center;">
                                        <label for="" class="form-label" style="flex: 1;">Nama Calon Debitur</i></label>
                                        <input type="text" class="form-control" id="" style="flex: 2;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <h5>Latar Belakang Pengajuan Pinjaman (Penjelasan singkat mengenai tujuan pinjaman, latar belakang dan perkembangan usaha debitur)</h5>
                            <hr class="mb-3 mt-3 border border-secondary border-1 opacity-25">
                            <div class="row">
                                <div class="col mb-2">
                                    <ol style="font-size: 16px;">
                                        <li class="mb-3">Latar Belakang Usaha
                                            <textarea class="form-control" id="" rows="5"></textarea></li>
                                        <li>Kondisi Usaha Saat Ini
                                            <textarea class="form-control" id="" rows="5"></textarea>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <h5>Resiko Usaha dan Mitigasi (Penjelasan singkat mengenai pesaing, resiko usaha (suply, demand dan lainnya) dan upaya mengatasinya)</h5>
                            <hr class="mb-3 mt-3 border border-secondary border-1 opacity-25">
                            <div class="row">
                                <div class="col mb-2">
                                    <ol style="font-size: 16px;">
                                        <li class="mb-3">Pesaing
                                            <textarea class="form-control" id="" rows="5"></textarea></li>
                                        <li class="mb-3">Resiko Usaha
                                            <textarea class="form-control" id="" rows="5"></textarea>
                                        </li>
                                        <li>Upaya Untuk Mengatasi Resiko Usaha
                                            <textarea class="form-control" id="" rows="5"></textarea>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mb-2">
                                    <h6>Dengan menandatangani formulir ini, Saya menyatakan bahwa Saya telah melakukan verifikasi dan konfirmasi terhadap kelayakan data Pemohon.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <a href="/cetaklpdu2"><button type="button" class="btn btn-primary">Cetak</button></a>
        </div>
      </li>

      <li id="tab-lpdu-um" class="cd-tabs__panel text-component">
        <h3 style="font-weight: bold">Laporan Penilaian Debitur & Usaha - MM</h3>
        <div class="fieldset-content mb-5">
            <form>
                <div class="col mb-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <div class="row"> 
                                <div class="col mb-2">
                                    <div class="mb-2" style="display: flex; align-items: center;">
                                        <label for="" class="form-label" style="flex: 1;">Tanggal Penilaian</i></label>
                                        <input type="text" class="form-control" id="" style="flex: 2;">
                                    </div>
                                    <div class="mb-2" style="display: flex; align-items: center;">
                                        <label for="" class="form-label" style="flex: 1;">No. Aplikasi</i></label>
                                        <input type="text" class="form-control" id="" style="flex: 2;">
                                    </div>
                                </div>
                                <div class="col mb-2">
                                    <div class="mb-2" style="display: flex; align-items: center;">
                                        <label for="" class="form-label" style="flex: 1;">KP/KC/KK</i></label>
                                        <input type="text" class="form-control" id="" style="flex: 2;">
                                    </div>
                                    <div class="mb-2" style="display: flex; align-items: center;">
                                        <label for="" class="form-label" style="flex: 1;">Nama Debitur</i></label>
                                        <input type="text" class="form-control" id="" style="flex: 2;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <h5>Konfirmasi dengan Pihak Ketiga</h5>
                            <hr class="mb-3 mt-3 border border-secondary border-1 opacity-25">
                            <div class="row">
                                <div class="mb-2" style="display: flex; align-items: center;">
                                    <label for="" class="form-label" style="flex: 1;">Nama Orang yang Ditemui</label>
                                    <input type="text" class="form-control" id="" style="flex: 2;">
                                </div>
                                <div class="mb-2" style="display: flex; align-items: center;">
                                    <label for="" class="form-label" style="flex: 1;">Hubungan</label>
                                    <input type="text" class="form-control" id="" style="flex: 2;">
                                </div>
                                <div class="mb-2" style="display: flex; align-items: center;">
                                    <label for="" class="form-label" style="flex: 1;">Lama Berhubungan</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px; flex: 2;">
                                        <option value="1">< 1 tahun</option>
                                        <option value="2">1-3 tahun</option>
                                        <option value="3">> 3 tahun</option>
                                    </select>
                                </div>
                                <div class="mb-2" style="display: flex; align-items: center;">
                                    <label for="" class="form-label" style="flex: 1;">Apakah Karakter Pemohon Baik?</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px; flex: 2;">
                                        <option value="1">Ya</option>
                                        <option value="2">Tidak</option>
                                        <option value="3">Tidak Tahu</option>
                                    </select>
                                </div>
                                <div class="mb-2" style="display: flex; align-items: center;">
                                    <label for="" class="form-label" style="flex: 1;">Apakah Usaha Dikelola dengan Baik?</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px; flex: 2;">
                                        <option value="1">Ya</option>
                                        <option value="2">Tidak</option>
                                        <option value="3">Tidak Tahu</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-2" style="display: flex; align-items: center;">
                                    <label for="" class="form-label" style="flex: 1;">Tujuan Pengajuan Pinjaman</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px; flex: 2;">
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
                                <div class="mb-2" style="display: flex; align-items: center;">
                                    <label for="" class="form-label" style="flex: 1;">Take-over?</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px; flex: 2;">
                                        <option value="1">Ya</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="mb-2" style="display: flex; align-items: center;">
                                    <label for="" class="form-label" style="flex: 1;">Dari Bank</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px; flex: 2;">
                                        <option value="1">BRI</option>
                                        <option value="2">BNI</option>
                                        <option value="3">MAndiri</option>
                                        <option value="4">BPR</option>
                                        <option value="5">NISP</option>
                                        <option value="6">Lainnya</option>
                                    </select>
                                </div>
                                <div class="mb-2" style="display: flex; align-items: center;">
                                    <label for="" class="form-label" style="flex: 1;">Jumlah</label>
                                    <input type="text" class="form-control" id="" style="flex: 2;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">  Penjelasan Singkat Tentang Karakter Calon Debitur dan Tujuan Pengajuan Pinjaman</label>
                                    <textarea class="form-control" id="alamat" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mb-2">
                                    <h6>Dengan menandatangani formulir ini, Saya menyatakan bahwa Saya telah melakukan verifikasi dan konfirmasi terhadap kelayakan data Pemohon.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <a href="/cetaklpduum"><button type="button" class="btn btn-primary">Cetak</button></a>
        </div>
      </li>

      <li id="tab-lpj-kios" class="cd-tabs__panel text-component">
        <h3 style="font-weight: bold">Laporan Pemeriksaan Jaminan</h3>
        <div class="fieldset-content mb-5">
            <form>
                <div class="col mb-3 mt-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Nama Debitur</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">No. Aplikasi</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Tanggal Pemeriksaan</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Jenis Jaminan</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                        <option value="1">Kios</option>
                                        <option value="2">Dasaran</option>
                                        <option value="3">Los</option>
                                        <option value="4">Lapak</option>
                                        <option value="5">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3 mt-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <h5>Bukti Kepemilikan</h5>
                            <hr class="mb-3 mt-3 border border-secondary border-1 opacity-25">
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Bukti Hak Kios / No Dokumen</label>
                                    <div class="d-flex">
                                        <input type="text" class="form-control" id="">
                                        <span style="margin: 5px 10px">/</span>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Nama Pemegang Hak</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">Hubungan Pemegang Hak dengan Debitur</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                        <option value="1">Sendiri</option>
                                        <option value="2">Suami/ Istri</option>
                                        <option value="3">Orangtua</option>
                                        <option value="4">Anak</option>
                                        <option value="5">Pemilik Sebelumnya</option>
                                        <option value="6">Lainnya</option>
                                    </select>
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">Masa Berlaku Ijin Kios</label>
                                    <div class="d-flex">
                                        <input type="text" class="form-control" id="">
                                        <span style="margin: 5px 10px">s/d</span>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">Luas Kios Berdasarkan Bukti Kepemilikan</label>
                                    <div class="d-flex">
                                        <input type="text" class="form-control" id="">
                                        <span style="margin: 5px 10px">m2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3 mt-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <h5>Lokasi Jaminan</h5>
                            <hr class="mb-3 mt-3 border border-secondary border-1 opacity-25">
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Nama Pasar</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Lokasi Kios</label>
                                    <div class="d-flex align-items-center">
                                        <span style="margin-right: 10px; font-size: 14px">Los/Blok</span>
                                        <input type="text" class="form-control" id="">
                                        <span style="margin: 0px 10px; font-size: 14px">No.</span>
                                        <input type="text" class="form-control" id="">
                                    </div>                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Wilayah & Kota</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Lokasi Jaminan</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                        <option value="1">Di Depan</option>
                                        <option value="2">Di Samping</option>
                                        <option value="3">Di Belakang</option>
                                        <option value="4">Di Dalam</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Tahun Pasar Dibangun/ Renovasi Terakhir</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">Retribusi per Bulan (Rp.)</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Listrik</label>
                                    <div class="d-flex align-items-center">
                                        <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px; margin-right: 10px;">
                                            <option value="1">Ada</option>
                                            <option value="2">Tidak Ada</option>
                                        </select>
                                        <input type="text" class="form-control" id="" style="margin-right: 10px;">
                                        <span style="margin-left: 5px; font-size: 14px">KWH</span>
                                    </div>                                    
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">Telepon</label>
                                    <div class="d-flex align-items-center">
                                        <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px; margin-right: 10px;">
                                            <option value="1">Ada</option>
                                            <option value="2">Tidak Ada</option>
                                        </select>
                                        <input type="text" class="form-control" id="" style="margin-right: 10px;">
                                    </div>                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Nilai Market (Rp.)</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">Nilai Likuidasi (Rp.)</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Informasi Harga Didapat Dari</label>
                                    <ol style="">
                                        <li class="mb-2" style="font-size: 14px;">
                                            <div class="d-flex align-items-center">
                                                <input type="text" class="form-control" id="" style="margin-right: 10px;">
                                                <input type="text" class="form-control" id="" style="">
                                            </div>  
                                        </li>
                                        <li style="font-size: 14px">
                                            <div class="d-flex align-items-center">
                                                <input type="text" class="form-control" id="" style="margin-right: 10px;">
                                                <input type="text" class="form-control" id="" style="">
                                            </div> 
                                        </li>
                                    </ol>                          
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-2">
                                    <label for="" class="form-label">Pendapat Pemeriksa Mengenai Kondisi Jaminan</label>
                                    <textarea class="form-control" id="alamat" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mb-2">
                                    <h6>Dengan ini pemeriksa menyatakan telah melakukan peninjauan langsung ke lokasi Jaminan dan melakukan penilaian secara objektif sesuai kondisi yang sebenarnya dan sesuai informasi yang diperoleh dari sumber-sumber yang dapat dipertanggungjawabkan.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <a href="/cetaklpjkios"><button type="button" class="btn btn-primary">Cetak</button></a>
        </div>
      </li>
      <li id="tab-lpj-tanahkosong" class="cd-tabs__panel text-component">
        <h3 style="font-weight: bold">Laporan Pemeriksaan Jaminan</h3>
        <div class="fieldset-content mb-5">
            <form>
                <div class="col mb-3 mt-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Nama Debitur</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">No. Aplikasi</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Tanggal Pemeriksaan</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3 mt-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Alamat Jaminan</label>
                                    <textarea class="form-control" id="alamat" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Kelurahan & Kecamatan</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">Wilayah & Kota</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Nama Pemegang Hak</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">Hubungan Pemegang Hak dengan Direktur</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                        <option value="1">Sendiri</option>
                                        <option value="2">Suami/ Istri</option>
                                        <option value="3">Orangtua</option>
                                        <option value="4">Anak</option>
                                        <option value="5">Pemilik Sebelumnya</option>
                                        <option value="6">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Nama Penggarap</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">Status Penggarap</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                        <option value="1">Sewa</option>
                                        <option value="2">YBS</option>
                                        <option value="3">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Hubungan Penggarap dengan Pemegang Hak</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                        <option value="1">Sendiri</option>
                                        <option value="2">Suami/ Istri</option>
                                        <option value="3">Orangtua</option>
                                        <option value="4">Anak</option>
                                        <option value="5">Pemilik Sebelumnya</option>
                                        <option value="6">Lainnya</option>
                                    </select>
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">Status Tanah</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                        <option value="1">Hak Milik</option>
                                        <option value="2">Hak Sewa</option>
                                        <option value="3">Tanah Garapan</option>
                                        <option value="4">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">No. Bukti Hak</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">No. GS</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">Tanggal Jatuh Tempo Sertifikat</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3 mt-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <h5>Hasil Penilaian</h5>
                            <hr class="mb-3 mt-3 border border-secondary border-1 opacity-25">
                            <div class="row">
                                <div class="col mb-2">
                                    <div class="table-responsive">
                                        <table class="" style="font-size: 16px; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>m2</th>
                                                    <th>Harga/m2</th>
                                                    <th>Nilai Market</th>
                                                    <th>Nilai Likuidasi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>Luas Tanah</th>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Informasi Harga di dapat dari (Nama dan Pekerjaan - Alamat atau No. Telpon, jika ada)</label>
                                    <ol style="">
                                        <li class="mb-2" style="font-size: 14px;">
                                            <div class="d-flex align-items-center">
                                                <input type="text" class="form-control" id="" style="margin-right: 10px;">
                                                <input type="text" class="form-control" id="" style="">
                                            </div>  
                                        </li>
                                        <li style="font-size: 14px">
                                            <div class="d-flex align-items-center">
                                                <input type="text" class="form-control" id="" style="margin-right: 10px;">
                                                <input type="text" class="form-control" id="" style="">
                                            </div> 
                                        </li>
                                    </ol>                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Check BPN?</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                        <option value="1">Ya</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Dengan Siapa?</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">No. Telepon</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Hasil</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                        <option value="1">Ok</option>
                                        <option value="2">Tidak Ok</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3 mt-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <h5>Pendapat Pemeriksa</h5>
                            <hr class="mb-3 mt-3 border border-secondary border-1 opacity-25">
                            <div class="row">
                                <div class="col mb-2">
                                    <ol style="">
                                        <li class="mb-2" style="font-size: 16px;">
                                            <div class="col mb-2">
                                                <label style="font-size: 16px;" for="" class="form-label">Tentang Harga</label>
                                                <textarea class="form-control" id="" rows="5"></textarea>
                                            </div>  
                                        </li>
                                        <li style="font-size: 14px">
                                            <div class="col mb-2">
                                                <label style="font-size: 16px;" for="" class="form-label">Kondisi Lingkungan Sekitar</label>
                                                <textarea class="form-control" id="" rows="5"></textarea>
                                            </div>
                                        </li>
                                        <li style="font-size: 14px">
                                            <div class="col mb-2">
                                                <label style="font-size: 16px;" for="" class="form-label">Peruntukan Tanah</label>
                                                <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                                    <option value="1">Perumahan</option>
                                                    <option value="2">Daerah Industri</option>
                                                    <option value="3">Pertokoan</option>
                                                    <option value="4">Sawah/ Ladang</option>
                                                    <option value="5">Tambak</option>
                                                    <option value="6">Lainnya</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li style="font-size: 14px">
                                            <div class="col mb-2">
                                                <label style="font-size: 16px;" for="" class="form-label">Lebar Jalan di Depan</label>
                                                <div class="d-flex">
                                                    <input type="text" class="form-control" id="">
                                                    <span style="margin: 10px">meter</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li style="font-size: 14px">
                                            <div class="col mb-2">
                                                <label style="font-size: 16px;" for="" class="form-label">Pendapat Pemeriksa Mengenai Kondisi Jaminan</label>
                                                <textarea class="form-control" id="" rows="5"></textarea>
                                            </div>
                                        </li>
                                    </ol>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mb-2">
                                    <h6>Dengan ini pemeriksa menyatakan telah melakukan peninjauan langsung ke lokasi Jaminan dan melakukan penilaian secara objektif sesuai kondisi yang sebenarnya dan sesuai informasi yang diperoleh dari sumber-sumber yang dapat dipertanggungjawabkan.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <a href="/cetaklpjtanahkosong"><button type="button" class="btn btn-primary">Cetak</button></a>
        </div>
      </li>

      <li id="tab-lpj-tanahbangunan" class="cd-tabs__panel text-component">
        <h3 style="font-weight: bold">Laporan Pemeriksaan Jaminan</h3>
        <div class="fieldset-content mb-5">
            <form>
                <div class="col mb-3 mt-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Nama Debitur</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">No. Aplikasi</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Tanggal Pemeriksaan</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3 mt-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Bentuk Bangunan</label>
                                    <div class="d-flex align-items-center">
                                        <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px; margin-right: 10px;">
                                            <option value="1">Rumah Tinggal</option>
                                            <option value="2">Ruko</option>
                                            <option value="3">Toko</option>
                                            <option value="4">Kantor</option>
                                            <option value="5">Pabrik</option>
                                            <option value="6">Gudang</option>
                                            <option value="7">Lainnya</option>
                                        </select>
                                    </div>                                    
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">Bertingkat</label>
                                    <div class="d-flex align-items-center">
                                        <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px; margin-right: 10px;">
                                            <option value="1">Ya</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                        <input type="text" class="form-control" id="" style="margin-right: 10px;">
                                    </div>                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Perawatan</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                        <option value="1">Baik</option>
                                        <option value="2">Kurang</option>
                                        <option value="3">Tidak Baik</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Konstruksi Bangunan</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                        <option value="1">Batu/ Beton/ Baja</option>
                                        <option value="2">Kayu/ Lainnya</option>
                                    </select>
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">Lantai</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                        <option value="1">Keramik</option>
                                        <option value="2">Semen</option>
                                        <option value="3">Kayu/ Lainnya</option>
                                    </select>
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">Atap</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                        <option value="1">Genteng</option>
                                        <option value="2">Asbes</option>
                                        <option value="3">Seng/ Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Kamar Mandi</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                        <option value="1">Ada</option>
                                        <option value="2">Tidak Ada</option>
                                    </select>
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">WC</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                        <option value="1">Ada</option>
                                        <option value="2">Tidak Ada</option>
                                    </select>
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">PAM/ Sumur Bor</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                        <option value="1">Ada</option>
                                        <option value="2">Tidak Ada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Listrik</label>
                                    <div class="d-flex align-items-center">
                                        <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px; margin-right: 10px;">
                                            <option value="1">Ada</option>
                                            <option value="2">Tidak Ada</option>
                                        </select>
                                        <input type="text" class="form-control" id="" style="margin-right: 10px;">
                                        <span style="margin-left: 5px; font-size: 14px">KWH</span>
                                    </div>                                    
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">Telepon</label>
                                    <div class="d-flex align-items-center">
                                        <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px; margin-right: 10px;">
                                            <option value="1">Ada</option>
                                            <option value="2">Tidak Ada</option>
                                        </select>
                                        <input type="text" class="form-control" id="" style="">
                                    </div>                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Alamat Jaminan</label>
                                    <textarea class="form-control" id="" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Kelurahan & Kecamatan</label>
                                    <input type="text" class="form-control" id="" style="">
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">Wilayah & Kota</label>
                                    <input type="text" class="form-control" id="" style="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Nama Pemegang Hak</label>
                                    <input type="text" class="form-control" id="" style="">
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">Hubungan Pemegang Hak dengan Debitur</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                        <option value="1">Sendiri</option>
                                        <option value="2">Suami/ Istri</option>
                                        <option value="3">Orangtua</option>
                                        <option value="4">Anak</option>
                                        <option value="5">Pemilik Sebelumnya</option>
                                        <option value="6">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Nama Penghuni</label>
                                    <input type="text" class="form-control" id="" style="">
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">Status Penghuni</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                        <option value="1">Sewa</option>
                                        <option value="2">YBS</option>
                                        <option value="3">Lainnya</option>
                                    </select>
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">Hubungan Penghuni dengan Debitur</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                        <option value="1">Sendiri</option>
                                        <option value="2">Suami/ Istri</option>
                                        <option value="3">Orangtua</option>
                                        <option value="4">Anak</option>
                                        <option value="5">Pemilik Sebelumnya</option>
                                        <option value="6">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Status Tanah</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                        <option value="1">Hak Milik</option>
                                        <option value="2">Hak Sewa</option>
                                        <option value="3">Tanah Garapan</option>
                                        <option value="3">Lainnya</option>
                                    </select>
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">No. Bukti Hak</label>
                                    <input type="text" class="form-control" id="" style="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">No. GS</label>
                                    <input type="text" class="form-control" id="" style="">
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">Tanggal Jatuh Tempo Sertifikat</label>
                                    <input type="text" class="form-control" id="" style="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3 mt-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <h5>Hasil Penilaian</h5>
                            <hr class="mb-3 mt-3 border border-secondary border-1 opacity-25">
                            <div class="row">
                                <div class="col-md-9 mb-2">
                                    <div class="table-responsive">
                                        <table class="" style="font-size: 16px; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>m2</th>
                                                    <th>Harga/m2</th>
                                                    <th>Nilai Market</th>
                                                    <th>Nilai Likuidasi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>Luas Tanah</th>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                </tr>
                                                <tr>
                                                    <th>Luas Bangunan</th>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                </tr>
                                                <tr>
                                                    <th>Total</th>
                                                    <td></td>
                                                    <td></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="" class="form-label">IMB</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                        <option value="1">Ada</option>
                                        <option value="2">Tidak Ada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Informasi Harga di dapat dari (Nama dan Pekerjaan - Alamat atau No. Telpon, jika ada)</label>
                                    <ol style="">
                                        <li class="mb-2" style="font-size: 14px;">
                                            <div class="d-flex align-items-center">
                                                <input type="text" class="form-control" id="" style="margin-right: 10px;">
                                                <input type="text" class="form-control" id="" style="">
                                            </div>  
                                        </li>
                                        <li style="font-size: 14px">
                                            <div class="d-flex align-items-center">
                                                <input type="text" class="form-control" id="" style="margin-right: 10px;">
                                                <input type="text" class="form-control" id="" style="">
                                            </div> 
                                        </li>
                                    </ol>                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Check BPN?</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                        <option value="1">Ya</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Dengan Siapa?</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">No. Telepon</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Hasil</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                        <option value="1">Ok</option>
                                        <option value="2">Tidak Ok</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3 mt-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <h5>Pendapat Pemeriksa</h5>
                            <hr class="mb-3 mt-3 border border-secondary border-1 opacity-25">
                            <div class="row">
                                <div class="col mb-2">
                                    <ol style="">
                                        <li class="mb-2" style="font-size: 16px;">
                                            <div class="col mb-2">
                                                <label style="font-size: 16px;" for="" class="form-label">Tentang Harga</label>
                                                <textarea class="form-control" id="" rows="5"></textarea>
                                            </div>  
                                        </li>
                                        <li style="font-size: 14px">
                                            <div class="col mb-2">
                                                <label style="font-size: 16px;" for="" class="form-label">Kondisi Lingkungan Sekitar</label>
                                                <textarea class="form-control" id="" rows="5"></textarea>
                                            </div>
                                        </li>
                                        <li style="font-size: 14px">
                                            <div class="col mb-2">
                                                <label style="font-size: 16px;" for="" class="form-label">Peruntukan Tanah</label>
                                                <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                                    <option value="1">Perumahan</option>
                                                    <option value="2">Daerah Industri</option>
                                                    <option value="3">Pertokoan</option>
                                                    <option value="4">Sawah/ Ladang</option>
                                                    <option value="5">Tambak</option>
                                                    <option value="6">Lainnya</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li style="font-size: 14px">
                                            <div class="col mb-2">
                                                <label style="font-size: 16px;" for="" class="form-label">Lebar Jalan di Depan</label>
                                                <div class="d-flex">
                                                    <input type="text" class="form-control" id="">
                                                    <span style="margin: 10px">meter</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li style="font-size: 14px">
                                            <div class="col mb-2">
                                                <label style="font-size: 16px;" for="" class="form-label">Pendapat Pemeriksa Mengenai Kondisi Jaminan</label>
                                                <textarea class="form-control" id="" rows="5"></textarea>
                                            </div>
                                        </li>
                                    </ol>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mb-2">
                                    <h6>Dengan ini pemeriksa menyatakan telah melakukan peninjauan langsung ke lokasi Jaminan dan melakukan penilaian secara objektif sesuai kondisi yang sebenarnya dan sesuai informasi yang diperoleh dari sumber-sumber yang dapat dipertanggungjawabkan.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <a href="/cetaklpjtanahbangunan"><button type="button" class="btn btn-primary">Cetak</button></a>
        </div>
      </li>

      <li id="tab-lpj-deposito" class="cd-tabs__panel text-component">
        <h3 style="font-weight: bold">Laporan Pemeriksaan Jaminan</h3>
        <div class="fieldset-content mb-5">
            <form>
                <div class="col mb-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <div class="row"> 
                                <div class="col-md-6 mb-2" style="display: flex; align-items: center;">
                                    <label for="" class="form-label" style="flex: 1;">Nama Debitur</i></label>
                                    <input type="text" class="form-control" id="" style="flex: 2;">
                                </div>
                                <div class="col-md-6 mb-2" style="display: flex; align-items: center;">
                                    <label for="" class="form-label" style="flex: 1;">No. Aplikasi</i></label>
                                    <input type="text" class="form-control" id="" style="flex: 2;">
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-md-6 mb-2" style="display: flex; align-items: center;">
                                    <label for="" class="form-label" style="flex: 1;">Tanggal Pemeriksaan</i></label>
                                    <input type="text" class="form-control" id="" style="flex: 2;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3 mt-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <h5>Spesifikasi Jaminan</h5>
                            <hr class="mb-3 mt-3 border border-secondary border-1 opacity-25">
                            <div class="row">
                                <div class="mb-2">
                                    <label for="" class="form-label">Nama Pemilik</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Alamat Pemilik</label>
                                    <textarea class="form-control" id="alamat" rows="3"></textarea>
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Hubungan dengan Debitur</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                        <option value="1">Sendiri</option>
                                        <option value="2">Suami/ Istri</option>
                                        <option value="3">Orangtua</option>
                                        <option value="4">Anak</option>
                                        <option value="5">Pemilik Sebelumnya</option>
                                        <option value="6">Lainnya</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Nomor Bilyet</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Bank dan Cabang Penerbit</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Tanggal Penerbitan</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Tanggal Jatuh Tempo</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Automatic Roll Over (ARO)</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                        <option value="1">Ya</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Nilai Nominal (Rp.)</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Nilai Likuidasi (Rp.)</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Nilai Nominal (Valuta Asing)</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Nilai Tukar (Rp.)</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Keterangan Lainnya</label>
                                    <textarea class="form-control" id="" rows="10"></textarea>
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Pendapat Pemeriksa</label>
                                    <textarea class="form-control" id="" rows="10"></textarea>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mb-2">
                                    <h6> Dengan ini pemeriksa menyatakan telah melakukan peninjauan langsung ke lokasi Jaminan dan melakukan penilaian secara objektif sesuai kondisi yang sebenarnya dan sesuai informasi yang diperoleh dari sumber-sumber yang dapat dipertanggungjawabkan.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <a href="/cetaklpjdeposito"><button type="button" class="btn btn-primary">Cetak</button></a>
        </div>
      </li>

      <li id="tab-lpj-kendaraan" class="cd-tabs__panel text-component">
        <h3 style="font-weight: bold">Laporan Pemeriksaan Jaminan</h3>
        <div class="fieldset-content mb-5">
            <form>
                <div class="col mb-3 mt-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Nama Debitur</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">No. Aplikasi</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Tanggal Pemeriksaan</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Jenis Kendaraan</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Penggunaan Jaminan</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Daerah Operasional Jaminan dari Lokasi Usaha</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                        <option value="1">Radius <= 25 Km</option>
                                        <option value="2">Radius <= 50 Km</option>
                                        <option value="3">Radius > 50 Km</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3 mt-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <h5>Spesifikasi Jaminan</h5>
                            <hr class="mb-3 mt-3 border border-secondary border-1 opacity-25">
                            <div class="row">
                                <div class="mb-2">
                                    <label for="" class="form-label">Nama Pemilik di BPKB</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Nama Pemilik saat ini</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Alamat Pemilik saat ini</label>
                                    <textarea class="form-control" id="alamat" rows="3"></textarea>
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Hubungan Pemilik dengan Debitur</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                        <option value="1">Sendiri</option>
                                        <option value="2">Suami/ Istri</option>
                                        <option value="3">Orangtua</option>
                                        <option value="4">Anak</option>
                                        <option value="5">Pemilik Sebelumnya</option>
                                        <option value="6">Lainnya</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Nomor Faktur</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Nomor Mesin</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Bukti Gesek</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                        <option value="1">Ada</option>
                                        <option value="2">Tidak Ada</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Nomor Rangka</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Bukti Gesek</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                        <option value="1">Ada</option>
                                        <option value="2">Tidak Ada</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Nomor Polisi</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Warna</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Nomor BPKB</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Tahun Pembuatan</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Nomor STNK</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Merk Kendaraan</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Tipe Kendaraan/ Model</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Check SAMSAT?</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                        <option value="1">Ya</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Dengan Siapa?</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">No. Telepon</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Hasil</label>
                                    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="font-size: 16px;">
                                        <option value="1">Ok</option>
                                        <option value="2">Tidak Ok</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-2">
                                    <label for="" class="form-label">Keterangan Lainnya</label>
                                    <textarea class="form-control" id="" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Nilai Market (Rp.)</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Nilai Likuidasi (Rp.)</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Informasi Harga didapat dari</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-2">
                                    <label for="" class="form-label">Pendapat Pemeriksa Mengenai Kondisi Jaminan</label>
                                    <textarea class="form-control" id="" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mb-2">
                                    <h6> Dengan ini pemeriksa menyatakan telah melakukan peninjauan langsung ke lokasi Jaminan dan melakukan penilaian secara objektif sesuai kondisi yang sebenarnya dan sesuai informasi yang diperoleh dari sumber-sumber yang dapat dipertanggungjawabkan.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <a href="/cetaklpjkendaraan"><button type="button" class="btn btn-primary">Cetak</button></a>
        </div>
      </li>

      <li id="tab-lpj-mpk" class="cd-tabs__panel text-component">
        <h3 style="font-weight: bold">Memo Persetujuan Kredit</h3>
        <div class="fieldset-content mb-5">
            <form>
                <div class="col mb-3 mt-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <div class="mb-2">
                                        <label for="" class="form-label">KP/KC/KK</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="mb-2">
                                        <label for="" class="form-label">Nama Debitur</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="mb-2">
                                        <label for="" class="form-label">Jenis Usaha</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="mb-2">
                                        <label for="" class="form-label">Alamat Usaha</label>
                                        <textarea class="form-control" id="alamat" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="mb-2">
                                        <label for="" class="form-label">No. Aplikasi</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="mb-2">
                                        <label for="" class="form-label">CIF</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="mb-2">
                                        <label for="" class="form-label">No. Rekening</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="mb-2">
                                        <label for="" class="form-label">No. MPK</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="mb-2">
                                        <label for="" class="form-label">Tanggal</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="" class="form-label">Tujuan Pengajuan Pinjaman</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col mb-2">
                                    <label for="" class="form-label">Jenis Produk Yang Diajukan</label>
                                    <div class="d-flex align-items-center">
                                        <input type="text" class="form-control" id="" style="margin-right: 10px;">
                                        <input type="text" class="form-control" id="" style="margin-right: 10px;">
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3 mt-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mb-2">
                                    <div class="table-responsive">
                                        <table class="" style="font-size: 16px; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Plafon</th>
                                                    <th>Rate per Bulan</th>
                                                    <th>Angsuran per Bulan</th>
                                                    <th>Jangka Waktu</th>
                                                    <th>Outstanding Pinjaman</th>   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>BANK 1</th>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                </tr>
                                                <tr>
                                                    <th>Fasilitas 1</th>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                </tr>
                                                <tr>
                                                    <th>Fasilitas 2</th>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                </tr>
                                                <tr>
                                                    <th>Fasilitas 3</th>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                </tr>
                                                <tr>
                                                    <th>Fasilitas 4</th>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                </tr>
                                                <tr>
                                                    <th>Fasilitas 5</th>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                </tr>
                                                <tr>
                                                    <th>Fasilitas 6</th>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                </tr>
                                                <tr>
                                                    <th>Fasilitas Yang Diajukan</th>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                </tr>
                                                <tr>
                                                    <th>Total Fasilitas</th>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3 mt-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <h5>Jaminan</h5>
                            <hr class="mb-3 mt-3 border border-secondary border-1 opacity-25">
                            <div class="row">
                                <div class="col mb-2">
                                    <div class="table-responsive">
                                        <table class="table-bordered" style="font-size: 16px; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Jaminan</th>
                                                    <th>Alamat Jaminan</th>
                                                    <th>Lt/LB (m2)</th>
                                                    <th>No Sertifikat/ BPKB/ Kepemilikan Lainnya</th>
                                                    <th>Masa Berlaku s/d (Tahun Pembuatan)</th>
                                                    <th>Nilai Market (Rp.)</th>
                                                    <th>Nilai Taksasi (Rp.)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>T & B</th>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                </tr>
                                                <tr>
                                                    <th>Tanah Kosong/ Sawah</th>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                </tr>
                                                <tr>
                                                    <th>Kios</th>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                </tr>
                                                <tr>
                                                    <th>Kendaraan</th>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                </tr>
                                                <tr>
                                                    <th>Deposito</th>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                </tr>
                                                <tr>
                                                    <th>Jaminan Lainnya</th>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                </tr>
                                                <tr>
                                                    <th>TOTAL</th>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                    <td><input type="text" class="form-control" id=""></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-2">
                                    <label for="" class="form-label">Disposible Income</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-2 mb-2">
                                    <label for="" class="form-label">IDIR</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="" class="form-label">WI</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-2 mb-2">
                                    <label for="" class="form-label">WI/OS</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="col-md-2 mb-2">
                                    <label for="" class="form-label">LTV</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card" style="background-color: #f8f8f8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mb-2">
                                    <label for="" class="form-label">Rekomendasi</label>
                                    <textarea class="form-control" id="alamat" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
      </li>
    </ul>
  </div>
</section>


@endsection