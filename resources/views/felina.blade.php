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
        background: rgb(226, 239, 217);
        border-bottom-width: 2px;
        border-color: gray;
    }
    th.datos{
        border-width: 1px;
        border-color: black;
        letter-spacing: 0.025em;
        width: 10px;
        font-size: 10px;

    }
    tr.azul{
        background-color: white;
        text-align: center;
        font-size: 12px;
    }
    td.datos{
        border-width: 1px;
        border-color: black;
        width: 10px;
        font-size: 10px;
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
                height: 4cm;
            }


         /** Segunda tabla **/
    td.hematologia{
        border-width: 1px;
        border-color: black;
        font-size: 12px;
        padding-top: 4px;
        padding-bottom: 4px;
    }
    th.hematologia{
        border-width: 1px;
        border-color: black;
        letter-spacing: 0.025em;
        font-size: 12px;
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
                                <strong>Nombre y apellido:</strong>  {{$paciente->propietario}}   
                               </td>
                               <td colspan="3" class="datos">
                                <strong>Fecha: </strong>
                                <?php
                                $originalDate =$hc->fecha;
                                //original date is in format YYYY-mm-dd
                                $timestamp = strtotime($originalDate); 
                                $newDate = date("d-m-Y", $timestamp );
                                echo $newDate;
                                 ?>           
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
                                            <strong>Especie:</strong>  Felina
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
                                <thead style="background-color: rgb(226, 239, 217)"> 
                                    <tr>
                                    <th  colspan="3" class="hematologia" >
                                        <strong>HEMATOLOGIA COMPLETA</strong>
                                    </th>
                                </tr>
                                <tr>
                                    <th width="90" class="hematologia" style="background-color: rgb(226, 239, 217)">
                                        Parametro
                                    </th>  
                                    <th width="50" class="hematologia" style="background-color: rgb(226, 239, 217)">
                                        Resultados
                                    </th>  
                                    <th width="90" class="hematologia" style="background-color: rgb(226, 239, 217)">
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
                                        9 – 15  
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
                                        30 – 47                                  
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
                                        5500 – 19500                              
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
                                        175000 – 500000                           
                                     </td>
                                </tr>
                               
                              
                          
                            </tbody>
                        </table>
                        <table style="" >
                            <thead style="background-color: rgb(226, 239, 217)">
                            <tr>
                                <th width="114" class="hematologia" style="background-color: rgb(226, 239, 217)">
                                    <p style="font-size: 13px">Recuento diferencial de Leucocitos</p>
                                </th>  
                                <th width="15" class="hematologia" style="background-color: rgb(226, 239, 217)">
                                    <p style="font-size: 13px"> Valor Relativo (%)</p>
                                </th>  
                                <th width="15" class="hematologia" style="background-color: rgb(226, 239, 217)">
                                    <p style="font-size: 13px">  Valor Absoluto (&#181;l) </p>
                                </th>
                                 <th width="115" class="hematologia" style="background-color: rgb(226, 239, 217)">
                                    <p style="font-size: 13px">Valores Absolutos de Referencia (&#181;l)*</p>
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
                                2500 – 12500                        
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
                            0 – 300                        
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
                            1500 – 70000                     
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
                            0 – 850                    
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
                            0 – 1500                  
                         </td>
                    </tr>
                        
                        </tbody>
                    </table>
                    <p style="font-size: 10px;margin-bottom: 6.5cm;">OBSERVACIÓN: **Resultados verificados.<br> Plasma ligeramente ictérico.
                        * Intervalos de referencia normales en perros adultos. Meyer & Harvey. El Laboratorio en Medicina Veterinaria: Interpretación y Diagnóstico. Inter Médica (2000).</p>
                         {{-- FIN HEMATOLOGIA --}}
                         @endif
                         @endforeach
                   
                       {{-- DESCARTE Anaplasma--}}

                 
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
                <table style="">
                    <thead> 
                        <th class="" colspan="6" >
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
                             <p style="font-size: 15px"> <strong>Remitente:</strong>  {{$paciente->remitente}}</p>
                           </td>
                          
                    </tr>
                
                </tbody>
            </table>
         

            <table style="margin-top: 10px;" >
                <thead style="background-color: rgb(226, 239, 217)">
                  <tr>
                    <th colspan="3" class="hematologia" style="background-color: rgb(226, 239, 217)">
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
                <td align="center" class="hematologia" colspan="3" style="background-color: rgb(226, 239, 217)">
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
           {{--FIN DESCARTE Anaplasma--}}          

                 {{-- DESCARTE Mycoplasma--}}

                 
                 @foreach($paciente->descartes as $d)
                 @if ($d->diagnostico == 'mycoplasma' && $d->fecha == $fecha)
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
                              <p style="font-size: 15px"> <strong>Remitente:</strong>  {{$paciente->remitente}}</p>
                            </td>
                           
                     </tr>
                 
                 </tbody>
             </table>
          
 
             <table style="margin-top: 10px;" >
                 <thead style="background-color: rgb(226, 239, 217)">
                   <tr>
                     <th colspan="3" class="hematologia" style="background-color: rgb(226, 239, 217)">
                         DESCARTE DE HEMOTRÓPICOS (CONCENTRADO CAPA BLANCA)
                    </th>  
                 </tr>           
                     <tr> 
                     <th colspan="3" " class="hematologia" style="background-color: white">
                         <div style="text-align: left">
                         <p style="font-size: 17px; font-weight: lighter">  En los campos examinados <strong style="color: red" >se observaron</strong>en eritrocitos formas cocoides epicelulares compatibles con micoplasmas hemotrópicos o hemoplasmas <strong>(Mycoplasma spp.).</strong></p>  
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
                 <td align="center" class="hematologia" colspan="3" style="background-color: rgb(226, 239, 217)">
                <strong>DESCARTE DE FILARIAS</strong>
                </td>
                </tr>
             <tr class="azul" >
                 <td  class="hematologia">
                     <strong>Técnica de Woo</strong>
                 </td>
                  <td colspan="2" style="font-size: 15px" class="hematologia">
                    A la observación microscópica de la zona flogística del tubo capilar no se visualizó movimiento sugestivo de presencia de microfilarias
                  </td>
                 
             </tr>
             </tbody>
         </table>
         @endif 
 @endforeach
            {{--FIN DESCARTE Anaplasma--}}          
 
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
              {{-- DESCARTE NEGATIVO--}}

                 
 @foreach($paciente->descartes as $n)
 @if ($d->diagnostico == 'negativo' && $n->fecha == $fecha)
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
 <table class="">
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
              <p style="font-size: 15px"> <strong>Remitente:</strong>  {{$paciente->remitente}} </p>
            </td>
           
     </tr>
 
 </tbody>
</table>


<table style="margin-top: 2em; margin-bottom: 11.5cm" >
 <thead style="background-color: rgb(226, 239, 217)">
   <tr>
     <th colspan="3" class="hematologia" style="background-color: rgb(226, 239, 217)">
         DESCARTE DE HEMOTRÓPICOS (CONCENTRADO CAPA BLANCA)
    </th>  
 </tr>           
     <tr> 
     <th colspan="3" class="hematologia" style="background-color: white">
       <p style=" margin-left: 10px; font-weight: 500; font-size: 15px; text-align: initial">  En los campos examinados <strong style="color: red" > no se observaron</strong>microorganismos hemotrópicos</p> <p style="font-size: 14px; text-align: center"></p> intracitoplasmáticos, epicelulares, ni pericelulares.</p>    
     </th> 
     
 </tr>               
</thead>
<tbody>
<tr class="azul" >
 <td align="center" class="hematologia" colspan="3" style="background-color: rgb(226, 239, 217)">
<strong>DESCARTE DE FILARIAS</strong>
</td>
</tr>
<tr class="azul" >
 <td  class="hematologia">
     <strong>Técnica de Woo</strong>
 </td>
  <td colspan="2" style="font-size: 15px" class="hematologia">
    A la observación microscópica de la zona flogística del tubo capilar<strong> no </strong> visualizó movimiento sugestivo de presencia de microfilarias.
  </td>
 
</tr>
</tbody>
</table>
@endif 
@endforeach
{{--FIN DESCARTE NEGATIVO--}}
{{-- CITOLOGIA SEDIMENTO URINARIO--}}
  
@foreach ($paciente->citologiaurinaria as $cu)
@if ($cu->diagnostico == 'neoplasia' && $cu->fecha == $fecha)
    
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
            <strong>Fecha: </strong>  {{$cu->fecha}} 
          </td>
    </tr>

</tbody>
</table>
<table  style="margin-top: 1em">
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


<table style="margin-top: 10px; margin-bottom: 4.5cm;" >
<thead style="background-color: rgb(111, 172, 70)">
  <tr>
    <th colspan="4" class="hematologia" style="background-color: rgb(111, 172, 70)">
        CITOLOGÍA SEDIMENTO URINARIO
   </th>  
</tr>           
    <tr> 
    <th colspan="4"class="hematologia" style="background-color: white">
      <div style="text-align: initial">
        <p style="font-size: 12px; font-weight: lighter;">Se evalúan extendidos de sedimento urinario. Muestra de orina obtenida por {{$cu->extraccion}}, extendidos realizados del sedimento obtenido postcentrifugación, coloreado con tinción tipo Romanowsky previa fijación.
         <strong >Hallazgos</strong>
            <ul style="margin-left: 20px; font-weight: lighter; font-size: 12px;">
             <li>Celularidad abundante en todo el extendido, principalmente conformada por células nucleadas no inflamatorias (Epiteliales Transicionales) y escasas células nucleadas inflamatorias (Polimorfonucleares Neutrófilos y Eosinófilos, Macrófagos). Moderada cantidad de eritrocitos.</li>
             <li>Predominan los grupos celulares de gran tamaño, desorganizados, con apariencia de racimos, constituidos por células transicionales que muestran evidentes cambios anaplásicos con numerosas atipias nucleares en ausencia de inflamación; acentuada anisocitosis, núcleos grandes y citoplasma voluminoso, ocasional vacuolización celular, la mayoría presenta citoplasma bien definido con acentuada variación en la tinción citoplasmática, oscilando entre la palidez a intensa basofilia, núcleo central con cromatina fuertemente condensada, nucléolos múltiples prominentes, frecuentes células multinucleadas, numerosas figuras de mitosis.</li>
         </ul>
        </p>  </div>  
    </th>  
    
</tr>               
</thead>
<tbody>
<tr class="azul" >
<td class="hematologia">
    <div class="imagen2"> 
        <img aling="center" class="descarte"  src="./uploads/{{$cu->imagen3}}" >
        </div>
</td>
 <td class="hematologia ">
    <div class="imagen2"> 
        <img class="descarte"  src="./uploads/{{$cu->imagen3}}" >
        </div>
 </td>
 <td class="hematologia ">
    <div class="imagen2"> 
        <img class="descarte"  src="./uploads/{{$cu->imagen3}}" >
        </div>
 </td>
 <td class="hematologia ">
    <div class="imagen2"> 
        <img class="descarte"  src="./uploads/{{$cu->imagen4}}" >
        </div>
 </td>
</tr>
<tr class="azul" >
 <td colspan="4"  style="font-size: 12px" class="hematologia">
    
  <strong>CONCLUSION:</strong>  Según los criterios establecidos los hallazgos citológicos indican <strong>“Neoplasia de Células Transicionales, Carcinoma compatible”.</strong>
  <p><strong>Observacion</strong> Se sugiere histopatología confirmatoria.</p>
 </td>

</tr>
</tbody>
</table>
@endif
@endforeach
{{--FIN  CITOLOGIA SENDIMENTO URINARIO --}}
             {{-- QUIMICA SANGUINEA --}}
          
             @foreach ($paciente->quimicas as $q)
             @if ($paciente->quimicas && $q->fecha == $fecha)
                 
             <table class="margen" >
                 <thead> 
                     <th class="datos" colspan="6" >
                         Datos del Propietario
                     </th>            
             </thead>
             <tbody>
                 <tr class="azul">
                     <td colspan="3" class="datos">
                         <strong>Nombre y apellido:</strong>  {{$paciente->propietario}}   
                        </td>
                        <td colspan="3" class="datos">
                         <strong>Fecha: </strong>
                          <?php
                       $originalDate =$q->fecha;
                                //original date is in format YYYY-mm-dd
                                $timestamp = strtotime($originalDate); 
                                $newDate = date("d-m-Y", $timestamp );
                                echo $newDate;
                          ?>             
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
                                     <strong>Especie:</strong>  Felina
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
                  
                     <table style="margin-top: 30px">
                         <thead style="background-color: rgb(111, 172, 70)"> 
                             <tr>
                             <th  colspan="3" class="hematologia" >
                                 <strong>BIOQUÍMICA SANGUÍNEA</strong>
                             </th>
                         </tr>
                         <tr>
                             <th width="114" class="hematologia" style="background-color: rgb(226, 239, 217)">
                                 Parametro
                             </th>  
                             <th width="5" class="hematologia" style="background-color: rgb(226, 239, 217)">
                                 Resultados
                             </th>  
                             <th width="60" class="hematologia" style="background-color: rgb(226, 239, 217)">
                                 Intervalos de referencia
                             </th>   
                         </tr>           
                     </thead>
                     <tbody>
                        @if ($q->urea)
                        <tr class="azul" >
                            <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                             <strong>UREA (NITRÓGENO URÉICO)</strong>   
                            </td>
                            <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                {{$q->urea}} mg/dl
                                </td>
                            <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                25 – 65 mg/dl 
                            </td>
                            <tr class="azul" >
                                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                 <strong>CREATININA</strong>   
                                </td>
                                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                    {{$q->creatinina}} mg/dl
                                    </td>
                                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                   0,6 - 1,8 mg/dl 
                                </td>
                            </tr>
                        @endif
                        @if ($q->alt)     
                         <tr class="azul" >
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                              <strong>ALANINO AMINO TRANSFERADA (ALT)</strong>  
                             </td>
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                 {{$q->alt}} UI/L  
                                 </td>
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                               14 – 72 UI/L 
                             </td>
                             
                         </tr>
                         @endif
                         @if ($q->ast)  
                         <tr class="azul" >
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                              <strong>ASPARTATO AMINO TRANSFERASA (AST) </strong>   
                             </td>
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                 {{$q->ast}}UI/L 
                             </td>
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                10 – 61 UI/L                                 
                              </td>
                             
                         </tr>
                         @endif
                         @if ($q->ggt)  
                         <tr class="azul" >
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                              <strong>GAMMA GLUTAMIL TRANSFERASA (GGT)</strong>   
                             </td>
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                 {{$q->ggt}} UI/L
                             </td>
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                Menor a 5 UI/L                                 
                              </td>
                             
                         </tr>
                         @endif
                         @if ($q->fosfatasa)
                         <tr class="azul" >
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                 <strong>FOSFATASA ALCALINA</strong>   
                             </td>
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                {{$q->fosfatasa}} UI/L  
                             </td>
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                 Menor a 100 UI/L                              
                              </td>
                         </tr>
                         @endif
                         @if ($q->bilirrubinaT)
                         <tr class="azul" >
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                 <strong>BILIRRUBINA TOTAL</strong>   
                             </td>
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                 {{$q->bilirrubinaT}} mg/dl       
                             </td>
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                0,1 – 0,4 mg/dl                          
                              </td>
                         </tr>
                         @endif
                         @if ($q->bilirrubinaD)
                         <tr class="azul" >
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                 <strong>BILIRRUBINA DIRECTA</strong>   
                             </td>
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                 {{$q->bilirrubinaD}} mg/dl       
                             </td>
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                Menor a 0,3 mg/dl                          
                              </td>
                         </tr>
                         @endif
                         @if ($q->bilirrubinaI)
                         <tr class="azul" >
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                 <strong>BILIRRUBINA INDIRECTA</strong>   
                             </td>
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                 {{$q->bilirrubinaI}} mg/dl      
                             </td>
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                Menor a 0,05 mg/dl                           
                              </td>
                         </tr>
                         @endif
                         @if ($q->proteinasT)
                         <tr class="azul" >
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                 <strong>Proteinas Totales Séricas</strong>   
                             </td>
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                 {{$q->proteinasT}} g/dl      
                             </td>
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                5,9 – 8,0 g/dl                          
                              </td>
                         </tr>
                         @endif
                         @if ($q->albumina)
                         <tr class="azul" >
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                 <strong>ALBÚMINA</strong>   
                             </td>
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                 {{$q->albumina}} g/dl        
                             </td>
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                2,6 – 3,9 g/dl                          
                              </td>
                         </tr>
                         @endif
                         @if ($q->globulinas)
                         <tr class="azul" >
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                 <strong>Globulinas</strong>   
                             </td>
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                 {{$q->globulinas}} g/dl      
                             </td>
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                2,9 – 4,7 g/dl                         
                              </td>
                         </tr>
                         @endif
                         @if ($q->relacionag)
                         <tr class="azul" >
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                 <strong>Relacion a/g   </strong>   
                             </td>
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                 {{$q->relacionag}}      
                             </td>
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                0,6 – 1,5                          
                              </td>
                         </tr>
                         @endif
                         @if ($q->colesterolT)
                         <tr class="azul" >
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                 <strong>Colesterol Total </strong>   
                             </td>
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                 {{$q->colesterolT}} mg/dl       
                             </td>
                             <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"  class="hematologia">
                                 70- 150 mg/dl                           
                              </td>
                         </tr>
                        @endif
                       
                   
                     </tbody>
                 </table>
              
             <p style="font-size: 12px">Intervalos de referencia normales en felinos adultos. Nuñez, L; Bouda, J. Patología Clínica Veterinaria. DR Edit. (2007).</p>

                  {{-- FIN QUIMICA SANGUINEA --}}
                  
                  @endif
                  @endforeach
                  {{--  Urianalsis  --}}

@foreach ($paciente->urianalisis as $u)

@if ($paciente->urianalisis && $q->fecha == $fecha)
    
<table class="" >
    <thead> 
        <th class="datos" colspan="6" >
            Datos del Propietario
           
           
        </th>            
</thead>
<tbody>
    <tr class="azul">
        <td colspan="3" class="datos">
            <strong>Nombre y apellido:</strong>  {{$paciente->propietario}}   
           </td>
           <td colspan="3" class="datos">
            <strong>Fecha: </strong>  <?php
            $originalDate =$u->fecha;
            //original date is in format YYYY-mm-dd
            $timestamp = strtotime($originalDate); 
            $newDate = date("d-m-Y", $timestamp );
            echo $newDate;
             ?>            
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
                        <strong>Especie:</strong>  Canina
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
     
        <table>
            <thead style="background-color: rgb(111, 172, 70)"> 
                <tr>
                <th  colspan="3" class="hematologia" >
                    <strong>URIANALISIS 
                    </strong>
                </th>
            </tr>
            <tr>
                <th width="110" class="hematologia" style="background-color: rgb(197, 224, 179)">
                    Examen Fisico
                </th>    
                <th width="60" class="hematologia" style="background-color: rgb(197, 224, 179)">
                    Examen del sedimento
                </th>   
            </tr>           
        </thead>
        <tbody>
           
            <tr class="azul" >
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    <strong>Color:</strong> {{$u->color}}  
                </td>
              
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    <strong>Hematíes:</strong> {{$u->hematies}}                          
                 </td>
            </tr>
          
           <tr class="azul" >
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    <strong>Olor:</strong> {{$u->olor}}  
                </td>
              
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">

                    <strong>Leucocitos:</strong> {{$u->leucocitos}}                          
                 </td>
            </tr>
               <tr class="azul" >
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    <strong>Aspecto:</strong> {{$u->aspecto}}  
                </td>
              
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">

                    <strong>Bacterias:</strong> {{$u->bacterias}}                          
                 </td>
               </tr>
         
            <tr class="azul" >
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    <strong>Densidad:</strong> {{$u->densidad}}  
                </td>
              
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">

                    <strong>Otros:</strong> {{$u->otros}}                          
                 </td>
            </tr>
        </tbody>
    </table>
    <table>
        <thead style="background-color: rgb(226, 239, 217)">
        <tr>
            <th width="114" class="hematologia" style="background-color: rgb(226, 239, 217)">
               <p style="font-size: 13px"> EXAMEN QUÍMICO</p>
            </th>  
             <th width="60" class="hematologia" style="background-color: rgb(226, 239, 217)">
                <p style="font-size: 13px"> Células Epiteliales</p>
            </th>     
        </tr>           
    </thead>
    <tbody>
    <tr class="azul" >
        <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
            <strong>pH:</strong> {{$u->ph}}  
        </td>
      
        <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">

            <strong>Planas:</strong> {{$u->planas}}                          
         </td>
    </tr>
<tr class="azul">
    <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
        <strong>Glucosa:</strong> {{$u->glucosa}}  
    </td>
  
    <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">

        <strong>Transicionales:</strong> {{$u->transicionales}}                          
     </td>
</tr>
<tr class="azul">
    <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
        <strong>Proteínas:</strong> {{$u->protienas}}  
    </td>
  
    <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">

        <strong>Rendondas pequeñas:</strong> {{$u->redondasp}}                          
     </td>
</tr>
<tr class="azul">
    <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
        <strong>Nitritos:</strong> {{$u->nitritos}}  
    </td>
  
    <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">

        <strong>Rendondas Grandes:</strong> {{$u->redondasg}}                          
     </td>
</tr>
<tr class="azul">
    <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
        <strong>Cetonas:</strong> {{$u->cetonas}}  
    </td>
  
    <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">

        <strong>Caudadas:</strong> {{$u->caudadasq}}                          
     </td>
</tr>
<tr class="azul">
    <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
        <strong>Bilirrubina:</strong> {{$u->bilirrubina}}  
    </td>
  
    <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">

        <strong>Cúmulos células transicionales:</strong> {{$u->cumulos}}                          
     </td>
</tr>
<tr class="azul">
    <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
        <strong>Urobilinógeno:</strong> {{$u->urobilinogeno}}  
    </td>
  
    <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">

        <strong>Cilindros:</strong> {{$u->cilindros}}                          
     </td>
</tr>
<tr class="azul">
    <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
        <strong>Sangre:</strong> {{$u->sangre}}  
    </td>
  
    <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">

        <strong>Cristales:</strong> {{$u->cristalas}}                          
     </td>
</tr>
</tbody>
</table>
<p style="font-size: 12px">{{$u->observacion}}</p>
@endif
@endforeach
                  {{--FIN  Urianalsis  --}}
                    </main>

</body>



