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
                            <h4 class="card-title">Add @yield('title')</h4>
                            <a  href="{{ route('areas.index') }}" class="btn btn-primary btn-xs ml-auto">
                                <i class="fas fa-arrow-left"></i>
                            </a>
                        </div>
                    </div>

                    <!--begin::Form-->
                    {!! Form::open(array('id'=>'form','enctype'=>'multipart/form-data')) !!}
                        {{  Form::hidden('created_by', Auth::user()->id ) }}
                        {{  Form::hidden('action', "store" ) }}
                        <div class="card-body">
                            <div class=" row">
                                <div class="col">
                                    <div class="form-group">
                                        {!! Html::decode(Form::label('name','Area name <span class="text-danger">*</span>')) !!}
                                        {{ Form::text('name', null, array('placeholder' => 'Enter area name','class' => 'form-control','autofocus' => ''  )) }}
                                        @if ($errors->has('name'))  
                                            {!! "<span class='span_danger'>". $errors->first('name')."</span>"!!} 
                                        @endif
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        {!! Html::decode(Form::label('city_id','City<span class="text-danger">*</span>')) !!}
                                        {!! Form::select('city_id', $cities,null, array('class' => 'form-control','style'=>'font-size:11px')) !!}
                                        @if ($errors->has('city_id'))  
                                            {!! "<span class='span_danger'>". $errors->first('city_id')."</span>"!!} 
                                        @endif
                                    </div>
                                </div>

                                
                            </div>
                            <div class=" row">
                                <div class="col">
                                    <div class="form-group">
                                        {!! Html::decode(Form::label('lat','Area latitute <span class="text-danger">*</span>')) !!}
                                        {{ Form::text('lat', null, array('placeholder' => 'Enter area latitute','class' => 'form-control')) }}
                                        @if ($errors->has('lat'))  
                                            {!! "<span class='span_danger'>". $errors->first('lat')."</span>"!!} 
                                        @endif
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        {!! Html::decode(Form::label('lng','Area longitute <span class="text-danger">*</span>')) !!}
                                        {{ Form::text('lng', null, array('placeholder' => 'Enter area longitude','class' => 'form-control')) }}
                                        @if ($errors->has('lng'))  
                                            {!! "<span class='span_danger'>". $errors->first('lng')."</span>"!!} 
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-12 text-right">
                                    <button type="submit" class="btn btn-primary btn-sm mr-2">Save</button>
                                    <button type="reset" class="btn btn-danger  btn-sm ">Cancel</button>
                                </div>
                            </div>
                        </div>
                    {!! Form::close() !!}
                    <!--end::Form-->
                    
                </div>
            </div>
        </div>
    </div>
    
    <script>
        $(document).ready(function () {  

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#form').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    type: 'POST',
                    url: "{{ route('areas.store') }}",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        if(data.success){
                            this.reset();
                            toastr.success(data.success);
                        }
                    },
                    error: function(data) {
                        var txt         = '';
                        console.log(data.responseJSON.errors[0])
                        for (var key in data.responseJSON.errors) {
                            txt += data.responseJSON.errors[key];
                            txt +='<br>';
                        }
                        toastr.error(txt);
                    }
                });
            });
        });
    </script>

@endsection
