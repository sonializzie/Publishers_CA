@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Publishers</div>

                <div class="card-body">
                    @if (count($publishers)===0)
                        <p>There are no Publishers!</p>

                        @else

                        <table id="table-publishers" class="table table-hover">
                            <thead>
                                <th>Pub Name</th>
                                <th>Manager Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Country</th>
                            </thead>

                            <tbody>
                                <!-- Loop through the following for every item in the $publishers[] array, display pub_name, mananger_name, phone etc. to the screen -->
                                @foreach ($publishers as $publisher)
                                <tr data-id="{{$publisher->id}}">
                                    <td>{{ $publisher->pub_name }}</td>
                                    <td>{{ $publisher->manager_name }}</td>
                                    <td>{{ $publisher->phone }}</td>
                                    <td>{{ $publisher->email }}</td>
                                    <td>{{ $publisher->city }}</td>
                                    <td>{{ $publisher->state }}</td>
                                    <td>{{ $publisher->country }}</td>

                                    <td>
                                         <!-- View button table for publishers  -->
                                        <a href="{{ route('user.publishers.show', $publisher->id)}}"
                                            class="btn btn-primary">View</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
