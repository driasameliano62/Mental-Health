@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Data Mental Health</h1>
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-header">
                <tr>
                    <th>No.</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Occupation</th>
                    <th>Mental Health Condition</th>
                    <th>Consultation History</th>
                    <th>Sleep Hours</th>
                    <th>Physical Activity Hours</th>
                    <th>Stress Level</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $index => $row)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $row['Age'] }}</td>
                        <td>{{ $row['Gender'] }}</td>
                        <td>{{ $row['Occupation'] }}</td>
                        <td>{{ $row['Mental_Health_Condition'] }}</td>
                        <td>{{ $row['Consultation_History'] }}</td>
                        <td>{{ $row['Sleep_Hours'] }}</td>
                        <td>{{ $row['Physical_Activity_Hours'] }}</td>
                        <td>{{ $row['Stress_Level'] }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center">Tidak ada data tersedia</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="justify-content-center">
            {{ $data->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection