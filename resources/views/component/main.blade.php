<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Akun DPT</h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NISN</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Level</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                @foreach ($data as $item)
                <tbody>
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->nisn}}</td>
                    <td>{{$item->kelas}}</td>
                    <td>{{$item->level}}</td>
                    <td><a href="{{url('/pemilsos/dpt/delete', $item->id)}}" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a></td>
                  </tr>
                </tbody>
                @endforeach
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>
        </div>
          <div class="col-lg-6">

            <!-- Default Card -->
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Reset Data Pemilih</h5>
                <h5>Fitur hapus semua data</h5>
                <p>Fitur ini diguinakan apa bila telah selesai melakukan pemilihan.</p>
                <a href="{{url('/pemilsos/delete/all')}}" class="btn btn-danger" onclick="return confirm('Anda yakin ingin mengapus semua data?')">Hapus</a>
              </div>
            </div><!-- End Default Card -->
          </div>
          
    </section>

  </main><!-- End #main -->