@extends('backend.partials.layout')

@section('title')
   لوحة التحكم
@endsection



@section('page-content')
<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card bg-primary border-primary text-white-50">
                                    <div class="card-body">
                                        <h5 class="mb-3 text-white">عدد المشاريع</h5>
                                        <h4 class="mb-3 text-white">{{ $ProjectsCount }}</h4>
                                    </div>
                                </div>
                            </div><!-- end col -->
        
                            <div class="col-lg-4">
                                <div class="card bg-success border-success text-white-50">
                                    <div class="card-body">
                                       <h5 class="mb-3 text-white">عدد المنتجات</h5>
                                       <h4 class="mb-3 text-white">{{ $ProductsCount }}</h4>
                                    </div>
                                </div>
                            </div><!-- end col -->
        
                            <div class="col-lg-4">
                                <div class="card bg-info border-info text-white-50">
                                    <div class="card-body">
                                       <h5 class="mb-3 text-white">عدد المقالات</h5>
                                       <h4 class="mb-3 text-white">{{ $BlogsCount }}</h4>
                                    </div>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card bg-warning border-warning text-white-50">
                                    <div class="card-body">
                                       <h5 class="mb-3 text-white">عدد الفئات</h5>
                                       <h4 class="mb-3 text-white">{{ $CategoriesCount }}</h4>
                                    </div>
                                </div>
                            </div><!-- end col -->
        
                            <div class="col-lg-4">
                                <div class="card bg-danger border-danger text-white-50">
                                    <div class="card-body">
                                       <h5 class="mb-3 text-white">عدد المستخدمين</h5>
                                       <h4 class="mb-3 text-white">{{ $UsersCount }}</h4>
                                    </div>
                                </div>
                            </div><!-- end col -->
        
                            <div class="col-lg-4">
                                <div class="card bg-dark border-dark text-light">
                                    <div class="card-body">
                                       <h5 class="mb-3 text-white">طلبات تواصل</h5>
                                       <h4 class="mb-3 text-white">{{ $ContactRequestsCount }}</h4>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                           <div class="col-xl-4">
                               <div class="card">
                                   <div class="card-header align-items-center d-flex">
                                       <h4 class="card-title mb-0 flex-grow-1">احدث المشاريع</h4>
                                       <div class="flex-shrink-0">
                                           <div class="dropdown align-self-start">
                                               <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <i class="bx bx-dots-horizontal-rounded font-size-18 text-dark"></i>
                                               </a>
                                           </div>
                                       </div>
                                   </div><!-- end card header -->
                                   <div class="card-body px-0 pt-2">
                                           <div class="table-responsive px-3" data-simplebar style="max-height: 395px;">
                                               <table class="table align-middle table-nowrap">
                                                   <tbody>
                                                      @foreach($projectsData as $projectData)
                                                      <tr>
                                                         <td>
                                                            <div>
                                                               <h5 class="font-size-15"><a href="" class="text-dark">{{$projectData->project_name}}</a></h5>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="text-end">
                                                               <ul class="mb-1 ps-0">
                                                                     <p>{{$projectData->created_at}}</p>
                                                               </ul>
                                                            </div>
                                                         </td>
                                                      </tr>
                                                      @endforeach
                                                   </tbody>
                                               </table>
                                           </div>
                                   </div>
                                   <!-- end card body -->
                               </div>
                               <!-- end card -->
                           </div>
                           <!-- end col -->

                           <div class="col-xl-4">
                              <div class="card">
                                  <div class="card-header align-items-center d-flex">
                                      <h4 class="card-title mb-0 flex-grow-1">احدث المنتجات</h4>
                                      <div class="flex-shrink-0">
                                          <div class="dropdown align-self-start">
                                              <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  <i class="bx bx-dots-horizontal-rounded font-size-18 text-dark"></i>
                                              </a>
                                              
                                          </div>
                                      </div>

                                  </div><!-- end card header -->

                                  <div class="card-body px-0 pt-2">
                                          <div class="table-responsive px-3" data-simplebar style="max-height: 395px;">
                                              <table class="table align-middle table-nowrap">
                                                  <tbody>
                                                   @foreach($productsData as $productData)
                                                   <tr>
                                                      <td>
                                                         <div>
                                                            <h5 class="font-size-15"><a href="" class="text-dark">{{$productData->product_name}}</a></h5>
                                                         </div>
                                                      </td>
                                                      <td>
                                                         <div class="text-end">
                                                            <ul class="mb-1 ps-0">
                                                                  <p>{{$productData->created_at}}</p>
                                                            </ul>
                                                         </div>
                                                      </td>
                                                   </tr>
                                                   @endforeach
                                                  </tbody>
                                              </table>
                                          </div>
                                  </div>
                                  <!-- end card body -->
                              </div>
                              <!-- end card -->
                          </div>
                          <!-- end col -->
                          <div class="col-xl-4">
                           <div class="card">
                               <div class="card-header align-items-center d-flex">
                                   <h4 class="card-title mb-0 flex-grow-1">احدث المقالات</h4>
                                   <div class="flex-shrink-0">
                                       <div class="dropdown align-self-start">
                                           <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                               <i class="bx bx-dots-horizontal-rounded font-size-18 text-dark"></i>
                                           </a>
                                       </div>
                                   </div>
                               </div><!-- end card header -->
                               <div class="card-body px-0 pt-2">
                                    <div class="table-responsive px-3" data-simplebar style="max-height: 395px;">
                                          <table class="table align-middle table-nowrap">
                                             <tbody>
                                                @foreach($blogData as $BlogsData)
                                                <tr>
                                                   <td>
                                                      <div>
                                                         <h5 class="font-size-15"><a href="" class="text-dark">{{$BlogsData->title}}</a></h5>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <div class="text-end">
                                                         <ul class="mb-1 ps-0">
                                                               <p>{{$BlogsData->created_at}}</p>
                                                         </ul>
                                                      </div>
                                                   </td>
                                                </tr>
                                                @endforeach
                                             </tbody>
                                          </table>
                                    </div>
                               </div>
                               <!-- end card body -->
                           </div>
                           <!-- end card -->
                       </div>
                       <!-- end col --> 
                       </div><!-- end row -->  
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                
                
            </div>
            <!-- end main content-->
@endsection
