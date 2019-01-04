@extends('layouts.main')

@section('content')

    @if (\Session::has('success'))
      <div class="alert alert-success mt-5">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif   

                <div class="row" style="margin: 0px 0px 40px 0px;">
                    <a href="{{ url('/notes/create')}}" class="btn btn-success btn-fill btn-wd">Add Note</a>
                </div>
                <div class="row">
                    @foreach($notes as $note)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">{{ $note->title }}</h4>
                                <!-- <p class="category">Created using <a href="https://www.google.com/fonts/specimen/Muli">Muli</a> Font Family</p> -->
                            </div>
                            <div class="content">

                                    <p class="text-primary">
                                       {{ $note->description }}
                                    </p>
                                    <table>
                                            <tr>
                                                <td style="padding-right: 20px;"><a href="{{ route('notes.edit',$note->id)}}" class="btn btn-warning">Edit</a></td>
                                                <td>
                                                  <form class="delete_form" action="{{ route('notes.destroy',$note->id)}}" method='POST'>
                                  @csrf
                                  <input type="hidden" name='_method' value='DELETE'>

                                  <input type="submit" class='btn btn-danger' value='Delete'>
                                </form>  
                                                </td>
                                            </tr>
                                    </table>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

@endsection


@section('jscontent')
<script>
    $(document).ready(function(){
     $('.delete_form').on('submit', function(){
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

