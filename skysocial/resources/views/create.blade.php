@extends('layouts.app')
@section('content')

    <div class="container">
        <form action="{{route('create')}}" method="POST" enctype="multipart/form-data">
            @csrf
                    <textarea class="form-control" id="summary-ckeditor" name="summaryckeditor" style="width:60rem; height:6rem;"></textarea>
                    <!--<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                    <script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
                    <script>
                        CKEDITOR.replace( 'summary-ckeditor' );
                    </script>-->
                    <input type="file" name="image" id=""> <br>
                    <button type="submit" class="btn mt-3" style="background:#87cefa;color:#fff"> Create Post</button>
                    <input type="hidden" value=" {{ Session::token() }} " name="_token">
        </form>
    </div>





 @endsection
