<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Course Manager</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
  <h1 class="text-primary">My Courses</h1>

  <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Course Number">
    <div class="input-group-append">
      <button class="btn btn-outline-secondary" type="button">Add</button>
    </div>
  </div>
  <ul class="list-group">
    <div>
      <li class="list-group-item">
        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
        COMP3015

        <button class="btn btn-outline-secondary" type="button">Edit</button>
        <button class="btn btn-danger" type="button">Delete</button>
      </li>
    </div>
    <div>
      <li class="list-group-item">
        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
        COMP4731

        <button class="btn btn-outline-secondary" type="button">Edit</button>
        <button class="btn btn-danger" type="button">Delete</button>
      </li>
    </div>
    <div>
      <li class="list-group-item">
        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
        COMP2052

        <button class="btn btn-outline-secondary" type="button">Edit</button>
        <button class="btn btn-danger" type="button">Delete</button>
      </li>
    </div>
  </ul>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>