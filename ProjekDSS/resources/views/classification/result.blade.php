<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Klasifikasi</title>
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
</head>
<body>
    <div class="container-md text-center mt-5">
        <h1 class="text-center">Hasil Klasifikasi Stress Level</h1>
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
            <div class="card p-3">
                <div class="alert mt-3 {{ 
                    $predictedClass == 'Low' ? 'alert-success' : 
                    ($predictedClass == 'Medium' ? 'alert-warning' : 
                    ($predictedClass == 'High' ? 'alert-danger' : 'alert-info'))
                    }}">
                    <strong>Klasifikasi: </strong>{{ $predictedClass }}
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">High</h5>
                                <p class="card-text">{{ number_format($percentages['High'], 2) }}%</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Medium</h5>
                                <p class="card-text">{{ number_format($percentages['Medium'], 2) }}%</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Low</h5>
                                <p class="card-text">{{ number_format($percentages['Low'], 2) }}%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

        </div>
        <div class="d-grid col-3 mx-auto">
            <a href={{"/form"}} class="btn btn-primary mt-4">Kembali ke Form</a>
        </div>
    </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
