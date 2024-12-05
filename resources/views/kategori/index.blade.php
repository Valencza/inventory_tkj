@extends('layouts.app')

@section('content')
<div class="page-content">

<!-- Start Container Fluid -->
<div class="container-xxl">

     <div class="row">
          <div class="col-xl-12">
               <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center gap-1">
                         <h4 class="card-title flex-grow-1">Kategori List</h4>

                         <a href="{{route ('kategori.create') }}" class="btn btn-sm btn-primary">
                              Tambahkan Kategori
                         </a>

                    </div>
                    <div>
                         <div class="table-responsive">
                              <table class="table align-middle mb-0 table-hover table-centered">
                                   <thead class="bg-light-subtle">
                                        <tr>
                                             <th style="width: 20px;">
                                                <div class="ms-1">
                                                  No
                                                </div>
                                             </th>
                                             <th>Kategori</th>
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
                                             <td>
                                                  <div class="d-flex align-items-center gap-2">
                                                       <p class="text-dark fw-medium fs-15 mb-0">Fashion Men , Women & Kid's</p>
                                                  </div>

                                             </td>
                                             <td>
                                                  <div class="d-flex gap-2">
                                                       <a href="{{route ('kategori.edit') }}" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                       <a href="#" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
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