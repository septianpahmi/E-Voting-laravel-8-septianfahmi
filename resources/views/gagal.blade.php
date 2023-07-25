<base href="/public">
@include('user.head')
@include('user.navbar')
{{-- main --}}
    <br> <br> <br> <br>
    <section class="section">
      <div class="row" >
        <div class="col-lg-1">
        </div>
        <!-- Card with header and footer -->
        <div class="col-lg-10">
        <div class="card">
            <div class="card-header">GAGAL!!!</div>
            <div class="card-body">
              <h5 class="card-title" style="text-align: center">GAGAL MELAKUKAN PEMILIHAN</h5>
              <p style="text-align: center">Anda hanya dapat memilih satu kali. silahkan tekan tombol logout untuk keluar.
              </p>
              <div class="d-grid gap-2 mt-3">
                <a href="{{url('/logout')}}" type="button" class="btn btn-primary">
                  Logout
                </a>
                </div>
            </div>
          </div><!-- End Card with header and footer -->
        </div>

      </div>
    </section>

  </main>
{{-- end main --}}
@include('user.footer')