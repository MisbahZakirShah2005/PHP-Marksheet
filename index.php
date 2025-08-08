<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
     <!-- css cdn link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body class="bg-dark">
<div class="container my-5" >
<h2 class="header text-center text-white p-3"><b><u>Student Marks Submission</u></b></h2>
   

    <form action="result.php" method="POST" class="p-4 bg-white rounded shadow">
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Class</label>
        <input type="text" name="class" class="form-control" required>
      </div>

      <h5 class="mt-4">Enter Marks of Subjects:</h5>
<div class="row g-3 align-items-center">
<!-- first sub -->
  <div class="col-auto">
       <label class="form-label">English</label>
  </div>

  <div class="col-auto">
   <input type="text" name="eng" class="form-control" required>
  </div>
<!-- second sub -->
 <div class="col-auto">
       <label class="form-label">Urdu</label>
  </div>
  <div class="col-auto">
   <input type="text" name="urdu" class="form-control" required>
  </div>
<!-- third sub -->
 <div class="col-auto">
       <label class="form-label">Science</label>
  </div>
  <div class="col-auto">
   <input type="text" name="sci" class="form-control" required>
  </div>

  <button type="submit" class="btn btn-dark mt-4">Submit</button>
    </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>