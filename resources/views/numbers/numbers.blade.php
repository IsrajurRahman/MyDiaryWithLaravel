@extends('layouts.main')

@section('content')

    @if (\Session::has('success'))
      <div class="alert alert-success mt-5">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif

<div class="row" style="margin: 0px 0px 40px 0px;">
      <a href="{{ url('/numbers/create')}}" class="btn btn-success btn-fill btn-wd">Add Number</a>
</div>

<div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Contact Numbers</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <tr><th>#</th>
                                    	<th>Name</th>
                                    	<th>Number</th>
                                    	<th>Email</th>
                                    	<th>Address</th>
                                        <th>Action</th>
                                    </tr></thead>
                                    <tbody>
                                             @foreach($numbers as $number)
                                        <tr>
                                        	<td></td>
                                        	<td>{{ $number->name }}</td>
                                        	<td>{{ $number->number }}</td>
                                        	<td>{{ $number->email }}</td>
                                        	<td>{{ $number->address }}</td>
                                            <td>
                                           <form action="{{ route('numbers.destroy',$number->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('numbers.edit',$number->id) }}"><i class="fa fa-edit"></i></a>
                     @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete_btn"><i class="fa fa-trash"></i></button>
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

@endsection

@section('jscontent')
<script>
    $(document).ready(function(){
     $('.delete_btn').on('click', function(){
        if(confirm("Are you sure you want to delete it?"))
        {
            return true;
        }
        else
        {
            return false;
        }
        });

    });


</script>
@endsection
