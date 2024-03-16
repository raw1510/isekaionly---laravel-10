<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin-login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
    <script src="https://cdn.tailwindcss.com"></script> 
</head>
 {{-- <!-- resources/views/admin/login.blade.php -->
    @if($errors->has('message'))
    <div class="alert alert-danger">
        {{ $errors->first('message') }}
    </div>
@endif
<form action="{{ route('admin.login') }}" method="post">
    @csrf
    <label for="username">Username:</label>
    <input type="text" name="username" required>
    
    <label for="password">Password:</label>
    <input type="password" name="password" required>
    
    <button type="submit">Login</button>
</form> --}}

<body class="bg-gray-200 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded shadow-md max-w-md w-full">
        <img src="{{ asset('logo/logo.jpg') }}" alt="Logo" class="mb-8">


        <form action="{{ route('admin.login') }}" method="post" class="space-y-4">
            @csrf
            <label for="username" class="block text-sm font-medium text-gray-600">Username:</label>
            <input type="text" name="username" required
                class="border rounded-md p-2 w-full focus:outline-none focus:ring focus:border-blue-300">

            <label for="password" class="block text-sm font-medium text-gray-600">Password:</label>
            <input type="password" name="password" required
                class="border rounded-md p-2 w-full focus:outline-none focus:ring focus:border-blue-300">

            <button type="submit"
                class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                Login
            </button>
            @if($errors->has('message'))
            <div class="alert alert-danger mb-4">
                {{ $errors->first('message') }}
            </div>
            @endif
        </form>
    </div>


</body>
</html>