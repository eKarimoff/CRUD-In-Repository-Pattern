@extends('layouts.app')

@section('content')

<h1 class="text-center mt-2">{{ $product->title }} | Detail</h1>
<hr>
<br>


<div class="container">
    <div class="row">
        <div class="col-md-9" style="display:flex">

            <div class="container m-2 p-2">
                <img src="/image/{{ $product->image }}" height="450px" alt="...">
                <div class="container m-2 p-2">
                  <h2>{{ $product->title }}</h2>
                  <h3>Price: ${{ $product->price }}</h3>
                  <hr>
                  <p>{{ $product->description }}</p>
                  <a href="{{ route('product.index') }}" class="btn btn-success">Go Home</a>
                  <a href="{{ route('product.edit',$product->id) }}" class="btn btn-primary">Edit</a>
                </div>
              </div>

        </div>


        {{-- <div class="col-md-3">
            <h3>All Comments</h3>

            <div class="comments p-2 m-2" style="background-color: rgb(232, 251, 246)">
                @foreach ($product->comments as $comment)
                    <h5>{{ $comment->comment }} ( {{ $comment->rating }} )</h5>
                    <hr>
                @endforeach
            </div>


           <h3>Add Comment...</h3>

           <div class="container m-2 p-2">

            <form action="" method="POST">
                @csrf

                <input type="hidden" id="id" name="id" value="{{ $product->id }}">

                <div class="mb-3">
                    <label for="comment" class="form-label">Comment</label>
                    <input type="text" class="form-control" name="comment" id="comment" placeholder="Enter Comment">
                </div>

                <div class="mb-3">
                    <label for="rating" class="form-label">Rating</label>
                    <input type="number" class="form-control" name="rating" id="rating" placeholder="Enter Rating">
                </div>

                  <button type="submit" id="addCommentBtn" class="btn btn-success">comment</button>

            </form>

           </div> --}}



        </div>
    </div>
</div>




@endsection