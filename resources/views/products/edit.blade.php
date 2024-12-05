@extends('layouts.app')

@section('content')
<div class="page-content">

     <!-- Start Container Fluid -->
     <div class="container-xxl">

          <div class="row">
               <div class="col-xl-12 col-lg-12">
                    <div class="card">
                         <div class="card-header">
                              <h4 class="card-title">Tambahkan Foto Produk</h4>
                         </div>
                         <div class="card-body">
                              <!-- File Upload -->
                              <form action="#" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                                   <div class="fallback">
                                        <input name="file" type="file" multiple />
                                   </div>
                                   <div class="dz-message needsclick">
                                        <i class="bx bx-cloud-upload fs-48 text-primary"></i>
                                        <h3 class="mt-4">Letakkan gambar Anda di sini, atau <span class="text-primary">klik untuk menelusuri</span></h3>
                                        <span class="text-muted fs-13">
                                             1600 x 1200 (4:3) direkomendasikan. File PNG, JPG dan JPEG diperbolehkan
                                        </span>
                                   </div>
                              </form>
                         </div>
                    </div>
                    <div class="card">
                         <div class="card-header">
                              <h4 class="card-title">Informasi Produk</h4>
                         </div>
                         <div class="card-body">
                              <div class="row">
                              <div class="col-lg-4">
                                        <form>
                                             <div class="mb-3">
                                                  <label for="kode" class="form-label">Kode Produk</label>
                                                  <input type="text" id="kode" class="form-control" placeholder="Masukkan Kode Produk">
                                             </div>
                                        </form>
                                   </div>
                                   <div class="col-lg-4">
                                        <form>
                                             <div class="mb-3">
                                                  <label for="produk" class="form-label">Nama Produk</label>
                                                  <input type="text" id="produk" class="form-control" placeholder="Masukkan Nama Produk">
                                             </div>
                                        </form>
                                   </div>
                                   <div class="col-lg-4">
                                        <form>
                                             <label for="kategori" class="form-label">Kategori Produk</label>
                                             <select class="form-control" id="kategori" data-choices data-choices-groups data-placeholder="Pilih Kategori Untuk Produk" name="kategori">
                                                  <option value="">Pilih Kategori Untuk Produk</option>
                                                  <option value="kategori-1">Kategori 1</option>
                                                  <option value="kategori-2">Kategori 2</option>
                                                  <option value="kategori-3">Kategori 3</option>
                                             </select>
                                        </form>
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-lg-12">
                                        <div class="mb-3">
                                             <label for="deskripsi" class="form-label">Deskripsi</label>
                                             <textarea class="form-control bg-light-subtle" name="deskripsi" id="deskripsi" rows="7" placeholder="Deskripsi singkat tentang produk"></textarea>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="p-3 bg-light mb-3 rounded">
                         <div class="row justify-content-end g-2">
                              <div class="col-lg-2">
                                   <button class="btn btn-outline-secondary w-100">Tambah Produk</button>
                              </div>
                              <div class="col-lg-2">
                                   <button class="btn btn-primary w-100">Batal</button>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <!-- End Container Fluid -->

</div>

@endsection
