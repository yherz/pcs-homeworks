<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   <div class="container">
        <form action="submit.php" method="POST">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="age">Age:</label>
        <input type="numeric" class="form-control" id="age" name="age" min="0" max="120"required>
    </div>
    <div class="form-group">
        <label for="rating">Rating:</label>
        <input type="number" min="1" max="10" step="1" class="form-control" id="age" name="rating">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
</body>
</html>