<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3>Result View</h3>

                <table>
                    <tr>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Bangla</th>
                        <th>English</th>
                        <th>Math</th>
                        <th>Science</th>
                        <th>Total Marks</th>
                        <th>Total Point</th>
                        <th>Grade</th>
                    </tr>
                    <tr>
                    <tr>
                        <td>{{ $res->id }}</td>
                        <td>{{ $res->student_name }}</td>
                        <td>{{ $res->bangla }}</td>
                        <td>{{ $res->english }}</td>
                        <td>{{ $res->math }}</td>
                        <td>{{ $res->science }}</td>
                        <td>{{ $res->total }}</td>
                        <td>{{ $res->point }}</td>
                        <td>{{ $gra->grade }}</td>
                    </tr>
                    </tr>
                    <tr>
                        <td>
                            <a href="{{ route('home') }}">Home</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>