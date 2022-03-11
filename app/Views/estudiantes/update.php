<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter Crud tutorial on code-source.tempurl.host</title>
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
      font-size: 12px;
      color: red;
    }
    .container-form{
      background-color: #154c79;

    }
    .input{
      background-color: #ffffff20;
      border: 0;
      border-bottom: 1px solid white;
      color: white
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

<body >
  <div class="row align-items-center vh-100">
    <div class="col-8 mx-auto my-auto container-form " >
      <h3 class="mx-auto text-center mt-3 text-white" >Editar Estudiante</h3>
    <form class="p-4" id="updateStudent" name="updateStudent" method="post" action="<?= site_url('/action-update') ?>">
    <input type="hidden" name="id" id="id" value="<?php echo $currentStudent->id; ?>">
      <div class="form-group">
        <label>First name</label>
        <input type="text" name="first_name" class="form-control input" value="<?php echo $currentStudent->first_name; ?>">
      </div>
      <div class="form-group">
        <label>Last Name</label>
        <input type="text" name="last_name" class="form-control input" value="<?php echo $currentStudent->last_name; ?>">
      </div>
      <div class="form-group">
        <label>Age</label>
        <input type="number" name="age" class="form-control input" value="<?php echo $currentStudent->age; ?>">
      </div>
      <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" class="form-control input" value="<?php echo $currentStudent->address; ?>">
      </div>
      <div class="form-group">
        <label>Codigo</label>
        <input type="text" name="codigo" class="form-control input" value="<?php echo $currentStudent->codigo; ?>">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control input" value="<?php echo $currentStudent->email; ?>">
      </div>
      <div class="group-buttons" >
        <button type="button" onclick="window.history.back()" class="btn btn-outline-danger">Cancelar</button>
        <button type="submit" class="btn btn-outline-success">Save</button>
      </div>
    </form>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#updateStudent").length > 0) {
      $("#updateStudent").validate({
        rules: {
          first_name: {
            required: true,
          },
          last_name: {
            required: true,
          },
          age: {
            required: true,
          },
          address: {
              required: true
          },
          codigo: {
              required: true
          },
          email: {
            required: true,
            maxlength: 60,
            email: true,
            unique:true
          },
        },
        messages: {
          first_name: {
            required: "First name is required.",
          },
          last_name: {
            required: "Last name is required.",
          },
          age: {
            required: "Age is required.",
          },
          address: {
            required: "Address is required.",
          },
          codigo: {
            required: "Codigo is required.",
          },
          email: {
            required: "Email is required.",
            email: "It does not seem to be a valid email.",
            maxlength: "The email should be or equal to 60 chars.",
            unique: "Es unico..."
          },
        },
      })
    }
  </script>
</body>

</html>