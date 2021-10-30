<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
</head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Pengelolaan Pegawai</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="index.php">Home</a>
          </div>
        </div>
    </nav>

    

    <?php
    $api_url = 'https://hidok.co.id/hidok/api/Pegawai/ListData?filter=';


    // Read JSON file
    $json_data = file_get_contents($api_url);
    
    // Decode JSON data into PHP array
    $response_data = json_decode($json_data, true);
    
    // All user data exists in 'data' object
    //$user_data = $response_data->data;
    
    // Cut long data into small & select only first 10 records
    //$user_data = array_slice($user_data, 0, 9);
    
    // Print data if need to debug
    
    ?>

    <div class="container">
        <div class="input">
        <a class="btn btn-success" href="input_data.php" role="button" >New Data</a>
        </div>
        <table class="table table-success table-striped">
            <thead>
            <tr class="table-warning ">
                <td class="table-warning ">Kode</td>
                <td class="d-flex align-items-center">Nama Pegawai</td>
                <td class="table-warning">Action</td>
            </tr>
            </thead>

            <tbody>
            <?php foreach($response_data as $value) { ?>
            <tr>
                <td> <?= $value['PegawaiID'] ?></td>
                <td> <?= $value['PegawaiName'] ?></td> 
                <td> <a class="btn btn-primary" href="edit_data.php" role="button">Edit</a> <a class="btn btn-danger" href="delete.php" role="button" >Delete</a></td>
            </tr>
            <?php } ?>
            </tbody>
                
        </table>
    </div>

    

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>