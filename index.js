
/*   exercices 1 pages 6     */
function resultat(){
   var saisie =document.getElementById("valeurexo1p6").value;
   const  text22 = document.getElementById("resultatexo1p6"); 
   
    if (saisie %2 == 0) 
    {
        text22.innerHTML = "pair";
    }
    else {
        text22.innerHTML = "impair";    }

    }

    /*   exercices 2 pages 6     */
function resultatexo2p6f(){
    var age2p6 =document.getElementById("demandeage2p6").value;
    const  resultatexo2p6a = document.getElementById("result2p6"); 
    
    if (2022-age2p6 >= 18) 
     {
        resultatexo2p6a.innerHTML = "majeur";
     }
     else {
        resultatexo2p6a.innerHTML = "mineur";    }
 
     }
 

    /*   exercices 3 pages 6     */
    function resultatexo3p6f(){
        var premierbn3p6 =document.getElementById("premiernb3p6").value;
        var deuxiemebn3p6 =document.getElementById("deuxiemenb3p6").value;
        var operateur3p6 = document.getElementById("operateur3p6").value;
        const  resultatexo3p6a = document.getElementById("result3p6"); 
        switch (operateur3p6)
        {
        case "+" :
            
            x=parseInt(premierbn3p6, 10);
            y=parseInt(deuxiemebn3p6,10);
            resultatexo3p6a.innerHTML = x+y;
            
            break;
        
        case "-" :
            resultatexo3p6a.innerHTML = (premierbn3p6 - deuxiemebn3p6);
            break;
        
        case"*" :
        resultatexo3p6a.innerHTML = (premierbn3p6 * deuxiemebn3p6);
            break;
        
        case "/" :
            if(deuxiemebn3p6==0) {
                resultatexo3p6a.innerHTML ="Division par 0 impossible !";
            }
            else {
                resultatexo3p6a.innerHTML =+ (premierbn3p6 / deuxiemebn3p6);
            }
            break;
            
        default:
            alert("L'opérateur n'est pas correct."); 
        
        }
         }
         /*   exercices 4 pages 6     */
function resultatexo4p6f(){
    var prixunit4p6 =document.getElementById("prixunit4p6").value;
    var quantiter4p6 =document.getElementById("quantiter4p6").value;
	var totalProduit = prixunit4p6 * quantiter4p6;
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
	
	resultatexo4p6.innerHTML ="Le prix a payer est de " + totalApayer + "€. Les frais de port s'élève à " + port + "€. La remise est de " + remise + "€.";
 
     }
      /*   exercices 5 pages 6     */
     function resultatexo5p6f(){
	var celibataire =confirm("Le salarié est-il célibataire ?");
    var salairm5p6 =document.getElementById("salairm5p6").value;
    var nbenfant5p6 =document.getElementById("nbenfant5p6").value;
	var maxParticipation = 50;
	var participation1;
	var participation2;
	
	
	if (celibataire== true)
		{
			if (salairm5p6 < 1200) 
			{
			   participation1 = 30;
			}
			else 
			{
				participation1 =20;
			}
		}
	else {
			if (salairm5p6 < 1200) 
			{
				participation1 = 35;
			}
			 else 
			{
				participation1 = 25;
			}
		}
	
	participation2 = ((parseInt(nbenfant5p6, 10)) * 10);
	
	var participationTot = (parseInt(participation1, 10) + parseInt(participation2, 10));
	
	if (participationTot > maxParticipation)
	
	{
		participationTot = maxParticipation;
	}
	
	else {
		participationTot = participationTot;
	}
	
	resultatexo5p6.innerHTML ="La participation est de " + participationTot + "%.";
     }


	          /*   exercices 4 pages 7     */



function resultatexo4p7f(){
    var nbentier1_4p7 =document.getElementById("nbentier1_4p7").value;
    var nbentier2_4p7 =document.getElementById("nbentier2_4p7").value;
	var nInter4p7= (nbentier2_4p7 - nbentier1_4p7);
	var nInterAbsolu4p7 = Math.abs(nInter4p7);
	var tableau4p7 = [];
	let somme4p7 = 0;
	
   if (nInter4p7 != 0) 
				   {
					   for (i=0; i <= nInterAbsolu4p7; i++)
					   {
						   if (nInter4p7 > 0)
						   {
							   tableau4p7[i] = (Number(i) + Number(nbentier1_4p7));
				
							   somme4p7 = somme4p7 + tableau4p7[i];
						   }
						   else 
						   {
						   tableau4p7[i] = (Number(i) + Number(nbentier2_4p7));

						   somme4p7 = somme4p7 + tableau4p7[i];
						   }
					   }
					   resultatexo4p7.innerHTML =" = " + somme4p7;
				   }
   else 
				   {
					resultatexo4p7.innerHTML ="Attention, il n'y a pas d'intervalle à calculer !";
				   }
   
	
}
 // jeux 421  

const combinaison = [
	421, 111, 611, 666, 511, 555, 411, 444, 311, 333, 211, 222, 654, 543, 432,
	321,
  ];
  const combinaison_Valeur = {
	421: 10,
	111: 7,
	611: 6,
	666: 6,
	511: 5,
	555: 5,
	411: 4,
	444: 4,
	311: 3,
	333: 3,
	211: 2,
	222: 2,
	654: 2,
	543: 2,
	432: 2,
	321: 1,
  };
  
  const tableauJeton = ["jetonPot", "jetonJ1", "jetonJ2"];
  var tableauJeton_Nombre = {
	jetonPot: 21,
	jetonJ1: 0,
	jetonJ2: 0,
  };
  
  var nbrTour = 1;
  var combinaisonJ1;
  var combinaisonJ2;
  var resultatTour;
  var valeurEnJetonCombinaisonGagnante;
  var tableauLancer = [];
  
  function random_d6() {
	let chiffreD6 = Math.ceil(6 * Math.random());
	return chiffreD6;
  }
  
  // tableau contenant les 6 faces des dés rouges du joueur 1 //
  const tableauImgFaceRouge = {
	1: "img/face1.png",
	2: "img/face2.png",
	3: "img/face3.png",
	4: "img/face4.png",
	5: "img/face5.png",
	6: "img/face6.png",
  };
  
  // fonction qui verifie que la valeur est bien comprise entre 1 et 6 et que c'est bien un nombre entier pour ensuite afficher les faces a la partie html //
  function attribution_face_rouge(valeur, emplacement, tableauImgFaceRouge) {
	if (
	  Number.isInteger(valeur) == true &&
	  tableauImgFaceRouge[valeur] !== undefined
	) {
	  document.getElementById(emplacement).src = tableauImgFaceRouge[valeur];
	} else {
	  document.getElementById(emplacement).style.display = "none";
	}
  }
  
  // fonction qui permet de lancer la fonction attribution_face_rouge en lui indiquant le numero random , l'emplacement et la face du dés correspondant //
  function affichage1(tableauLancer) {
	attribution_face_rouge(tableauLancer[0], "d1", tableauImgFaceRouge);
	attribution_face_rouge(tableauLancer[1], "d2", tableauImgFaceRouge);
	attribution_face_rouge(tableauLancer[2], "d3", tableauImgFaceRouge);
  }
  
  // tableau contenant les 6 faces des dés bleu du joueur 2 //
  const tableauImgFaceBleu = {
	1: "img/face1dbleu.png",
	2: "img/face2dbleu.png",
	3: "img/face3dbleu.png",
	4: "img/face4dbleu.png",
	5: "img/face5dbleu.png",
	6: "img/face6dbleu.png",
  };
  
  // fonction qui verifie que la valeur est bien comprise entre 1 et 6 et que c'est bien un nombre entier pour ensuite afficher les faces a la partie html //
  function attribution_face_bleu(valeur, emplacement, tableauImgFaceBleu) {
	if (
	  Number.isInteger(valeur) == true &&
	  tableauImgFaceBleu[valeur] !== undefined
	) {
	  document.getElementById(emplacement).src = tableauImgFaceBleu[valeur];
	} else {
	  document.getElementById(emplacement).style.display = "none";
	}
  }
  
  function affichage2(tableauLancer) {
	attribution_face_bleu(tableauLancer[0], "d4", tableauImgFaceBleu);
	attribution_face_bleu(tableauLancer[1], "d5", tableauImgFaceBleu);
	attribution_face_bleu(tableauLancer[2], "d6", tableauImgFaceBleu);
  }
  
  function lancer_de6(joueurQuiJoue, joueurPerdant, tableauLancer) {
	var tableauLancer = [random_d6(), random_d6(), random_d6()];
  
	switch (joueurQuiJoue) {
	  case 1:
		affichage1(tableauLancer);
		ordre_combinaison_J1(tableauLancer);
		if (joueurPerdant == 2) {
		  jeu_421();
		} else {
		  document.getElementById("lancer1").disabled = true;
		  document.getElementById("lancer2").disabled = false;
		}
		break;
	  case 2:
		affichage2(tableauLancer);
		ordre_combinaison_J2(tableauLancer);
		if (joueurPerdant == 1) {
		  jeu_421();
		} else {
		  document.getElementById("lancer1").disabled = false;
		  document.getElementById("lancer2").disabled = true;
		}
		break;
	}
  }
  
  // cette fonction determine si nous sommes en phase une ou en phase deux //
  function phase() {
	if (tableauJeton_Nombre["jetonPot"] != 0) {
	  numPhase = 1;
	} else {
	  numPhase = 2;
	}
	return numPhase;
  }
  
  //Cette fonction met en ordre décroisant la combi du j1//
  function ordre_combinaison_J1(tableauLancer) {
	var tableauIntermediaireJ1 = [];
	tableauIntermediaireJ1 = tableauLancer;
	tableauIntermediaireJ1.sort((a, b) => b - a);
	var combinaisonJ1String = tableauIntermediaireJ1
	  .toString()
	  .replaceAll(",", "");
	combinaisonJ1 = Number(combinaisonJ1String);
	return combinaisonJ1;
  }
  
  //Cette fonction met en ordre décroisant la combi du j2//
  function ordre_combinaison_J2(tableauLancer) {
	var tableauIntermediaireJ2 = [];
	tableauIntermediaireJ2 = tableauLancer;
	tableauIntermediaireJ2.sort((a, b) => b - a);
	var combinaisonJ2String = tableauIntermediaireJ2
	  .toString()
	  .replaceAll(",", "");
	combinaisonJ2 = Number(combinaisonJ2String);
	return combinaisonJ2;
  }
  
  // cette fonction attend en entrer la combinaison gagnante et ressort sa valeur en jetons //
  function conversion_en_jeton(resultatTour) {
	if (resultatTour == "matchnul") {
	  valeurEnJetonCombinaisonGagnante = 0;
	} else {
	  if (combinaison_Valeur[resultatTour] == undefined) {
		valeurEnJetonCombinaisonGagnante = 1;
	  } else {
		valeurEnJetonCombinaisonGagnante = combinaison_Valeur[resultatTour];
	  }
	}
	return valeurEnJetonCombinaisonGagnante;
  }
  
  //cette fonction change la variable joueurperdant en fonction du resultat du tour//
  function joueur_qui_perd(resultatTour) {
	if (resultatTour == "matchnul") {
	  joueurPerdant = joueurPerdant;
	} else {
	  if (resultatTour == combinaisonJ2) {
		joueurPerdant = 1;
	  } else {
		joueurPerdant = 2;
	  }
	}
	return joueurPerdant;
  }
  
  // Cette fonction attend deux nombres en entrée (combij1 et combij2) et ressort la combinaison gagnante en sortie dans la variable resultatTour//
  function compare_combinaison(combinaisonJ1, combinaisonJ2) {
	if (combinaisonJ2 == combinaisonJ1) {
	  resultatTour = "matchnul";
	} else {
	  var stock1 = combinaison.indexOf(combinaisonJ1);
	  var stock2 = combinaison.indexOf(combinaisonJ2);
	  if (stock1 == -1 && stock2 == -1) {
		resultatTour = Math.max(combinaisonJ1, combinaisonJ2);
	  } else {
		if (stock1 == -1 && stock2 >= 0) {
		  resultatTour = combinaisonJ2;
		} else {
		  if (stock2 == -1 && stock1 >= 0) {
			resultatTour = combinaisonJ1;
		  } else {
			if (stock1 < stock2) {
			  resultatTour = combinaisonJ1;
			} else {
			  resultatTour = combinaisonJ2;
			}
		  }
		}
	  }
	}
	joueur_qui_perd(resultatTour);
	return resultatTour;
  }
  
  //Cette fonction attend en entrée le numero de la phase (1 ou 2), la valeur en jeton de la combinaison gagnante ainsi que le numéro du joueur (1 ou 2) devant recevoir les jetons
  function distribution(
	numPhase,
	valeurEnJetonCombinaisonGagnante,
	joueurPerdant
  ) {
	switch (numPhase) {
	  case 1:
		if (valeurEnJetonCombinaisonGagnante <= tableauJeton_Nombre["jetonPot"]) {
		  if (joueurPerdant == 1) {
			tableauJeton_Nombre["jetonJ1"] =
			  tableauJeton_Nombre["jetonJ1"] + valeurEnJetonCombinaisonGagnante;
			tableauJeton_Nombre["jetonPot"] =
			  tableauJeton_Nombre["jetonPot"] - valeurEnJetonCombinaisonGagnante;
		  } else {
			tableauJeton_Nombre["jetonJ2"] =
			  tableauJeton_Nombre["jetonJ2"] + valeurEnJetonCombinaisonGagnante;
			tableauJeton_Nombre["jetonPot"] =
			  tableauJeton_Nombre["jetonPot"] - valeurEnJetonCombinaisonGagnante;
		  }
		} else {
		  if (joueurPerdant == 1) {
			tableauJeton_Nombre["jetonJ1"] =
			  tableauJeton_Nombre["jetonJ1"] + tableauJeton_Nombre["jetonPot"];
			tableauJeton_Nombre["jetonPot"] = 0;
		  } else {
			tableauJeton_Nombre["jetonJ2"] =
			  tableauJeton_Nombre["jetonJ2"] + tableauJeton_Nombre["jetonPot"];
			tableauJeton_Nombre["jetonPot"] = 0;
		  }
		}
		break;
  
	  case 2:
		if (joueurPerdant == 1) {
		  if (tableauJeton_Nombre["jetonJ2"] > valeurEnJetonCombinaisonGagnante) {
			tableauJeton_Nombre["jetonJ1"] =
			  tableauJeton_Nombre["jetonJ1"] + valeurEnJetonCombinaisonGagnante;
			tableauJeton_Nombre["jetonJ2"] =
			  tableauJeton_Nombre["jetonJ2"] - valeurEnJetonCombinaisonGagnante;
		  } else {
			tableauJeton_Nombre["jetonJ1"] =
			  tableauJeton_Nombre["jetonJ1"] + tableauJeton_Nombre["jetonJ2"];
			tableauJeton_Nombre["jetonJ2"] = 0;
		  }
		} else {
		  if (joueurPerdant == 2) {
			if (
			  tableauJeton_Nombre["jetonJ1"] > valeurEnJetonCombinaisonGagnante
			) {
			  tableauJeton_Nombre["jetonJ2"] =
				tableauJeton_Nombre["jetonJ2"] + valeurEnJetonCombinaisonGagnante;
			  tableauJeton_Nombre["jetonJ1"] =
				tableauJeton_Nombre["jetonJ1"] - valeurEnJetonCombinaisonGagnante;
			} else {
			  tableauJeton_Nombre["jetonJ2"] =
				tableauJeton_Nombre["jetonJ2"] + tableauJeton_Nombre["jetonJ1"];
			  tableauJeton_Nombre["jetonJ1"] = 0;
			}
		  }
		}
		break;
	}
  
	return tableauJeton_Nombre;
  }
  
  function win(tableauJeton_Nombre) {
	if (
	  tableauJeton_Nombre["jetonPot"] == 0 &&
	  tableauJeton_Nombre["jetonJ1"] == 0
	) {
	  new bootstrap.Modal(document.getElementById("myModal"), []).show();
	} else if (
	  tableauJeton_Nombre["jetonPot"] == 0 &&
	  tableauJeton_Nombre["jetonJ2"] == 0
	) {
	  new bootstrap.Modal(document.getElementById("myModal2"), []).show();
	} else {
	  nbrTour++;
	}
  }
  
  //Cette fonction indique le nbr maximum de lancé a effectuer pour le 2eme joueur dans la phase 2/
  function compte_nombre_lancer_en_phase2() {
	var phase2lancerJ2;
	switch (phase2lancerJ1) {
	  case "1":
		phase2lancerJ2++;
		break;
  
	  case "2":
		phase2lancerJ2++;
		break;
  
	  case "3":
		phase2lancerJ2++;
		break;
	}
  }
  
  function start_game() {
	let j1 = prompt("Saisir le nom du joueur 1: ");
	let j2 = prompt("Saisir le nom du joueur 2 :");
	document.getElementById("j1").innerHTML = j1.toUpperCase();
	document.getElementById("j2").innerHTML = j2.toUpperCase();
	document.getElementById("start").innerHTML = "Reset";
	document.getElementById("pot").innerHTML = tableauJeton_Nombre["jetonPot"];
	document.getElementById("jetonj1").innerHTML = tableauJeton_Nombre["jetonJ1"];
	document.getElementById("jetonj2").innerHTML = tableauJeton_Nombre["jetonJ2"];
	document.getElementById("tour").innerHTML = nbrTour;
	joueurPerdant = 1;
	document.getElementById("lancer1").disabled = false;
	document.getElementById("lancer2").disabled = true;
  }
  
  function jeu_421() {
	phase();
	compare_combinaison(combinaisonJ1, combinaisonJ2);
	console.log(resultatTour);
	conversion_en_jeton(resultatTour);
	console.log(valeurEnJetonCombinaisonGagnante);
	console.log(joueurPerdant);
	distribution(numPhase, valeurEnJetonCombinaisonGagnante, joueurPerdant);
	console.log(tableauJeton);
	document.getElementById("pot").innerHTML = tableauJeton_Nombre["jetonPot"];
	document.getElementById("jetonj1").innerHTML = tableauJeton_Nombre["jetonJ1"];
	document.getElementById("jetonj2").innerHTML = tableauJeton_Nombre["jetonJ2"];
	document.getElementById("tour").innerHTML = nbrTour;
	if (joueurPerdant == 2) {
	  document.getElementById("lancer1").disabled = true;
	  document.getElementById("lancer2").disabled = false;
	} else {
	  document.getElementById("lancer1").disabled = false;
	  document.getElementById("lancer2").disabled = true;
	}
  
	win(tableauJeton_Nombre);
  }
  



