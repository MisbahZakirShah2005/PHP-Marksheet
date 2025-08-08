<?php
$name   = $_POST['name'];
$email  = $_POST['email'];
$class  = $_POST['class'];

$eng    = $_POST['eng'];
$urdu   = $_POST['urdu'];
$sci    = $_POST['sci'];

// logic per/total marks
$totalMarks = $eng + $urdu + $sci;
$percentage = ($totalMarks / 300) * 100;

// grading condition 
if ($percentage >= 80) {
    $grade = "A+";
} elseif ($percentage >= 70) {
    $grade = "A";
} elseif ($percentage >= 60) {
    $grade = "B";
} elseif ($percentage >= 50) {
    $grade = "C";
} elseif ($percentage >= 40) {
    $grade = "D";
} else {
    $grade = "Fail";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark">

        <h2 class="header text-center text-white p-3"><b><u>Student Marksheet</u></b></h2>
  

    <div class="container mt-4">

        <div class="card p-4">
            <h4 class="mb-3">Student Information</h4>
            <p><strong>Name:</strong> <?= $name ?></p>
            <p><strong>Email:</strong> <?= $email ?></p>
            <p><strong>Class:</strong> <?= $class ?></p>
        </div>

        <div class="card p-4 mt-3">
            <h4 class="mb-3">Marks Details</h4>
            <table class="table table-bordered text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Subject</th>
                        <th>Marks Obtained</th>
                        <th>Total Marks</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>English</td>
                        <td><?= $eng ?></td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>Urdu</td>
                        <td><?= $urdu ?></td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>Science</td>
                        <td><?= $sci ?></td>
                        <td>100</td>
                    </tr>
                    <tr class="table-info">
                        <th>Total</th>
                        <th><?= $totalMarks ?></th>
                        <th>300</th>
                    </tr>
                    <tr class="table-warning">
                        <th>Percentage</th>
                        <th colspan="2"><?= round($percentage, 2) ?>%</th>
                    </tr>
                    <tr class="<?= ($grade == 'Fail') ? 'table-danger' : 'table-success' ?>">
                        <th>Grade</th>
                        <th colspan="2"><?= $grade ?></th>
                    </tr>
                </tbody>
            </table>

            <div class="text-center mt-3">
                <a href="index.php" class="btn btn-dark">Go Back</a>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
