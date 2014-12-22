<h1> hello, new laravel. </h1>
{{ Form::open() }}
    <p>
        {{ Form::text('title') }}
    </p>

<p>
    {{ Form::textarea('content') }}
</p>

<p>
    {{ Form::submit('submit') }}
</p>
{{ Form::close() }}
