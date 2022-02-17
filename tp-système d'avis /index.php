<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/14cc56f2ab.js" crossorigin="anonymous"></script>


</head>
<style>
i.fa-solid {
    color: yellow ;
}

i.fa-duotone fa-star{
    color: black ;
}

form{
    margin-top: 20px;
}
div.card{
    margin-left: auto;
    margin-right: auto;
    width: 70%;
    justify-content: center;
}

div.from-check{
    justify-content: space-evenly;
}
</style>


<body>
    <h1> Ch'ti Restaurant </h1>
 <form>
   <div class="card">

      <h5 class="card-header">Note moyenne</h5>

        <div class="card-body">

         <h5 class="card-title">Special title treatment</h5>
         <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
         <a href="#" class="btn btn-primary">Note</a>

        </div>

   </div>

 </form>   

 <form>

  <div class="card">

   <div class="card-header">
     Publier un avis
  </div>

  <div class="card-body">

    <blockquote class="blockquote mb-0">

    <div class="row">
    <div class="col">
       <input type="name" class="form-control" placeholder="Votre Nom" aria-label="name" >
    </div>

    <div class="form-floating">
       <textarea class="form-control" placeholder="Votre Commentaire " id="floatingTextarea2" style="height: 100px;"></textarea>
       <label for="floatingTextarea2"></label>
    </div>

   <div class="form-check form-check-inline">
         <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
         <label class="form-check-label" for="inlineRadio1">1</label>
   
    <div class="form-check form-check-inline">
         <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
         <label class="form-check-label" for="inlineRadio2">2</label>
   </div>
   

    <div class="form-check form-check-inline">
         <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
         <label class="form-check-label" for="inlineRadio3">3</label>
    </div>

    <div class="form-check form-check-inline">
         <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
         <label class="form-check-label" for="inlineRadio4">4</label>
    </div>

    <div class="form-check form-check-inline">
         <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
         <label class="form-check-label" for="inlineRadio5">5</label>
    </div>

  
    <div class="col-12">
       <button class="btn btn-primary" type="submit">Noter</button>
    </div>

    </blockquote>
  
  </div>
 </div>
 </form>
 <form>
  <div class="card text-center">

    <div class="card-header">
      Fiorella Mota
    </div>

    <div class="card-body">
    <p class="card-text"> 
        
         <i class="fa-solid fa-star"></i>
         <i class="fa-solid fa-star"></i>
         <i class="fa-solid fa-star"></i>
         <i class="fa-solid fa-star"></i>
         <i class="fa-solid fa-star"></i>
    
    </p>
    <p>Très bon Restaurant</p>
    </div>

  <div class="card-footer text-muted">
       2022-02-09 11:43:12
  </div>

  </div>

  <div class="card text-center">

    <div class="card-header">
      Marina Mota
    </div>

    <div class="card-body">
    <p class="card-text"> 

         <i class="fa-solid fa-star"></i>
         <i class="fa-solid fa-star"></i>
         <i class="fa-solid fa-star"></i>
         <i class="fa-solid fa-star"></i>
         <i class="fa-duotone fa-star"></i>
        
    </p>
    <p>Super Restaurant</p>
    </div>

  <div class="card-footer text-muted">
       2022-02-09 11:43:12
  </div>
  </div>

  <div class="card text-center">

  <div class="card-header">
     Matthieu Mota
  </div>

    <div class="card-body">
    <p class="card-text"> 
         <i class="fa-solid fa-star"></i>
         <i class="fa-solid fa-star"></i>
         <i class="fa-duotone fa-star"></i>
         <i class="fa-duotone fa-star"></i>
         <i class="fa-duotone fa-star"></i>

    </p>
    <p>Mauvais Restaurant</p>
    </div>

  <div class="card-footer text-muted">
       2022-02-09 11:43:12
  </div>
  </div>

  <div class="card text-center">
  <div class="card-header">
      Matthieu Mota
  </div>

   <div class="card-body">
    <p class="card-text"> 
         <i class="fa-solid fa-star"></i>
         <i class="fa-solid fa-star"></i>
         <i class="fa-duotone fa-star"></i>
         <i class="fa-duotone fa-star"></i>
         <i class="fa-duotone fa-star"></i>

    </p>
    <p>Mauvais Restaurant</p>
    </div>

  <div class="card-footer text-muted">
       2022-02-09 11:43:12
  </div>
        
 </div>
 </form>
       
</body>
</html>





