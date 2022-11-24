<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hematologia</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ public_path('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ ltrim(public_path('css/app.css'), '/') }}" />
<style>
 
    thead{
        background: rgb(226, 239, 217);;
        border-bottom-width: 2px;
        border-color: gray;
    }
    th.datos{
        border-width: 1px;
        border-color: black;
        letter-spacing: 0.025em;
        width: 10px;

    }
    tr.azul{
        background-color: white;
        text-align: center;
    }
    td.datos{
        border-width: 1px;
        border-color: black;
        width: 10px;
    }
    
    table{
        table-layout: auto;
        width: 100%;
    }
    .margen{
        margin-top: 8em;
    }
    @page {
                margin: 0cm 0cm;
            }

            /** Defina ahora los márgenes reales de cada página en el PDF **/
            body {
                margin-top: 6cm;
                margin-left: 2cm;
                margin-right: 2cm;
                margin-bottom: 4cm;
            }

            /** Definir las reglas del encabezado **/
            header {
                position: fixed;  
                top: 0cm;
                left: 2cm;
                right: 2cm;
                height: 3cm;
            }

            /** Definir las reglas del pie de página **/
            footer {
                position: fixed; 
                bottom: 2cm; 
                left: 8cm; 
                right: 0cm;
                height: 2cm;
            }


         /** Segunda tabla **/
    td.hematologia{
        border-width: 1px;
        border-color: black;
    }
    th.hematologia{
        border-width: 1px;
        border-color: black;
        letter-spacing: 0.025em;
        
    }
    img.descarte {
 height: 100%;
 width: 100%;
 object-fit: contain;
}
.imagen {
 height:200px;
 width: 208px;
}

    </style>
</head>
<body >
    <header>
    <img  width="100%" height="100%" src="./images/logo.jpg"/>
</header>
<footer>
    <img  width="40%" height="20%" src="./images/firma.png"/>

</footer>
                <main>
                   
                    @foreach ($paciente->hematologiasc as $hc)
                    @if ($paciente->hematologias && $hc->fecha == $fecha)
                        
                            
                    <table >
                        <thead> 
                            <th class="datos" colspan="6" >
                                Datos del Propietario
                            </th>            
                    </thead>
                    <tbody>
                        <tr class="azul">
                            <td colspan="3" class="datos">
                                <strong>Nombre y apellido:</strong> {{$paciente->propietario}}    
                               </td>
                               <td colspan="3" class="datos">
                                <strong>Fecha: </strong>  {{$hc->fecha}} 
                              </td>
                        </tr>
                    
                    </tbody>
                </table>
                        <table style="margin-top: 10px;">
                                    <thead> 
                                        <th class="datos" colspan="6" >
                                            Datos del paciente
                                        </th>            
                                </thead>
                                <tbody>
                                    <tr class="azul" >
                                        <td colspan="2" class="datos">
                                            <strong>Nombre:</strong> {{$paciente->nombre}}   
                                        </td>
                                        <td colspan="2" class="datos">
                                            <strong>Especie:</strong>  Equino
                                            </td>
                                        <td colspan="2" class="datos">
                                        <strong>Raza:</strong>  {{$paciente->raza}}
                                        </td>
                                        
                                    </tr>
                                    <tr class="azul">
                                        <td colspan="2" class="datos">
                                            <strong>Sexo:</strong>  {{$paciente->sexo}}   
                                           </td>
                                           <td colspan="2" class="datos">
                                            <strong>Edad: </strong>  {{$paciente->edad}} 
                                          </td>
                                           <td colspan="2" class="datos">
                                             <strong>Remitente:</strong>  {{$paciente->remitente}}
                                           </td>
                                          
                                    </tr>
                                
                                </tbody>
                            </table>
                         
                            <table style="margin-top: 10px">
                                <thead style="background-color: rgb(197, 224, 179)"> 
                                    <tr>
                                    <th  colspan="3" class="hematologia" >
                                        <strong>HEMATOLOGIA COMPLETA</strong>
                                    </th>
                                </tr>
                                <tr>
                                    <th width="90" class="hematologia" style="background-color: rgb(197, 224, 179)">
                                        Parametro
                                    </th>  
                                    <th width="50" class="hematologia" style="background-color: rgb(197, 224, 179)">
                                        Resultados
                                    </th>  
                                    <th width="90" class="hematologia" style="background-color: rgb(197, 224, 179)">
                                        Valores de referencia
                                    </th>   
                                </tr>           
                            </thead>
                            <tbody>
                               
                                <tr class="azul" >
                                    <td  class="hematologia">
                                     <strong>Hemoglobina (g/dl)</strong>   
                                    </td>
                                    <td  class="hematologia">
                                        {{$hc->hemoglobina}} 
                                        </td>
                                    <td  class="hematologia">
                                        11 – 17 
                                    </td>
                                    
                                </tr>
                                <tr class="azul" >
                                    <td  class="hematologia">
                                     <strong>Hematocrito (%)</strong>   
                                    </td>
                                    <td  class="hematologia">
                                        {{$hc->hematocrito}}
                                    </td>
                                    <td  class="hematologia">
                                        32 – 47                                  
                                     </td>
                                    
                                </tr>
                               
                                <tr class="azul" >
                                    <td  class="hematologia">
                                        <strong>Leucocitos totales (x &#181;l)</strong>   
                                    </td>
                                    <td  class="hematologia">
                                     <?php   echo number_format($hc->leucocitosT, 0, ',', '.');?>     
                                    </td>
                                    <td  class="hematologia">
                                        5.200 – 13.9000                              
                                     </td>
                                </tr>
                                <tr class="azul" >
                                    <td  class="hematologia">
                                        <strong>Plaquetas (x &#181;l)</strong>   
                                    </td>
                                    <td  class="hematologia">
                                        {{$hc->plaquetas}}      
                                    </td>
                                    <td  class="hematologia">
                                        100.000 – 270.000                          
                                     </td>
                                </tr>
                               
                              
                          
                            </tbody>
                        </table>
                        <table style="" >
                            <thead style="background-color: rgb(197, 224, 179)">
                            <tr>
                                <th width="127" class="hematologia" style="background-color: rgb(197, 224, 179)">
                                    <p style="font-size: 13px"> Recuento diferencial de Leucocitos </p>
                                </th>  
                                <th width="15" class="hematologia" style="background-color: rgb(197, 224, 179)">
                                    <p style="font-size: 13px"> Valor Relativo (%) </p>
                                </th>  
                                <th width="15" class="hematologia" style="background-color: rgb(197, 224, 179)">
                                     <p style="font-size: 13px">Valor Absoluto (&#181;l)  </p>
                                </th>
                                 <th width="115" class="hematologia" style="background-color: rgb(197, 224, 179)">
                                    <p style="font-size: 13px"> Valores Absolutos de Referencia (&#181;l)* </p>
                                </th>     
                            </tr>           
                        </thead>
                        <tbody>
                        <tr class="azul" >
                            <td  class="hematologia">
                                <strong>Neutrófilos Segmentados</strong>   
                            </td>
                            <td  class="hematologia">
                                {{$hc->neutrofilosS}}       
                            </td>
                            <td  class="hematologia">
                             <?php 
                               $resultado= ($hc->neutrofilosS * $hc->leucocitosT)/100;
                                
                               if($resultado > 1000){
                                echo number_format($resultado, 0, ',', '.');
                             }
                             else{echo $resultado;
                             }
                                ?>                               
                             </td>
                             <td  class="hematologia">
                                2.200 – 7.400                        
                             </td>
                        </tr>
                    <tr class="azul">
                        <td  class="hematologia">
                            <strong>Neutrófilos en Banda</strong>   
                        </td>
                        <td  class="hematologia">
                            {{$hc->neutrofilosB}}            
                        </td>
                        <td  class="hematologia">
                            <?php 
                            $resultado= ($hc->neutrofilosB * $hc->leucocitosT)/100;
                             
                            if($resultado > 1000){
                                echo number_format($resultado, 0, ',', '.');
                             }
                             else{echo $resultado;
                             }
                             ?>                                  
                         </td>
                         <td  class="hematologia">
                            0 – 100                      
                         </td>
                    </tr>
                    <tr class="azul">
                        <td  class="hematologia">
                            <strong>Linfocitos</strong>   
                        </td>
                        <td  class="hematologia">
                            {{$hc->linfocitos}}                  
                        </td>
                        <td  class="hematologia">
                            <?php 
                            $resultado= ($hc->linfocitos * $hc->leucocitosT)/100;
                            if($resultado > 1000){
                                echo number_format($resultado, 0, ',', '.');
                             }
                             else{echo $resultado;
                             }
                             ?>                            
                         </td>
                         <td  class="hematologia">
                            1.100 – 5.300                    
                         </td>
                    </tr>
                    <tr class="azul">
                        <td  class="hematologia">
                            <strong>Monocitos</strong>   
                        </td>
                        <td  class="hematologia">
                            {{$hc->monocitos}}        
                        </td>
                        <td  class="hematologia">
                            <?php 
                            $resultado= ($hc->monocitos * $hc->leucocitosT)/100;
                             
                            if($resultado > 1000){
                                echo number_format($resultado, 0, ',', '.');
                             }
                             else{echo $resultado;
                             }
                             ?>                            
                         </td>
                         <td  class="hematologia">
                            0 – 900                    
                         </td>
                    </tr>
                    <tr class="azul">
                        <td  class="hematologia">
                            <strong>Eosinófilos</strong>   
                        </td>
                        <td  class="hematologia">
                            {{$hc->eosinofilos}}      
                        </td>
                        <td  class="hematologia">
                            <?php 
                            $resultado= ($hc->eosinofilos * $hc->leucocitosT)/100;
                             
                            if($resultado > 1000){
                                echo number_format($resultado, 0, ',', '.');
                             }
                             else{echo $resultado;
                             }
                             ?>                            
                         </td>
                         <td  class="hematologia">
                            0 – 600                 
                         </td>
                    </tr>
                    <tr class="azul">
                        <td  class="hematologia">
                            <strong>Basofilos</strong>   
                        </td>
                        <td  class="hematologia">
                            {{$hc->basofilos}}      
                        </td>
                        <td  class="hematologia">
                            <?php 
                            $resultado= ($hc->basofilos * $hc->leucocitosT)/100;
                             
                            if($resultado > 1000){
                                echo number_format($resultado, 0, ',', '.');
                             }
                             else{echo $resultado;
                             }
                             
                             ?>                            
                         </td>
                         <td  class="hematologia">
                            0 – 290                 
                         </td>
                    </tr>
                        </tbody>
                    </table>
                    <p>Intervalos de referencia normales en equinos adultos. Meyer & Harvey. El Laboratorio en Medicina Veterinaria: Interpretación y Diagnóstico. Inter Médica. (2000)</p>

                         {{-- FIN HEMATOLOGIA --}}
                          
                          
                         @endif
                         @endforeach
                {{-- Descarte Anaplasma --}}  
                 
                @foreach($paciente->descartes as $d)
                @if ($d->diagnostico == 'anaplasma' && $d->fecha == $fecha)
                <table  class="margen">
                    <thead> 
                        <th class="datos" colspan="6" >
                            Datos del Propietario
                        </th>            
                </thead>
                <tbody>
                    <tr class="azul">
                        <td colspan="3" class="datos">
                            <strong>Nombre y apellido: </strong>    {{$paciente->propietario}}  
                           </td>
                           <td colspan="3" class="datos">
                            <strong>Fecha: </strong>  {{$hc->fecha}} 
                          </td>
                    </tr>
                
                </tbody>
            </table>
                <table style="margin-top: 10px; ">
                    <thead> 
                        <th class="datos" colspan="6" >
                            Datos del paciente
                        </th>            
                </thead>
                <tbody>
                    <tr class="azul" >
                        <td colspan="2" class="datos">
                            <strong>Nombre:</strong> {{$paciente->nombre}}   
                        </td>
                        <td colspan="2" class="datos">
                            <strong>Especie:</strong>  {{$paciente->especie}}
                            </td>
                        <td colspan="2" class="datos">
                        <strong>Raza:</strong>  {{$paciente->raza}}
                        </td>
                        
                    </tr>
                    <tr class="azul">
                        <td colspan="2" class="datos">
                            <strong>Sexo:</strong>  {{$paciente->sexo}}   
                           </td>    
                           <td colspan="2" class="datos">
                            <strong>Edad: </strong>  {{$paciente->edad}} 
                          </td>
                           <td colspan="2" class="datos">
                             <strong>Remitente:</strong>  {{$paciente->remitente}}
                           </td>
                          
                    </tr>
                
                </tbody>
            </table>
         

            <table style="margin-top: 10px;" >
                <thead style="background-color: rgb(197, 224, 179)">
                  <tr>
                    <th colspan="3" class="hematologia" style="background-color: rgb(197, 224, 179)">
                        DESCARTE DE HEMOTRÓPICOS (CONCENTRADO CAPA BLANCA)
                   </th>  
                </tr>           
                    <tr> 
                    <th colspan="3" " class="hematologia" style="background-color: white">
                        <div style="text-align: left">
                        <p style="font-size: 17px; font-weight: lighter">  En los campos examinados <strong style="color: red" >se observaron</strong> en plaquetas inclusiones intracitoplasmáticas sugestivas de ser mórulas de proteobacterias de la familia <strong> Anaplasmataceae. </strong></p> <p style="font-size: 13px; font-weight: normal"> Nota: La familia Anaplasmataceae comprende los géneros Ehrlichia, Anaplasma, no diferenciables morfológicamente.</p>    
                        </div>
                    
                </tr>               
            </thead>
            <tbody>
            <tr class="azul" >
                <td class="hematologia">
                    <div class="imagen">
                    <img class="descarte"  src="./uploads/{{$d->imagen1}}" >
                </div>
                </td>
                 <td class="hematologia imagen">
                    <div class="imagen">
                    <img class="descarte"  src="./uploads/{{$d->imagen2}}" >
                    </div>
                 </td>
                 <td class="hematologia imagen">
                    <div class="imagen"> 
                    <img class="descarte"  src="./uploads/{{$d->imagen3}}" >
                    </div>
                 </td>
            </tr>
            <tr class="azul" >
                <td align="center" class="hematologia" colspan="3" style="background-color: rgb(197, 224, 179)">
               <strong>DESCARTE DE FILARIAS</strong>
               </td>
               </tr>
            <tr class="azul" >
                <td  class="hematologia">
                    <strong>Técnica de Woo</strong>
                </td>
                 <td colspan="2" style="font-size: 15px" class="hematologia">
                    A la observación microscópica de la zona flogística del tubo capilar no se visualizó movimiento sugestivo de presencia de microfilarias.
                 </td>
                
            </tr>
            </tbody>
        </table>
        @endif 
@endforeach 
                {{-- FIN  Descarte Anaplasma --}}
                
                
                {{-- Descarte Babesia --}}
                @foreach($paciente->descartes as $d)
                @if ($d->diagnostico == 'theileria' && $d->fecha == $fecha)
                <table  class="margen">
                    <thead> 
                        <th class="datos" colspan="6" >
                            Datos del Propietario
                        </th>            
                </thead>
                <tbody>
                    <tr class="azul">
                        <td colspan="3" class="datos">
                            <strong>Nombre y apellido: </strong>    {{$paciente->propietario}}  
                           </td>
                           <td colspan="3" class="datos">
                            <strong>Fecha: </strong>  {{$hc->fecha}} 
                          </td>
                    </tr>
                
                </tbody>
            </table>
                <table style="margin-top: 10px; ">
                    <thead> 
                        <th class="datos" colspan="6" >
                            Datos del paciente
                        </th>            
                </thead>
                <tbody>
                    <tr class="azul" >
                        <td colspan="2" class="datos">
                            <strong>Nombre:</strong> {{$paciente->nombre}}   
                        </td>
                        <td colspan="2" class="datos">
                            <strong>Especie:</strong>  {{$paciente->especie}}
                            </td>
                        <td colspan="2" class="datos">
                        <strong>Raza:</strong>  {{$paciente->raza}}
                        </td>
                        
                    </tr>
                    <tr class="azul">
                        <td colspan="2" class="datos">
                            <strong>Sexo:</strong>  {{$paciente->sexo}}   
                           </td>    
                           <td colspan="2" class="datos">
                            <strong>Edad: </strong>  {{$paciente->edad}} 
                          </td>
                           <td colspan="2" class="datos">
                             <strong>Remitente:</strong>  {{$paciente->remitente}}
                           </td>
                          
                    </tr>
                
                </tbody>
            </table>
         

            <table style="margin-top: 10px;" >
                <thead style="background-color: rgb(197, 224, 179)">
                  <tr>
                    <th colspan="3" class="hematologia" style="background-color: rgb(197, 224, 179)">
                        DESCARTE DE HEMOTRÓPICOS (CONCENTRADO CAPA BLANCA)
                   </th>  
                </tr>           
                    <tr> 
                    <th colspan="3" " class="hematologia" style="background-color: white">
                        <div style="text-align: left">
                        <p style="font-size: 17px; font-weight: lighter">  En los campos examinados <strong style="color: red" >se observaron</strong> en eritrocitos inclusiones parasitarias intracitoplasmáticas sugestivas de ser merozoitos de <strong> Theileria equi</strong> (Anteriormente <strong> Babesia equi)</strong>.</p>    
                        </div>
                    
                </tr>               
            </thead>
            <tbody>
            <tr class="azul" >
                <td class="hematologia">
                    <div class="imagen">
                    <img class="descarte"  src="./uploads/{{$d->imagen1}}" >
                </div>
                </td>
                 <td class="hematologia imagen">
                    <div class="imagen">
                    <img class="descarte"  src="./uploads/{{$d->imagen2}}" >
                    </div>
                 </td>
                 <td class="hematologia imagen">
                    <div class="imagen"> 
                    <img class="descarte"  src="./uploads/{{$d->imagen3}}" >
                    </div>
                 </td>
            </tr>
            <tr class="azul" >
                <td align="center" class="hematologia" colspan="3" style="background-color: rgb(197, 224, 179)">
               <strong>DESCARTE DE TRIPANOSOMOSIS</strong>
               </td>
               </tr>
            <tr class="azul" >
                <td  class="hematologia">
                    <strong>Técnica de Woo</strong>
                </td>
                 <td colspan="2" style="font-size: 15px" class="hematologia">
                    A la observación microscópica de la interfase entre el plasma y la zona flogística del tubo capilar no se visualizó movimiento sugestivo de presencia de Tripanosomas
                 </td>
                
            </tr>
            </tbody>
        </table>
        @endif 
@endforeach 
                {{--FIN Descarte Babesia --}}
                   {{-- FROTIS --}}
                   @foreach ($paciente->frotis as $f)
                   @if ($paciente->frotis && $f->fecha == $fecha)
                   <table class="margen">
                       <thead> 
                           <th class="datos" colspan="6" >
                               Datos del Propietario
                           </th>            
                   </thead>
                   <tbody>
                       <tr class="azul">
                           <td colspan="3" class="datos">
                               <strong>Nombre y apellido: </strong>    {{$paciente->propietario}}  
                              </td>
                              <td colspan="3" class="datos">
                               <strong>Fecha: </strong>  {{$hc->fecha}} 
                             </td>
                       </tr>
                   
                   </tbody>
               </table>
                       <table >
                           <thead> 
                               <th class="datos" colspan="6" >
                                   Datos del paciente
                               </th>            
                       </thead>
                       <tbody>
                           <tr class="azul" >
                               <td colspan="2" class="datos">
                                   <strong>Nombre:</strong>  {{$paciente->nombre}}
                               </td>
                               <td colspan="2" class="datos">
                                   <strong>Especie:</strong>  Canina
                                   </td>
                               <td colspan="2" class="datos">
                               <strong>Raza:</strong> {{$paciente->raza}}   
                               </td>
                               
                           </tr>
                           <tr class="azul">
                               <td colspan="2" class="datos">
                                   <strong>Sexo:</strong>  {{$paciente->sexo}}
                                  </td>
                                  <td colspan="2" class="datos">
                                   <strong>Edad: </strong> {{$paciente->edad}}
                                 </td>
                                  <td colspan="2" class="datos">
                                    <strong>Remitente:</strong>  {{$paciente->remitente}}
                                  </td>
                                 
                           </tr>
                       </tbody>
                   </table>  
  
                   <table style="margin-top: 20px;" >
                       <thead style="background-color: rgb(112, 224, 179)">
                         <tr>
                           <th colspan="4" class="hematologia" style="background-color: wheat">
                               ESTUDIO DEL FROTIS
                           </th>  
                       </tr>           
                           <tr>
                           <th height="10px;" class="hematologia" style="background-color: wheat">
                               SERIE
                           </th>  
                           <th colspan="3" class="hematologia" style="background-color: wheat">
                               OBSERVACIONES
                           </th>  
                           
                       </tr>           
                   </thead>
                   <tbody>
                   <tr class="azul" >
                       <td  align="center"   class="hematologia">
                           <strong>Eritrocítica</strong>   
                       </td>
                        <td colspan="3" style="font-size: 15px" class="hematologia">
                           {{$f->observacione}}
                       </td>
                   </tr>
                   <tr class="azul" >
                       <td  align="center"   class="hematologia">
                           <strong>Leucocítica</strong>   
                       </td>
                        <td colspan="3" style="font-size: 15px" class="hematologia">
                               {{$f->observacionl}}    
                       </td>
                   </tr>
                   <tr class="azul" >
                       <td  align="center"   class="hematologia">
                           <strong>Trombocítica</strong>   
                       </td>
                        <td colspan="3" style="font-size: 15px" class="hematologia">
                       {{$f->observaciont}} 
                       </td>
                       </tr>
                   </tbody>
               </table>
               <p style="font-size: 10px">{{$f->observacion}} </p>
               @endif
               @endforeach
               {{-- FIN FROTIS --}}
                    </main>

</body>



