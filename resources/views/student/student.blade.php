<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <style>
        .{
            color: black;
            background-color: white;
            
        }
        .co{
            width: 100%;
        }
        form{
            margin: 50px;
            text-align: center;
            padding: 20px;
            border: 2px solid black;
        }
        input[type="text"]{
            padding: 10px;
            width: 300px;
            border: 2px solid black;
            border-radius: 5px;
        }
        table{
            border: 2px solid black;
            width: 100%;
        }
        th{
            background-color: gray;
        }
        td{
             border: 2px solid black;
        }
    </style> -->
  <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <div class=" p-6 w-full">
        <form action="{{ URL('allStudent') }}" class="w-fit mx-auto flex p-12 border my-3  justify-center items-center" method="get" >
            <input type="text" name="search" class="border py-2.5 border-r-0 px-6 mx-auto" placeholder="Enter your name" id="search">
            <button type="Submit" class="px-6 py-2.5 text-white border border-l-0 font-bold bg-gray-400">Search</button>
        </form>
        <table class="w-[95%] my-3 mx-auto">
            <tr>
                <th class="py-2 px-4 border bg-gray-400">ID</th>
                <th class="py-2 px-4 border bg-gray-400">Name</th>
                <th class="py-2 px-4 border bg-gray-400">Last Name</th>
                <th class="py-2 px-4 border bg-gray-400">score</th>
                <th class="py-2 px-4 border bg-gray-400">age</th>
                <th class="py-2 px-4 border bg-gray-400 " colspan="2">Delet or Update</th>
            </tr>
            @foreach($st as $student)
            <tr>
                <td class="border border-gray-400 p-1">{{ $student->id }}</td>
                <td class="border border-gray-400 p-1">{{ $student->name }}</td>
                <td class="border border-gray-400 p-1">{{ $student->lastName }}</td>
                <td class="border border-gray-400 p-1">{{ $student->score }}</td>
                <td class="border border-gray-400 p-1">{{ $student->age }}</td>
                <td class="border border-gray-400 p-0 text-center"><a href="{{ URL('student/update').'/'. $student->id }} " class="bg-green-600 px-6 py-1 text-white mx-auto">Update</a></td>
                <td class="border border-gray-400 p-1 text-center">
                    <form action="{{ URL('student/delete' , $student->id)  }}" onsubmit=" return confirm('Are Yoy sure you want to delete')" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-600 px-6 py-1 text-white mx-auto" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
       {{ $st->appends(request()->query())->links() }}
    </div>
</body>
</html>