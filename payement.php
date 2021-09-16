
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>payement</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">

    

    
<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    
    <link href="css/pay.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <?php 
    include('navbar.php');
    include('header.php');

     ?> 
    
<div class="container">
  

  <main>
    

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
      
        <ul class="list-group mb-3">
          
        
       
        
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong> <?php 
             echo "".$_POST["totale"]."" ?></strong>
          </li>
        </ul>

       
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Finalisation de la commande</h4>
        <form action="inscription/traitepay.php" method="POST">
          
        
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nom</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" name="nome" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Prenom</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" name="prenome" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

           

            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com" name="emaile">
              <div class="invalid-feedback">
              
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" name="adress" required>
              <div class="invalid-feedback">
                
              </div>
            </div>

           


           

          

          <hr class="my-4">

         

         

          <hr class="my-4">

          <h4 class="mb-3">Payment</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymente" type="radio"   required>
              <label class="form-check-label" for="credit">Par ccp</label>
            </div>
            <div class="form-check">
              <input id="credit"name="payemente" type="radio"   required>
              <label class="form-check-label" for="credit">Sur place</label>
            </div>
           
          </div>

      

           

          <hr class="my-4">

          <button class="w-100 btn  btn-lg" type="submit" style="background-color: #EED6EE;  width: 120px;
     padding: 5px; border-radius: 25px;" >Acheter</button>
        </form>
         
        

      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <?php 
    include('footer.php');

     ?>
  
  </footer>
  
</div>


    <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
