<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create event</h1>
    <form method="post" action="{{route('admin.event.update', ['event'=>$event])}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-4">
                <label for="name" class="block text-gray-700">Name:</label>
                <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded mt-1" value="{{$event->name}}">
            </div>
            <div class="mb-4">
                <label for="category" class="block text-gray-700">Category:</label>
                <select id="category" name="category" class="w-full p-2 border border-gray-300 rounded mt-1" value="{{$event->category}}">
                    <option value="pottery">Pottery</option>
                    <option value="cooking">Cooking</option>
                    <option value="flower">Flower</option>
                    <option value="bag">Bag</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="city" class="block text-gray-700">City:</label>
                <input type="text" id="city" name="city" class="w-full p-2 border border-gray-300 rounded mt-1" value="{{$event->city}}">
            </div>
            <div class="mb-4">
                <label for="image" class="block text-gray-700" >Image:</label>
                <input type="file" id="image" name="image" class="w-full p-2 border border-gray-300 rounded mt-1" value="{{$event->image}}">
            </div>
            <div class="mb-4">
                <label for="startReg" class="block text-gray-700">Start Registration:</label>
                <input type="date" id="startReg" name="startReg" class="w-full p-2 border border-gray-300 rounded mt-1" value="{{$event->startReg}}">
            </div>
            <div class="mb-4">
                <label for="date" class="block text-gray-700">Date:</label>
                <input type="date" id="date" name="date" class="w-full p-2 border border-gray-300 rounded mt-1" value="{{$event->date}}">
            </div>
            <div class="mb-4">
                <label for="time" class="block text-gray-700">Time:</label>
                <input type="time" id="time" name="time" class="w-full p-2 border border-gray-300 rounded mt-1" value="{{$event->time}}">
            </div>
            <div class="mb-4">
                <label for="linkLocation" class="block text-gray-700">Link Location:</label>
                <input type="url" id="linkLocation" name="linkLocation" class="w-full p-2 border border-gray-300 rounded mt-1" value="{{$event->linkLocation}}">
            </div>
            <div class="mb-6">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">update</button>
            </div>
    </form>
</body>
</html>