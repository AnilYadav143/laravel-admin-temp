@extends('admin/admin_master')
        @section('content')
            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">BOOK YOUR APPOINTMENT</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">SLNO</th>
                                            <th scope="col">APPOINTMENT DATE</th>
                                            <th scope="col">REASON</th>
                                            <th scope="col">STATUS</th>
                                            <th scope="col">REASON</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>10/12/2022</td>
                                            <td>fever</td>
                                            <td>True</td>
                                            <td>test</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>12/11/2022</td>
                                            <td>test</td>
                                            <td>False</td>
                                            <td>test</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->
        @endsection