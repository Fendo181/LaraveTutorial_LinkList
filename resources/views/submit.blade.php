@extends('layouts.app')
@section('content')

@section('content')
<div class="row">
    <h1>Submit a lin</h1>
    <form class="/submit" method="post">
        {!! csrf_field() !!}
        <div class="form-groupe">
            <label for="title">Title</label>
            <label type="text" class="form-control" id="title" name="title" placeholder="Title"></label>
        </div>
        <div class="form-group">
           <label for="url">Url</label>
           <input type="text" class="form-control" id="url" name="url" placeholder="URL">
       </div>
       <div class="form-group">
           <label for="description">Description</label>
           <textarea class="form-control" id="description" name="description" placeholder="description"></textarea>
       </div>
       <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
@endsection
