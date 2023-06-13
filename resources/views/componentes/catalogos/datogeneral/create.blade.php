
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="create" aria-hidden="true">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content " >
            <div class="modal-header alert alert-primary">
                <h5 class="modal-title text-center" id="create">Datos Generales </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form method="POST" action="{{ route($ruta_store) }}" id="search-form"role="form" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <div class="card">
                        <div class="form">
                            <div class="left-side">
                                <div class="left-heading">
                                    <h3>Registro Victima</h3>
                                </div>
                                <div class="steps-content">
                                    <h3>Paso <span class="step-number">1</span></h3>
                                </div>
                                <ul class="progress-bar">
                                    <li class="active">Información Personal</li>
                                    <li>Tipo Violencia</li>
                                    <li>Caracterización Violencia</li>
                                    <li>Información Contacto</li>
                                    <li>Canalización</li>
                                </ul>

                            </div>
                            <div class="right-side">
                                <div class="main active ">
                                    <div class="text">
                                        <h2>Información Personal</h2>
                                        <p>Ingresa tus datos personales</p>
                                    </div>
                                    <div class="input-text ">
                                        <div class="input-div form-floating mb-3">
                                            <input type="text" required require name="nombres" id="nombres" class="form-control" placeholder="Nombre">
                                            <label for="nombres">Nombre/Chjüü  </label>
                                        </div>
                                    </div>
                                    <div class="input-text ">
                                        <div class="input-div form-floating mb-3">
                                            <input type="text" required require name="ape_paterno" id="ape_paterno" class="form-control" placeholder="Apellido Paterno">
                                            <label for="ape_paterno">Apellido Paterno/Apellido in taata</label>
                                        </div>
                                    </div>
                                    <div class="input-text">
                                        <div class="input-div form-floating mb-3">
                                            <input type="text" required require name="ape_materno"  id="ape_materno" class="form-control" placeholder="Apellido Materno">
                                            <label for="ape_materno">Apellido Materno/Apellido in na´naa</label>
                                        </div>

                                    </div>
                                    <div class="input-text ">
                                        <div class="input-div form-floating mb-3">
                                            <input type="text" required require name="telefono" id="telefono" class="form-control" placeholder="Telefono">
                                            <label for="telefono">Telefono/Dypjú</label>
                                        </div>
                                    </div>

                                    <div class="input-text">
                                        <div class="input-div form-floating mb-3">
                                            <input type="text" required require name="email" id="email" class="form-control" placeholder="Email">
                                            <label for="email">Correo Electrónico/</label>
                                        </div>
                                    </div>
                                    <div class="input-text">
                                        <div class="input-div">
                                            <label>Estado Civil en el que se encuentra/Güiferzguée güiimmii</label>
                                            <select type="text"required require  name="id_situ_conyugal" id="id_situ_conyugal" class="form-select">
                                                <option value="">Elegir estado civil</option>
                                                @foreach($datos_situacion_conyugal as $dato_situacion_conyugal)
                                                    <option value="{{$dato_situacion_conyugal->$id_situ_conyugal}}">{{$dato_situacion_conyugal->$situacion_conyugal}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="input-div">
                                            <label>Sexo/Güifesguee </label>
                                            <ul class="list-group">
                                                @foreach($datos_sexo as $dato_sexo)
                                                    <li class="list-group-item">
                                                        <input class="form-check-input me-1" type="radio" required require name="id_sexo" value="{{$dato_sexo->$id_sexo}}" id="firstRadio" checked>
                                                        <label class="form-check-label" for="firstRadio">{{$dato_sexo->$sexo}}</label>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="buttons button_space">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Cerrar</button>
                                        <button class="next_button">Siguiente</button>
                                        <button class="next_button">Siguiente</button>
                                    </div>
                                </div>
                                <div class="main">
                                    <div class="text">
                                        <h2>Tipo de Violencia</h2>
                                    </div>

                                    <div class="input-text">

                                        <div class="input-div">
                                            <p>¿Ha tenido código 100?/¿Fepguipezii dyte?</p>
                                            <div class="form-check">
                                                <input class="form-check-input" value="Si" type="radio" name="codigo100" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Si / Jää
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" value="No" type="radio" name="codigo100" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    No / Iyo
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-text">
                                        <div class="input-div">
                                            <p>Tipo de Violencia que ha sufrido / Giipeszi shüü</p>
                                            @foreach($datos_tipo_violencia as $dato_tipo_violencia)
                                                <div class="form-group form-check">
                                                    <input class="form-check-input  " type="checkbox" name="id_tipo_violencia[]" value="{{$dato_tipo_violencia->$id_tipo_violencia}}" id="tipo_violencia" >
                                                    <label class="form-check-label" for="tipo_violencia">
                                                        {{$dato_tipo_violencia->$tipo_violencia}}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="input-text">
                                        <div class="input-div">
                                            <label>Modalidades / Peyferrizque </label>
                                            <select type="text" required require  name="id_modalidad_violencia" id="id_nacionalidad" class="form-select">
                                                <option value="">Elegir Modalidad </option>
                                                @foreach($datos_modalidad_violencia as $dato_modalidad_violencia)
                                                    <option value="{{$dato_modalidad_violencia->$id_modalidad_violencia}}">{{$dato_modalidad_violencia->$modalidad}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="buttons button_space">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Cerrar</button>
                                        <button class="back_button">Regresar</button>
                                        <button class="next_button">Siguiente</button>
                                    </div>
                                </div>
                                <div class="main">
                                    <div class="text">
                                        <h2>Caracterización de Victima</h2>
                                    </div>

                                    <div class="input-text">
                                        <div class="input-div form-floating mb-3">
                                            <input type="text" required require  name="vive_con" id="vive_con" class="form-control" placeholder="Vive Con">
                                            <label for="vive_con">Vive Con / Coguii  minguii</label>
                                        </div>
                                    </div>

                                    <div class="input-text">
                                        <div class="input-div input-group date js-date form-floating mb-3">
                                            <input type="text" required require name="{{$fecha_nacimiento}}" id="{{$fecha_nacimiento}}" class="form-control"  placeholder="">
                                            <label for="{{$fecha_nacimiento}}">Fecha de Nacimiento / Paa che´ee</label>
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-th"></i>
                                            </span>
                                        </div>

                                    </div>
                                    <div class="input-text">
                                        <div class="input-div form-floating mb-3">
                                            <input type="text" required require  name="{{$hijos}}" id="{{$hijos}}" class="form-control"  placeholder="Hijos">
                                            <label for="{{$hijos}}">Hijos / Ch´ii</label>
                                        </div>

                                        <div class="input-div form-floating mb-3">
                                            <input type="text"name="curp" id="curp" class="form-control"  placeholder="Curp">
                                            <label for="curp">Curp / Jonko</label>
                                        </div>
                                    </div>
                                    <div class="input-text">
                                        <div class="input-div ">
                                            <label >¿Pertenece a un Grupo étnico? / Jangeku</label>
                                            <div class="form-check">
                                                <input class="form-check-input" value="Si" type="radio" name="{{$grupo_etnico}}" id="{{$grupo_etnico}}" onclick="myFunctionCheckSi()">
                                                <label class="form-check-label" for="{{$grupo_etnico}}">
                                                    Si / Jää
                                                </label>
                                            </div>
                                            <div class="form-check" >
                                                <input class="form-check-input" value="No" type="radio" name="{{$grupo_etnico}}" id="{{$grupo_etnico}}" onclick="myFunctionCheck()">
                                                <label class="form-check-label" for="{{$grupo_etnico}}">
                                                    No / Iyo
                                                </label>
                                            </div>
                                            <script>
                                                function myFunctionCheckSi() {
                                                    console.log("Grupo etnico SI");
                                                    $.get('/api/idioma', function (data) {
                                                        let html_select='<option value="">Elegir Idioma / In jñaa</option>';
                                                        for(let i=1;i==1;i++) {
                                                            for (let j = 0; j < data[i].length; j++) {
                                                                html_select += '<option value="' + data[1][j].id_idioma + '">' + data[1][j].idioma_espaniol + '</option>';
                                                                console.log(data[i].length);
                                                            }
                                                        }
                                                        $('#id_idioma').html(html_select);
                                                    });
                                                }
                                            </script>
                                            <script>
                                                function myFunctionCheck(){
                                                    console.log("Grupo etnico NO");

                                                    $.get('/api/idioma', function (data) {
                                                        let html_select='<option value="' +  data[0][0].id_idioma + '">'+ data[0][0].idioma_espaniol+'</option>';
                                                        for(let i=1;i==1;i++) {
                                                            for (let j = 0; j < data[i].length; j++) {
                                                                html_select += '<option value="' + data[1][j].id_idioma + '">' + data[1][j].idioma_espaniol + '</option>';
                                                                console.log(data[i].length);
                                                            }
                                                        }
                                                        $('#id_idioma').html(html_select);
                                                    });
                                                }
                                            </script>
                                        </div>
                                    </div>
                                    <div class="input-text">
                                        <div class="input-div">
                                            <p>Nacionalidad / Jango ´bi ñeje </p>
                                            <select type="text" required require  name="id_nacionalidad" id="id_nacionalidad" class="form-select">
                                                <option value="">Elegir Nacionalidad</option>
                                                @foreach($datos_nacionalidad as $dato_nacionalidad)
                                                    <option value="{{$dato_nacionalidad->$id_nacionalidad}}">{{$dato_nacionalidad->$nacionalidad}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="input-div">
                                            <p>Idioma / In jñaa</p>
                                            <select type="text" required require  name="id_idioma" id="id_idioma" class="form-select">
                                                <option value="">Elegir Idioma</option>
                                                @foreach($datos_idioma as $dato_idioma)
                                                    <option value="{{$dato_idioma->$id_idioma}}">{{$dato_idioma->$idioma_espaniol}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                    <div class="buttons button_space">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Cerrar</button>
                                        <button class="back_button">Regresar</button>
                                        <button class="next_button">Siguiente</button>
                                    </div>
                                </div>
                                <div class="main">
                                    <div class="text">
                                        <h2>Informacion de Contacto:</h2>
                                        <p>Ingresa los datos de tu domiclio</p>
                                    </div>
                                    <div class="input-text">
                                        <div class="input-div" >
                                            <label for="{{$id_domicilio}}">Domicilios / Re mingo</label>
                                            <select type="text" name="id_domicilio" id="id_domicilio" class="form-select">
                                                <option value="">Elegir Domicilio / Jodú mingo</option>
                                                @foreach($datos_domicilios as $dato_domicilio)
                                                    <option value="{{$dato_domicilio->$id_domicilio}}">Calle: {{$dato_domicilio->$calle}}, Colonia: {{$dato_domicilio->$colonia}} </option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>

                                    <div id="contenido">

                                        <div class="input-text">
                                            <div class="input-div" >
                                                <label for="">Agregar Domicilio / Zafpe mingo:</label>
                                            </div>
                                        </div>

                                        <div class="input-text"  >
                                            <div class="input-div form-floating ">
                                                <input type="text"  required require  name="calle" id="calle" class="form-control" placeholder="Calle">
                                                <label for="calle">Calle / Ñiii</label>
                                            </div>
                                            <div class="input-div form-floating " >
                                                <input type="text" required require name="colonia" id="colonia" class="form-control" placeholder="">
                                                <label for="colonia">Colonia / Ri xoru</label>
                                            </div>
                                        </div>

                                        <div class="input-text">
                                            <div class="input-div form-floating ">
                                                <input type="text" required require name="no_interior" id="no_interior" class="form-control" placeholder="">
                                                <label for="no_interior">Número Interior \n / Mberee srrinu</label>
                                            </div>
                                        </div>

                                        <div class="input-text">
                                            <div class="input-div form-floating ">
                                                <input type="text" required require name="no_exterior" id="no_exterior" class="form-control" placeholder="" >
                                                <label for="no_exterior">Número Exterior / Mberee mböö</label>
                                            </div>
                                        </div>

                                        <div class="input-text">
                                            <div class="input-div">
                                                <label>Codigo postal / Xakajiii</label>
                                                <input type="text" name="cod_postal" id="cod_postal" class="form-control" placeholder="Codigo postal">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-text" id="estado" >
                                        <div class="input-div" >
                                            <label for="id_estado">Estado</label>
                                            <select type="text"   name="id_estado" id="id_estado" class="form-select">
                                                <option value="">Elegir Estado</option>
                                                @foreach($datos_estados as $datos_estado)
                                                    <option value="{{$datos_estado->$id_estado}}">{{$datos_estado->$estado}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-text" id="municipios">
                                        <div class="input-div" >
                                            <label for="id_municipio">Municipio / Ri menzum</label>
                                            <select type="text"   name="id_municipio" id="id_municipio" class="form-select">
                                              {{--}}  <option value="">Elegir Municipio</option>
                                                @foreach($datos_municipios as $dato_municipio)
                                                    <option value="{{$dato_municipio->$id_municipio}}">{{$dato_municipio->$municipio}}</option>
                                                @endforeach
--}}
                                            </select>
                                        </div>
                                    </div>

                                    <div class="buttons button_space">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Cerrar</button>
                                        <button class="back_button">Regresar</button>
                                        <button class="next_button">Siguiente</button>
                                    </div>
                                </div>
                                <div class="main">
                                    <div class="text">
                                        <h2>Canalización Victima:</h2>
                                    </div>

                                    <div class="input-text">
                                        <div class="input-div form-floating mb-3">
                                            <input type="text" required require name="dependencia" id="dependencia" class="form-control" placeholder="Dependencia">
                                            <label for="dependencia">Dependencia</label>
                                        </div>
                                    </div>

                                    <div class="input-text">

                                        <div class="input-div form-floating mb-3">

                                            <select type="text"required require  name="apoyo" id="apoyo" class="form-select" placeholder="">
                                                <option value="">Tipo de Apoyo</option>
                                                @foreach($datos_tipo_apoyo as $dato_tipo_apoyo)
                                                    <option value="{{$dato_tipo_apoyo->$id_tipo_apoyo}}">{{$dato_tipo_apoyo->$tipo_apoyo}}</option>
                                                @endforeach
                                            </select>
                                            <label for="apoyo">Apoyo</label>
                                        </div>
                                    </div>

                                    <div class="input-text">
                                        <div class="input-div form-floating mb-3">
                                            <input type="text" required require name="imputado" id="imputado" class="form-control" placeholder="">
                                            <label for="imputado">Imputado/Agresor</label>
                                        </div>
                                    </div>
                                    <div class="input-text">
                                        <div class="input-div form-floating mb-3">


                                            <select type="text"required require  name="relacion" id="relacion" class="form-select" placeholder="">
                                                <option value="">Tipo Relacion</option>
                                                @foreach($datos_tipo_relacion as $dato_tipo_relacion)
                                                    <option value="{{$dato_tipo_relacion->$id_tiporelacion}}">{{$dato_tipo_relacion->$tipo_relacion}}</option>
                                                @endforeach
                                            </select>
                                            <label for="relacion">Tipo Relación</label>
                                        </div>

                                    </div>

                                    <div class="input-text">
                                        <div class="input-div form-floating mb-3">
                                            <input type="text" required require name="nic" id="nic" class="form-control" placeholder="">
                                            <label for="imputado">Número interno de control (NIC)</label>
                                        </div>
                                    </div>

                                    <div class="input-text">
                                        <div class="input-div form-floating mb-3">
                                            <input type="text" required require name="nuc" id="nuc" class="form-control" placeholder="">
                                            <label for="imputado">Número único de causa (NUC)</label>
                                        </div>
                                    </div>

                                    <div class="buttons button_space">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Cerrar</button>
                                        <button class="back_button">Regresar</button>
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
