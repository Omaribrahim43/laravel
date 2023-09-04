<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="row mt-5 justify-content-center">
        <div class="col-md-4 col-sm-8">
            <h2 class="mb-2">Login</h2>
            {{-- @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif --}}
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('login.submit') }}" method="POST">
                        @csrf
                        <div class="mb-2">
                            <label for="" class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control">
                            <span style="color: red">
                                @error('username')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Email</label>
                            <input type="text" name="email" id="email" class="form-control">
                            <span style="color: red">
                                @error('email')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                            <span style="color: red">
                                @error('password')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>
