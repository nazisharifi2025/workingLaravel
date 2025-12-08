<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
        button{
            padding: 10px 6px;
            background-color: gray;
            border-radius: 5px;
        }
        table{
            border: 2px solid black;
            width: 100%;
        }
        th{
            background-color: gray;
            padding: 6px 4px;
        }
        td{
             border: 2px solid black;
             padding: 3px 4px;
        }
    </style>
  <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <div class="co p-6">
        <form action="{{ URL('allStudent') }}" method="get" >
            <input type="text" name="search" placeholder="Enter your name" id="search">
            <button type="Submit" class="px-6 py-3 text-white font-bold bg-gray-400">Search</button>
        </form>
        <table class="w-[95%] my-3 mx-auto">
            <tr>
                <th class="py-2 px-4 border bg-gray-400">ID</th>
                <th class="py-2 px-4 border bg-gray-400">Name</th>
                <th class="py-2 px-4 border bg-gray-400">Last Name</th>
                <th class="py-2 px-4 border bg-gray-400">score</th>
                <th class="py-2 px-4 border bg-gray-400">age</th>
                <th class="py-2 px-4 border bg-gray-400">Update</th>
            </tr>
            @foreach($st as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->lastName }}</td>
                <td>{{ $student->score }}</td>
                <td>{{ $student->age }}</td>
                <td><a href="{{ URL('student/update').'/'. $student->id }}">Update</a></td>
            </tr>
            @endforeach
        </table>
       {{ $st->appends(request()->query())->links() }}
    </div>
</body>
</html>