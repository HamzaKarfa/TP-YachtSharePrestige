<main class="main">

<div class="flex justify-center main-img">
    <img src="./assets/img/carte.png">
</div>
<div class="border-container">

    <section class=" nav-container text-component text-center">
   
        <form class="form-primary">
            <select class="select__input form-control" name="selectThis" id="selectThis">
                <option value="0">Destination  </option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
            
            </select>
            <select class="select__input form-control" name="selectThis" id="selectThis">
                <option value="0">Date d'arrivée</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
            
            </select>                
            <select class="select__input form-control" name="selectThis" id="selectThis">
                <option value="0">Date de départ</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
            
            </select>
            <select class="select__input form-control" name="selectThis" id="selectThis">
                <option value="0">Taille du bateau</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
            
            </select>
            <button class="btn btn-color">Rechercher</button>
        </form>
        
        <h3>Resultat de votre recherche</h3>
        <p>Ou voir tous les yachts disponibles</p>
    
        
        <form class="form-secondary">
            <label class="filtre"> Filtrer la selection</label>
            <select class="select__input form-control" name="selectThis" id="selectThis">
                <option value="0">Destination  </option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
            
            </select>
            <select class="select__input form-control" name="selectThis" id="selectThis">
                <option value="0">Points d'achat</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
            
            </select>                
            <select class="select__input form-control" name="selectThis" id="selectThis">
                <option value="0">Pers a bord</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
            
            </select>
            <select class="select__input form-control" name="selectThis" id="selectThis">
                <option value="0">Disponibilité</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
            
            </select>
        </form>
        <div class="parent grid">
            <div class="col-10">
                <?php for ($i=0; $i < 15 ; $i++) { echo"" ?>
                    
                    <article class="col-4 gap-xs">
                        <form id="form" method="get">
                            <input type="text"  name="product" style="display: none;"> 
                            <a name="product" onclick="document.querySelector('#form').submit()">

                            <div class="card-v2 cards">
                                <figure>
                                  <div class="image-card">
                                      <h6 class="items-name">Nom du Yacht - 50 mètres</h6>
                                  </div>
                                  <figcaption class="card-v2__caption padding-sm ">
                                    <div class="text-md"><span class="title">Disponible</span> min 7 jours</div>
                                    <hr>

                                    <p class="text-sm card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore ea nesciunt ab quam</p>
                                    <hr>
                                    <button class="btn btn-color btn-card">Book-now</button>
                                    
                                  </figcaption>
                                </figure>
                            </div>
                            </a>
                        </form>
                    </article>
                    
                <?php }?>
            </div>
            <div class="col-2 col-right">
                    <div class="col pub1"></div>
                    <div class="col pub2"></div>
            </div>
        </div>

        <hr>
        <div class="carousel flex flex-column js-carousel" data-drag="on" data-loop="off" data-navigation="on" data-navigation-class="carousel__navigation order-3">
          <p class="sr-only">Carousel items</p>

          <div class="carousel__wrapper order-2 overflow-hidden">
            <ol class="carousel__list">
                <li class="carousel__item col-4 gap-xs">
                    <div class="card-v2 cards">
                        <figure>
                          <div class="image-card">
                              <h6 class="items-name">Nom du Yacht - 50 mètres</h6>
                          </div>
                          <figcaption class="card-v2__caption padding-sm ">
                            <div class="text-md"><span class="title">Disponible</span> min 7 jours</div>
                            <hr>

                            <p class="text-sm card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore ea nesciunt ab quam</p>
                            <hr>
                            <button class="btn btn-color btn-card">Book-now</button>

                          </figcaption>
                        </figure>
                    </div>
                </li>
                <li class="carousel__item col-4 gap-xs">
                    <div class="card-v2 cards">
                        <figure>
                          <div class="image-card">
                              
                              <h6 class="items-name">Nom du Yacht - 50 mètres</h6>
                          </div>
                          <figcaption class="card-v2__caption padding-sm ">
                            <div class="text-md"><span class="title">Disponible</span> min 7 jours</div>
                            <hr>

                            <p class="text-sm card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore ea nesciunt ab quam</p>
                            <hr>
                            <button class="btn btn-color btn-card">Book-now</button>
                            
                          </figcaption>
                        </figure>
                    </div>
              </li>
              <li class="carousel__item col-4 gap-xs">
                    <div class="card-v2 cards">
                        <figure>
                          <div class="image-card">
                              
                              <h6 class="items-name">Nom du Yacht - 50 mètres</h6>
                          </div>
                          <figcaption class="card-v2__caption padding-sm ">
                            <div class="text-md"><span class="title">Disponible</span> min 7 jours</div>
                            <hr>

                            <p class="text-sm card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore ea nesciunt ab quam</p>
                            <hr>
                            <button class="btn btn-color btn-card">Book-now</button>
                            
                          </figcaption>
                        </figure>
                    </div>
              </li>
            </ol>
          </div>
        </div>




    </section>
</div>
</main>