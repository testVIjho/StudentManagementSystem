@extends('layout.default')


@section('main')
<div class="container mt-5">

     <div class="row justify-content-center">
        <div class="col-12 col-md-4">
    <div class="card shadow">
        <div class="card-body">

            <h2 class="text-primary">User Form</h2>

            <form action="{{ route('student.update',$student->id) }}" method="POST">
                @csrf
                @method('PUT')  <!-- PUT method used to Update the Student -->
                <div class="mb-3">
                    <label class="form-label">Name</label>

                    <input
                        type="text"
                        name="name"
                        class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name',$student->name) }}"
                    >

                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Age</label>

                    <input
                        type="text"
                        name="age"
                        class="form-control @error('age') is-invalid @enderror"
                        value="{{ old('age',$student->age) }}"
                    >

                    @error('age')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Course</label>

                    <input
                        type="text"
                        name="course"
                        class="form-control @error('course') is-invalid @enderror"
                        value="{{ old('course',$student->course) }}"
                    >

                    @error('course')
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

@endsection

@section('footer')
<h3>Edit Student</h3>
@endsection