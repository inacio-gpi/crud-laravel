@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

<h1 class="app-page-title">Início</h1>

<div class="row g-4 mb-4">
    <div class="col-12 col-lg-6">
        <div class="app-card app-card-progress-list h-100 shadow-sm">
            <div class="app-card-header p-3">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                        <h4 class="app-card-title">Progress</h4>
                    </div>
                    <!--//col-->
                    <div class="col-auto">
                        <div class="card-header-action">
                            <a href="#">All projects</a>
                        </div>
                        <!--//card-header-actions-->
                    </div>
                    <!--//col-->
                </div>
                <!--//row-->
            </div>
            <!--//app-card-header-->
            <div class="app-card-body">
                <div class="item p-3">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="title mb-1 ">Project lorem ipsum dolor sit amet</div>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!--//col-->
                        <div class="col-auto">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </div>
                        <!--//col-->
                    </div>
                    <!--//row-->
                    <a class="item-link-mask" href="#"></a>
                </div>
                <!--//item-->


                <div class="item p-3">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="title mb-1 ">Project duis aliquam et lacus quis ornare</div>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 34%;" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!--//col-->
                        <div class="col-auto">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </div>
                        <!--//col-->
                    </div>
                    <!--//row-->
                    <a class="item-link-mask" href="#"></a>
                </div>
                <!--//item-->

                <div class="item p-3">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="title mb-1 ">Project sed tempus felis id lacus pulvinar</div>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 68%;" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!--//col-->
                        <div class="col-auto">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </div>
                        <!--//col-->
                    </div>
                    <!--//row-->
                    <a class="item-link-mask" href="#"></a>
                </div>
                <!--//item-->

                <div class="item p-3">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="title mb-1 ">Project sed tempus felis id lacus pulvinar</div>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 52%;" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!--//col-->
                        <div class="col-auto">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </div>
                        <!--//col-->
                    </div>
                    <!--//row-->
                    <a class="item-link-mask" href="#"></a>
                </div>
                <!--//item-->

            </div>
            <!--//app-card-body-->
        </div>
        <!--//app-card-->
    </div>
    <!--//col-->
    <div class="col-12 col-lg-6">
        <div class="app-card app-card-stats-table h-100 shadow-sm">
            <div class="app-card-header p-3">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                        <h4 class="app-card-title">Stats List</h4>
                    </div>
                    <!--//col-->
                    <div class="col-auto">
                        <div class="card-header-action">
                            <a href="#">View report</a>
                        </div>
                        <!--//card-header-actions-->
                    </div>
                    <!--//col-->
                </div>
                <!--//row-->
            </div>
            <!--//app-card-header-->
            <div class="app-card-body p-3 p-lg-4">
                <div class="table-responsive">
                    <table class="table table-borderless mb-0">
                        <thead>
                            <tr>
                                <th class="meta">Source</th>
                                <th class="meta stat-cell">Views</th>
                                <th class="meta stat-cell">Today</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#">google.com</a></td>
                                <td class="stat-cell">110</td>
                                <td class="stat-cell">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-up text-success" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
                                    </svg>
                                    30%
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">getbootstrap.com</a></td>
                                <td class="stat-cell">67</td>
                                <td class="stat-cell">23%</td>
                            </tr>
                            <tr>
                                <td><a href="#">w3schools.com</a></td>
                                <td class="stat-cell">56</td>
                                <td class="stat-cell">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-down text-danger" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z" />
                                    </svg>
                                    20%
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">javascript.com </a></td>
                                <td class="stat-cell">24</td>
                                <td class="stat-cell">-</td>
                            </tr>
                            <tr>
                                <td><a href="#">github.com </a></td>
                                <td class="stat-cell">17</td>
                                <td class="stat-cell">15%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!--//table-responsive-->
            </div>
            <!--//app-card-body-->
        </div>
        <!--//app-card-->
    </div>
    <!--//col-->
</div>
<!--//row-->
@endsection
