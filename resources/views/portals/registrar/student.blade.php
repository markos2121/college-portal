@extends('layouts.registrar.app')

@section('content')
       
            <div class="panel panel-default">
                <div class="panel-heading">Students List</div>
                    
                <div class="panel-body">
                    <div style="background-color: #f5f8fa">  
                        <h4><strong><i>General Information</i></strong></h4>       
                        <div class="row">
                            <div class="col-md-3">
                                <p><strong>Full Name</strong></p>
                                <p>{{$history->fullname}}</p>
                            </div>
                            <div class="col-md-3">
                                <p><strong>Sex</strong></p>
                                <p>{{$history->sex}}</p>
                            </div>
                            <div class="col-md-3">
                                <p><strong>Full Name</strong></p>
                                <p>{{$history->admission}}</p>
                            </div>
                            <div class="col-md-3">
                                <img src="{{asset($history->image)}}" alt="" width="100px" height="115px">
                            </div>
                        </div><hr>
                        <h4><strong><i>Address</i></strong></h4>
                        <div class="row">
                            <div class="col-md-4">
                                <p><strong>House No</strong></p>
                                <p>{{$history->housenumber}}</p>
                            </div>
                            <div class="col-md-4">
                                <p><strong>Kebele</strong></p>
                                <p>{{$history->kebele}}</p>
                            </div>
                            <div class="col-md-4">
                                <p><strong>Town</strong></p>
                                <p>{{$history->town}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <p><strong>Woreda</strong></p>
                                <p>{{$history->woreda}}</p>
                            </div>
                            <div class="col-md-4">
                                <p><strong>Zone</strong></p>
                                <p>{{$history->zone}}</p>
                            </div>
                            <div class="col-md-4">
                                <p><strong>Region</strong></p>
                                <p>{{$history->region}}</p>
                            </div>
                        </div><hr>
                        <h4><strong><i>Other</i></strong></h4>
                        <div class="row">
                            <div class="col-md-4">
                                <p><strong>Place of Birth</strong></p>
                                <p>{{$history->birthplace}}</p>
                            </div>
                            <div class="col-md-4">
                                <p><strong>Disability</strong></p>
                                <p>{{$history->disability}}</p>
                            </div>
                            <div class="col-md-4">
                                <p><strong>Date of Birth</strong></p>
                                <p>{{$history->dob}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection