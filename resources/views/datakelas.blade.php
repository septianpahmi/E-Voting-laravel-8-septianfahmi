<base href="/public">
@include('component.head')
@include('component.navbar')
@include('component.sidebar')
{{-- main --}}
<main id="main" class="main">

    <section class="section">
      <div class="row">
        <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Kelas</h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kelas</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                @foreach ($data as $item)  
                <tbody>
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$item->nm_kelas}}</td>
                        <td><a href="{{url('/datakelas/del',$item->id)}}" onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-danger">Hapus</a></td>
                    </tr>
                </tbody>
                @endforeach
            </table>
              <!-- End Default Table Example -->
            </div>
          </div>

        </div>

        <div class="col-lg-4">

            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Tambah Kelas</h5>
    
                  <!-- Horizontal Form -->
                  <form action="{{url('/datakelas/post')}}">
                    <div class="row mb-3">
                      <label for="nm_kelas" class="col-sm-8 col-form-label">Nama Kelas</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" name="nm_kelas" id="nm_kelas" required>
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                  </form><!-- End Horizontal Form -->
    
                </div>
              </div>    
        </div>
      </div>
    </section>

  </main>
{{-- end main --}}
@include('component.footer')