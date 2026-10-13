<footer class="bg-dark text-white mt-4 py-3">
    <div class="container text-center">
        <h5 class="fw-bold">Student Portal</h5>

        <a href="{{ route('student.index') }}"
           class="text-white text-decoration-none mx-2">Home</a>

        <a href="{{ route('student.create') }}"
           class="text-white text-decoration-none mx-2">Add Student</a>

        <hr class="border-secondary">

        <p class="text-secondary small mb-0">
            &copy; {{ date('Y') }} Student Portal. All rights reserved.
        </p>
    </div>
</footer>