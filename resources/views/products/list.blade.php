@extends('layouts.main')

@section('title', $title )

@section('content')
<main>


    <!-- only owner con do -->
    <!-- <nav>
            <ul>
                @can('create', \App\Models\Product::class)
                    <li>
                        <a href="{{ route('product-create-form') }}">New Product</a>
                    </li>
                @endcan
            </ul>
        </nav> -->
    <!-- only owner con do -->

    <table>
        <h3>ไดฟุกุ</h3>

        <p>ไดฟุกุ : <em>{{ $product->name }}</em> </p><br />
        <p>ราคา : <em>{{ $product->price }}</em> </p><br />


    </table>
</main>

@endsection