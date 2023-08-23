t<x-guest-layout>

    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" crossorigin="anonymous">
    <div class="row justify-content-center ">
       <div class="col-10">
            <div class="card ">
                <div class="card-header alert alert-primary text-center font-weight-bold  bg-dark">
                SELECCIONA EL IDIOMA QUE DESSE/Ri´na k'ando jnayani ts'inda jnati´ni:
                </div>
                  <div class="card-body " style="text-align:center">
                      <div name="idiomas" class="container"  >
                        <div class="row align-items-center" style="background-color:#ffc1d5">
                          <div class="col-lg-13">
                            <section class="mb-5 home-banner-area">
                              <div class="container">
                               <div class="row justify-content-center fullscreen align-items-center">
                                              <div class="mb-5 col-12 col-md-7 home-banner-left">
						<form action="chatbot">

                                                    <select class="form-select" aria-label="Default select example">
                                                            <option selected>Selecciona el idioma/Ri´na k'ando jnayani ts'inda jnati´ni</option>
                                                            <!-- <option value="mazahua">Mazahua/Ñatho</option> -->
                                                            <option value="espanol">Español</option>
                                                    </select>
                                                    <p></p>
                                                    <audio controls>
                                                        <source src="C:/Users/miguel/Dropbox/PC/Desktop/pagina/selecciona_idioma.mp4" type="audio/mpeg">
                                                    </audio>
                                            
                                                    <div class="mt-3 p-2">
                                                        <button class="btn btn-primary btn-sm btn-block font-weight-bold rounded-pill" >Confirmar/K'ujkura</button>
                                                        <button  type="submit" class="btn btn-primary btn-sm btn-block font-weight-bold rounded-pill">Cancelar/Kinti'ni</button>
                                                    </div>
						</form>
                                               
                                  </div>
                                  <div class="col-6 col-md-5 home-banner-right">
                                    <img class="img-fluid" src="img/Mujersegura.png" alt="" />
                                  </div>
                                </div>
                              </div>
                            </section>
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
