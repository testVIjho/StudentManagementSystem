<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>
<body>
    <!-- {{url('/west')}} -->
   {{-- <a href="{{route('Test')}}">Go To Test</a>--}} 

 {{-- laravel comment method--}}
<!-- @if($errors->any())
    <div>
        @foreach($errors->all() as $error)
        <li style="color:red">{{$error}}</li>
        @endforeach
    </div>
@endif -->


<div class="container mt-5">
     <div class="row justify-content-center">
        <div class="col-12 col-md-4">
    <div class="card shadow">
        <div class="card-body">

            <h2 class="text-primary">User Form</h2>

            <form action="{{ route('formsubmitted') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Name</label>

                    <input
                        type="text"
                        name="name"
                        class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name') }}"
                    >

                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>

                    <input
                        type="email"
                        name="email"
                        class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email') }}"
                    >

                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button class="btn btn-primary">
                    Submit
                </button>
            </form>

        </div>
    </div>
        </div>
     </div>
</div>

 
</body>
</html>