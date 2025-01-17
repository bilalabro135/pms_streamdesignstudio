@extends('layouts.main')
@section('title','Captain')
@section('content')

@include( '../sweet_script')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">@yield('title') wallet : {{ ucwords($data->fname)}}</h4>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title"> 
                            <b>@yield('title') wallet </b>
                            @if((isset($current) )&& ($current > 0))
                                <span class="badge badge-success"> Current balance:  Rs. <b> {{ ($current)}} </b>
                            @else
                                <span class="badge badge-danger"> Current balance:  Rs. <b> {{ ($current)}} </b>
                            @endif
                        </h4>
                    
                            <a  href="{{ url('captains')}}/{{$id}}" class="btn btn-primary btn-xs ml-auto">
                                <i class="fas fa-arrow-left"></i>
                            </a>
                        
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="myTable" class="table table-hover" style="width: 100%;" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>Passenger</th>
                                    <th>Payment method </th>
                                    <th>Amount</th>
                                    <th>Type</th>
                                    <th>Created at </th>
                                    <!-- <th width="10%" >Action</th> -->
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {  
        var t = $('#myTable').DataTable({
                "aaSorting": [],
                "processing": true,
                "serverSide": false,
                "select":true,
                "ajax": "{{ url('captains') }}/wllts_lst/{{$id}}",
                "method": "GET",
                "columns": [
                    {"data": "srno"},
                    {"data": "pas_name"},
                    {"data": "payment_method_name"},
                    {"data": "amount"},
                    {"data": "amount_type"},
                    {"data": "created_at"}
                    
                ]
            });
        t.on( 'order.dt search.dt', function () {
            t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
        } ).draw();
    });
</script>

@endsection
