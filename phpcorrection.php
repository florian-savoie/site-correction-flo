<?php require_once('inc/nav.inc.php'); ?>


	<div class="container-fluid blockPrincipal my-5">
		<div class="row p-3">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link " data-bs-toggle="tab" href="#exo1412">Exercices 14-12</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#menu1"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#menu2"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link " data-bs-toggle="tab" href="#menu3"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#menu4"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#menu5"></a>
              </li>
            </ul>
          
              <!-- Tab panes -->
              <div class="tab-content container active">
               
<!--    partie linux    -->
 <div class="tab-pane container-fluid" id="exo1412">
    <div class="row">

        <ul class="nav nav-pills container-fluid col-sm-12 col-lg-2 flex-column p-3">
            <li class="nav-item ">
              <a class="nav-link " data-bs-toggle="pill" href="#Exercices1">Exercices 1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="pill" href="#Exercices2">Exercices 2</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="pill" href="#Exercices3">Exercices 3</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link " data-bs-toggle="pill" href="#Exercices4">Exercices 4</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="pill" href="#Exercices5">Exercices 5</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="pill" href="#Exercices6">Exercices 6</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link " data-bs-toggle="pill" href="#Exercices7">Exercices 7</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="pill" href="#Exercices8">Exercices 8</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="pill" href="#Exercices9">Exercices 9</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link " data-bs-toggle="pill" href="#Exercices10">calculatrice</a>
            </li>


          </ul>
          
          <!-- Tab panes -->
          <div class="tab-content  col-sm-12 col-lg-10">

							<!-- correction de l'exercices 1 de la pages 6-->
							<div class="tab-pane container-fluid fade" id="Exercices1">
								<div class="row">
									<div class="col-sm-12 col-lg-12 col-xl-6 text-center p-3">
											<div class="cotainer-fluid blocktest">
												<p>Exercice 1 : 

Écrivez un programme pour afficher le nombre, de 4 à 12 en utilisant la boucle PHP. Vous pouvez utiliser soit la boucle « for » ou « while »

Sortie prévue : <p>
4
5
6
7
8
9
10
11
12</p>
</p>

												
											</div>
									</div>
									<div class="col-sm-12  col-lg-12 col-xl-6 ">

										<div class="d-flex justify-content-center"><button type="button"
												class="btn btn-primary my-5 " data-bs-toggle="collapse"
												data-bs-target="#correctionexercices1">Solution</button></div>
										<div class="d-flex justify-content-center">
											<div id="correctionexercices1" class="collapse ">
												<textarea class="" name="" id="" cols="75" rows="25">
												
  $i = 4;
  while($i <= 12)
  {
    echo $i; 
    echo "\n";
   
    $i++;
  }
  

</textarea>
											</div>
										</div>


									</div>
								</div>



							</div>
 
              <div class="tab-pane container-fluid fade" id="Exercices2">
								<div class="row">
									<div class="col-sm-12 col-lg-12 col-xl-6 text-center p-3">
											<div class="cotainer-fluid blocktest">
<p>Exercice 2 :
  Écrivez un programme pour afficher des nombres de 10 à 1 en utilisant une fonction récursive.
  
  
  </p>
<p>Exemple :
  10
  9
  8
  7
  6
  5
  4
  3
  2
  1
  </p>
												
											</div>
									</div>
									<div class="col-sm-12  col-lg-12 col-xl-6 ">

										<div class="d-flex justify-content-center"><button type="button"
												class="btn btn-primary my-5 " data-bs-toggle="collapse"
												data-bs-target="#correctionexercices2">Solution</button></div>
										<div class="d-flex justify-content-center">
											<div id="correctionexercices2" class="collapse ">
												<textarea class="" name="" id="" cols="75" rows="25">
function decrement($n) 
  {
    if($n > 0)
    {
      print("$n\n");
      decrement($n - 1);
    }
  }
  decrement(10);
</textarea>
											</div>
										</div>


									</div>
								</div>



							</div>

              <div class="tab-pane container-fluid fade" id="Exercices3">
								<div class="row">
									<div class="col-sm-12 col-lg-12 col-xl-6 text-center p-3">
											<div class="cotainer-fluid blocktest">
												
<p>Exercice 3 :
  Écrivez un script PHP, pour vérifier si la page est appelée depuis HTTPS ou HTTP.
  </p>

                

												
											</div>
									</div>
									<div class="col-sm-12  col-lg-12 col-xl-6 ">

										<div class="d-flex justify-content-center"><button type="button"
												class="btn btn-primary my-5 " data-bs-toggle="collapse"
												data-bs-target="#correctionexercices3">Solution</button></div>
										<div class="d-flex justify-content-center">
											<div id="correctionexercices3" class="collapse ">
												<textarea class="" name="" id="" cols="75" rows="25">
if (!empty($_SERVER['HTTPS'])) 
  {
     echo 'HTTPS est utilisé';
  }
  else
  {
      echo 'HTTP est utilisé';
  }
</textarea>
											</div>
										</div>


									</div>
								</div>



							</div>

              <div class="tab-pane container-fluid fade" id="Exercices4">
								<div class="row">
									<div class="col-sm-12 col-lg-12 col-xl-6 text-center p-3">
											<div class="cotainer-fluid blocktest">
												<p>Exercice 4 :
                          Écrivez un script PHP pour rediriger un utilisateur vers une autre page.
                          </p>
                          <p>Exemple :
                            Redirigez l’utilisateur vers https://osengo.com/
                            </p>
  

												
											</div>
									</div>
									<div class="col-sm-12  col-lg-12 col-xl-6 ">

										<div class="d-flex justify-content-center"><button type="button"
												class="btn btn-primary my-5 " data-bs-toggle="collapse"
												data-bs-target="#correctionexercices4">Solution</button></div>
										<div class="d-flex justify-content-center">
											<div id="correctionexercices4" class="collapse ">
												<textarea class="" name="" id="" cols="75" rows="25">

</textarea>
											</div>
										</div>


									</div>
								</div>



							</div>

              <div class="tab-pane container-fluid fade" id="Exercices5">
								<div class="row">
									<div class="col-sm-12 col-lg-12 col-xl-6 text-center p-3">
											<div class="cotainer-fluid blocktest">
<p>Exercice 5:
  Écrivez un programme PHP pour supprimer les doublons d’un tableau triée.  </p>
  
  <p> Exemple:
  [1, 2, 2, 3, 3, 3, 4, 5, 5]</p>
  
   <p>Sortie prévue:
  [1, 2, 3, 4, 5]</p>


												
											</div>
									</div>
									<div class="col-sm-12  col-lg-12 col-xl-6 ">

										<div class="d-flex justify-content-center"><button type="button"
												class="btn btn-primary my-5 " data-bs-toggle="collapse"
												data-bs-target="#correctionexercices5">Solution</button></div>
										<div class="d-flex justify-content-center">
											<div id="correctionexercices5" class="collapse ">
												<textarea class="" name="" id="" cols="75" rows="25">
$tab = array(1, 2, 2, 3, 3, 3, 4, 5, 5);

print_r(array_values(array_unique($tab)));
</textarea>
											</div>
										</div>


									</div>
								</div>



							</div>

              <div class="tab-pane container-fluid fade" id="Exercices6">
								<div class="row">
									<div class="col-sm-12 col-lg-12 col-xl-6 text-center p-3">
											<div class="cotainer-fluid blocktest">
												<p> Exercice 6:
                          Écrivez un programme pour calculer la factorielle d’un nombre en utilisant la boucle for en PHP
                          
                        
                          <p>

                         <p>  Sortie prévue:
                          La factorielle de 3 est 6</p>

												
											</div>
									</div>
									<div class="col-sm-12  col-lg-12 col-xl-6 ">

										<div class="d-flex justify-content-center"><button type="button"
												class="btn btn-primary my-5 " data-bs-toggle="collapse"
												data-bs-target="#correctionexercices6">Solution</button></div>
										<div class="d-flex justify-content-center">
											<div id="correctionexercices6" class="collapse ">
												<textarea class="" name="" id="" cols="75" rows="25">
 $n = 3;
  $f = 1;
   
  for ($i=$n; $i>=1; $i--)
  {
    $f = $f * $i;
  }
   
  echo "La factorielle de $n est $f";

</textarea>
											</div>
										</div>


									</div>
								</div>



							</div>

              <div class="tab-pane container-fluid fade" id="Exercices7">
								<div class="row">
									<div class="col-sm-12 col-lg-12 col-xl-6 text-center p-3">
											<div class="cotainer-fluid blocktest">
												<p>Exercice 7:
                          Écrivez un programme PHP pour trouver la factorielle d’un nombre en utilisant une fonction récursive.
                          

                          </p>
                         <p>
                          Sortie prévue:
                          La factorielle de 3 est 6
                            </p>
  

												
											</div>
									</div>
									<div class="col-sm-12  col-lg-12 col-xl-6 ">

										<div class="d-flex justify-content-center"><button type="button"
												class="btn btn-primary my-5 " data-bs-toggle="collapse"
												data-bs-target="#correctionexercices7">Solution</button></div>
										<div class="d-flex justify-content-center">
											<div id="correctionexercices7" class="collapse ">
												<textarea class="" name="" id="" cols="75" rows="25">
 function fact($n){
    if($n <= 1){
      return 1;   
    }
    else{
      return $n * fact($n - 1);
    }
  }
    
  $n = 3; 
  $f = fact($n); 
  echo "La factorielle de $n est $f"; 
</textarea>
											</div>
										</div>


									</div>
								</div>



							</div>

              <div class="tab-pane container-fluid fade" id="Exercices8">
								<div class="row">
									<div class="col-sm-12 col-lg-12 col-xl-6 text-center p-3">
											<div class="cotainer-fluid blocktest">
												<p>     Exercice 8:
                        Écrivez un programme pour afficher le triangle d’etoile suivant en utilisant une boucle for.</p>
<pre>
                        *
                        **
                        ***
                        ****
                        *****
                        ******
</pre>

												
											</div>
									</div>
									<div class="col-sm-12  col-lg-12 col-xl-6 ">

										<div class="d-flex justify-content-center"><button type="button"
												class="btn btn-primary my-5 " data-bs-toggle="collapse"
												data-bs-target="#correctionexercices8">Solution</button></div>
										<div class="d-flex justify-content-center">
											<div id="correctionexercices8" class="collapse ">
												<textarea class="" name="" id="" cols="75" rows="25">

for($ligne = 1; $ligne <= 10; $ligne++)  
  {  
     for ($etoile = 1; $etoile <= $ligne; $etoile++)  
    {  
       echo "*";   
    }  
     echo "\n";  
  } 
</textarea>
											</div>
										</div>


									</div>
								</div>



							</div>

              <div class="tab-pane container-fluid fade" id="Exercices9">
								<div class="row">
									<div class="col-sm-12 col-lg-12 col-xl-6 text-center p-3">
											<div class="cotainer-fluid blocktest">
												<p>
                            Exercice 9:
                            Écrivez un programme PHP pour afficher la table de multiplication jusqu’à 5 * 5.
                            
                            Exemple:</p>
                             <p>
                             1   2   3   4   5
                             2   4   6   8  10
                             3   6   9  12  15
                             4   8  12  16  20
                             5  10  15  20  25
                            
                          </p>

												
											</div>
									</div>
									<div class="col-sm-12  col-lg-12 col-xl-6 ">

										<div class="d-flex justify-content-center"><button type="button"
												class="btn btn-primary my-5 " data-bs-toggle="collapse"
												data-bs-target="#correctionexercices9">Solution</button></div>
										<div class="d-flex justify-content-center">
											<div id="correctionexercices9" class="collapse ">
												<textarea class="" name="" id="" cols="75" rows="25">
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
       if ($j == 1) {
         echo str_pad($i * $j, 2, " ");
       } else {
         echo str_pad($i * $j, 4, " ");
       }
    }
    echo "\n";
  }
</textarea>
											</div>
										</div>


									</div>
								</div>



							</div>

              <div class="tab-pane container-fluid fade" id="Exercices10">
								<div class="row">
									<div class="col-sm-12 col-lg-12 col-xl-6 text-center p-3">
											<div class="cotainer-fluid blocktest p-5">
												<p>Exercice 10 

                          Créer une calculatrice en PHP avec des bouton en html et css
                          </p>

											</div>
									</div>
									<div class="col-sm-12  col-lg-12 col-xl-6 ">

										<div class="d-flex justify-content-center"><button type="button"
												class="btn btn-primary my-5 " data-bs-toggle="collapse"
												data-bs-target="#correctionexercices10">Solution</button></div>
										<div class="d-flex justify-content-center">
											<div id="correctionexercices10" class="collapse ">
												<textarea class="" name="" id="" cols="75" rows="25">
	let nbrChoix= prompt("Choisir un nombre");

if (nbrChoix %2 == 0) 
{
    alert("C'est un nombre pair !");
}
else {
    alert("C'est un nombre impair !");
}
</textarea>
											</div>
										</div>


									</div>
								</div>



							</div>


           
          </div>
        </div>
      </div>
	</div>
</div>
	</div>	<?php require_once('inc/footer.inc.php'); ?>