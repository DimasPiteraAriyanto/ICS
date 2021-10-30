<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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

    <div class="card">
        <div class="card-body">
        <form action="index.php" name="input" method="post" onsubmit="return validateForm()" required>
            <table>
                <tr>
                    <td>PegawaiID</td><br/>
                    <td>
                    <input type="text" name="pegawaiID" required>
                    </td>
                <tr>
                    <td>Nama Pegawai</td><br/>
                    <td><input type="text" name="PegawaiName" required></td>
                </tr>
                </tr>
                <td><a class="btn btn-warning" href="index.php" role="button" >Back</a></td> <td><input class="btn btn-warning" type="Submit" onClick="jsRESTClientPOST()"></td>
            </table>
        </form>
        </div>
    </div>
    

<script>
    function validateForm() {
  var x = document.forms["input"]["PegawaiID"].value;
  if (x == "") {
    alert("Harus diisi");
    return false;
  }
}
</script>
</body>

</html>