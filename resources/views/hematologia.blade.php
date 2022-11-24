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
        
        border-color: gray;
    }
    th.datos{
        border-width: 1px;
        border-color: black;
        letter-spacing: 0.025em;
        width: 10px;
        font-size: 11px;
    }
    tr.azul{
        background-color: white;
        text-align: center; 
        font-size: 14px;
        font-weight: lighter;
  
    }
    
    .espaciados{
        background-color: white;
        text-align: center;
        
        border-width: 1px;
        border-color: black;
       
    }
    .espaciados2{
        background-color: white;
        text-align: left;
        padding-top: 7px;
        padding-bottom: 7px;
        border-width: 1px;
        border-color: black;
       font-size: 12px;
    }
    td.datos{
        border-width: 1px;
        border-color: black;
        width: 10px;
        font-size: 11px;
    }
    
    table{
        table-layout: auto;
        width: 100%;
    }
    .margen{
        margin-top: 9em;
    }
    
    @page {
                margin: 1cm 1cm;
            }

            /** Defina ahora los márgenes reales de cada página en el PDF **/
            body {
                margin-top: 6cm;
                margin-left: 1cm;
                margin-right: 1cm;
                margin-bottom: 6cm;
            }

            /** Definir las reglas del encabezado **/
            header {
                position: fixed;  
                top: 0cm;
                left: 1cm;
                right: 1cm;
                height: 3cm;
            }

            /** Definir las reglas del pie de página **/
            footer {
                position: fixed; 
                bottom: 2cm; 
                left: 7cm; 
                right: 0cm;
                height: 2cm;
            }


         /** Segunda tabla **/
    td.hematologia{
        border-width: 1px;
        border-color: black;
        font-size: 12px;
     
        width: 100%;
        font-weight: lighter;
        padding-top: 5px;
        padding-bottom: 5px;
    }
    th.hematologia{
        border-width: 1px;
        border-color: black;
        letter-spacing: 0.025em;
        font-size: 14px;
        width: 100%;
        font-weight: lighter;
    }
    th.hematologia2{
        border-width: 1px;
        border-color: black;
        letter-spacing: 0.025em;
        font-size: 14px;
        font-weight: lighter;

    }
    img.descarte {
 height: 100%;
 width: 100%;
 object-fit: contain;
}
.imagen {
 height:200px;
 width: 208px;

  margin-left: auto;
  margin-right: auto;
}
.imagen2 {
 height:110px;
 width: 120px;
 display: block;
  margin-left: auto;
  margin-right: auto;

}

ul{
  list-style-type: square;
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
                                <strong>Nombre y apellido: </strong>    {{$paciente->propietario}}  
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

                        <table style="margin-top: 10px;">
                                    <thead> 
                                        <th class="datos" colspan="6" >
                                            Datos del paciente
                                        </th>            
                                </thead>
                                <tbody>
                                    <tr>
                                        
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
                                    <tr>
                                        <td colspan="2" class="datos">
                                            <strong>Sexo:</strong>  {{$paciente->sexo}}   
                                           </td>
                                           <td colspan="2" class="datos">
                                            <strong>Edad: </strong>  {{$paciente->edad}} 
                                          </td>
                                           <td colspan="2" class="datos">
                                             <strong >Remitente:</strong>   {{$paciente->remitente}}
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
                                    <th width="90" class="hematologia" style="background-color: rgb(226, 239, 217); font-weight: lighter;">
                                        Parametro
                                    </th>  
                                    <th width="50" class="hematologia" style="background-color: rgb(226, 239, 217)">
                                        Resultados
                                    </th>  
                                    <th width="90" class="hematologia" style="background-color: rgb(226, 239, 217)">
                                       Intervalos de referencia
                                    </th>   
                                </tr>           
                            </thead>
                            <tbody>
                               
                                <tr class="azul" >
                                    <td  class="hematologia">
                                     Hemoglobina (g/dl)  
                                    </td>
                                    <td  class="hematologia">
                                        {{$hc->hemoglobina}} 
                                        </td>
                                    <td  class="hematologia">
                                        12 – 18  
                                    </td>
                                    
                                </tr>
                                <tr class="azul" >
                                    <td  class="hematologia">
                                     Hematocrito (%)  
                                    </td>
                                    <td  class="hematologia">
                                        {{$hc->hematocrito}}
                                    </td>
                                    <td  class="hematologia">
                                        37 – 55                                   
                                     </td>
                                    
                                </tr>
                               
                                <tr class="azul" >
                                    <td  class="hematologia">
                                        Leucocitos totales (x &#181;l)  
                                    </td>
                                    <td  class="hematologia">
                                    <?php 
                                       echo number_format($hc->leucocitosT, 0, ',', '.');
                                    ?>
                                    </td>
                                    <td  class="hematologia">
                                        5.500 – 16.900                              
                                     </td>
                                </tr>
                                <tr class="azul" >
                                    <td  class="hematologia">
                                        Plaquetas (x &#181;l)  
                                    </td>
                                    <td  class="hematologia">
                                        {{$hc->plaquetas}}      
                                    </td>
                                    <td  class="hematologia">
                                        150.000 – 500.000                            
                                     </td>
                                </tr>      
                            </tbody>
                        </table>
                        <table>
                            <thead style="background-color: rgb(226, 239, 217)">
                            <tr>
                                <th width="94.4" class="hematologia2" style="background-color: rgb(226, 239, 217)">
                                   Recuento diferencial de Leucocitos
                                </th>  
                                <th width="45" class="hematologia2" style="background-color: rgb(226, 239, 217)">
                                     Valor Relativo (%)
                                </th>  
                                <th width="45" class="hematologia2" style="background-color: rgb(226, 239, 217)">
                                    Valor Absoluto (&#181;l) 
                                </th>
                                 <th width="94" class="hematologia2" style="background-color: rgb(226, 239, 217)">
                                    Valores Absolutos de Referencia (&#181;l)*
                                </th>     
                            </tr>           
                        </thead>
                        <tbody>
                        <tr class="azul" >
                            <td  class="hematologia">
                                Neutrófilos Segmentados  
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
                                3.000 – 11.500                          
                             </td>
                        </tr>
                    <tr class="azul">
                        <td  class="hematologia">
                            Neutrófilos en Banda  
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
                            Linfocitos  
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
                            1.000 – 4.500                     
                         </td>
                    </tr>
                    <tr class="azul">
                        <td  class="hematologia">
                            Monocitos  
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
                            150 – 1.350                    
                         </td>
                    </tr>
                    <tr class="azul">
                        <td  class="hematologia">
                            Eosinófilos 
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
                            100 – 1.250                   
                         </td>
                    </tr>
                </tbody>
            </table>
            <p  style="font-size: 10px;">OBSERVACIÓN: **Resultados verificados. <br>
            * Intervalos de referencia normales en perros adultos. Meyer & Harvey. El Laboratorio en Medicina Veterinaria: Interpretación y Diagnóstico. Inter Médica (2000).</p>
           <div style="margin-bottom: 0cm"></div>
            {{-- FIN HEMATOLOGIA --}}
                         @endif
                         @endforeach
                    @foreach ($paciente->hematologias as $h)
                    @if ($paciente->hematologias && $h->fecha == $fecha)
                        
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
                        <table style="margin-top: 10px">
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
                                             <p style="font-size: 15px"> <strong>Remitente:</strong>  {{$paciente->remitente}}</p>
                                           </td>
                                          
                                    </tr>
                                
                                </tbody>
                            </table>
                         
                            <table style="margin-top: 30px">
                                <thead style="background-color: rgb(226, 239, 217)"> 
                                    <tr>
                                    <th  colspan="3" class="hematologia" >
                                        <strong>PERFIL HEMATOLOGICO</strong>
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
                                     <strong>Eritrocitos (x mm3)</strong>   
                                    </td>
                                    <td  class="hematologia">
                                       {{$h->eritrocitos}}
                                    </td>
                                    <td  class="hematologia">
                                        5.500.000 – 8.500.000   
                                    </td>
                                    
                                </tr>
                                <tr class="azul" >
                                    <td  class="hematologia">
                                     <strong>Hemoglobina (g/dl)</strong>   
                                    </td>
                                    <td  class="hematologia">
                                        {{$h->hemoglobina}} 
                                        </td>
                                    <td  class="hematologia">
                                        12 – 18  
                                    </td>
                                    
                                </tr>
                                <tr class="azul" >
                                    <td  class="hematologia">
                                     <strong>Hematocrito (%)</strong>   
                                    </td>
                                    <td  class="hematologia">
                                        {{$h->hematocrito}}
                                    </td>
                                    <td  class="hematologia">
                                        37 – 55                                   
                                     </td>
                                    
                                </tr>
                                <tr class="azul" >
                                    <td  class="hematologia">
                                     <strong>VCM (&#181;3)</strong>   
                                    </td>
                                    <td  class="hematologia">
                                        {{$h->vcm}} 
                                    </td>
                                    <td  class="hematologia">
                                        60 – 77                                  
                                     </td>
                                    </tr>
                                <tr class="azul" >
                                    <td  class="hematologia">
                                        <strong>CHCM (%)</strong>   
                                    </td>
                                    <td  class="hematologia">
                                        {{$h->chcm}}   
                                    </td>
                                    <td  class="hematologia">
                                        31 – 37                                
                                     </td>
                                </tr>
                                <tr class="azul" >
                                    <td  class="hematologia">
                                        <strong>Reticulocitos (%)</strong>   
                                    </td>
                                    <td  class="hematologia">
                                        {{$h->reticulocitos}}      
                                    </td>
                                    <td  class="hematologia">
                                        0,5 – 1,8                               
                                     </td>
                                </tr>
                                <tr class="azul" >
                                    <td  class="hematologia">
                                        <strong>Leucocitos totales (x &#181;l)</strong>   
                                    </td>
                                    <td  class="hematologia">
                                        <?php 
                                        echo number_format($hc->leucocitosT, 0, ',', '.');
                                     ?>      
                                    </td>
                                    <td  class="hematologia">
                                        5.500 – 16.900                              
                                     </td>
                                </tr>
                                <tr class="azul" >
                                    <td  class="hematologia">
                                        <strong>Plaquetas (x &#181;l)</strong>   
                                    </td>
                                    <td  class="hematologia">
                                        {{$h->plaquetas}}      
                                    </td>
                                    <td  class="hematologia">
                                        150.000 – 500.000                            
                                     </td>
                                </tr>
                                <tr class="azul" >
                                    <td  class="hematologia">
                                        <strong>Proteínas Plasmáticas Totales (g/dl)</strong>   
                                    </td>
                                    <td  class="hematologia">
                                        {{$h->proteinasPT}}       
                                    </td>
                                    <td  class="hematologia">
                                        6 – 7,8                            
                                     </td>
                                </tr>
                              
                          
                            </tbody>
                        </table>
                        <table >
                            <thead style="background-color: rgb(226, 239, 217)">
                            <tr>
                                <th width="127" class="hematologia" style="background-color: wheat">
                                    Recuento diferencial de Leucocitos
                                </th>  
                                <th width="15" class="hematologia" style="background-color: wheat">
                                    Valor Relativo (%)
                                </th>  
                                <th width="15" class="hematologia" style="background-color: wheat">
                                    Valor Absoluto (&#181;l) 
                                </th>
                                 <th width="115" class="hematologia" style="background-color: wheat">
                                    Valores Absolutos de Referencia (&#181;l)*
                                </th>     
                            </tr>           
                        </thead>
                        <tbody>
                        <tr class="azul" >
                            <td  class="hematologia">
                                <strong>Neutrófilos Segmentados</strong>   
                            </td>
                            <td  class="hematologia">
                                {{$h->neutrofilosS}}       
                            </td>
                            <td  class="hematologia">
                             <?php 
                               $resultado= ($h->neutrofilosS * $h->leucocitosT)/100;
                                
                                echo $resultado;
                                
                                
                                ?>                               
                             </td>
                             <td  class="hematologia">
                                3.000 – 11.500                          
                             </td>
                        </tr>
                    <tr class="azul">
                        <td  class="hematologia">
                            <strong>Neutrófilos en Banda</strong>   
                        </td>
                        <td  class="hematologia">
                            {{$h->neutrofilosB}}            
                        </td>
                        <td  class="hematologia">
                            <?php 
                            $resultado= ($h->neutrofilosB * $h->leucocitosT)/100;
                             
                             echo $resultado;
                             
                             
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
                            {{$h->linfocitos}}                  
                        </td>
                        <td  class="hematologia">
                            <?php 
                            $resultado= ($h->linfocitos * $h->leucocitosT)/100;
                             
                             echo $resultado;
                             
                             
                             ?>                            
                         </td>
                         <td  class="hematologia">
                            1.000 – 4.500                     
                         </td>
                    </tr>
                    <tr class="azul">
                        <td  class="hematologia">
                            <strong>Monocitos</strong>   
                        </td>
                        <td  class="hematologia">
                            {{$h->monocitos}}        
                        </td>
                        <td  class="hematologia">
                            <?php 
                            $resultado= ($h->monocitos * $h->leucocitosT)/100;
                             
                             echo $resultado;
                             
                             
                             ?>                            
                         </td>
                         <td  class="hematologia">
                            150 – 1.350                    
                         </td>
                    </tr>
                    <tr class="azul">
                        <td  class="hematologia">
                            <strong>Eosinófilos</strong>   
                        </td>
                        <td  class="hematologia">
                            {{$h->eosinofilos}}      
                        </td>
                        <td  class="hematologia">
                            <?php 
                            $resultado= ($h->eosinofilos * $h->leucocitosT)/100;
                             
                             echo $resultado;
                             
                             
                             ?>                            
                         </td>
                         <td  class="hematologia">
                            100 – 1.250                   
                         </td>
                    </tr>
                        
                        </tbody>
                    </table>
                    <p style="font-size: 10px">OBSERVACIÓN: **Resultados verificados. Plasma ligeramente ictérico.
                        * Intervalos de referencia normales en perros adultos. Meyer & Harvey. El Laboratorio en Medicina Veterinaria: Interpretación y Diagnóstico. Inter Médica (2000).</p>

                         {{-- FIN HEMATOLOGIA ESPECIAL--}}
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
                <thead style="background-color: rgb(226, 239, 217)">
                  <tr>
                    <th colspan="3" class="hematologia" style="background-color: rgb(226, 239, 217)">
                    <strong>  DESCARTE DE HEMOTRÓPICOS (CONCENTRADO CAPA BLANCA)</strong>
                   </th>  
                </tr>           
                    <tr> 
                    <th colspan="3" " class="hematologia" style="background-color: white">
                        <div style="text-align: left">
                        <p style="font-size: 14px; font-weight: lighter">  En los campos examinados <strong style="color: red" >se observaron</strong> en plaquetas inclusiones intracitoplasmáticas sugestivas de ser mórulas de proteobacterias de la familia <strong> Anaplasmataceae. </strong></p> <p style="font-size: 13px; font-weight: normal"> Nota: La familia Anaplasmataceae comprende los géneros Ehrlichia, Anaplasma, no diferenciables morfológicamente.</p>    
                        </div>
                    </th>
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
                 <td colspan="2" style="font-size: 13px" class="hematologia">
                    A la observación microscópica de la zona flogística del tubo capilar no se visualizó movimiento sugestivo de presencia de microfilarias.
                 </td>
                
            </tr>
            </tbody>
        </table>
        <div style="margin-bottom: 4cm"></div>
        @endif 
@endforeach
           {{--FIN DESCARTE Anaplasma--}}          

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
               <strong>Remitente:</strong>  {{$paciente->remitente}}
            </td>
           
     </tr>
 
 </tbody>
</table>


<table style="margin-top: 2em; " >
 <thead style="background-color: rgb(226, 239, 217)">
   <tr>
     <th colspan="3" class="hematologia" style="background-color: rgb(226, 239, 217)">
         DESCARTE DE HEMOTRÓPICOS (CONCENTRADO CAPA BLANCA)
    </th>  
 </tr>           
     <tr> 
     <th colspan="3" align="center" class="hematologia" style="background-color: white">
       <p style="font-weight: 500; font-size: 17px;">  En los campos examinados <p style="color: red" >no se observaron</p> microorganismos hemotrópicos intracitoplasmáticos, epicelulares, ni pericelulares.</p>    
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
<div style="margin-bottom: 8.5cm;"></div>
@endif 
@endforeach
{{--FIN DESCARTE NEGATIVO--}}
{{-- DESCARTE Filarias--}}
   
@foreach($paciente->descartes as $d)
@if ($d->diagnostico == 'filariasp' && $d->fecha == $fecha)
<table class="">
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
             <p style="font-size: 15px"> <strong>Remitente:</strong>  {{$paciente->remitente}} </p>
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
    <th colspan="3"class="hematologia" style="background-color: white">
      <div style="text-align: left">
        <p style="font-size: 17px; font-weight: lighter;">En los campos examinados <strong style="color: red"> se observaron </strong> en plaquetas inclusiones intracitoplasmáticas sugestivas de ser mórulas de proteobacterias de la familia <strong style="font-style: italic"> Anaplasmataceae. </strong> También se visualizaron larvas de morfología compatible con  <strong> microfilarias de</strong> <strong style="font-style: italic"> Dirofilaria immitis.</strong></p> 
     <p style="font-size: 12px;">Nota: La familia <strong>Anaplasmataceae</strong>  comprende los géneros <strong> Ehrlichia, Anaplasma y Neorickettsia</strong>, no diferenciables morfológicamente.
        </p>  </div>  
    </th>  
    
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
    Positiva para movimiento a la observación microscópica del tubo de microhematocrito; por encima de la capa flogística se visualizaron microfilarias en movimiento activo.
 </td>

</tr>
</tbody>
</table>
@endif 
@endforeach
{{--FIN DESCARTE Filarias positivo--}}  
{{-- DESCARTE Babesia--}}
  
@foreach($paciente->descartes as $d)

@if ($d->diagnostico == 'babesiap' && $d->fecha == $fecha)
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
             <p style="font-size: 15px"> <strong>Remitente:</strong>  {{$paciente->remitente}} </p>
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
    <th colspan="3"class="hematologia" style="background-color: white">
      <div style="text-align: left">
        <p style="font-size: 17px; font-weight: lighter;">En los campos examinados <strong style="color: red"> se observaron </strong> en eritrocitos inclusiones parasitarias intracitoplasmáticas compatibles con merozoitos de <strong>Babesia spp.</strong>  (Alta parasitemia). <strong>También</strong>  <strong style="color: red">se observaron</strong> en plaquetas inclusiones intracitoplasmáticas sugestivas de ser mórulas de proteobacterias de la familia <strong> Anaplasmataceae.</strong></p> 
     <p style="font-size: 12px;">Nota: La familia <strong>Anaplasmataceae</strong>  comprende los géneros <strong> Ehrlichia, Anaplasma y Neorickettsia</strong>, no diferenciables 
        </p>  </div>  
    </th>  
    
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
{{-- FIN DESCARTE Babesia--}}       
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
     <table class="margen">
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
                  <p style="font-size: 15px"> <strong>Remitente:</strong>  {{$paciente->remitente}} </p>
                </td>
               
         </tr>
     </tbody>
 </table>  

 <table style="margin-top: 20px;" >
     <thead style="background-color: rgb(226, 239, 217)">
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
{{-- CITOLOGIA SEDIMENTO URINARIO INFLAMACION--}}
  
@foreach ($paciente->citologiaurinaria as $cu)
@if ($cu->diagnostico == 'inflamacionu' && $cu->fecha == $fecha)
    
<table class="">
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
<table  style="margin-top: 10px">
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
             <li>Escasa cantidad de bacterias, tipo cocos.</li>
             <li>Celularidad moderada en todo el extendido, principalmente conformada por células
                nucleadas inflamatorias (Polimorfonucleares neutrófilos, degenerados y no
                degenerados, macrófagos). Escasas células Epiteliales Transicionales, reactivas.
                Moderada cantidad de eritrocitos.</li>
                <li>
                    Resalta la presencia de abundantes estructuras de origen mineral, de aspecto granular
grumoso, de morfología compatible con ser cristales de uratos amorfos.
                </li>
                <li>
                    Frecuentes hilos de mucina.
                </li>
                <li>
                    No se observaron células con criterios de malignidad.
                </li>
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
    
  <strong>CONCLUSION:</strong>Según los criterios establecidos los hallazgos citológicos indican <strong>“Inflamación
  Piogranulomatosa” </strong> , posiblemente a consecuencia de Litiasis.</strong>
  
 </td>

</tr>
</tbody>
</table>
@endif
@endforeach
{{--FIN  CITOLOGIA SENDIMENTO URINARIO --}}
{{--  URIANALISIS --}}

@foreach ($paciente->urianalisis as $u)

@if ($paciente->urianalisis && $u->fecha == $fecha)
    
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
     
        <table style="margin-top: 10px">
            <thead style="background-color: rgb(111, 172, 70)"> 
                <tr>
                <th  colspan="2" class="hematologia" >
                    <strong>URIANALISIS 
                    </strong>
                </th>
            </tr>
            <tr>
                <th width="50" class="hematologia" style="background-color: rgb(226, 239, 217)">
                    EXAMEN FISICO
                </th>    
                <th width="50" class="hematologia" style="background-color: rgb(226, 239, 217)">
                    EXAMEN DEL SEDIMENTO
                </th>   
            </tr>           
        </thead>
        <tbody>
           
            <tr class="azul" >
                <td  class="espaciados2">
                    <strong>Color:</strong> {{$u->color}}  
                </td>
              
                <td  class="espaciados2">
                    <strong>Hematíes:</strong> {{$u->hematies}}                          
                 </td>
            </tr>
          
           <tr class="azul" >
                <td  class="espaciados2">
                    <strong>Olor:</strong> {{$u->olor}}  
                </td>
              
                <td  class="espaciados2">

                    <strong>Leucocitos:</strong> {{$u->leucocitos}}                          
                 </td>
            </tr>
               <tr class="azul" >
                <td  class="espaciados2">
                    <strong>Aspecto:</strong> {{$u->aspecto}}  
                </td>
              
                <td  class="espaciados2">

                    <strong>Bacterias:</strong> {{$u->bacterias}}                          
                 </td>
               </tr>
         
            <tr class="azul" >
                <td  class="espaciados2">
                    <strong>Densidad:</strong> {{$u->densidad}}  
                </td>
              
                <td  class="espaciados2">

                    <strong>Otros:</strong> {{$u->otros}}                          
                 </td>
            </tr>
        </tbody>
    </table>
    <table>
        <thead style="background-color: rgb(226, 239, 217)">
        <tr>
            <th width="200" colspan="1"  class="hematologia" style="background-color: rgb(226, 239, 217)">
               EXAMEN QUÍMICO
            </th>  
             <th  colspan="1"  class="hematologia" style="background-color: white">
                Células Epiteliales
            </th>     
        </tr>           
    </thead>
    <tbody>
    <tr class="azul" >
        <td  class="espaciados2">
            <strong>pH:</strong> {{$u->ph}}  
        </td>
      
        <td  class="espaciados2">

            <strong>Planas:</strong> {{$u->planas}}                          
         </td>
    </tr>
<tr class="azul">
    <td  class="espaciados2">
        <strong>Glucosa:</strong> {{$u->glucosa}}  
    </td>
  
    <td  class="espaciados2">

        <strong>Transicionales:</strong> {{$u->transcicionales}}                          
     </td>
</tr>
<tr class="azul">
    <td  class="espaciados2">
        <strong>Proteínas:</strong> {{$u->protienas}}  
    </td>
  
    <td  class="espaciados2">

        <strong>Rendondas pequeñas:</strong> {{$u->redondasp}}                          
     </td>
</tr>
<tr class="azul">
    <td  class="espaciados2">
        <strong>Nitritos:</strong> {{$u->nitritos}}  
    </td>
  
    <td  class="espaciados2">

        <strong>Rendondas Grandes:</strong> {{$u->redondasg}}                          
     </td>
</tr>
<tr class="azul">
    <td  class="espaciados2">
        <strong>Cetonas:</strong> {{$u->cetonas}}  
    </td>
  
    <td  class="espaciados2">

        <strong>Caudadas:</strong> {{$u->caudadas}}                          
     </td>
</tr>
<tr class="azul">
    <td  class="espaciados2">
        <strong>Bilirrubina:</strong> {{$u->bilirrubina}}  
    </td>
  
    <td  class="espaciados2">

        <strong>Cúmulos células transicionales:</strong> {{$u->cumulos}}                          
     </td>
</tr>
<tr class="azul">
    <td  class="espaciados2">
        <strong>Urobilinógeno:</strong> {{$u->urobilinogeno}}  
    </td>
  
    <td  class="espaciados2">

        <strong>Cilindros:</strong> {{$u->cilindros}}                          
     </td>
</tr>
<tr class="azul">
    <td  class="espaciados2">
        <strong>Sangre:</strong> {{$u->sangre}}  
    </td>
  
    <td  class="espaciados2">

        <strong>Cristales:</strong> {{$u->cristales}}                          
     </td>
</tr>
</tbody>
</table>
<p style="font-size: 12px">{{$u->observacion}}</p>
@endif
@endforeach

{{--  QUIMICA SANGUINEA --}}

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
            <strong>Fecha: </strong>  <?php
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
     
        <table style="margin-top: 10px">
            <thead style="background-color: rgb(111, 172, 70)"> 
                <tr>
                <th  colspan="3" class="hematologia" >
                    <strong>BIOQUÍMICA SANGUÍNEA

                        
                    </strong>
                </th>
            </tr>
            <tr>
                <th width="110" class="hematologia2" style="background-color: rgb(197, 224, 179)">
                    PARAMETRO
                </th>  
                <th width="5" class="hematologia2" style="background-color: rgb(197, 224, 179)">
                    RESULTADOS
                </th>  
                <th width="60" class="hematologia2" style="background-color: rgb(197, 224, 179)">
                    INTERVALOS DE REFERENCIA
                </th>   
            </tr>           
        </thead>
        <tbody>
            @if ($q->glucosa)
            <tr class="azul" >
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    <strong>Glucosa</strong>   
                </td>
                <td  class="hematologia">
                    {{$q->glucosa}} mg/dl     
                </td>
                <td  class="hematologia">
                   60 – 120 mg/dl                           
                 </td>
            </tr>
           @endif 
           @if ($q->urea)
           <tr class="azul" >
               <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;"style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                <strong>UREA (NITRÓGENO URÉICO)</strong>   
               </td>
               <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                   {{$q->urea}} mg/dl
                   </td>
               <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                10 – 40 mg/dl 
               </td>
               <tr class="azul" >
                   <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    <strong>CREATININA</strong>   
                   </td>
                   <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                       {{$q->creatinina}} mg/dl
                       </td>
                   <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    0,5 – 1,4 mg/dl
                   </td>
               </tr>
           @endif
           @if ($q->alt)     
            <tr class="azul" >
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                 <strong>ALANINO AMINO TRANSFERADA (ALT)</strong>   
                </td>
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    {{$q->alt}} UI/L
                    </td>
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    04 – 70 UI/L
                </td> 
            </tr>
            @endif
            @if ($q->amilasa)
            <tr class="azul" >
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    <strong>Amilasa</strong>   
                </td>
                <td  class="hematologia">
                    {{$q->amilasa}}UI/L     
                </td>
                <td  class="hematologia">
                    600 – 1.100 UI/L                           
                 </td>
            </tr>
           @endif 
            @if ($q->ast)  
            <tr class="azul" >
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                 <strong>ASPARTATO AMINO TRANSFERASA (AST)</strong>   
                </td>
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    {{$q->ast}} UI/L
                </td>
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    12 – 55 UI/L                                 
                 </td>
                
            </tr>
            @endif
            @if ($q->fosfatasa)
            <tr class="azul" >
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    <strong>FOSFATASA ALCALINA</strong>   
                </td>
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                   {{$q->fosfatasa}} UI/L 
                </td>
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    06 – 160 UI/L                             
                 </td>
            </tr>
            @endif
            @if ($q->bilirrubinaT)
            <tr class="azul" >
                <td style="padding: top"style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    <strong>BILIRRUBINA TOTAL</strong>   
                </td>
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    {{$q->bilirrubinaT}} mg/dl     
                </td>
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    0,1 – 0,3 mg/dl                         
                 </td>
            </tr>
            @endif
            @if ($q->bilirrubinaD)
            <tr class="azul" >
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    <strong>BILIRRUBINA DIRECTA</strong>   
                </td>
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    {{$q->bilirrubinaD}}mg/dl       
                </td>
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    Menor a 0,3 mg/dl                        
                 </td>
            </tr>
            @endif
            @if ($q->bilirrubinaI)
            <tr class="azul" >
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    <strong>BILIRRUBINA INDIRECTA</strong>   
                </td>
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    {{$q->bilirrubinaI}} mg/dl       
                </td>
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    0 – 0,06 mg/dl                           
                 </td>
            </tr>
            @endif
            @if ($q->proteinasT)
            <tr class="azul" >
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    <strong>Proteinas Totales Séricas</strong>   
                </td>
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    {{$q->proteinasT}}g/dl       
                </td>
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    5,6 – 7,5g/dl                         
                 </td>
            </tr>
            @endif
            @if ($q->albumina)
            <tr class="azul" >
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    <strong>ALBÚMINA</strong>   
                </td>
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    {{$q->albumina}}g/dl      
                </td>
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    2,9 – 4 g/dl                         
                 </td>
            </tr>
            @endif
            @if ($q->globulinas)
            <tr class="azul" >
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    <strong>Globulinas</strong>   
                </td>
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    {{$q->globulinas}}g/dl      
                </td>
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    2,4 – 3,9 g/dl                         
                 </td>
            </tr>
            @endif
            @if ($q->relacionag)
            <tr class="azul" >
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    <strong>Relacion a/g   </strong>   
                </td>
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    {{$q->relacionag}}      
                </td>
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    0,6 – 1,5                          
                 </td>
            </tr>
            @endif
            @if ($q->colesterolT)
            <tr class="azul" >
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    <strong>Colesterol Total </strong>   
                </td>
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    {{$q->colesterolT}} mg/dl     
                </td>
                <td style="padding-top:<?php echo $variable ?> ; padding-bottom: <?php echo $variable ?>;" class="espaciados">
                    110 – 270 mg/dl                           
                 </td>
            </tr>
           @endif
          
      
        </tbody>
    </table>
 
<p style="font-size: 12px">Intervalos de referencia normales en Caninos adultos. Nuñez, L; Bouda, J. Patología Clínica Veterinaria. DR Edit. (2007).</p>

@endif
@endforeach

</main>

</body>



