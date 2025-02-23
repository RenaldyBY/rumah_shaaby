@extends('layouts.master')

@section('content')
<div class="content-body">
    {{-- <!-- Ajax Sourced Server-side -->
    <section id="ajax-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Ajax Sourced Server-side</h4>
                    </div>
                    <div class="card-datatable">
                        <table class="datatables-ajax table table-responsive">
                            <thead>
                                <tr>
                                    <th>Full name</th>
                                    <th>Email</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--/ Ajax Sourced Server-side -->

    <!-- Column Search -->
    <section id="column-search-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Column Search</h4>
                    </div>
                    <div class="card-datatable">
                        <table class="dt-column-search table table-responsive">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Post</th>
                                    <th>City</th>
                                    <th>Date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Post</th>
                                    <th>City</th>
                                    <th>Date</th>
                                    <th>Salary</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Column Search -->

    <!-- Advanced Search -->
    <section id="advanced-search-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Advanced Search</h4>
                    </div>
                    <!--Search Form -->
                    <div class="card-body mt-2">
                        <form class="dt_adv_search" method="POST">
                            <div class="row g-1 mb-md-1">
                                <div class="col-md-4">
                                    <label class="form-label">Name:</label>
                                    <input type="text" class="form-control dt-input dt-full-name" data-column="1" placeholder="Alaric Beslier" data-column-index="0" />
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Email:</label>
                                    <input type="text" class="form-control dt-input" data-column="2" placeholder="demo@example.com" data-column-index="1" />
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Post:</label>
                                    <input type="text" class="form-control dt-input" data-column="3" placeholder="Web designer" data-column-index="2" />
                                </div>
                            </div>
                            <div class="row g-1">
                                <div class="col-md-4">
                                    <label class="form-label">City:</label>
                                    <input type="text" class="form-control dt-input" data-column="4" placeholder="Balky" data-column-index="3" />
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Date:</label>
                                    <div class="mb-0">
                                        <input type="text" class="form-control dt-date flatpickr-range dt-input" data-column="5" placeholder="StartDate to EndDate" data-column-index="4" name="dt_date" />
                                        <input type="hidden" class="form-control dt-date start_date dt-input" data-column="5" data-column-index="4" name="value_from_start_date" />
                                        <input type="hidden" class="form-control dt-date end_date dt-input" name="value_from_end_date" data-column="5" data-column-index="4" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Salary:</label>
                                    <input type="text" class="form-control dt-input" data-column="6" placeholder="10000" data-column-index="5" />
                                </div>
                            </div>
                        </form>
                    </div>
                    <hr class="my-0" />
                    <div class="card-datatable">
                        <table class="dt-advanced-search table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Post</th>
                                    <th>City</th>
                                    <th>Date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Post</th>
                                    <th>City</th>
                                    <th>Date</th>
                                    <th>Salary</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Advanced Search --> --}}

    <!-- Responsive Datatable -->
    <section id="responsive-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Data Table Barang</h4>
                        <div class="align-items-center ms-auto"><a href="" class="btn btn-primary">Export</a></div>
                    </div>
                    <div class="card-datatable">
                        <table class="dt-responsive table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Harga Jual</th>
                                    <th>Haga Beli</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Post</th>
                                    <th>Experience</th>
                                    <th><form action="">
                                        <div class="position-flex top-0 end-0">
                                        <a href="" class="btn btn-info">Edit</a>
                                    <button type="submit" class="btn btn-danger">Destroy</button></div></form></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Responsive Datatable -->

</div>
@endsection
