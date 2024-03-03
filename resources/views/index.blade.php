
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th {
            padding:10px 40px;
            text-align:center;
            background:skyblue;
        }
        td {
            padding:10px 40px;
            text-align:center;
        }
    </style>
</head>
<body>
    <div>
    <a href="{{route('insert')}}">Add Student</a>
    </div>
    <h1>Insert data</h1>
    @if(session('message'))
    <div>
        {{session('message')}}
    </div>
    @endif
    @if(session('error')) 
    <div>{{session('error')}}</div>
    @endif
<table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>password</th>
                <th>phone</th>
                <!-- Add other columns as needed -->
            </tr>
        </thead>
        <tbody>
            @foreach ($appdata as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->name}}</td>
                    <td>{{ $data->password }}</td>
                    <td>{{ $data->phone }}</td>
                    <td>
                        <a href="{{route('getData',$data->id)}}">edit</a>
                        <a href="{{route('delete',$data->id)}}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>