

{{-- @foreach($users as $user)
	{{{ $user->username }}} User::where('votes', '>', 100)
@endforeach
--}}
@foreach($users as $user)
	Welcome {{{ $user->username }}}
@endforeach

<a href="logout">Logout</a>