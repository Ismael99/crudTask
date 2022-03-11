<!DOCTYPE html>
<html>

<head>
  <title>Crud Task</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<style>
    body{
      overflow: hidden;
    }
    .container {
      max-width: 500px;
    }

    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
    .container-form{
      background-color: #154c79;

    }
    .input{
      background-color: #ffffff20;
      border: 0;
      border-bottom: 1px solid white;
    }
    .form-group{
      width: 50%;
      margin-left: auto;
      margin-right: auto;
    }
    .group-buttons{
      padding: 1rem;
      display: flex;
      flex-direction: row;
      justify-content: space-between;
    }
    label{
      color: #999;
    }
  </style>
</head>

<body>
  <div class="row align-items-center vh-100">
    <div class="col-8 mx-auto my-auto container-form " >
      <h3 class="mx-auto text-center mt-3 text-white" >Agregar Estudiante</h3>
    <form id="createStudent" class="" method="post" action="<?= site_url('/action-create') ?>">
      <div class="form-group">
        <label>First name</label>
        <input type="text" name="first_name" class="form-control input">
      </div>
      <div class="form-group">
        <label>Last Name</label>
        <input type="text" name="last_name" class="form-control input">
      </div>
      <div class="form-group">
        <label>Age</label>
        <input type="number" name="age" class="form-control input">
      </div>
      <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" class="form-control input">
      </div>
      <div class="form-group">
        <label>Codigo</label>
        <input type="text" name="codigo" class="form-control input">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control input">
      </div>
      <div class="group-buttons">
        <button type="button" onclick="window.history.back()" class="btn btn-outline-danger">Cancelar</button>
        <button type="submit" class="btn btn-outline-success">Save</button>
      </div>
    </form>
    </div>
  </div>

</body>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</html>