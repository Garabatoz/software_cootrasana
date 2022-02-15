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
                        <td colspan="5">CONTRATO TRANSPORTE EMPRESARIAL</td>
                    </tr>
                    <tr>
                        <td>Código: FS057</td>
                        <td>Versión: 00</td>
                        <td>Revisó: CC</td>
                        <td>Aprobó: MS</td>
                        <td>Fecha: 22/10/2019</td>
                    </tr>
                </tbody>
            </table>
    </header>
    <div class="parrafo">
        <p>
            <div class="tipo"><strong>CONTRATO TRANSPORTE EMPRESARIAL</strong></div>
            <br>
            CONTRATO Nº <strong>{{$contrato->consecutivo}}</strong>
            <br><br>
            Entre los suscritos a saber: <strong>COOPERATIVA DE TRANSPORTADORES SAN ANTONIO COOTRASANA,</strong> obrando en calidad de transportadora u operador de Servicio de Transportes Especiales habilitada por el ministerio de transporte bajo Resolución 013 de 16 de febrero de 2016 para la prestación de servicios de transporte de pasajeros en la modalidad de especial, representada legalmente por  <strong>JOSÉ JAVIER CASTAÑO GIRALDO. Identificado con Cédula de Ciudadanía 70.084.127, mayor de edad</strong> y con domicilio en Medellín, quien manifiesta que no está incurso en ninguna causal de inhabilidad o incompatibilidad para contratar y para efectos del contrato se denominará  <strong>EL OPERADOR. </strong><br><br>

            Y  <strong>GUSTAVO ELIAS GUTIERREZ VILLA identificado(a) como Aparece al pie de su firma, mayor de edad y con Cédula de Ciudadanía número 70.565.371,</strong> obrando en calidad de Representante Legal de <strong>ESTACO S.A.</strong> con NIT.<strong>890916766-4</strong> Contratante del servicio de Transporte Turístico con <strong>RNT73487,</strong> hemos convenido celebrar el presente contrato de prestación de Servicios de Transporte Especial que se especifica a continuación para dar cumplimiento a los Artículos 12 y 13 del DECRETO 348 de 2015. Y que se regirá por las normas civiles y comerciales y demás disposiciones concordantes y complementarias y en lo no regulado como aparece en las siguientes clausulas: 
                <br><br>

                <div class="tipo"><strong>PRIMERO</strong></div>
                <br>

                <strong>OBJETO: </strong>El operador se obliga con el contratante a transportar a los usuarios asignados como empleados, contratistas, invitados, clientes de la empresa CONTRATANTE, con unas rutas definidas de acuerdo a la necesidad del cliente hasta las instalaciones de la empresa CONTRATANTE, en el caso de que el servicio se preste de la siguiente manera:
                <br><br>

                Información del contratante.  <br><br>
                <table class="default">

<tr>
  <td scope="row">Nombre de la empresa:</td>
  <td>{{$contrato->nombre}}</td>
  <td>NIT:</td>
  <td>{{$contrato->cedula}}</td>
</tr>

<tr>
  <td>Representante legal:</td>
  <td>{{$contrato->nombreResponsable}}</td>
  <td>CC:</td>
  <td>{{$contrato->cedulaResponsable}}</td>
</tr>

<tr>
  <td>Dirección Domicilio:</td>
  <td>{{$contrato->direccion}}	</td>
  <td>Ciudad :</td>
  <td>{{$contrato->municipio}}</td>
</tr>

<tr>
  <td>E-Mail :</td>
  <td>{{$contrato->email}}</td>
  <td>Contacto:</td>
  <td><strong>FIJO:</strong> {{$contrato->fijo}}<br><strong>CELULAR:</strong>{{$contrato->celular}}</td>
</tr>
</table>
<br><br>

<table class="default">
<tr>
  <td scope="row">Contacto encargado:</td>
  <td>{{$contrato->contactoResponsable}}</td>
  <td>CC:</td>
  <td>{{$contrato->cedulaResponsable}}</td>
</tr>

<tr>
  <td>Dirección Domicilio:</td>
  <td>{{$contrato->direccion}}	</td>
  <td>Ciudad: </td>
  <td>{{$contrato->municipio}}</td>
</tr>

<tr>
  <td>E-Mail:</td>
  <td>{{$contrato->email}}</td>
  <td>Contacto:</td>
  <td><strong>FIJO:</strong> {{$contrato->fijo}}<br><strong>CELULAR:</strong>{{$contrato->celular}}</td>
</tr>
</table>
<br><br>
<div class="page-break"></div><br><br><br><br>

<table class="default">
<tr>
  <td colspan="2" >Origen</td>
  <td colspan="2">Destino</td>
</tr>

<tr>
  <td scope="row">Ciudad</td>
  <td>Direccion</td>
  <td>Ciudad</td>
  <td>Direccion</td>
</tr>

<tr>
  <td>{{$contrato->municipio}}</td>
  <td>{{$contrato->direccion}}	</td>
  <td>{{$contrato->municipio}}</td>
  <td>{{$contrato->direccion}}</td>
</tr>

<tr>
  <td>{{$contrato->municipio}}</td>
  <td>{{$contrato->direccion}}</td>
  <td>{{$contrato->municipio}}</td>
  <td>{{$contrato->direccion}}</td>
</tr>

</table><br><br>

<div class="tipo"><strong>SEGUNDO</strong></div>
<br>

<strong>OBLIGACIONES DEL OPERADOR:</strong> El presente contrato se ejecutará durante la vigencia indicada  a continuación y no tendrá prórrogas automáticas, por lo cual en caso de pretender su renovación las partes de común acuerdo revisarán la ecuación financiera y las necesidades que se tengan para realizar un nuevo contrato o dar prórroga al existente.
<br><br>


<strong>DURACIÓN Y PRÓRROGAS DEL CONTRATO:</strong> El presente contrato se ejecutará durante la vigencia indicada  a continuación y no tendrá prórrogas automáticas, por lo cual en caso de pretender su renovación las partes de común acuerdo revisarán la ecuación financiera y las necesidades que se tengan para realizar un nuevo contrato o dar prórroga al existente.
<br><br>


<table>
                <tbody>
                    <tr>
                        <td colspan="3"><strong>FECHA DE SALIDA: </strong> {{$contrato->fsalida}}</td>
                        <td colspan="3"><strong>FECHA DE REGRESO: </strong> {{$contrato->fregreso}}</td>
                    </tr>
                    <tr>
                        <td>Bebés: {{$contrato->nrobebes}}</td>
                        <td>Niños: {{$contrato->nroniños}}</td>
                        <td>Adultos: {{$contrato->nroadultos}}</td>
                        <td>Mayores: {{$contrato->nromayores}}</td>
                        <td>Discapacitados: {{$contrato->nroincapac}}</td>
                        <td>Total: {{$contrato->totalpasajeros}}</td>
                    </tr>
                </tbody>
            </table>
            <br><br>

<strong>DURACIÓN Y PRÓRROGAS DEL CONTRATO:</strong> El presente contrato se ejecutará durante la vigencia indicada  a continuación y no tendrá prórrogas automáticas, por lo cual en caso de pretender su renovación las partes de común acuerdo revisarán la ecuación financiera y las necesidades que se tengan para realizar un nuevo contrato o dar prórroga al existente.
<br><br>

<table class="default">
<tr>
  <td scope="row">Fecha de inicio</td>
  <td>{{$contrato->fsalida}}</td>
</tr>

<tr>
  <td>Fecha de terminación </td>
  <td>{{$contrato->fregreso}}</td>
</tr>

<tr>
  <td>Número de personas a transportar </td>
  <td>{{$contrato->totalpasajeros}}</td>
</tr>
</table>
<div class="page-break"></div><br><br><br><br>

<div class="tipo"><strong>TERCERO</strong></div>
<br>

<strong>OBLIGACIONES DEL OPERADOR:</strong> 
<br><br>
1.	La obligación  principal de “EL OPERADOR” es prestar el servicio de transporte, disponiendo para ello de los vehículos necesarios y en buen estado, para cubrir las rutas previamente señaladas.<br>
2.	Cada vehículo deberá contar con  un medio de comunicación Teléfono-celular, botiquín de primeros auxilios y equipo de carretera; el vehículo deberá mantenerse en buenas condiciones mecánicas y de mantenimiento como: pintura, tapizado, aseo, higiene y presentación general; cada vehículo deberá estar dotado de los elementos de seguridad exigido por las autoridades de tránsito según la ley 769 de 2002 Art. 30 Acuerdo 051 de 1993, Art. 116 de Ministerio de Transporte y demás que regulen en la  Decreto  769 de 2002.<br>
3.	No exceder los límites de velocidad en la operación.<br>
4.	Brindar la mayor protección posible a los pasajeros, especialmente cuando se presenten obstáculos, vías de mucho tráfico, zonas que representen riesgos o serios problemas para la vida o integridad física de los pasajeros. <br>
5.	Informar cualquier novedad en la prestación del servicio que pueda afectar la misma. <br>
6.	Constatar que los vehículos con los cuales se presta el servicio de transporte posean toda la documentación en regla, seguros que para el efecto exige la ley como son, seguro obligatorio de accidentes de tránsito y demás que la ley exija, los cuales se adquirirán para cubrir los accidentes que puedan presentarse como consecuencia de la ejecución del contrato de transporte. <br>
7.	Mantener vigente las pólizas de Responsabilidad Civil contractual y extracontractual exigidas en el Decreto 348 de 2015.<br>
8.	Disponer de conductores idóneos y responsables.<br>
9.	Mantener contacto permanente con el CONTRATANTE  para evaluar la calidad de los servicios y presentará cuando esta así lo requiera y en la forma en que se indique, informes detallados sobre el desarrollo de los  mismos.<br>
10.	Utilizar vehículos cómodos, limpios y en buen estado funcional y operados por conductores que de acuerdo con las disposiciones vigentes llenen los requisitos administrativos exigidos.<br>
11.	Asignar un funcionario de carácter administrativo, denominado “Coordinador” que se encargará de dirigir las labores del personal y Coordinar con el CONTRATANTE todo lo relacionado con el servicio objeto de este contrato.<br>
12.	Realizar el cambio de vehículo cuando las necesidades  así lo ameriten. <br>
13.	Abstenerse, una vez haya recogido todo el personal a detenerse a descargar personal antes de la llegada  a las instalaciones de la empresa del contratante. <br>
14.	Realizar las revisiones preventivas periódicas a los vehículos como mínimo cada seis meses y las revisiones correctivas que sean necesarias y  anexar registro para su debida verificación de parte del CONTRATANTE.<br>
15.	Recoger en los recorridos pactados exclusivamente al personal objeto del contrato.<br>
16.	Suministrar combustible a los vehículos sin personal a bordo  y en general cumplir con todas las normas de seguridad y con todas las disposiciones que regulan el transporte del personal. <br>
17.	No  divulgar la información técnica recibida del CONTRATANTE,  la cual es considera con carácter  confidencial.<br>
18.	Mantener Vigente la licencia de funcionamiento durante la duración del contrato, cumpliendo permanentemente con las disposiciones en materia de organización  técnica y de seguridad.<br>
19.	Cumplir con todos los requisitos para la libre circulación y prestación de servicio exigidos por el Ministerio de Transporte y demás entidades pertinentes.<br>
20.	Es obligación de EL OPERADOR contar con un plan de contingencia para atender cualquier imprevisto en caso de que se presentara alguna eventualidad con el vehículo; caso en el cual se contará con un vehículo disponible para atenderla, dichos cambios solo se permitirán para atender la contingencia o eventualidad, pues superada la misma la prestación del servicio debe realizarse de manera normal <div class="page-break"></div><br><br><br><br><br> y según lo establecido en las clausulas siguientes. <br>
21.	EL OPERADOR se compromete a ceñirse a las disposiciones vigentes del Ministerio de Transporte en materia de Transporte Terrestre Automotor Especial, así mismo se obliga a cumplir con los requisitos exigidos por las Autoridades de Tránsito y Transporte, igualmente atenderá todos los trámites a que haya lugar y resolverá las situaciones que lleguen a presentarse por el incumplimiento de las obligaciones legales o reglamentarias de tránsito. <br><br><br>

<div class="tipo"><strong>CUARTO</div>
<br>

<strong>OBLIGACIONES DEL CONTRATANTE:</strong> El CONTRATANTE se compromete a:
<br><br>

1.	Cancelar oportunamente y en la fecha pactada, los valores pactados.<br>
2.	Suministrar las bases de datos que el contratista requiera para dar cumplimiento  y  desarrollo a las bases del objeto contractual. <br>
3.	Informar por escrito cualquier novedad que  puede afectar la ejecución del contrato. <br>
4.	Asignar un “Coordinador”  del servicio de trasporte quien vigile, ordene y reciba  los servicios contemplados en el presente contrato.<br>
5.	Informar al CONTRATISTA, a través de su coordinador sobre la prestación del servicio y las novedades que pueda presentarse.<br>
6.	En el evento en que, por causas del contratante sea necesario disminuir o aumentar las frecuencias, rutas, cantidad de pasajeros o número de viajes,  este avisará al CONTRATISTA.<br>
7.	Determinar los recorridos ordinarios y solicitar recorridos especiales que se requiera con la debida anticipación. <br>
8.	Informar con anterioridad no menor a 24 horas cualquier cambio hecho al recorrido o a los horarios. <br>
9.	Permitir al CONTRATISTA el uso de los parqueaderos de la empresa CONTRATANTE  solo para  la prestación del servicio y bajo los parámetros convenidos por las partes.<br>
10.	Disciplinar al personal  que incurra en conductas que afecten la convivencia pacífica o pongan en riesgos la seguridad y operación  del transporte manteniendo siempre respeto hacia el conductor. <br> 
11.	Cumplir con las estipulaciones y obligaciones consignadas en el plan estratégico de seguridad vial de la empresa de transporte. <br>
12.	Responder por los daños materiales causados por los pasajeros al vehículo, para lo cual el conductor deberá informar inmediatamente en forma personal y escrita al EL CONTRATANTE, dejando la respectiva y clara anotación y durante las dos primeras horas siguientes de haberse presentado los hechos.<br> 
13.	Hacerse responsable de su propio equipaje. <br><br><br>

<div class="tipo"><strong>QUINTO</div>
<br>

<strong>VALOR DEL CONTRATO Y FORMA DE PAGO:</strong> El costo del servicio de transporte durante el 2019 será de $ 405.000 por vehículo de 40 pasajeros y por día de servicio prestado, el total equivalente a los servicios prestados debe ser cancelado durante los primeros cinco días de cada mes para garantizar la prestación del servicio. Dicho valor deberá consignarse en la cuenta Corriente del BANCO DE BOGOTÁ Número 154032031 a nombre de COOTRASANA. <br><br>

<strong>Parágrafo Primero:</strong> En  caso de un cambio en la operación se revisarán las tarifas y se llegará a un acuerdo entre las partes. 
<div class="page-break"></div><br><br><br><br><br>

<div class="tipo"><strong>SEXTO</div>
<br>

<strong>PENA PECUNIARIA EN CASO DE INCUMPLIMIENTO:</strong> En caso de incumplimiento de cualquiera de las dos partes en las obligaciones derivadas de este contrato, la parte incumplida pagará a la otra la suma de equivalente al veinte por ciento (20%) del valor del contrato, suma que se considera pago parcial de los posibles perjuicios causados.
<br><br><br>

 <div class="tipo"><strong>SÉPTIMO</div>
<br>

<strong>PROHIBICIÓN DE CESIÓN DEL CONTRATO:</strong> Las partes no podrán hacerse sustituir por un tercero ni en la totalidad ni en parte,  de las relaciones derivadas de este contrato. Se prohíbe la cesión del contrato, no obstante, el contratista podrá acudir a la figura  de convenios de colaboración empresarial establecidas en el Decreto 348 de 2015.
 <br><br><br>

 <div class="tipo"><strong>OCTAVO</div>
<br>

<strong>FUERZA MAYOR O CASO FORTUITO:</strong> El OPERADOR no será responsable ni se considerará que ha incurrido en incumplimiento de sus obligaciones por cualquier demora en la prestación de sus servicios, si se presentase durante su ejecución, circunstancia de fuerza mayor o caso fortuito. El OPERADOR se obliga a notificar por escrito al CONTRATANTE de las circunstancias que constituyen la fuerza mayor o caso fortuito, u otros hechos fuera de su control, acompañando la exposición de motivos correspondientes. 
 <br><br><br>

 <div class="tipo"><strong>NOVENO</div>
<br>

<strong>RELACIÓN LABORAL: </strong>Respecto al presente contrato, este en ningún caso generará relación laboral ni prestaciones sociales. EL OPERADOR no tendrá ninguna relación laboral ni con el CONTRATANTE, ni con las personas que subcontrate y por ende será necesario que previa la suscripción del presente contrato, EL OPERADOR entregue los documentos que prueben la afiliación al sistema de seguridad social de cada uno de los conductores subcontratados para el mismo. 
 <br><br><br>

 <div class="tipo"><strong>DÉCIMO</div>
<br>

<strong>SUJECIÓN A LA LEY COLOMBIANA: </strong>Para cualquier efecto que dé lugar al incumplimiento de este contrato, se someterá a la ley colombiana y a las autoridades legales preestablecidas. 
 <br><br><br>

 <div class="tipo"><strong>DÉCIMO PRIMERO</div>
<br>

<strong>CAUSALES DE TERMINACIÓN DEL CONTRATO: </strong>El contrato podrá darse por terminado en las siguientes circunstancias:
 <br><br>

 1.	Por la expiración de la vigencia inicial o cualquiera de sus prórrogas.<br>
2.	Por mutuo acuerdo entre las partes contratantes. <br>
3.	Unilateralmente por cualquiera de las partes en caso de incumplimiento de la otra parte de cualquiera de las obligaciones establecidas en este contrato. <div class="page-break"></div><br><br><br><br><br>
4.	Por ocurrencia de hechos o situaciones de fuerza mayor  que imposibiliten la continuación del contrato. <br>
5.	Por decisión de una de las partes de su deseo de dar por terminado el contrato , dando aviso a la otra parte con una antelación no inferior a 30 días a la fecha en que se desee hacer efectiva dicha terminación.<br>
6.	Por la no renovación.<br>
7.	Por incumplimiento de las obligaciones contractuales.
<br><br><br>

<div class="tipo"><strong>DÉCIMO SEGUNDO</div>
<br>

<strong>DOMICILIO:</strong>Para todos los efectos legales y judiciales se fija como domicilio el Municipio de Medellín, el domicilio para notificaciones judiciales de la parte del CONTRATANTE  será el consignado en el cuadro de identificación del CONTRATANTE como aparece en la  parte superior.
 <br><br><br>

 <div class="tipo"><strong> DÉCIMO TERCERO</div>
<br>

<strong>SOLUCION DE CONTROVERSIA:</strong>Los conflictos que surjan durante la ejecución del objeto contractual se solucionarán preferiblemente mediante los mecanismos de conciliación y transacción. 
 <br><br><br>

 <div class="tipo"><strong> DÉCIMO CUARTO</div>
<br>

<strong>INTERESES MORATORIOS:</strong>Cualquiera de las obligaciones aquí contraídas, causarán intereses moratorios conforme a la certificación que expida la Superintendencia Bancaria o el Banco de la República. 
 <br><br>

 <div class="tipo"><strong>DECIMO QUINTO</div>
<br>

<strong>INTERPRETACIÓN DE SITUACIONES: </strong>Si se admiten, toleran o se presentasen hechos o situaciones bilaterales en adelante por este contrato. EL OPERADOR manifiesta que conoce y entiende por lo cual además acepta el contenido de cada una de las cláusulas redactadas en el presente contrato, que lo leyó y le da su aprobación. 
<br><br>

<div class="tipo"><strong>DECIMO SÉXTO</div>
<br><br>

<strong>TIPOLOGÍA VEHICULAR: </strong>El vehículo con el cual el operador prestará el servicio será:
<br><br>
             <table>
                <tbody>
                    <tr>
                        <td>#</td>
                        <td>MARCA</td>
                        <td>SERIE</td>
                        <td>MODELO</td>
                        <td>CAPACIDAD</td>
                        <td>PLACA</td>
                        <td>Nro INTERNO</td>
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
                </tbody>
            </table>
           <div class="page-break"></div><br><br><br><br><br>

          <div class="tipo"><strong> DÉCIMO SÉPTIMO</div>
<br>

<strong>EXONERACIÓN DE RESPONSABILIDAD:</strong>LA TRANSPORTADORA desconoce el contenido del equipaje de los pasajeros, por tal motivo no se hace responsable de los elementos, materiales, sustancias, etc. que sean transportados como equipaje, bolsas de mano y/o similares.<br><br><br>

<div class="tipo"><strong> DECIMO OCTAVO</div>
<br>

<strong>CAMBIO DE VEHÍCULO Y/O CONDUCTOR.</strong>EL OPERADOR podrá cambiar el vehículo y/o el conductor discrecionalmente, informando a LOS CONTRATANTES con mínimo 2 días de anticipación, a menos que medie fuerza mayor o caso fortuito.
<br><br>

<div class="tipo"><strong>DÉCIMO NOVENO</div>
<br>

<strong>POLÍTICA DE PROTECCIÓN DE DATOS.</strong> Los Titulares de datos personales que reposen en las bases de datos del OPERADOR  tienen los siguientes derechos: <br><br>
A)	Derecho a conocer, actualizar y rectificar sus datos personales. <br>
B)	Derecho a solicitar prueba de la autorización: De conformidad con lo previsto en el artículo 9 de la Ley 1581 de 2013. <br>
C)	Derecho a ser informado frente al uso que se le ha dado a sus datos personales.<br>
D)	Derecho a revocar la autorización y/o a solicitar la supresión del dato.<br>
E)	Derecho a acceder a sus datos personales.
<br><br>

<div class="tipo"><strong>VIGÉSIMO</div>
<br>

<strong> TITULO EJECUTIVO: </strong>El presente contrato de transporte presta mérito ejecutivo, por contener una obligación clara, expresa, exigible y constituye en todas sus partes y anexos (certificados de existencia y representación legal de las partes, pagaré, carta de instrucciones,  facturas y los  Anexos N° 1 “Relación de personas a transportar y  Anexo N° 2 “Plan de rodamiento”. Plena prueba contra el deudor según el artículo 488 del código de Procedimiento Civil. 
Para constancia y aceptación, se firma por las partes en Guarne, el día ______ del mes 10 del año 2019, en dos ejemplares del mismo valor, con destino cada uno de ellos a cada una de las partes.<br><br>
<div class="page-break"></div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<table>
      <tr>
      <td> Gustavo Alveiro Jaramillo Franco<br>
           Representante Legal Cootrasana <br>
           Operador y/o Contratista<br>   
      </td> 
      <td> {{$contrato->nombreResponsable}}<br>
      Contratante<br>
      </td>                                                          
      </tr>
            </table>
<div class="page-break"></div><br><br><br><br><br>

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
</body>
</html>
