<!DOCTYPE html>
<html lang="es">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <form action="store.php" method="post">
        <div class="form-group">
          <label for="txtFName"></label>
          <input type="text" class="form-control" name="txtFName" id="" aria-describedby="helpId" placeholder="First Name">
          <small id="helpId" class="form-text text-muted">First Name</small>
        </div>
        <div class="form-group">
          <label for="txtLName"></label>
          <input type="text" class="form-control" name="txtLName" id="" aria-describedby="helpId" placeholder="Last Name">
          <small id="helpId" class="form-text text-muted">Last Name</small>
        </div>
        <div class="form-group">
          <label for="txtSubject"></label>
          <input type="text" class="form-control" name="txtSubject" id="" aria-describedby="helpId" placeholder="Subject">
          <small id="helpId" class="form-text text-muted">Subject</small>
        </div>
        <div class="form-group">
          <label for="txtaMessage"></label>
          <textarea class="form-control" name="txtaMessage" id="" rows="3"></textarea>
          <small id="helpId" class="form-text text-muted">Message</small>
        </div> <br>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    
</body>
</html>