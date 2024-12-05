@extends('layouts.app')

@section('content')
<div class="page-content">

               <!-- Start Container Fluid -->
               <div class="container-fluid">

                    <div class="row">
                         <div class="col-xl-12">
                              <div class="card">
                                   <div class="card-header d-flex justify-content-between align-items-center gap-1">
                                        <h4 class="card-title flex-grow-1">Daftar Semua Produk</h4>

                                        <a href="{{route ('products.create') }}" class="btn btn-sm btn-primary">
                                             Tambah Produk
                                             <!-- Jika untuk user maka akan menjadi Pinjam Produk -->
                                        </a>

                                        <a href="#" class="btn btn-sm btn-outline-light">
                                             Export
                                             <!-- Jika untuk user maka akan hidden -->                                             
                                        </a>
                                   </div>
                                   <div>
                                        <div class="table-responsive">
                                             <table class="table align-middle mb-0 table-hover table-centered">
                                                  <thead class="bg-light-subtle">
                                                       <tr>
                                                            <th style="width: 1%;">
                                                                 <div class="ms-1">
                                                                      No
                                                                 </div>
                                                            </th>
                                                            <th>Kode Produk</th>
                                                            <th>Produk</th>
                                                            <th>Kategori</th>
                                                            <th>Deskripsi</th>
                                                            <th>Action</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>
                                                                 <div class="ms-1">
                                                                      1
                                                                 </div>
                                                            </td>
                                                            <td>BC-1281</td>
                                                            <td>
                                                                 <div class="d-flex align-items-center gap-2">
                                                                      <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                                           <img src="{{asset ('assets/admin/images/product/p-1.png') }}" alt="" class="avatar-md">
                                                                      </div>
                                                                      <div>
                                                                           <p href="#!" class="text-dark fw-medium fs-15">Black T-shirt</p>
                                                                      </div>
                                                                 </div>

                                                            </td>
                                                            <td>Kategori 1</td>
                                                            <td>sadaosudauisd asudausdbiasudaus dausdv</td>
                                                            <td>
                                                                 <div class="d-flex gap-2">
                                                                      <a href="{{route ('products.detail') }}" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                      <a href="{{route ('products.edit') }}" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                      <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                 </div>
                                                            </td>
                                                       </tr>

                                                  </tbody>
                                             </table>
                                        </div>
                                        <!-- end table-responsive -->
                                   </div>
                                   <div class="card-footer border-top">
                                        <nav aria-label="Page navigation example">
                                             <ul class="pagination justify-content-end mb-0">
                                                  <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                                                  <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                                  <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                  <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                                  <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                                             </ul>
                                        </nav>
                                   </div>
                              </div>
                         </div>

                    </div>

               </div>
               <!-- End Container Fluid -->

          </div>

@endsection