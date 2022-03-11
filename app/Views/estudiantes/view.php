<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Crud Task</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<style>

   .links-paginator{
      width: 100%;
      display: flex;
      flex-direction: row;
      justify-content: center;
   }

   .links-paginator a{
      font-size: 1rem;
      margin-right: 2rem;
      padding-left: .8rem;
      padding-right: .8rem;
      text-align: center;
      background-color: #5555;
      transition: transform .5s;
      border-radius: .5rem;
   } 
   .links-paginator a:hover{
      text-decoration: none;
      color: #f26;
   }
</style>

<body>
   <div class="container mt-4">
      <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  ...
               </div>
               <div class="modal-body">
                  ...
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-danger btn-ok">Delete</a>
               </div>
            </div>
         </div>
      </div>
      <div class="d-flex justify-content-end">
         <a href="<?php echo site_url('/create') ?>" class="btn btn-outline-primary">Add Students</a>
      </div>
      <div class="mt-5">
         <h2>Estudiantes</h2>
         <table class="table table-striped table-dark" id="list-students">
            <thead>
               <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Age</th>
                  <th>Address</th>
                  <th>Codigo</th>
                  <th>Email</th>
                  <th>Actions</th>
               </tr>
            </thead>
            <tbody>
               <?php if ($estudiantes) : ?>
                  <?php foreach ($estudiantes as $estudiante) : ?>
                     <tr>
                        <td><?php echo $estudiante->id; ?></td>
                        <td><?php echo $estudiante->first_name . " " . $estudiante->last_name; ?></td>
                        <td><?php echo $estudiante->age; ?></td>
                        <td><?php echo $estudiante->address; ?></td>
                        <td><?php echo $estudiante->codigo; ?></td>
                        <td><?php echo $estudiante->email; ?></td>
                        <td>
                           <a href="<?php echo base_url('update/' . $estudiante->id); ?>" class="btn btn-info">Edit</a>
                           <a onclick="return confirm('Eliminar Registro?')" href="<?php echo base_url('delete/' . $estudiante->id); ?>" class="btn btn-danger">Delete</a>
                        </td>
                     </tr>
                  <?php endforeach; ?>
               <?php endif; ?>
            </tbody>
         </table>
      </div>
   <div class="row ">
      <div class="links-paginator">
         <?php if ($pager) : ?>
            <?php $pagi_path = ''; ?>
            <?php $pager->setPath($pagi_path); ?>
            <?= $pager->links() ?>
         <?php endif ?>
      </div>
   </div>



   </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</body>

</html>