@extends('layouts.app')

@section('content')
<div class="page-content">

               <!-- Start Container Fluid -->
               <div class="container-xxl">

                    <div class="row">

                         <div class="col-xl-12 col-lg-12">
                              <div class="card">
                                   <div class="card-header">
                                        <h4 class="card-title">Tambahkan Kategori Produk</h4>
                                   </div>
                                   <div class="card-body">
                                        <div class="row">

                                             <div class="col-lg-12">
                                                  <form>
                                                       <div class="mb-3">
                                                            <label for="kategori" class="form-label">Kategori</label>
                                                            <input type="text" id="kategori" class="form-control" placeholder="Masukkan Kategori">
                                                       </div>
                                                  </form>
                                             </div>

                                        </div>
                                   </div>
                              </div>
                              <div class="p-3 bg-light mb-3 rounded">
                                   <div class="row justify-content-end g-2">
                                        <div class="col-lg-2">
                                             <a href="#!" class="btn btn-outline-secondary w-100">Tambah Kategori</a>
                                        </div>
                                        <div class="col-lg-2">
                                             <a href="#!" class="btn btn-primary w-100">Batal</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
               <!-- End Container Fluid -->

          </div>
@endsection