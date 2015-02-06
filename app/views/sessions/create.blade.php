<title>bienvenue</title>

    {{ Form::open(array('route' => 'sessions.store')) }}
        <h1>Login</h1>

            {{ Form::label('email', 'email') }}
            {{ Form::email('email') }}

            {{ Form::label('Paswword', 'Password :') }}
            {{ Form::password('password') }}

        {{ Form::submit('Submit!') }}
    {{ Form::close() }}
