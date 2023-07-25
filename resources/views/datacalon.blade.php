<base href="/public">
@include('component.head')
@include('component.navbar')
@include('component.sidebar')
{{-- main --}}
<main id="main" class="main">

    <section class="section">
      <div class="row">

        <div class="col-lg-5">

            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Tambah Calon Kandidat Pemilihan</h5>
    
                  <!-- Horizontal Form -->
                  <form action="{{url('/datacalon/post')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                      <label for="nisn" class="col-sm-8 col-form-label">NISN</label>
                      <div class="col-sm-12">
                        <input type="number" class="form-control" name="nisn" id="nisn" required>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="nomor" class="col-sm-8 col-form-label">Nomor Calon Kandidat</label>
                      <div class="col-sm-12">
                        <input type="number" class="form-control" name="nomor" id="nomor" required>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="nm_kandidat" class="col-sm-8 col-form-label">Nama Calon Kandidat</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" name="nm_kandidat" id="nm_kandidat" required>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="visi" class="col-sm-8 col-form-label">Visi</label>
                      <div class="col-sm-12">
                        <textarea type="text" class="form-control" name="visi" id="visi" required></textarea>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="misi" class="col-sm-8 col-form-label">Misi</label>
                      <div class="col-sm-12">
                        <textarea type="text" class="form-control" name="misi" id="misi" required></textarea>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="photo" class="col-sm-8 col-form-label">Foto</label>
                      <div class="col-sm-12">
                        <input type="file" class="form-control" name="photo" id="photo" required>
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-warning">Simpan Data</button>
                    </div>
                  </form><!-- End Horizontal Form -->
    
                </div>
              </div>    
        </div>

        <div class="col-lg-7">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Daftar Calon Kandidat</h5>
  
                <!-- Default Table -->
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Calon</th>
                      <th scope="col">Visi</th>
                      <th scope="col">Misi</th>
                      <th scope="col">Photo</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  @foreach ($data as $item)  
                  <tbody>
                      <tr>
                          <th scope="row">{{$loop->iteration}}</th>
                          <td>{{$item->nm_kandidat}}</td>
                          <td>{{$item->visi}}</td>
                          <td>{{$item->misi}}</td>
                          <td><img src="/kandidat/{{$item->photo}}" width="50" height="auto" alt="jpeg" class="rounded-circle"></td>
                          <td><a href="{{url('/datacalon/edit',$item->id)}}" class="btn btn-warning">Edit</a></td>
                          <td><a href="{{url('/datacalon/del',$item->id)}}" onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-danger">Hapus</a></td>
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