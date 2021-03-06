<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- font -->
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto+Slab:300,400,700|ZCOOL+QingKe+HuangYou&display=swap" rel="stylesheet"> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 

  <link rel="stylesheet" href="./forms.css" >


</head>
 <body >
     <div class="container mt-5">
        <p class="navbar-brand mb-5" id="logo-forms">
            <svg class="bi bi-bucket-fill" width="70px" height="70px" viewBox="0 0 20 20" fill="black" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 3.5A4.5 4.5 0 005.5 8h-1a5.5 5.5 0 1111 0h-1A4.5 4.5 0 0010 3.5z" clip-rule="evenodd"></path>
                <path fill-rule="evenodd" d="M3.61 7.687A.5.5 0 014 7.5h12a.5.5 0 01.488.608l-1.826 8.217a1.5 1.5 0 01-1.464 1.175H6.802a1.5 1.5 0 01-1.464-1.175L3.512 8.108a.5.5 0 01.098-.42z" clip-rule="evenodd"></path>
            </svg>
        Bartender Life</p>

        <!-- back button -->
        <div class="mb-3">
        <svg class="bi bi-chevron-left" width="1em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M13.354 3.646a.5.5 0 010 .708L7.707 10l5.647 5.646a.5.5 0 01-.708.708l-6-6a.5.5 0 010-.708l6-6a.5.5 0 01.708 0z" clip-rule="evenodd"></path>
        </svg>
        <a href="../login/login.php" class="return">Retours</a>
        </div>



        <form action="ajouter.php" method="post">
     
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" >
                </div>

                <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" >
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom">
                </div>

                <div class="form-group col-md-6">
                <label for="prenom">Prenom</label>
                <input type="text" class="form-control" name="prenom">
                </div>
            </div>

            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input type="text" class="form-control" name="adresse" placeholder="1234 rue de">
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="ville">Ville</label>
                <input type="text" class="form-control" name="ville">
                </div>

                <div class="form-group col-md-4">
                <label for="pays">Pays</label>
                <select name="pays" class="form-control">
                    <option selected>Choose...</option>
                    <option value="france">France</option>
                    <option value="france">France</option>
                    <option value="france">France</option>
                    <option value="france">France</option>
                </select>
                </div>

                <div class="form-group col-md-2">
                <label for="postal">Postal</label>
                <input type="text" class="form-control" name="postal">
                </div>

            </div>
            <button type="submit" value="envoyer" class="btn btn-primary">S'inscrire</button>
        </form>
    </div>



    <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous" async></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous" async></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous" async></script>
  </body>
</html>