<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meakulap @yield('title')</title>
</head>

<body>
    <header>
        <h1>Meakulap -@yield('title')</h1>

        <label> Search
            <input type="text" name="term" />
        </label><br />
        </label><br />
        <button type="submit" class="primary">Search</button>

        <nav>
            <ul>
                <li>
                    <a href="">Home</a><br />
                </li>
                <li>
                    <a href="">Product</a><br />
                </li>
                <li>
                    <a href="">Order</a><br />
                </li>
                <li>
                    <a href="">To Receive</a><br />
                </li>
                <li>
                    <a href="">Profile</a><br />
                </li>
            </ul>
        </nav>
    </header>

    <div class="content">
        <nav>
            @if(session()->has('status'))

            <div class="status">
                <span class="info">{{ session()->get('status') }}</span>
            </div>
            @endif

            @error('error')
            <div class="status">
                <span class="warn">{{ $message }} </span>
            </div>
            @enderror

        </nav>
        @yield('content')
    </div><br />

    <footer> &#xA9;Copyright, Meakulap's Online Shop</footer>

</body>

</html>