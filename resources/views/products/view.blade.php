@extends('layouts.main')

@section('title', $title)

@section('content')
<nav>


    <img src="/IMG_2052.JPG" </body>

    <ul>
        <a href="">Daifuku</a><br />
        <a href="">click here to order</a>
    </ul>

    <ul <a href="">Mochi</a><br />
        <a href="">click here to order</a>


        <!-- only owner can do -->

        <!-- @can('update', \App\Models\Product::class)
        <li>
            <a href="{{ route('product-update-form', ['product' => $product->code,]) }}">Update</a>
        </li>
        @endcan -->

        <!-- @can('delete', \App\Models\Product::class)
        <li>
            <a href="{{ route('product-delete', ['product' => $product->code,]) }}">Delete</a>
        </li>
        @endcan -->

        <!-- only owner can do -->

    </ul>
</nav>


@endsection