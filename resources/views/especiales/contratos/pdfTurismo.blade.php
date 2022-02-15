<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ public_path('css/reporte.css') }}">
    <title>Contrato</title>
</head>
<body>
    <header>
            <table>
                <tbody>
                    <tr>
                        <td rowspan="3"><img src="https://terminalesmedellin.com/wp-content/uploads/2021/04/cootrasana.jpeg" width="100px" alt=""></td>
                        <td colspan="5">FORMATO</td>
                    </tr>
                    <tr>
                        <td colspan="5">CONTRATO DE PRESTACIÓN DE SERVICIOS DE TRANSPORTE ESPECIAL TURISTICO</td>
                    </tr>
                    <tr>
                        <td>Código: FS047</td>
                        <td>Versión: 05</td>
                        <td>Revisó: RS</td>
                        <td>Aprobó: MS</td>
                        <td>Fecha: 18/02/2021</td>
                    </tr>
                </tbody>
            </table>
    </header>
    <div class="parrafo">
        <p>
            <div class="tipo"><strong>CONTRATO TRANSPORTE DE TURISTAS</strong></div>
            <br>
            CONTRATO Nº <strong>{{$contrato->consecutivo}}</strong>
            <br>
            <br>

            Entre los suscritos a saber: <strong>COOPERATIVA DE TRANSPORTADORES SAN ANTONIO COOTRASANA</strong>, obrando en calidad de transportadora u operador de Servicio de Transportes Especiales habilitada por el ministerio de transporte para la prestación de servicios de transporte de pasajeros en la modalidad de especial, representada legalmente por <strong>GUSTAVO ALVEIRO JARAMILLO FRANCO.</strong>
            <br><br>

            Identificado como aparece al pie de su firma, mayor de edad y con domicilio en Medellín, quien manifiesta que no está incurso en ninguna causal de inhabilidad o incompatibilidad para contratar y para efectos del contrato se denominará <strong>EL OPERADOR Y <strong>{{$contrato->nombreResponsable}}</strong> identificado(a) como Aparece al pie de su firma, mayor de edad y con Cédula de Ciudadanía número </strong><strong>{{$contrato->cedula}}</strong>, obrando en calidad de Representante Legal de {{$contrato->nombre}} con NIT. {{$contrato->cedula}}Contratante del servicio de Transporte Turístico con _____________, hemos convenido celebrar el presente contrato de prestación de Servicios de Transporte Especial que se especifica a continuación para dar cumplimiento a los Artículos 12 y 13 del DECRETO 348 de 2015. Y que se regirá por las normas civiles y comerciales y demás disposiciones concordantes y complementarias y en lo no regulado como aparece en las siguientes clausulas:

            <br><br>
            <strong>PRIMERA. OBJETO:</strong> El operador se obliga con el contratante a transportar a los usuarios asignados por éste entre el lugar especificado por el CONTRATANTE, en el caso de que el servicio se preste, de la siguiente manera:
            <br><br>

            <table class="default">
                <tbody>
                    <tr>
                    <td colspan="6"><strong>DIRECCIÓN DEL CONTRATANTE: </strong> {{$contrato->direccion}} | <strong>FIJO: </strong>{{$contrato->fijo}} | <strong>CELULAR: </strong>{{$contrato->celular}}</td>
                    </tr>
                    <tr>
                        <td colspan="3"><strong>FECHA DE SALIDA: </strong> {{$contrato->fsalida}}</td>
                        <td colspan="3"><strong>FECHA DE REGRESO: </strong> {{$contrato->fregreso}}</td>
                    </tr>
                    <tr>
                        <td colspan="3"><strong>ORIGEN: </strong> {{$contrato->origen}}</td>
                        <td colspan="3"><strong>DESTINO SEGÚN EL REQUERIMIENTO DEL CLIENTE A CONTINUACIÓN: {{$contrato->destino}} </strong><br> <br><br></td>
                    </tr>
            </table>
            </tbody>

                    <br><br>
                    NOMBRE DE GUÍA DE TURISMO (RESPONSABLE DEL SERVICIO):______________________________________________ CC: ____________________
                    <br><br>

                    <strong>SEGUNDA. DURACIÓN Y PRÓRROGAS DEL CONTRATO: </strong>el tiempo de duración de este contrato es el definido entre la fecha inicial y final. 
                     <br><br>
                    
                     <strong>TERCERA. OBLIGACIONES DEL OPERADOR:</strong> 1. La obligación  principal de EL OPERADOR es prestar el servicio de transporte, disponiendo para ello de los vehículos necesarios y en buen estado, para cubrir las rutas previamente señaladas. 2. Constatar que los vehículos con los cuales se presta el servicio de transporte posean toda la documentación en regla, seguros que para el efecto exige la ley como son, seguro obligatorio de accidentes de tránsito y demás que la ley exija, los cuales se adquirirán para cubrir los accidentes que puedan presentarse como consecuencia de la ejecución del contrato de transporte. Es obligación de EL OPERADOR contar con un plan de contingencia para atender cualquier imprevisto en caso de que se presentara alguna eventualidad con el vehículo, caso en el cual se contará con un vehículo disponible para atenderla, dichos cambios solo se permitirán para atender la contingencia o eventualidad,<div class="page-break"></div><br><br><br><br> pues superada la misma, la prestación del servicio debe realizarse de manera normal y según lo establecido en las clausulas siguientes. 4. Cada uno de los vehículos debe portar un teléfono celular. 5. EL OPERADOR se compromete a ceñirse a las disposiciones vigentes del Ministerio de Transporte en materia de Transporte Terrestre Automotor Especial, así mismo se obliga a cumplir con los requisitos exigidos por las Autoridades de Tránsito y Transporte, igualmente atenderá todos los trámites a que haya lugar y resolverá las situaciones que lleguen a presentarse por el incumplimiento de las obligaciones legales o reglamentarias de tránsito. 
                    <br><br>
                    
                    <strong>CUARTA. OBLIGACIONES DEL CONTRATANTE:</strong> El CONTRATANTE se compromete a cumplir al OPERADOR: 1. La obligación principal de EL CONTRATANTE es cancelar oportunamente y en la fecha pactada, los valores pactados. 2. Informar con anterioridad no menor a 24 horas cualquier cambio hecho al recorrido o a los horarios. 3. Comunicar por escrito a la empresa cualquier anomalía presentada en el servicio. 4. Velar por que los pasajeros mantengan un comportamiento adecuado al interior del vehículo, manteniendo siempre respeto hacia el conductor. 5. Responder por los daños materiales causados por los pasajeros al vehículo, para lo cual el conductor deberá informar inmediatamente en forma personal y escrita al EL CONTRATANTE, dejando la respectiva y clara anotación y durante las dos primeras horas siguientes de haberse presentado los hechos. 6. Hacerse responsable de su propio equipaje. QUINTA. VALOR DEL CONTRATO Y FORMA DE PAGO: El costo del servicio de transporte será definido en cotización particular según el servicio a prestar y deberá ser pagado en un 50% previo al contrato y el 50% restante una vez se culmine el servicio.
                    <br><br>

                    <strong>QUINTA. VALOR DEL CONTRATO Y FORMA DE PAGO:</strong> El costo del servicio de transporte será definido en cotización particular según el servicio a prestar y deberá ser pagado en un 50% previo al contrato y el 50% restante una vez se culmine el servicio.
                    <br><br>

                    <strong>SEXTA. PENA PECUNIARIA EN CASO DE INCUMPLIMIENTO:</strong> En caso de incumplimiento de cualquiera de las dos partes en las obligaciones derivadas de este contrato, la parte incumplida pagará a la otra la suma de equivalente al veinte por ciento (20%) del valor del contrato, suma que se considera pago parcial de los posibles perjuicios causados. 
                    <br><br>

                    <strong>SEPTIMA. CESIÓN</strong> El OPERADOR no será responsable ni se considerará que ha incurrido en incumplimiento de sus obligaciones por cualquier demora en la prestación de sus servicios, si se presentase durante su ejecución, circunstancia de fuerza mayor o caso fortuito. El OPERADOR se obliga a notificar por escrito al CONTRATANTE de las circunstancias que constituyen la fuerza mayor o caso fortuito, u otros hechos fuera de su control, acompañando la exposición de motivos correspondientes. 
                    <br><br>

                    <strong>OCTAVA. FUERZA MAYOR O CASO FORTUITO:</strong> Los derechos que adquiere y las obligaciones que asume EL OPERADOR, por medio del presente contrato no podrán ser cedidas en todo o en parte a persona natural, jurídica nacional o extranjera sin autorización previa y escrita del CONTRATANTE, pudiendo esta reservarse las razones que tenga para negarla. 
                    <br><br>

                    <strong>NOVENA. RELACIÓN LABORAL: </strong> Respecto al presente contrato, este en ningún caso generará relación laboral ni prestaciones sociales. EL OPERADOR no tendrá ninguna relación laboral ni con el CONTRATANTE, ni con las personas que subcontrate y por ende será necesario que previa la suscripción del presente contrato, EL OPERADOR entregue los documentos que prueben la afiliación al sistema de seguridad social de cada uno de los conductores subcontratados para el mismo. 
                    <div class="page-break"></div><br><br><br><br>

                    <strong>DECIMA. SUJECIÓN A LA LEY COLOMBIANA:</strong> Para cualquier efecto que dé lugar al incumplimiento de este contrato, se someterá a la ley colombiana y a las autoridades legales preestablecidas. 
                    <br><br>

                    <strong>DECIMA PRIMERA. CAUSALES DE TERMINACIÓN DEL CONTRATO: </strong> Para cualquier efecto que dé lugar al incumplimiento de este contrato, se someterá a la ley colombiana y a las autoridades legales preeEl contrato podrá darse por terminado en las siguientes circunstancias: 1. Por expiración del plazo pactado. 2. Por mutuo acuerdo entre las partes contratantes. 3. Unilateralmente por cualquiera de las partes en caso de incumplimiento de la otra parte de cualquiera de las obligaciones establecidas en este contrato. 4. Por terminación del viaje contratado en caso de que se trate transporte ocasional o turismo. 
                    <br><br>

                    <strong>DECIMA SEGUNDA. INTERESES MORATORIOS: </strong> Cualquiera de las obligaciones aquí contraídas, causarán intereses moratorios conforme a la certificación que expida la Superintendencia Bancaria o el Banco de la República. 
                    <br><br>

                    <strong>DECIMA TERCERA. INTERPRETACIÓN DE SITUACIONES</strong> Si se admiten, toleran o se presentasen hechos o situaciones bilaterales en adelante por este contrato. EL OPERADOR manifiesta que conoce y entiende, por lo cual además acepta el contenido de cada una de las cláusulas redactadas en el presente contrato, que lo leyó y le da su aprobación. 
                    <br><br>

                    <strong>DECIMA CUARTA. TIPOLOGÍA VEHICULAR: </strong> El vehículo con el cual el operador prestará el servicio será:
                    <br><br>
                    
                    <table class="default">

<tr>
  <td scope="row">#</td>
  <td>MARCA</td>
  <td>SERIE</td>
  <td>MODELO</td>
  <td>CAPACIDAD</td>
  <td>PLACA</td>
  <td>N° INTERNO</td>
</tr>

<tr>
  <td>1</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <td>2</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <td>3</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <td>4</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <td>5</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
</table>
<br><br>

            <strong>DECIMA QUINTA. EXONERACIÓN DE RESPONSABILIDAD: </strong> LA TRANSPORTADORA desconoce el contenido del equipaje de los pasajeros, por tal motivo no se hace responsable de los elementos, materiales, sustancias, etc. que sean transportados como equipaje, bolsas de mano y/o similares. 
            <br><br>

            <strong>DECIMA SEXTA. TITULO EJECUTIVO: </strong> El presente contrato de trasporte, presta mérito ejecutivo, por contener una obligación clara, expresa y exigible y constituye en todas sus partes y anexos (pagaré, carta de instrucciones y facturas), plena prueba contra el deudor según el artículo 488 del código de Procedimiento Civil. La transportadora no tiene ninguna relación laboral con el/la guía de turismo que va en el vehículo.

            Para constancia y aceptación, se firma por las partes en Medellín, el día ______ del mes 08 del año 2019, en dos ejemplares del mismo valor, con destino cada uno de ellos a cada una de las partes. 

                    </div><br><br>
<div class="page-break"></div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div id="contenedor">
    <div id="contenidos">
        <div id="columna1">
        CONTRATANTE:<br>
        CC:<br>
        NIT:<br>
        </div>                             
        <div id="columna2">
        GERENTE:<br>
        CC:<br>
        NIT:<br>
        </div>
        <div id="columna3">
        CONDUCTOR:<br>
        CC:<br>
        </div>
    </div>
</div>


            <div class="page-break"></div><br><br><br><br>

            <table>
                <tbody>
                    <tr>
                        <td colspan="22"><strong>LISTA DE PASAJEROS</td>
                    </tr>
                    <tr>
                        <td colspan="1"><strong>N </strong></td>
                        <td colspan="5"><strong>NOMBRE COMPLETO </strong></td>
                        <td colspan="4"><strong>DOCUMENTO DE IDENTIDAD</strong></td>
                        <td colspan="1"><strong>T°</strong></td>
                        <td colspan="1"><strong>N</strong></td>
                        <td colspan="5"><strong>NOMBRE COMPLETO</strong></td>
                        <td colspan="4"><strong>DOCUMENTO DE IDENTIDAD</strong></td>
                        <td colspan="1"><strong>T°</strong></td>
                        
                    </tr>
                    <tr>
                    <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        
                    </tr>
                    <tr>
                    <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        
                    </tr> <tr>
                    <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        
                    </tr> <tr>
                    <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>

                        </tr> <tr>
                    <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        
                        </tr> <tr>
                    <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        
                        </tr> <tr>
                    <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        
                        </tr> <tr>
                    <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        
                    </tr> <tr>
                    <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        
                    </tr> <tr>
                    <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        
                    </tr> <tr>
                    <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        
                    </tr> <tr>
                    <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        
                    </tr> <tr>
                    <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        
                    </tr> 
                    <tr>
                    <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        
                    </tr> 
                    <tr>
                    <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        
                    </tr> 
                    <tr>
                    <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        
                    </tr> <tr>
                    <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        
                    </tr> <tr>
                    <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        
                    </tr> <tr>
                    <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        <td colspan="5"><strong></strong></td>
                        <td colspan="4"><strong></strong></td>
                        <td colspan="1"><strong></strong></td>
                        
                    </tr> 
    </div>
</body>
</html>
