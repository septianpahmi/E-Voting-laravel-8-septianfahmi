<base href="/public">
@include('component.head')
@include('component.navbar')
@include('component.sidebar')
{{-- main --}}
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Daftar Hadir Pemilih</h1>
      </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Jenis Data</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Jumlah Total DPT</td>
                    <td>{{$totaldpt}}</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jumlah DPT Memilih</td>
                    <td>{{$dptmemilih}}</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Jumlah DPT Tidak Memilih</td>
                    <td>{{$tdkmemilih}}</td>
                </tr>
                </tbody>
                
            </table>
              <!-- End Default Table Example -->
            </div>
          </div>

        </div>
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">NISN</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Keterangan</th>
                  </tr>
                </thead>
                @foreach ($data as $item)
                <tbody>
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$item->nisn}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->kelas}}</td>
                        <td>{{$item->keterangan}}</td>
                        <td></td>
                    </tr>
                </tbody>    
                @endforeach
            </table>
              <!-- End Default Table Example -->
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>
{{-- end main --}}
@include('component.footer')