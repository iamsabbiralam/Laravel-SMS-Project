<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3>Result form</h3>

                <form action="{{ route('form.submit') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <label for="student_name">Student Name:</label>
                        <input type="text" name="student_name">
                    </div>
                    <div class="card-body">
                        <label for="bangla">Bangla:</label>
                        <input type="number" name="bangla" min="0" max="100">
                    </div>
                    <div class="card-body">
                        <label for="english">English:</label>
                        <input type="number" name="english" min="0" max="100">
                    </div>
                    <div class="card-body">
                        <label for="math">Math:</label>
                        <input type="number" name="math" min="0" max="100">
                    </div>
                    <div class="card-body">
                        <label for="science">Science:</label>
                        <input type="number" name="science" min="0" max="100">
                    </div>
                    <div class="card-body">
                        <input type="submit" value="Submit">
                    </div>
                    <div>
                        * <a href="{{ route('home') }}">Home</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>