<x-guest-layout>

    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" crossorigin="anonymous">
    <div class="row justify-content-center ">
        <div class="col-8">
            <div class="card ">
                <div class="card-header alert alert-primary text-center font-weight-bold  bg-dark">
                SELECCIONA EL IDIOMA QUE DESSE/Ri´na k'ando jnayani ts'inda jnati´ni:
                </div>
                <div class="card-body " style="text-align:center">
                <div name="idiomas" class="container"  >
                  <div class="row align-items-center" style="background-color:#dabcb4">
                    <div class="col-lg-13">
                      <div class="section-title text-white">
                        <p> 
                        <img src="img/logo-izquierda.png"  style="float:left;">
                        </p>
                        <p> 
                        <img src="img/logo-derecha.png"   style="float:right;">
                        </p>
                           
                            <form action="ayuda.html">
                              <select name="idioma">
                          <option value="seleccion">Selecciona el idioma/Ri´na k'ando jnayani ts'inda jnati´ni</option>
                                <option value="mazahua">Mazahua/Ñatho</option>
                                <option value="espanol">Español</option>
                              </select>
                        <div float="center"><img src="img/bocina.jpg"></div>
                        <audio controls>
                                <source src="C:/Users/miguel/Dropbox/PC/Desktop/pagina/selecciona_idioma.mp4" type="audio/mpeg">
                              </audio>
                      <p></p>
                              <div class="mt-3 p-2">
                                <button class="btn btn-primary btn-sm btn-block font-weight-bold rounded-pill">Confirmar/K'ujkura</button>
                                <button class="btn btn-primary btn-sm btn-block font-weight-bold rounded-pill">Cancelar/Kinti'ni</button>
                              </div>
                            </form>
                          </div>
                                </div>
                    </div>
                  </div>
                </div> 
    </div>
</div>
</div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</x-guest-layout>
