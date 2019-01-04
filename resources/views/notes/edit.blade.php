@extends('layouts.main')

@section('content')

                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add a new Note</h4>
                            </div>
                            <div class="content">
                                <form method="post" action="{{ route('notes.update', $note->id) }}">
                                    @method('PATCH')
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Title:</label>
                                                <input type="text" class="form-control border-input" name="title" value="{{ $note->title }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Note Description:</label>
                                                <textarea rows="5" class="form-control border-input" name="description">{{ $note->description }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">UPDATE NOTE</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>

@endsection