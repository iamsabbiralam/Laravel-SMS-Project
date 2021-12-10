<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3>Student Lists</h3>

                <table>
                    <tr>
                        <th>Student Name</th>
                        <th>Total Point</th>
                        <th>Grades</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        @foreach($res as $r)
                    <tr>
                        <td>{{ $r->student_name }}</td>
                        <td>{{ $r->point }}</td>
                        <td>
                            @foreach($gra as $g)
                            {{ $g->grade }}
                            @endforeach
                        </td>
                        <td>
                            <a href="{{ route('result.view', [ 'id' => $r->id ] ) }}">Details</a>
                        </td>
                        @endforeach
                    </tr>
                    <tr>
                        <td>
                            * <a href="{{ route('form.create') }}">Result submited form</a>
                        </td>
                        <td>
                            * <a href="{{ route('home') }}">Home</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>