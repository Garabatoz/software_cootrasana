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
                        <td colspan="5">CONTRATO DE PRESTACIÓN DE SERVICIOS DE TRANSPORTE ESPECIAL DE PASAJEROS</td>
                    </tr>
                    <tr>
                        <td>Código: FS005</td>
                        <td>Versión: 03</td>
                        <td>Revisó: RS</td>
                        <td>Aprobó: MS</td>
                        <td>Fecha: 18/02/2021</td>
                    </tr>
                </tbody>
            </table>
    </header>
    <div class="parrafo">
        <p>
            <div class="tipo"><strong>(Grupo Específico de Usuarios)</strong></div>
            <br>
            CONTRATO Nº <strong>{{$contrato->consecutivo}}</strong>
            <br>
            <br>
            Entre los suscritos a saber: COOPERATIVA DE TRANSPORTADORES SAN ANTONIO COOTRASANA, obrando en calidad de transportadora u operador de Servicio de Transportes Especiales habilitada por el ministerio de transporte para la prestación de servicios de transporte de pasajeros en la modalidad de especial, representada legalmente por GUSTAVO ALVEIRO JARAMILLO FRANCO Identificado como aparece al pie de su firma, mayor de edad y con domicilio en Medellín, quien manifiesta que no está incurso en ninguna causal de inhabilidad o incompatibilidad para contratar y para efectos del contrato se denominará EL OPERADOR y <strong>{{$contrato->nombre}} {{$contrato->apellido}}</strong> identificado(a) como Aparece al pie de su firma, mayor de edad y con Cédula de Ciudadanía número <strong>{{$contrato->cedula}}</strong>, obrando en calidad de Contratante del servicio de Transporte, hemos convenido celebrar el presente contrato de prestación de Servicios de Transporte Especial que se especifica a continuación para dar cumplimiento al artículo 12 y 13 del DECRETO 348 de 2015. Y que se regirá por las normas civiles y comerciales y demás disposiciones concordantes y complementarias y en lo no regulado como aparece en las siguientes clausulas:
            <br><br>
            <strong>PRIMERA. OBJETO:</strong> El operador se obliga con el contratante a transportar a los usuarios asignados por éste entre el lugar especificado por el CONTRATANTE, en el caso de que el servicio se preste, de la siguiente manera:
            <br><br>

            <table>
                <tbody>
                    <tr>
                        <td colspan="6"><strong>DIRECCIÓN Y TELEFONO DEL CONTRATANTE: </strong> {{$contrato->direccion}}</td>
                    </tr>
                    <tr>
                        <td colspan="3"><strong>FECHA DE SALIDA: </strong> {{$contrato->fsalida}}</td>
                        <td colspan="3"><strong>FECHA DE REGRESO: </strong> {{$contrato->fregreso}}</td>
                    </tr>
                    <tr>
                        <td colspan="3"><strong>ORIGEN: </strong> {{$contrato->origen}}</td>
                        <td colspan="3"><strong>DESTINO: </strong> {{$contrato->destino}}</td>
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
            <br>
            <strong>SEGUNDA. DURACIÓN Y PRÓRROGAS DEL CONTRATO:</strong> el tiempo de duración de este contrato es el necesario para el transporte de las personas. Y solo tendrá vigencia mientras las personas se encuentren dentro del vehículo. <strong>TERCERA. OBLIGACIONES DEL OPERADOR:</strong> 1. La obligación  principal de EL OPERADOR es prestar el servicio de transporte, disponiendo para ello de los vehículos necesarios y en buen estado, para cubrir las rutas previamente señaladas. 2. Constatar que los vehículos con los cuales se presta el servicio de transporte posean toda la documentación en regla, seguros que para el efecto exige la ley como son, seguro obligatorio de accidentes de tránsito y demás que la ley exija, los cuales se adquirirán para cubrir los accidentes que puedan presentarse como consecuencia de la ejecución del contrato de transporte. Es obligación de EL OPERADOR contar con un plan de contingencia para atender cualquier imprevisto en caso de que se presentara alguna eventualidad con el vehículo, caso en el cual se contará con un vehículo disponible para atenderla, dichos cambios solo se permitirán para atender la contingencia o eventualidad, pues superada la misma, la prestación del servicio debe realizarse de manera normal y según lo establecido en las clausulas siguientes. 4. Cada uno de los vehículos debe portar un teléfono celular. 5. EL OPERADOR se compromete a ceñirse a las disposiciones vigentes del Ministerio de Transporte en materia de Transporte Terrestre Automotor Especial, así mismo se obliga a cumplir con los requisitos exigidos por las Autoridades de Tránsito y Transporte, igualmente atenderá todos los trámites a que haya lugar y resolverá las situaciones que lleguen a presentarse por el incumplimiento de las obligaciones legales o reglamentarias de tránsito.
            <div class="page-break"></div><br><br><br><br>
             <strong>CUARTA. OBLIGACIONES DEL CONTRATANTE:</strong> El CONTRATANTE se compromete a cumplir al OPERADOR: 1. La obligación principal de EL CONTRATANTE es cancelar oportunamente y en la fecha pactada, los valores pactados.2. Informar con anterioridad no menor a 24 horas cualquier cambio hecho al recorrido o a los horarios. 3. Comunicar por escrito a la empresa cualquier anomalía presentada en el servicio. 4. Velar por que los pasajeros mantengan un comportamiento adecuado al interior del vehículo, manteniendo siempre respeto hacia el conductor. 5. Responder por los daños materiales causados por los pasajeros al vehículo, para lo cual el conductor deberá informar inmediatamente en forma personal y escrita al EL CONTRATANTE, dejando la respectiva y clara anotación y durante las dos primeras horas siguientes de haberse presentado los hechos. 6. Hacerse responsable de su propio equipaje. <strong>QUINTA. VALOR DEL CONTRATO Y FORMA DE PAGO:</strong> El costo del servicio de transporte será: <br><br>
             <strong>$ {{$contrato->tarifa}}</strong> y se pagará de la siguiente forma: A la fecha: <strong> {{$contrato->fsalida}} </strong>  Abonó: $ {{$contrato->tarifa}} y Resta: 0, que se pagará en la fecha: NULL
             <br><br>
             <strong>SEXTA. PENA PECUNIARIA EN CASO DE INCUMPLIMIENTO:</strong> En caso de incumplimiento de cualquiera de las dos partes en las obligaciones derivadas de este contrato, la parte incumplida pagará a la otra la suma de equivalente al veinte por ciento (20%) del valor del contrato, suma que se considera pago parcial de los posibles perjuicios causados. <strong>SEPTIMA. CESIÓN:</strong> Los derechos que adquiere y las obligaciones que asume EL OPERADOR, por medio del presente contrato no podrán ser cedidas en todo o en parte a persona natural, jurídica nacional o extranjera sin autorización previa y escrita del CONTRATANTE, pudiendo esta reservarse las razones que tenga para negarla. <strong>OCTAVA. FUERZA MAYOR O CASO FORTUITO:</strong> El OPERADOR no será responsable ni se considerará que ha incurrido en incumplimiento de sus obligaciones por cualquier demora en la prestación de sus servicios, si se presentase durante su ejecución, circunstancia de fuerza mayor o caso fortuito. El OPERADOR se obliga a notificar por escrito al CONTRATANTE de las circunstancias que constituyen la fuerza mayor o caso fortuito, u otros hechos fuera de su control, acompañando la exposición de motivos correspondientes. <strong>NOVENA. RELACIÓN LABORAL:</strong> Respecto al presente contrato, este en ningún caso generará relación laboral ni prestaciones sociales. EL OPERADOR no tendrá ninguna relación laboral ni con el CONTRATANTE, ni con las personas que subcontrate y por ende será necesario que previa la suscripción del presente contrato, EL OPERADOR entregue los documentos que prueben la afiliación al sistema de seguridad social de cada uno de los conductores subcontratados para el mismo. <strong>DECIMA. SUJECIÓN A LA LEY COLMBIANA:</strong> Para cualquier efecto que dé lugar al incumplimiento de este contrato, se someterá a la ley colombiana y a las autoridades legales preestablecidas. <strong>DECIMA PRIMERA. CAUSALES DE TERMINACIÓN DEL CONTRATO:</strong> El contrato podrá darse por terminado en las siguientes circunstancias: 1. Por expiración del plazo pactado. 2. Por mutuo acuerdo entre las partes contratantes. 3. Unilateralmente por cualquiera de las partes en caso de incumplimiento de la otra parte de cualquiera de las obligaciones establecidas en este contrato. 4. Por terminación del viaje contratado en caso de que se trate transporte ocasional o turismo. <strong>DECIMA SEGUNDA. INTERESES MORATORIOS:</strong> Cualquiera de las obligaciones aquí contraídas, causarán intereses moratorios conforme a la certificación que expida la Superintendencia Bancaria o el Banco de la República. <strong>DECIMA TERCERA. INTERPRETACIÓN DE SITUACIONES:</strong> Si se admiten, toleran o se presentasen hechos o situaciones bilaterales en adelante por este contrato. EL OPERADOR manifiesta que conoce y entiende, por lo cual además acepta el contenido de cada una de las cláusulas redactadas en el presente contrato, que lo leyó y le da su aprobación. <strong>DECIMA CUARTA. TIPOLOGÍA VEHICULAR:</strong> El vehículo con el cual el operador prestará el servicio será:
             <div class="page-break"></div><br><br><br><br>
             <table>
                <tbody>
                    <tr>
                        <th>#</th>
                        <th>MARCA</th>
                        <th>SERIE</th>
                        <th>MODELO</th>
                        <th>CAPACIDAD</th>
                        <th>PLACA</th>
                        <th>Nro INTERNO</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <strong>DECIMA QUINTA. EXONERACIÓN DE RESPONSABILIDAD:</strong> LA TRANSPORTADORA desconoce el contenido del equipaje de los pasajeros, por tal motivo no se hace responsable de los elementos, materiales, sustancias, etc. que sean transportados como equipaje, bolsas de mano y/o similares. <strong>DECIMA CUARTA. TITULO EJECUTIVO:</strong> El presente contrato de trasporte, presta mérito ejecutivo, por contener una obligación clara, expresa y exigible y constituye en todas sus partes y anexos (pagaré, carta de instrucciones y facturas), plena prueba contra el deudor según el artículo 488 del código de Procedimiento Civil.
            <br><br>
            Para constancia y aceptación, se firma por las partes en __________________, el día ______del mes ______ del año 20____, en dos ejemplares del mismo valor, con destino cada uno de ellos a cada una de las partes.

        </p>
    </div>
</body>
</html>
