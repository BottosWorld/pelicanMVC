<h1>Users:</h1>
@foreach($users as $user)
    <ul>{{$user['name']}}</ul><br>
@endforeach