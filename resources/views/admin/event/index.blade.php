<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <div>
            <a href="{{route('admin.event.create')}}">Create a Product</a>
        </div>
        @foreach($events as $event)
        <tr>
            <td class="p-3 border border-gray-300 text-center">{{ $event->id }}</td>
            <td class="p-3 border border-gray-300 text-center">{{ $event->name }}</td>
            <td class="p-3 border border-gray-300 text-center">{{ $event->category }}</td>
            <td class="p-3 border border-gray-300 text-center">{{ $event->city }}</td>
            <td class="p-3 border border-gray-300 text-center">{{ $event->image }}</td>
            <td class="p-3 border border-gray-300 text-center">{{ $event->startReg }}</td>
            <td class="p-3 border border-gray-300 text-center">{{ $event->date }}</td>
            <td class="p-3 border border-gray-300 text-center">{{ $event->time }}</td>
            <td class="p-3 border border-gray-300 text-center">{{ $event->linkLocation }}</td>
            <td class="p-3 border border-gray-300 text-center space-x-2"></td>
            <td>
            <a href="{{route('admin.event.edit', ['event' => $event])}}">Edit</a>
            </td>
            <td>
            <form method="post" action="{{route('admin.event.destroy', ['event' => $event])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
            </td>
        </tr>
        <br>
        @endforeach
</body>
</html>