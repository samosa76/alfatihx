@extends('backend.layout.app')
@section('main-content')
    <div class="container-fluid px-2 px-md-4">
        <div class="page-header min-height-300 border-radius-xl mt-4"
            style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
            <span class="mask  bg-gradient-primary  opacity-6"></span>
        </div>
        <div class="card card-body mx-3 mx-md-4 mt-n6">
            <div class="row gx-4 mb-2">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="../assets/img/akademisi-img-01.jpg" alt="profile_image"
                            class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Indra Martian Permana
                        </h5>
                        <p class="mb-0 font-weight-normal text-sm">
                            CEO / Co-Founder
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div>
                        <ul class="nav nav-pills nav-fill">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1" href="{{ route('home') }}">
                                    <i class="material-icons text-lg position-relative">home</i>
                                    <span class="ms-1">Web</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1" href="">
                                    <i class="material-icons text-lg position-relative">email</i>
                                    <span class="ms-1">Message</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="card card-body mx-3 mx-md-4 mt-2">
            <div class="row gx-4 mb-2">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="../assets/img/akademisi-img-0.png" alt="profile_image"
                            class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Anies Subianto Pranowo
                        </h5>
                        <p class="mb-0 font-weight-normal text-sm">
                            CAPRES
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div>
                        <ul class="nav nav-pills nav-fill">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1" href="">
                                    <i class="material-icons text-lg position-relative">home</i>
                                    <span class="ms-1">Web</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1" href="">
                                    <i class="material-icons text-lg position-relative">email</i>
                                    <span class="ms-1">Message</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@extends('backend.layout.common-end')
@push('custom-scripts')
@endpush
</main>

<!--   Core JS Files   -->
