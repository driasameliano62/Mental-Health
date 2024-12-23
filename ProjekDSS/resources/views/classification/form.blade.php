@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col col-md-6 col-lg-6">

        <div class="container mt-5">
            <h1 class="text-center">Klasifikasi Stress Level</h1>
                    <form action="{{ route('classify.result') }}" method="POST" class="mt-4">
                        @csrf
                        <div class="mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input type="number" name="age" id="age" class="form-control" min="18" max="65" required>
                            <small class="form-text text-muted">Please enter your age between 18 and 65.</small>
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select name="gender" id="gender" class="form-control" required>
                                <option disabled selected></option>
                                <option value="Non-binary">Non-binary</option>
                                <option value="Prefer not to say">Prefer not to say</option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                            </select>
                            <small class="form-text text-muted">Select your gender identity.</small>
                        </div>
                        <div class="mb-3">
                            <label for="occupation" class="form-label">Occupation</label>
                            <select name="occupation" id="occupation" class="form-control" required>
                                <option disabled selected></option>
                                <option value="IT">IT</option>
                                <option value="Finance">Finance</option>
                                <option value="Healthcare">Healthcare</option>
                                <option value="Education">Education</option>
                                <option value="Engineering">Engineering</option>
                                <option value="Sales">Sales</option>
                                <option value="Other">Other</option>
                            </select>
                            <small class="form-text text-muted">Choose your primary occupation.</small>
                        </div>
                        <div class="mb-3">
                            <label for="mental_health_condition" class="form-label">Mental Health Condition</label>
                            <select name="mental_health_condition" id="mental_health_condition" class="form-control" required>
                                <option disabled selected></option>
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                            <small class="form-text text-muted">Do you currently have a mental health condition?</small>
                        </div>
                        <div class="mb-3">
                            <label for="consultation_history" class="form-label">Consultation History</label>
                            <select name="consultation_history" id="consultation_history" class="form-control" required>
                                <option disabled selected></option>
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                            <small class="form-text text-muted">Have you consulted a mental health professional before?</small>
                        </div>
                        <div class="mb-3">
                            <label for="sleep_hours" class="form-label">Sleep Hours</label>
                            <input type="number" step="0.1" name="sleep_hours" id="sleep_hours" class="form-control" min="4" max="10" required>
                            <small class="form-text text-muted">How many hours do you sleep on average per night? (4 to 10 hours)</small>
                        </div>
                        <div class="mb-3">
                            <label for="physical_activity_hours" class="form-label">Physical Activity Hours</label>
                            <input type="number" step="0.1" name="physical_activity_hours" id="physical_activity_hours" class="form-control" min="0" max="10" required>
                            <small class="form-text text-muted">How many hours do you engage in physical activity per week ? (max 10)</small>
                        </div>
                        <div class="d-grid gap-2 col-3 mx-auto mb-3">
                            <button type="submit" class="btn btn-custom">Klasifikasi</button>
                        </div>
                    </form>
        </div>
    </div>
</div>
@endsection