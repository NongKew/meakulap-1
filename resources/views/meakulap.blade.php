<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meakulap's Login</title>
</head>

<body>
    @csrf
    <label>
        E-mail:<br /> <input type="text" name="email" required />
    </label><br />
    <label>
        Password:<br /> <input type="password" name="password" required />
    </label><br /><br />
    <button type="submit">Log-in</button><br /><br />

    Don't have an account?
    <a href="['sign-up-form']">Sign-up</a>

    @error('credentials')
    <div class="warn">{{ $message }}</div>
    @enderror


</html>