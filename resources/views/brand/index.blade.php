@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-header">
                    Brands list:
                </div>
                @foreach ($brands as $brand)
                    <div class="card">
                        <div class="card-body">
                            <a href="{{route('brand.show', ['id'=>$brand->id])}}">{{  $brand->name  }} </a>
                        </div>
                        <div class="card-body">
                            <div><img src="{{$brand->getFirstMediaUrl('images_brand')}}"/>
                            </div>
                            <p class="card-text"> {{ $brand->content }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection