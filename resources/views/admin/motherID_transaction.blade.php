@extends('admin/admin_master')
        @section('content')
    <div class="container-fluid">
        <div class="row">
            <h4>MOTHER ID TRANSACTIONS</h4>
            <p>Select Date</p>
            <div class="col-sm-5">
                    <input type="date" class="form-control" id="date1"/>
            </div>
            <div class="col-sm-5">
                <input type="date" class="form-control" id="date2"/>
            </div>
        </div>
    </div>

        @endsection