<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update Password</h1>
    @if(session('message'))
    <div>{{session('message')}}</div>
@endif
    @if(session('error'))
    <div>{{session('error')}}</div>
    @endif
    @foreach($appdata as $data)
        <form method='post' action="{{route('update.students',$data->id)}}">
        @method('put')
        {{csrf_field()}}
        <input type="text" placeholder="{{$data->name}}" name='name' readonly>
        <input type="password" placeholder="{{$data->password}}" name='password' readonly>
        <input type="text" placeholder="{{$data->phone}}" name='phone' >
        <button type="submit">Update</button>
    </form>
    @endforeach
</body>
</html>