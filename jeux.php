<?php require_once('inc/nav.inc.php'); ?>


	<div class="container-fluid blockPrincipal my-5">
		<div class="row p-3">


            <div class="container-fluid tapis  mt-2 p-3">
                <div class="row">
                    <div class="container-fluid partiedes d-flex align-items-center  flex-column col-6 ">
                        <h2 id="j1"></h2>
                        <div   class="jeuxdes nomjoueur d-flex align-items-center  me-5">
                            <div class="troisD d-flex justify-content-around p-4">    
                                <img class="img-responsive" src="" id="d1">
                                <img class="img-responsive" src="" id="d2">
                                <img class="img-responsive" src="" id="d3">
                            </div>
                        </div>
                        <div class="espacedes col"></div>
                        <h2 class="" id="j2"></h2>
                        <div  class="jeuxdes nomjoueur d-flex align-items-center  me-5">
                            <div class="troisD d-flex justify-content-around p-4">   
                                <img class="img-responsive " src="" id="d4">
                                <img class="img-responsive " src="" id="d5">
                                <img class="img-responsive" src="" id="d6">
                              </div>
                        </div>
                    </div>
        
        
        
        <div class="container-fluid col-2 d-flex flex-column ">
        
            <div class="row justify-content-center">
                <div class="row justify-content-center">
                    <button id="lancer1" type="button" class="jet" onclick="lancer_de6(1, joueurPerdant, tableauLancer)" disabled="true">Lancez les dés J1</button>
                </div>
                <div
                    class="container-fluid joueur1 mt-2 text-center pt-3 mb-5 d-flex justify-content-center align-items-center ">
                    <h3 id="jetonj1"></h3>
                </div>
            </div>
        
        
        
            <div class="row justify-content-center">
                <div class="row justify-content-center"> <button id="lancer2" type="button" onclick="lancer_de6(2, joueurPerdant, tableauLancer)" disabled="true">Lancez les dés J2</button></div>
                <div class="container-fluid joueur2 mt-2 text-center pt-3 d-flex justify-content-center align-items-center">
                    <h3 id="jetonj2"></h3>
                </div>
            </div>
        
        
        
        
                    </div>
                    
                    <div class="container-fluid col-4 ">
                    <div class="container-fluid d-flex justify-content-center my-5"><div class="row"><h2 class="textTour">tour : <strong id="tour"></strong></h2></div></div>
                    <div class="container-fluid "><div class="row d-flex flex-column">
                        <div class="d-flex justify-content-center"><button type="button" id="start" class="mt-3" onclick="start_game()">START</button></div>
                        <div class="container-fluid  pot text-center  mt-3 pt-3" ><h3 class="couleurpot">Pot</h3><h2 id="pot"></h2></div></div>  </div>
                    </div>
        
        
        
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Vainqueur</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Joueur 1
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="myModal2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" >Vainqueur</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Joueur 2
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        

          </div>
          
			</div>

            <?php require_once('inc/footer.inc.php'); ?>