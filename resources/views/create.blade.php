
    <h1>Insert data</h1>
    @if(session('message'))
    <div>
        {{session('message')}}
    </div>
    @endif
    @if(session('error')) 
    <div>{{session('error')}}</div>
    @endif
    <form method='post' action="{{route('store')}}" >
    {{csrf_field()}}
        <input type="file" name="image">
        <input type="text" placeholder='name' name='name'>
        <input type="password" placeholder='password' name='password'>
        <input type="`text`" placeholder='phone number' name='phone'>
        <button type='submit'>Add student</button>
    </form>
</body>
</html>