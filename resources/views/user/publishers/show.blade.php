@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Publishers : {{ $publisher->id }}  <!--This is how I pass the ID-->
                </div>

                 <!--This form is for viewing only for the publishers.-->
                <div class="card-body">
                    <table id="table-publishers" class="table table-hover">
                        <tbody>
                            <tr>
                                <td>Pub Name</td>
                                <td>{{ $publisher->pub_name }}</td>
                            </tr>
                            <tr>
                                <td>Manager Name</td>
                                <td>{{ $publisher->manager_name }}</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>{{ $publisher->phone }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $publisher->email }}</td>
                            </tr>
                            <tr>
                                <td>City</td>
                                <td>{{ $publisher->city }}</td>
                            </tr>
                            <tr>
                                <td>State</td>
                                <td>{{ $publisher->state }}</td>
                            </tr>
                            <tr>
                                <td>Country</td>
                                <td>{{ $publisher->country }}</td>
                            </tr>
                        </tbody>
                    </table>
                     <!-- The Back button will return to the user.publishers.index-->
                    <a href="{{ route('user.publishers.index', $publisher->id)}}"
                                            class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
