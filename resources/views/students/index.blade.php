@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-body">
        <div class="col-12">
            <div class="mb-3">
                <a href="{{ route('students.create') }}"><input href="" type="button" value="Create new" class="btn btn-primary"></a>            
            </div>
            <div class="card">
              <div class="table-responsive">
                <table class="table table-vcenter card-table">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Phone</th>
                      <th>Address</th>
                      <th>Class</th>
                      <th>Edit</th>
                      <th class="w-1"></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($students as $student)
                    <tr>
                      <td>{{ $student->name }}</td>
                      <td class="text-muted" >
                        {{ $student->phone_number }}
                      </td>
                      <td class="text-muted" >
                        {{ $student->address }}
                      </td>
                      <td class="text-muted" >
                        {{ $student->class }}
                      </td>
                      <td>
                        <a href="{{ route('students.edit', $student->id) }}"><input type="button" value="Edit" class="btn btn-primary"></a>
                        <br>
                        <form action="{{ route('students.destroy', $student->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection