<?php require_once('inc/nav.inc.php'); ?>



	<div class="container-fluid blockPrincipal my-5">
		<div class="row p-3">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link " data-bs-toggle="tab" href="#pages6">pages 6</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-bs-toggle="tab" href="#pages7">page 7</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-bs-toggle="tab" href="#pages11">page 11</a>
				</li>
			</ul>

			<!-- Tab panes -->




			<div class="tab-content ">
				<!---debut nav pages 6-->
				<div class="tab-pane container-fluid " id="pages6">
					<div class="row">
						<ul class="nav nav-tabs d-flex flex-column col-sm-12 col-lg-2">
							<li class="nav-item">
								<a class="nav-link " data-bs-toggle="tab" href="#exercices1p6">exercices 1</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#exercices2p6">exercices 2</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#exercices3p6">exercices 3</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " data-bs-toggle="tab" href="#exercices4p6">exercices 4</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#exercices5p6">exercices 5</a>
							</li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content col-sm-12 col-lg-10">

							<!-- correction de l'exercices 1 de la pages 6-->
							<div class="tab-pane container-fluid fade" id="exercices1p6">
								<div class="row">
									<div class="col-sm-12 col-lg-12 col-xl-6 text-center p-3">
										<p>1 - Parité
											Ecrivez un programme qui demande un nombre à l’utilisateur puis qui teste si
											ce nombre est pair.
											Le
											programme doit afficher le résultat « nombre pair » ou « nombre impair ».
											Vous devez utiliser
											l’opérateur modulo « % » qui donne le reste d’une division. a%2 donne le
											reste de la division de a par
											2, si ce reste est égale à zéro, a est divisible par 2.</p>


											<div class="cotainer-fluid blocktest">
												<p>choisissez un nombres  nous vous diront si il est pair ou impair :</p>
												<input class="my-3" type="number" id="valeurexo1p6" name="valeurexo1p6" value=""><br>
												<input  class="my-3" type="button" id="bouton" value="Contrôler" onclick="resultat()">
												<p> votres nombre est : <p id="resultatexo1p6" ></p></p>
												
											</div>
									</div>
									<div class="col-sm-12  col-lg-12 col-xl-6 ">

										<div class="d-flex justify-content-center"><button type="button"
												class="btn btn-primary my-5 " data-bs-toggle="collapse"
												data-bs-target="#correctionexercices1p6">Solution</button></div>
										<div class="d-flex justify-content-center">
											<div id="correctionexercices1p6" class="collapse ">
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
							<div class="tab-pane container-fluid fade" id="exercices2p6">
								<div class="row">
									<div class="col-sm-12  col-lg-12 col-xl-6 text-center p-3">
										<p>2 - Age
											Ecrivez un programme qui demande l’année de naissance à l’utilisateur.
											En réponse votre programme doit afficher l’âge de l’utilisateur et indiquer si l’utilisateur est majeur
											ou mineur.
											</p>
											<div class="cotainer-fluid blocktest">
												<p>veuillez indiquer votre année de naissance  :</p>
												<input class="my-3" type="number" id="demandeage2p6" name="demandeage2p6" value=""><br>
												<input  class="my-3" type="button" id="bouton" value="Contrôler" onclick="resultatexo2p6f()">
												<p> vous étes  <p id="result2p6" ></p></p>
												
											</div>
									</div>
									<div class="col-sm-12  col-lg-12 col-xl-6  ">

										<div class="d-flex justify-content-center"><button type="button"
												class="btn btn-primary my-5 " data-bs-toggle="collapse"
												data-bs-target="#correctionexercices2p6">Solution</button></div>
										<div class="d-flex justify-content-center">
											<div id="correctionexercices2p6" class="collapse ">
												<textarea class="" name="" id="" cols="70" rows="25" >
let dateNaissance= prompt("Quelle est votre année de naissance ?");

if (2022 - dateNaissance >= 18) 
{
alert("Vous avez " + (2022 - dateNaissance) + " ans. Vous êtes donc majeur.");
}
else {
alert("Vous avez " + (2022 - dateNaissance) + " ans. Vous êtes donc mineur.");
}
}
							</textarea>
											</div>
										</div>


									</div>
								</div>

							</div>



							<div class="tab-pane container-fluid fade" id="exercices3p6">
								<div class="row">
									<div class="col-sm-12  col-lg-12 col-xl-6 text-center p-3">
										<p>3 - Calculette
											Faire la saisie de 2 nombres entiers, puis la saisie d'un opérateur '+', '-', '*' ou '/'.
											Si l'utilisateur entre un opérateur erroné, le programme affichera un message d'erreur.
											Dans le cas contraire, le programme effectuera l'opération demandée (en prévoyant le cas d'erreur
											"division par 0"), puis affichera le résultat</p>
											<div class="cotainer-fluid blocktest">
												<p>veuillez choissir un premier nombres  :</p>
												<input class="my-3" type="number" id="premiernb3p6" name="premiernb3p6" value=""><br>
												<p>veuillez choisir un deuxieme nombres  :</p>
												<input class="my-3" type="number" id="deuxiemenb3p6" name="deuxiemenb3p6" value=""><br>
												<p>choisir un operateur " + - * / "  :</p>
												<input class="my-3" type="text" id="operateur3p6" name="operateur3p6" value=""><br>
												<input  class="my-3" type="button" id="bouton" value="Contrôler" onclick="resultatexo3p6f()">
												<p> le resultat est   <p id="result3p6" ></p></p>
												
											</div>
									</div>
									<div class="col-sm-12  col-lg-12 col-xl-6 ">

										<div class="d-flex justify-content-center"><button type="button"
												class="btn btn-primary my-5 " data-bs-toggle="collapse"
												data-bs-target="#correctionexercices3p6">Solution</button></div>
										<div class="d-flex justify-content-center">
											<div id="correctionexercices3p6" class="collapse">
<textarea class="" name="" id="" cols="75" rows="25">
	var nbr1= prompt("Choisir un premier nombre");
	var nbr2= prompt("Choisir un deuxième nombre");
	let operateur = prompt("Choisir un opérateur + , - , * ou /");
	
	
	switch (operateur)
	{
	case "+" :
		
		x=parseInt(nbr1, 10);
		y=parseInt(nbr2,10);
		alert( x + y );
		break;
	
	case "-" :
		alert("Le résultat est " + (nbr1 - nbr2));
		break;
	
	case"*" :
		alert("Le résultat est "  + (nbr1 * nbr2));
		break;
	
	case "/" :
		if(nbr2==0) {
			alert("Division par 0 impossible !");
		}
		else {
			alert("Le résultat est " + (nbr1 / nbr2));
		}
		break;
		
	default:
		alert("L'opérateur n'est pas correct."); 
	
	}
</textarea>
											</div>
										</div>


									</div>
								</div>
							</div>
							<div class="tab-pane container-fluid fade" id="exercices4p6">
								<div class="row">
									<div class="col-sm-12  col-lg-12 col-xl-6 text-center p-3">
										<p>4 - Remise
											A partir de la saisie du prix unitaire PU d’un produit et de la quantité commandée QTECOM, afficher
											le prix à payer PAP, en détaillant le port PORT et la remise REM, sachant que :
											 le port est gratuit si le prix des produits TOT est supérieur à 500 €. Dans le cas contraire, le
											port est de 2% de TOT
											 la valeur minimale du port à payer est de 6 €
											 la remise est de 5% si TOT est compris entre 100 et 200 € et de 10% au-delà</p>
											<div class="cotainer-fluid blocktest">
												<p>prix unitaire du produit  :</p>
												<input class="my-3" type="number" id="prixunit4p6" name="prixunit4p6" value=""><br>
												<p>veuillez choisir le nombres d'articles :</p>
												<input class="my-3" type="number" id="quantiter4p6" name="quantiter4p6" value=""><br>
												<input  class="my-3" type="button" id="bouton" value="Contrôler" onclick="resultatexo4p6f()">
												<p> le resultat est   <p id="resultatexo4p6" ></p></p>
												
											</div>
									</div>
									<div class="col-sm-12  col-lg-12 col-xl-6  ">

										<div class="d-flex justify-content-center"><button type="button"
												class="btn btn-primary my-5 " data-bs-toggle="collapse"
												data-bs-target="#correctionexercices4p6">Solution</button></div>
										<div class="d-flex justify-content-center">
											<div id="correctionexercices4p6" class="collapse ">
<textarea class="" name="" id="" cols="75" rows="25">
	var prixUnitaire= prompt("Quel est le prix unitaire du produit ?");
	var quantité= prompt("Quelle quantité faut-il commander");
	var totalProduit = quantité * prixUnitaire;
	var port;
	var remise;
	
	
	if (totalProduit > 500)
	
	{ 
	   port = parseInt (0, 10);
	}
	
	else {
		port= ((totalProduit * 2)/100);
		port = parseInt (port, 10);
		if (port < 6) {
			port=6;
		}
		else {
			port= port;
		}
	}
	
	
	if (totalProduit > 200)
	 {
		remise = ((totalProduit * 10)/100);
	 }
	
	 else
	 {
		if (totalProduit >= 100)
		{
			remise = ((totalProduit * 5)/100);
		}
		else 
		{
			remise = 0;
		}
	 }
	
	var totalApayer= (totalProduit + port - remise);
	
	alert("Le prix a payer est de " + totalApayer + "€. Les frais de port s'élève à " + port + "€. La remise est de " + remise + "€.");
</textarea>
											</div>
										</div>


									</div>
								</div>





							</div>
							<div class="tab-pane container-fluid fade" id="exercices5p6">
								<div class="row">
									<div class="col-sm-12  col-lg-12 col-xl-6 text-center p-3">
										<p>5 - Participation
											Un patron décide de calculer le montant de sa participation au prix du repas de ses employés de la
											façon suivante :
											 si il est célibataire : participation de 20%
											 si il est marié : participation de 25%
											 si il a des enfants : participation de 10% supplémentaires par enfant
											La participation est plafonnée à 50%
											Si le salaire mensuel est inférieur à 1200 € la participation est majorée de 10%.
											Ecrire le programme qui lit les informations au clavier et affiche pour chaque salarié, la participation
											à laquelle il a droit.</p>
											<div class="cotainer-fluid blocktest">
												<p>combien avez vous d'enfant   :</p>
												<input class="my-3" type="number" id="nbenfant5p6" name="nbenfant5p6" value=""><br>
												<p>quel est votre salaire mensuel  :</p>
												<input class="my-3" type="number" id="salairm5p6" name="salairm5p6" value=""><br>
												<input  class="my-3" type="button" id="bouton" value="Contrôler" onclick="resultatexo5p6f()">
												<p> le resultat est   <p id="resultatexo5p6" ></p></p>
												
											</div>
									</div>
									<div class="col-sm-12  col-lg-12 col-xl-6  ">

										<div class="d-flex justify-content-center"><button type="button"
												class="btn btn-primary my-5 " data-bs-toggle="collapse"
												data-bs-target="#correctionexercices5p6">Solution</button></div>
										<div class="d-flex justify-content-center">
											<div id="correctionexercices5p6" class="collapse ">
<textarea class="" name="" id="" cols="75" rows="25">
	var celibataire =confirm("Le salarié est-il célibataire ?");
	var enfant= prompt("Combien a t-il d'enfant ?");
	var salaire= prompt("Quel est son salaire mensuel ?");
	var maxParticipation = 50;
	var participation1;
	var participation2;
	
	
	if (celibataire== true)
		{
			if (salaire < 1200) 
			{
			   participation1 = 30;
			}
			else 
			{
				participation1 =20;
			}
		}
	else {
			if (salaire < 1200) 
			{
				participation1 = 35;
			}
			 else 
			{
				participation1 = 25;
			}
		}
	
	participation2 = ((parseInt(enfant, 10)) * 10);
	
	var participationTot = (parseInt(participation1, 10) + parseInt(participation2, 10));
	
	if (participationTot > maxParticipation)
	
	{
		participationTot = maxParticipation;
	}
	
	else {
		participationTot = participationTot;
	}
	
	alert("La participation est de " + participationTot + "%.");
</textarea>
											</div>
										</div>


									</div>
								</div>
							</div>

						</div>


					</div>
				</div>
				<!---fin nav  pages6-->
				<!---debut nav pages 7-->
				<div class="tab-pane container-fluid " id="pages7">
					<div class="row">
						<ul class="nav nav-tabs d-flex flex-column col-sm-12 col-lg-2">
							<li class="nav-item">
								<a class="nav-link " data-bs-toggle="tab" href="#exercices1p7">exercices 1</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#exercices2p7">exercices 2</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#exercices3p7">exercices 3</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " data-bs-toggle="tab" href="#exercices4p7">exercices 4</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#exercices5p7">exercices 5</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " data-bs-toggle="tab" href="#exercices6p7">exercices 6</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#exercices7p7">exercices 7</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#exercices8p7">exercices 8</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " data-bs-toggle="tab" href="#exercices9p7">exercices 9</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#exercices10p7">exercices 10</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#exercices11p7">exercices 11</a>
							</li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content col-sm-12 col-lg-10">
							<div class="tab-pane container-fluid fade" id="exercices1p7">
								<div class="row">
									<div class="col-sm-12  col-lg-12 col-xl-6 text-center p-3">
										<p>1 - Saisie
											Créer une page HTML qui demande à l’utilisateur un prénom.
											La page doit continuer à demander des prénoms à l’utilisateur jusqu’à ce qu’il laisse le champ vide.
											Enfin, la page affiche sur la console le nombre de prénoms et les prénoms saisis.</p>
                                        <div class="cotainer-fluid">
<p>choisissez un nombres  nous vous diront si il est pair ou impair :</p>
<input type="text" class="form-control" placeholder="entrer un nombre"id="nbexo1p6" name="nbexo1p6">
<p> votres nombre est : <strong id="resultatnbexo1p6"></strong></p>

										</div>

									</div>
									<div class="col-sm-12  col-lg-12 col-xl-6  ">

										<div class="d-flex justify-content-center"><button type="button"
												class="btn btn-primary my-5 " data-bs-toggle="collapse"
												data-bs-target="#correctionexercices1p7">Solution</button></div>
										<div class="d-flex justify-content-center">
											<div id="correctionexercices1p7" class="collapse ">
<textarea class="" name="" id="" cols="75" rows="25">


	var tableau = [];
	var i=0;
	var j=0;
	tableau[i] = prompt("Saisir un nom")
	while (tableau[i] != null)
	{
		document.write(tableau[i]);
		i++;
		j++;
		tableau[i]= prompt("Saisir un nom");   
	}
	document.write("Le compteur est de " + j);
</textarea>
											</div>
										</div>


									</div>
								</div>
							</div>
							<div class="tab-pane container-fluid fade" id="exercices2p7">
					
									<div class="row">
										<div class="col-sm-12  col-lg-12 col-xl-6 text-center p-3">
											<p>2 - Entiers inférieurs à N
												Ecrivez un programme qui affiche les nombres inférieurs à N.</p>
										</div>
										<div class="col-sm-12  col-lg-12 col-xl-6  ">
	
											<div class="d-flex justify-content-center"><button type="button"
													class="btn btn-primary my-5 " data-bs-toggle="collapse"
													data-bs-target="#correctionexercices2p7">Solution</button></div>
											<div class="d-flex justify-content-center">
												<div id="correctionexercices2p7" class="collapse ">
	<textarea class="" name="" id="" cols="75" rows="25">


	</textarea>
												</div>
											</div>
	
	
										</div>
									</div>
								
							</div>
							<div class="tab-pane container-fluid fade" id="exercices3p7">
								
									<div class="row">
										<div class="col-sm-12  col-lg-12 col-xl-6 text-center p-3">
											<p>3 - Somme des entiers inférieurs à N
												Ecrivez un programme qui affiche la somme des nombres inférieurs à N.
												</p>
										</div>
										<div class="col-sm-12  col-lg-12 col-xl-6  ">
	
											<div class="d-flex justify-content-center"><button type="button"
													class="btn btn-primary my-5 " data-bs-toggle="collapse"
													data-bs-target="#correctionexercices3p7">Solution</button></div>
											<div class="d-flex justify-content-center">
												<div id="correctionexercices3p7" class="collapse ">
	<textarea class="" name="" id="" cols="75" rows="25">
	

	</textarea>
												</div>
											</div>
	
	
										</div>
									</div>
								
							</div>
							<div class="tab-pane container-fluid fade" id="exercices4p7">
						
									<div class="row">
										<div class="col-sm-12  col-lg-12 col-xl-6 text-center p-3">
											<p>4 - Somme d'un intervalle
												Ecrivez un programme qui saisit deux nombres n1 et n2 et qui calcul ensuite la somme des entiers de
												n1 à n2</p>
												<div class="cotainer-fluid blocktest">
													<p>numeros 1   :</p>
													<input class="my-3" type="number" id="nbentier1_4p7" name="nbentier1_4p7" value=""><br>
													<p>numero 2  :</p>
													<input class="my-3" type="number" id="nbentier2_4p7" name="nbentier2_4p7" value=""><br>
													<input  class="my-3" type="button" id="bouton" value="Contrôler" onclick="resultatexo4p7f()">
													<p> la somme des entiers de n1 à n2 est : <p id="resultatexo4p7" ></p></p>
													
												</div>
										</div>
										<div class="col-sm-12  col-lg-12 col-xl-6  ">
	
											<div class="d-flex justify-content-center"><button type="button"
													class="btn btn-primary my-5 " data-bs-toggle="collapse"
													data-bs-target="#correctionexercices4p7">Solution</button></div>
											<div class="d-flex justify-content-center">
												<div id="correctionexercices4p7" class="collapse ">
	<textarea class="" name="" id="" cols="75" rows="25">
	
	
		var n1 = prompt("Saisir un nombre entier 1 (positif ou negatif). Cliquer sur annuler renseignera la valeur 0.");
		var n2 = prompt("Saisir un nombre entier 2 (positif ou negatif). Cliquer sur annuler renseignera la valeur 0.");
		var nInter= (n2 - n1);
		var nInterAbsolu = Math.abs(nInter);
		var tableau = [];
		let somme = 0;
		
	   if (nInter != 0) 
					   {
						   for (i=0; i <= nInterAbsolu; i++)
						   {
							   if (nInter > 0)
							   {
								   tableau[i] = (Number(i) + Number(n1));
								   document.write(tableau[i] + " + ");
								   somme = somme + tableau[i];
							   }
							   else 
							   {
							   tableau[i] = (Number(i) + Number(n2));
							   document.write(tableau[i] + " + ");
							   somme = somme + tableau[i];
							   }
						   }
						   document.write(" = " + somme);
					   }
	   else 
					   {
						   document.write("Attention, il n'y a pas d'intervalle à calculer !");
					   }
	   
	</textarea>
												</div>
											</div>
	
	
										</div>
									</div>
								
							</div>
							<div class="tab-pane container-fluid fade" id="exercices5p7">
							
									<div class="row">
										<div class="col-sm-12  col-lg-12 col-xl-6 text-center p-3">
											<p>5 - Moyenne
												Ecrire un programme qui saisit des entiers et en affiche la somme et la moyenne (on arrête la saisie
												avec la valeur 0)</p>
										</div>
										<div class="col-sm-12  col-lg-12 col-xl-6  ">
	
											<div class="d-flex justify-content-center"><button type="button"
													class="btn btn-primary my-5 " data-bs-toggle="collapse"
													data-bs-target="#correctionexercices5p7">Solution</button></div>
											<div class="d-flex justify-content-center">
												<div id="correctionexercices5p7" class="collapse ">
	<textarea class="" name="" id="" cols="75" rows="25">
		var tableau = [] ;
		var somme = 0;
		for (i=0; ;i++)
		{
			var nombre = prompt("Saisir un nombre entier. Si vous saisissez 0 ou si vous cliquez sur Ok sans saisir de valeur, la saisie sera interrompue. Si vous cliquez sur annuler, la saisie continue avec une valeur renseigné de 0. ");
			if(nombre == 0) 
			{
				break;
			}
			
		else {
			tableau[i]=Number(nombre);
			somme = somme + tableau[i];
			var element = tableau.length;
			var moyenne = (somme / element) 
			document.write("Moyenne = " + moyenne + "<br>");
			}
		}
		
	</textarea>
												</div>
											</div>
	
	
										</div>
									</div>
								
							</div>
							<div class="tab-pane container-fluid fade" id="exercices6p7">
							
									<div class="row">
										<div class="col-sm-12  col-lg-12 col-xl-6 text-center p-3">
											<p>6 - Mini et maxi
												Modifiez le programme de la moyenne pour afficher le minimum et le maximum
												</p>
										</div>
										<div class="col-sm-12  col-lg-12 col-xl-6  ">
	
											<div class="d-flex justify-content-center"><button type="button"
													class="btn btn-primary my-5 " data-bs-toggle="collapse"
													data-bs-target="#correctionexercices6p7">Solution</button></div>
											<div class="d-flex justify-content-center">
												<div id="correctionexercices6p7" class="collapse ">
	<textarea class="" name="" id="" cols="75" rows="25">

		var Mini;
		var Maxi;
		for (i=0; ;i++)
		{
			var nombre = prompt("Saisir un nombre entier. Si vous saisissez 0 ou si vous cliquez sur Ok sans saisir de valeur, la saisie sera interrompue. Si vous cliquez sur annuler, la saisie continue avec une valeur renseigné de 0. ");
			if(nombre == 0) 
			{
				document.write("La saisie est terminée")
				break;
			}
			
		else {
				if (i== 0) 
					{
						Mini= Number(nombre);
						Maxi= Number(nombre);
					}
				else { 
					if (nombre <= Mini)
						{
							Mini = Number(nombre);
						}
					else {
							if (nombre >= Maxi)
							{
								Maxi = Number(nombre);
							}
							else {
								Mini = Mini;
								Maxi = Maxi;
							}
						}
					
				}
			}
		document.write("Mini = " + Mini +" et " + "Maxi = " + Maxi +"<br>");
		}
	</textarea>
												</div>
											</div>
	
	
										</div>
									</div>
								
							</div>
							<div class="tab-pane container-fluid fade" id="exercices7p7">							
								<div class="row">
									<div class="col-sm-12  col-lg-12 col-xl-6 text-center p-3">
										<p>7 - Multiples
											Ecrire un programme qui calcule les N premiers multiples d'un nombre entier X, N et X étant entrés
											au clavier.
											Exemple pour N=5 et X=7 :
											1 x 7 = 7
											2 x 7 = 14
											3 x 7 = 21
											4 x 7 = 28
											5 x 7 = 35
											Il est demandé de choisir la structure répétitive (for, while, do...while) la mieux appropriée au problème.
											On ne demande pas pour le moment de gérer les débordements (overflows) dus à des demandes de
											calcul dépassant la capacité de la machine.</p>
									</div>
									<div class="col-sm-12  col-lg-12 col-xl-6  ">

										<div class="d-flex justify-content-center"><button type="button"
												class="btn btn-primary my-5 " data-bs-toggle="collapse"
												data-bs-target="#correctionexercices7p7">Solution</button></div>
										<div class="d-flex justify-content-center">
											<div id="correctionexercices7p7" class="collapse ">
<textarea class="" name="" id="" cols="75" rows="25">


	var X = prompt("Saisir nombre X");
	var N = prompt("Saisir nombre N");
	for (i=0; i<=N; i++)
		{
			var resultat = (Number(i) * Number(X));
			document.write( i + " x " + X + " = " + resultat+ "<br>");
		}
</textarea>
											</div>
										</div>


									</div>
								</div>
							</div>
							<div class="tab-pane container-fluid fade" id="exercices8p7">
							
									<div class="row">
										<div class="col-sm-12  col-lg-12 col-xl-6 text-center p-3">
											<p>8 - Nombre de voyelles.
												Ecrire le programme qui compte le nombre de voyelles d’un mot saisi au clavier, en utilisant :
												 myVar.length : retourne le nombre de lettres de la chaîne myVar.
												 myVar.substr(p,n): extrait d’une chaîne donnée une sous-chaîne de n caractères à partir
												de la position p (attention, en Javascript, le 1er caractère se trouve à la position 0)
												 myVar.indexOf(chaine) : retourne le rang de la première occurrence de chaine dans la
												variable myVar donnée (si non trouvé : -1).</p>
										</div>
										<div class="col-sm-12  col-lg-12 col-xl-6  ">
	
											<div class="d-flex justify-content-center"><button type="button"
													class="btn btn-primary my-5 " data-bs-toggle="collapse"
													data-bs-target="#correctionexercices8p7">Solution</button></div>
											<div class="d-flex justify-content-center">
												<div id="correctionexercices8p7" class="collapse ">
	<textarea class="" name="" id="" cols="75" rows="25">
	
		var mot = prompt("Saisir un mot");
		var j = 0;
		var tableau = [];
		x = (mot.length);
		for (i = 0; i < x; i++) {
			tableau[i] = mot.substr(i, 1);
			if (tableau[i].indexOf("a") == 0) {
				j++;
			}
			else {
				if (tableau[i].indexOf("e") == 0) {
					j++;
				}
				else {
					if (tableau[i].indexOf("i") == 0) {
						j++;
					}
					else {
						if (tableau[i].indexOf("o") == 0) {
							j++;
						}
						else {
							if (tableau[i].indexOf("u") == 0) {
								j++;
							}
							else {
								if (tableau[i].indexOf("y") == 0) {
									j++;
								}
							}
						}
					}
				}
			}
		}
		document.write(j);
		
	</textarea>
												</div>
											</div>
	
	
										</div>
									</div>
							
							</div>
							<div class="tab-pane container-fluid fade" id="exercices9p7">
							
									<div class="row">
										<div class="col-sm-12  col-lg-12 col-xl-6 text-center p-3">
											<p>9 - Calcul du nombre de jeunes, de moyens et de vieux.
												Il s’agit de dénombrer les personnes d'âge strictement inférieur à 20 ans, les personnes d'âge strictement supérieur à 40 ans et celles dont l'âge est compris entre 20 ans et 40 ans (20 ans et 40 ans y
												compris).
												Le programme doit demander les âges successifs.
												Le comptage est arrêté dès la saisie d’un centenaire. Le centenaire est compté.
												Donnez le programme Javascript correspondant qui affiche les résultats.
												</p>
										</div>
										<div class="col-sm-12  col-lg-12 col-xl-6  ">
	
											<div class="d-flex justify-content-center"><button type="button"
													class="btn btn-primary my-5 " data-bs-toggle="collapse"
													data-bs-target="#correctionexercices9p7">Solution</button></div>
											<div class="d-flex justify-content-center">
												<div id="correctionexercices9p7" class="collapse ">
	<textarea class="" name="" id="" cols="75" rows="25">


	</textarea>
												</div>
											</div>
	
	
										</div>
									</div>
								
							</div>
							<div class="tab-pane container-fluid fade" id="exercices10p7">
							
									<div class="row">
										<div class="col-sm-12  col-lg-12 col-xl-6 text-center p-3">
											<p>10 - Un nombre est-il premier
												Ecrivez un programme qui permet de tester si un nombre est premier.</p>
										</div>
										<div class="col-sm-12  col-lg-12 col-xl-6  ">
	
											<div class="d-flex justify-content-center"><button type="button"
													class="btn btn-primary my-5 " data-bs-toggle="collapse"
													data-bs-target="#correctionexercices10p7">Solution</button></div>
											<div class="d-flex justify-content-center">
												<div id="correctionexercices10p7" class="collapse ">
	<textarea class="" name="" id="" cols="75" rows="25">
	

	</textarea>
												</div>
											</div>
	
	
										</div>
									</div>
								
							</div>
							<div class="tab-pane container-fluid fade" id="exercices11p7">
							
									<div class="row">
										<div class="col-sm-12  col-lg-12 col-xl-6 text-center p-3">
											<p>11 - Nombre magique
												Ecrire un programme qui met en œuvre le jeu du nombre magique :
												L’ordinateur choisit un nombre aléatoire et l’utilisateur doit trouver ce nombre. A chaque fois que
												l’utilisateur saisit une valeur, il reçoit une indication lui indiquant « plus petit » ou « plus grand ».
												Vous aurez besoin de générer un nombre aléatoire avec la fonction random de l’objet Math :
												var magic = parseInt(Math.random()*100);
												Utilisez alert pour afficher les messages « Trop grand » ou « Trop petit », prompt pour demander
												une valeur à l’utilisateur et confirm pour lui demander de rejouer.</p>
										</div>
										<div class="col-sm-12  col-lg-12 col-xl-6  ">
	
											<div class="d-flex justify-content-center"><button type="button"
													class="btn btn-primary my-5 " data-bs-toggle="collapse"
													data-bs-target="#correctionexercices11p7">Solution</button></div>
											<div class="d-flex justify-content-center">
												<div id="correctionexercices11p7" class="collapse ">
	<textarea class="" name="" id="" cols="75" rows="25">
	
		do {
			let i=0;
			let nombreMagique = parseInt(Math.random()*100);
			
			do  {
				guess = prompt("Quel est le nombre magique ?");
				i++;
				   if(guess < nombreMagique){
						   alert("Plus grand");
				   }
				   else {
					if(guess == nombreMagique) {
						alert("Vous avez trouvé le nombre magique " + nombreMagique + " en " + i + " coups");
					}
					else {
						alert("Plus petit");
				   }
				}  
				   
			   } while(guess != nombreMagique);
			
			let rejouer=confirm("Voulez-vous rejouer ?");
			}
			while(rejouer==true);
	</textarea>
												</div>
											</div>
	
	
										</div>
									</div>
							
							</div>
						</div>


					</div>
				</div>
				<!---fin nav 7-->
				<!---debut nav pages 11-->
				<!--
				<div class="tab-pane container-fluid " id="pages11">
					<div class="row">
						<ul class="nav nav-tabs d-flex flex-column col-sm-12 col-lg-2">
							<li class="nav-item">
								<a class="nav-link " data-bs-toggle="tab" href="#exercices1p11">exercices 1</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#exercices2p11">exercices 2</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#exercices3p11">exercices 3</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " data-bs-toggle="tab" href="#exercices4p11">exercices 4</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#exercices5p11">exercices 5</a>
							</li>
						</ul>

					
						<div class="tab-content col-sm-12 col-lg-10">
							<div class="tab-pane container-fluid fade" id="exercices1p11"></div>
							<div class="tab-pane container-fluid fade" id="exercices2p11">zzezez</div>
							<div class="tab-pane container-fluid fade" id="exercices3p11">zezsdfds</div>
							<div class="tab-pane container-fluid fade" id="exercices4p11">fsdfs</div>
							<div class="tab-pane container-fluid fade" id="exercices5p11">zzezez</div>

						</div>


					</div>
				</div>-->
				<!---debut nav pages 11-->








			</div>
		</div>

	</div>

	<?php require_once('inc/footer.inc.php'); ?>