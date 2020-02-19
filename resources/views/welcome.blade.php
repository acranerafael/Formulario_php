<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
<body>

    <div class="container">
        <h2>Formulário de Contato</h2>

        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

{!! Form::open(['route'=>'contact.store']) !!}
    {!! csrf_field() !!}

    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::label('Nome:') !!}
            {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Digite o seu Nome completo']) !!}
        <span class="text-danger">{{ $errors->first('name') }}</span>
    </div>

    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
            {!! Form::label('Email:') !!}
            {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Digite o seu email']) !!}
        <span class="text-danger">{{ $errors->first('email') }}</span>
    </div>

    <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
            {!! Form::label('Mensagem:') !!}
            {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Digite a sua mensagem']) !!}
        <span class="text-danger">{{ $errors->first('message') }}</span>
    </div>

    <div class="form-group">
        <button class="btn btn-default">Enviar</button>
    </div>

{!! Form::close() !!}

    </div>

</body>
</html>
