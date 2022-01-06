@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!--Publisher Title with the pub id-->
                <div class="card-header">
                    Publishers : {{ $publisher->id }}
                </div>

                <div class="card-body">
                    <table id="table-publishers" class="table table-hover">
                        <tbody>
                             <!--Publisher with publisher images-->
                              <!--Publisher displaying the publisher in the admin.show.php -->
                            <tr>
                                <td rowspan="8"><img src="{{ asset('storage/images/' . $publisher->image_location) }}" width="150"/></td>
                            </tr>
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
                    <a href="{{ route('admin.publishers.index', $publisher->id)}}"
                                            class="btn btn-secondary">Back</a>

                                  <!--Publisher going back to the admin.index.app-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
