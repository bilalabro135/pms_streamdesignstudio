@extends('layouts.main')
@section('title','Areas')
@section('content')
    @include( '../sweet_script')

    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">@yield('title')</h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Show @yield('title')</h4>
                            <a  href="{{ route('areas.index') }}" class="btn btn-primary btn-xs ml-auto">
                                <i class="fas fa-arrow-left"></i>
                            </a>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="table-responsive">
                                    <table class="table dt-responsive">
                                        <tbody>
                                            <tr>
                                                <td width="30%">Area name</td>
                                                <td>{{$data->name}}</td>
                                            </tr>
                                            <tr>
                                                <td>City name</td>
                                                <td>{{ isset($data->city->name) ? ($data->city->name) : ""}}</td>
                                            </tr>
                                             
                                            <tr>
                                                <td>Status</td>
                                                <td>
                                                
                                                    @if((isset($data->active)) && ( ($data->active == 1) || ($data->active == "Active") ) )
                                                        <span class="badge badge-success">Active</span>
                                                    @else
                                                        <span class="badge badge-danger">Inactive</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Area latitude</td>
                                                <td>{{$data->lat}}</td>
                                            </tr>
                                             
                                            <tr>
                                                <td>Area longitude</td>
                                                <td>{{$data->lng}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

@endsection
