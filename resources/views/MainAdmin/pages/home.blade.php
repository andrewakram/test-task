@extends('MainAdmin.index')
@section('style')
    <link href="{{ asset('admin/dist/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet"
          type="text/css"/>
@endsection
@section('content')

    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                     data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                     class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">
                        <h1 class=" fs-3 fw-bold my-1 ms-1 app-f-color">Dashboard</h1>
                        <!--begin::Separator-->
                        <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                        <!--end::Separator-->
                    </h1>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">

                <!--begin::Toolbar-->
                <div class="d-flex flex-wrap flex-stack ">
                    <!--begin::Heading-->
                    <!--end::Heading-->
                </div>
                <!--end::Toolbar-->
                <div class="row g-5 g-xl-8">

                    <!--begin::Post-->
                    <div class="post d-flex flex-column-fluid" id="kt_post">

                        <!--begin::Container-->
                        <div id="kt_content_container" class="container-xxl">

                            <!--begin::Card body-->
                            <div class="card-body ">
                                <form action="{{route('admin.search.home')}}" method="post"
                                      enctype="multipart/form-data"
                                      class="form d-flex flex-column flex-lg-row gap-7 gap-lg-10">
                                    @csrf
                                    <div class="row d-flex flex-column-fluid">
                                        <div class="col-md-11">
                                            <!--begin::Label-->
                                            <label class="required form-label">Enter the folder directory</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" required name="path_to_file" class="form-control mb-2"
                                                   placeholder="/path/to/file" value=""/>
                                            <!--end::Input-->
                                        </div>
                                        <div class="col-md-1">

                                            <!--begin::Button-->
                                            <button type="submit" id="kt_ecommerce_add_product_submit"
                                                    class="btn btn-primary mt-8">
                                                <span class="indicator-label">Search</span>
                                                <span class="indicator-progress">Wait . . .
                                                    <span class="spinner-border spinner-border-sm align-middle ms-2">
                                                    </span>
                                                </span>
                                            </button>
                                            <!--end::Button-->
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <!--end::Card header-->

                            <!--begin::Products-->
                            <div class="card card-flush">
                                <!--begin::Card header-->
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="slider_table">
                                        <!--begin::Table head-->
                                        <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class=" min-w-10px">#</th>
                                            <th class=" min-w-10px">file name</th>
                                            <th class=" min-w-10px">file content</th>
                                        </tr>
                                        <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fw-bold text-gray-600">
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Products-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Post-->
                </div>


            </div>
            <!--end::Container-->


        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->


@endsection

@section('script')

    <script src="{{ asset('admin/dist/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS -->

    <script>
        $(document).ready(function () {

            $('#slider_table').DataTable({
                data: {!! json_encode($data) !!},
                columns: [
                    {data: 'id'},
                    {data: 'filename'},
                    {data: 'filecontent'},
                ]
            });
        });
    </script>

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{ asset('admin/dist/assets/js/custom/widgets.js')}}"></script>
    <script src="{{ asset('admin/dist/assets/js/custom/apps/chat/chat.js')}}"></script>
    <script src="{{ asset('admin/dist/assets/js/custom/modals/upgrade-plan.js')}}"></script>
    <script src="{{ asset('admin/dist/assets/js/custom/modals/create-app.js')}}"></script>
    <script src="{{ asset('admin/dist/assets/js/custom/modals/users-search.js')}}"></script>
    <!--end::Page Vendors Javascript-->



@endsection
