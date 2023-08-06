<?php require './students.php';
$students = new Student();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light px-5">
            <div class="container-fluid">
                <a class="navbar-brand" href="./">Students Management System</a>
            </div>
        </nav>
    </header>

    <div class="container my-5 py-5">

        <div class="row">
            <div class="col-6">
                <form class="w-75" action="./add_student.php" method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control" id="age" name="age" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="dob" class="form-label">DOB</label>
                        <input type="date" class="form-control" id="dob" name="dob" required>
                    </div>

                    <div class="mb-3">
                        <label for="grade" class="form-label">Grade</label>
                        <input type="number" class="form-control" id="grade" name="grade" required>
                    </div>

                    <div class="form-check">
                        <p class="m-0">Gender:</p>
                        <div>
                            <label for="radio-male">Male</label>
                            <input class="form-check-input" type="radio" id="radio-male" value="male" name="gender">
                        </div>
                        <div>
                            <label for="radio-female">Female</label>
                            <input class="form-check-input" type="radio" id="radio-female" value="female" name="gender">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Add</button>
                </form>
            </div>

            <div class="col-6">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Student Name</th>
                            <th scope="col">Student Age</th>
                            <th scope="col">Student Grade</th>
                            <th scope="col">Student Email</th>
                            <th scope="col">Student Date Of Birth</th>
                            <th scope="col">Student Gender</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($students->get_all_students() as $student) :  ?>
                            <tr>
                                <td><?= $student->name ?></td>
                                <td><?= $student->age ?></td>
                                <td><?= $student->grade ?></td>
                                <td><?= $student->email ?></td>
                                <td><?= $student->dob ?></td>
                                <td><?= $student->gender ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

</body>

</html>