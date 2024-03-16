<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update articles</title>
</head>
<body>
    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-semibold mb-4">Update Article</h1>
    
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
    
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-600">Title</label>
                <input type="text" name="title" id="title" value="{{ $data->title }}" class="mt-1 p-2 w-full border rounded-md">
            </div>
    
            <div class="mb-4">
                <label for="content" class="block text-sm font-medium text-gray-600">Content</label>
                <textarea name="content" id="content" class="mt-1 p-2 w-full border rounded-md">{{ $data->content }}</textarea>
            </div>
    
            <div class="mb-4">
                <label for="date" class="block text-sm font-medium text-gray-600">Date</label>
                <input type="date" name="date" id="date" value="{{ $data->date }}" class="mt-1 p-2 w-full border rounded-md">
            </div>
    
            <div class="mb-4">
                <label for="images" class="block text-sm font-medium text-gray-600">Images</label>
                <input type="file" name="images" id="images" class="mt-1 p-2 w-full border rounded-md">
            </div>
    
            <div class="mb-4">
                <label for="thumbnail" class="block text-sm font-medium text-gray-600">Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail" class="mt-1 p-2 w-full border rounded-md">
            </div>
    
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">Update data</button>
        </form>
    </div>
</body>
</html>