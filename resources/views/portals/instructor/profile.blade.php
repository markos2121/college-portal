@extends('layouts.instructor.app')

@section('content')
       
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>
                    
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <th>
                                Full name
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Mobile number
                            </th>
                            <th>
                                Address
                            </th>
                            <th>
                                Instructing course
                            </th>
                        </thead>
                        <tbody>

                            @foreach ($profiles as $profile)
                                <tr>
                                    <td>
                                        {{$profile->fullname}}
                                    </td>
                                    <td>
                                        {{$profile->email}}
                                    </td>
                                    <td>
                                        {{$profile->mobilenumber}}
                                    </td>
                                    <td>
                                        {{$profile->address}}
                                    </td>
                                    <td>
                                        {{$profile->instructingcourses}}
                                    </td>
                                    <td>
                                        <a href="{{route('portals.instructor.profile.edit',['id'=>$profile->id])}}" class="btn btn-info">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

@endsection
