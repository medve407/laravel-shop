@if(count($errors)>0)
    <div class="alert alert-danger fade in">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
@if($route == 'signup')
    <form action="/signup" method="POST">
@else
    <form action="/login" method="POST">
@endif
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" name="username" id="username">
        </div>
        @if($route == 'signup')
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
        @endif
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
        {{ csrf_field() }}
    </form>