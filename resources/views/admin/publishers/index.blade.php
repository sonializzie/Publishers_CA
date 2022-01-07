@extends('layouts.app')

@section ('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            Publishers
            <!-- The add button will call admin.publishers.create, the create will be implemented when submitted -->
            <a href="{{ route('admin.publishers.create') }}" class="btn btn-primary float-right">Add</a>
          </div>
          <div class="card-body">
            @if (count($publishers)=== 0)
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
                  <th></th>
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
                        <a href="{{ route('admin.publishers.show', $publisher->id) }}" class="btn btn-success">View</a>
                        <!-- Edit button table for publishers  -->
                        <a href="{{ route('admin.publishers.edit', $publisher->id) }}" class="btn btn-warning">Edit</a>
                        <!-- Delete button table for publishers  -->
                        <form style="display:inline-block" method="POST" action="{{ route('admin.publishers.destroy', $publisher->id) }}">
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="_token"  value="{{ csrf_token() }}">
                          <button type="submit" class="form-cotrol btn btn-danger">Delete</a>
                        </form>
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
