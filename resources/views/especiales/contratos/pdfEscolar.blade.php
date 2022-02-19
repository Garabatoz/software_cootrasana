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
                        <td rowspan="3"><img src="https://terminalesmedellin.com/wp-content/uploads/2021/04/cootrasana.jpeg" width="100%" alt=""></td>
                        <td colspan="5">FORMATO</td>
                    </tr>
                    <tr>
                        <td colspan="5">CONTRATO DE PRESTACIÓN DE SERVICIOS DE TRANSPORTE ESCOLAR DE PASAJEROS</td>
                    </tr>
                    <tr>
                        <td>Código: FS006</td>
                        <td>Versión: 05 </td>
                        <td>Revisó: RS</td>
                        <td>Aprobó: MS</td>
                        <td>Fecha: 18/02/2021</td>
                    </tr>
                </tbody>
            </table>
    </header>
    <div class="parrafo">
        <p>
            <div class="tipo"><strong>CONTRATO PARA TRANSPORTE DE ESTUDIANTES</strong></div>
            <br><br>

            CONTRATO Nº <strong>{{$contrato->consecutivo}}</strong>
            <br>
            <br>
            NOMBRE COLEGIO <strong>{{$contrato->nombre}} {{$contrato->apellido}}</strong>
            <br>
            <br>
            <br>

            Entre los suscritos a saber: COOPERATIVA DE TRANSPORTADORES SAN ANTONIO COOTRASANA, obrando en calidad de transportadora u operador de Servicio de Transportes Especiales en su modalidad escolar y el Contratante <strong>{{$contrato->nombre}} {{$contrato->apellido}}</strong> con NIT <strong>{{$contrato->cedula}}</strong>, Dirección <strong>{{$contrato->direccion}}</strong>, Teléfono <strong>{{$contrato->fijo}}</strong>, obrando en calidad de Contratante del servicio de Transporte Escolar, han decidido celebrar un contrato de Transporte Especial Escolar que se regirá por las siguientes clausulas:
            <br><br>

            <strong>PRIMERA. OBJETO:</strong> El operador se obliga con el contratante a transportar a los estudiantes asignados por éste entre su lugar de residencia o lugar determinado por el contratante que cuente con condiciones de acceso seguras para el transportador, los pasajeros y el vehículo, hasta el establecimiento educativo y viceversa.
            <br><br>

            <strong>SEGUNDA. PLAZO:</strong> El plazo de este contrato será de 11 meses contados a partir del mes de enero hasta el mes de noviembre o hasta que se convenga por las partes.
            <br><br>

            <strong>TERCERA. VALOR:</strong> El valor de este contrato será de <strong>{{$contrato->tarifa}}</strong> por alumno movilizado, este valor será pagado por el contratante cada mes, dentro de los cinco (5) primero días del mismo.
            <br><br>

            <strong>CUARTA. TIPOLOGÍA VEHICULAR:</strong> El vehículo con el cual el operador prestará el servicio será un vehículo marca _____________serie __________ modelo _________ con capacidad para ____pasajeros identificado con la placa ________, número interno ________
            <br><br>
            Parágrafo: ante una eventualidad, este vehículo podrá ser cambiado por otro que cumpla con las normas técnicas y de esto se le dará aviso al contratante mínimo con 5 días de anticipación.
            <br><br>

            <strong>QUINTA. OBLIGACIONES DEL CONTRATANTE:</strong> son obligaciones del contratante:
            <br> a). Cancelar la suma pactada, en las fechas y frecuencias en la cuenta de ahorros N° _____________________, del banco ________________________________________________________.
            <br><br>

            <strong>PARÁGRAFO 1. No pago. </strong> El NO pago de dicha obligación, por dos meses continuos, acarrea la cancelación del contrato por el incumplimiento de El Contratante y en consecuencia los beneficiarios no serán transportados. La cancelación del contrato no exime a los responsables del pago pendiente.
            <br><br>

            <strong>PARAGRAFO 2. Deuda.</strong> En caso de tener una deuda vigente durante quince (15) días (posteriores a los primeros cinco días del mes), LA TRANSPORTADORA podrá suspender el servicio de transporte del beneficiario, hasta que se cancele la totalidad del saldo en mora.
            <br><br>

            <strong>PARAGRAFO 3. Retardo en los pagos o incumplimiento.</strong> En caso de mora en los pagos, después del segundo mes de retraso en el pago, además de la suspensión del servicio,  LA TRANSPORTADORA  tendrá la potestad de trasladar el cobro de la deuda  al abogado con el fin de realizar el proceso pertinente cuyos honorarios correrán a cargo de los contratantes.<div class="page-break"></div><br><br><br><br>

            b). Asegurar que los beneficiarios (alumnos) sean  puntuales  en el horario y en el lugar de recogida convenido, tanto en la residencia, como en la Institución Educativa.
            <br><br>

            c). Responder civilmente por los daños ocasionados al vehículo y todo su equipamiento  por el o los beneficiarios , con ocasión de la ejecución y prestación del servicio de transporte; por daños, inutilización, destrozos, menoscabos, detrimentos y/o averías, a él  imputables.
            <br><br>

            <strong>PARAGRAFO: Daños</strong> Igualmente LA TRANSPORTADORA queda facultada a suspender el servicio por actos graves de indisciplina o daños ocasionados dentro del vehículo, hasta que los CONTRATANTES asuman y cancelen los costos de la reparación.
            <br><br>

            d).Los  CONTRATANTES, personalmente o por la persona designada para tal fin, están obligados a atender  la llegada del beneficiario en el sitio asignado para ello, sin que por la ubicación de entrega del(los) beneficiario(s) se genere riesgo para él (los).
            <br><br>

            <U><strong>En el evento de no encontrarse la persona encargada, el transportador llevará al beneficiario al colegio, después de terminar la ruta, donde lo podrán recoger los CONTRATANTES.</strong></U>
            <br><br>

            e) Instruir a el(los) beneficiario(s) sobre el buen comportamiento, disciplina y actitud, que deberá(n) mantener durante cada recorrido. Asumiendo LA TRANSPORTADORA, que LOS  CONTRATANTES han realizado la instrucción correspondiente.
            <br><br>

            f). Suministrar a LA TRANSPORTADORA la oportuna, clara y adecuada información necesaria para el óptimo cumplimiento del contrato.
            <br><br>

            <strong>SEXTA: OBLIGACIONES DEL OPERADOR (TRANSPORTADORA). </strong> Son obligaciones de la transportadora:
            <br><br>

            a. Ejecutar el Contrato de Transporte Terrestre de Pasajeros, en la Modalidad de Servicios Especiales (Transporte de Estudiantes) en un vehículo en óptimas condiciones técnico-mecánicas, de aseo, de presentación y comodidad.
            <br><br>

            b. Garantizar la prestación del servicio contratado en las mejores condiciones y aptitud de los conductores, con personal idóneo, responsable, adecuado, capacitado, de excelentes condiciones morales y que cumpla con todos los requisitos legales para el desarrollo de la actividad contratada. Los conductores deberán mostrar permanentemente respeto hacia los beneficiarios.
            <br><br>

            c. Cumplir y responder por el cumplimiento de los requisitos legales, relativos  a la seguridad, mantenimiento, aseo, higiene, y condiciones generales para el transporte terrestre de pasajeros.
            <br><br>

            d. En el evento de algún tipo de inconveniente técnico-mecánico, reponer en el menor término dicho inconveniente en el equipo automotor.
            <br><br>

            e. Mantener actualizada la documentación exigida por el Ministerio del Transporte y autoridades de Transportes y Tránsito. Copia de dicha documentación estará disponible para la Institución Educativa para su verificación y consulta.
            <br><br>

            f. Suministrar y mantener vigentes las pólizas de responsabilidad civil que deben amparar el servicio contratado.
            <div class="page-break"></div><br><br><br><br>

            g. Cumplir con los recorridos, rutas e itinerarios establecidos por la Institución Educativa, salvo caso fortuito o fuerza mayor. Igualmente, deberá la Empresa, tomar las medidas necesarias para que, en el evento de presentarse inconvenientes técnicos, climáticos o de movilidad, durante el recorrido de alguna de las rutas, ésta se culmine satisfactoriamente, sin que tal hecho constituya responsabilidad adicional a cargo de LOS CONTRATANTES.
            <br><br>

            h. No podrá transportarse o recoger personas no incluidas en el listado de pasajeros del contrato.
           <br><br>

           <strong>SEPTIMA: CAMBIO DE VEHÍCULO Y/O CONDUCTOR Y/O GUÍA. </strong> EL OPERADOR podrá cambiar el vehículo y/o el conductor y/o la guía discrecionalmente, informando a LOS CONTRATANTES con mínimo 5 días de anticipación, a menos que medie fuerza mayor o caso fortuito.
           <br><br>

           <strong>OCTAVA: EXONERACIÓN DE RESPONSABILIDAD. </strong> LA TRANSPORTADORA desconoce el contenido del equipaje de los pasajeros, por tal motivo no se hace responsable de los elementos, materiales, sustancias, etc. que sean transportados como equipaje, menaje, bolsas de mano y/o similares.
           <br><br>

           <strong>NOVENA: INDEPENDENCIA DEL OPERADOR. </strong> EL OPERADOR  ejecutará la labor contratada por su propia cuenta, con absoluta autonomía y no estará sometida a subordinación de ninguna índole para con LOS CONTRATANTES quienes podrán, eso sí, exigir el cumplimiento de las obligaciones estipuladas en este contrato y en la ley, de acuerdo a la naturaleza de la labor pactada. Las entidades y/o personas que EL OPERADOR  contrate para la ejecución del presente convenio, serán de su exclusiva responsabilidad, y no existirá ningún vínculo laboral y/o legal entre ellos y LOS CONTRATANTES.
           <br><br>

           <strong>DECIMA: AUTORIZACIÓN PARA LA CELEBRACIÓN DE CONVENIOS DE COLABORACIÓN EMPRESARIAL. </strong> De acuerdo a lo establecido por el Artículo 2.2.1.6.3.4 del Decreto 1079 de 2015, LOS CONTRATANTES emiten expresamente concepto favorable, para que EL OPERADOR , de ser necesario, celebre contratos de colaboración empresarial con otras Empresas de Transporte Terrestre de Pasajeros, en la Modalidad de Servicios Especiales para la ejecución de este contrato.
           <br><br>

           <strong>DÉCIMA PRIMERA: EXCLUSIÓN DE RELACIÓN LABORAL.</strong> Queda claramente entendido que no existirá ningún tipo de relación laboral entre EL OPERADOR  y sus conductores, para con LOS CONTRATANTES o los menores transportados.
           <br><br>

           <strong>DÉCIMA SEGUNDA: CAUSALES DE TERMINACIÓN. </strong> El presente contrato termina por:
           <br><br>
           A) Mutuo acuerdo entre las partes.
           <br><br>
           B) Por disolución y liquidación del OPERADOR, bien sea por decisión de los socios o por decisión de autoridad competente.
           <br><br>
           C) Por las causales consagradas en el presente contrato o por el incumplimiento de las obligaciones surgidas o emanadas por el presente contrato.
           <br><br>
           D) Por vencimiento del término del contrato.
           <br><br>
           E) Por resolución del contrato o sentencia judicial o decisión de autoridad competente que así lo ordene.
           <br><br>
           F) Unilateralmente por cualquiera de las partes avisando a la otra con un plazo de por lo menos QUINCE (15) DIAS HÁBILES de anticipación su intención de retirarse.
            <div class="page-break"></div><br><br><br><br>

           G) Las demás consagradas por las normas legales.
           <br><br>

           <strong>DÉCIMA TERCERA: POLÍTICA DE PROTECCIÓN DE DATOS.</strong><br><br>
           Los Titulares de datos personales que reposen en las bases de datos del OPERADOR  tienen los siguientes derechos:
           <br><br>

           A) Derecho a conocer, actualizar y rectificar sus datos personales.
           <br><br>
           B) Derecho a solicitar prueba de la autorización: De conformidad con lo previsto en el artículo 9 de la Ley 1.581 de 2013.
           <br><br>
           C) Derecho a ser informado frente al uso que se le ha dado a sus datos personales.
           <br><br>
           D) Derecho a revocar la autorización y/o a solicitar la supresión del dato.
           <br><br>
           E) Derecho a acceder a sus datos personales.
           <br><br>

           <strong>DECIMA CUARTA:</strong> Titulo Ejecutivo.  El presente contrato de trasporte, presta mérito ejecutivo, por contener una obligación clara, expresa y exigible y constituye en todas sus partes y anexos (pagaré, carta de instrucciones y facturas), plena prueba contra el deudor según el artículo 488 del código de Procedimiento Civil.
           <br><br>

           <strong>DECIMA QUINTA: </strong> base de datos. Teniendo en cuenta las Políticas de tratamiento de datos personales de la Cooperativa, autorizo de manera voluntaria, previa, explícita, informada e inequívoca a la Cooperativa de transportadores San Antonio “Cootrasana” para tratar mis datos personales de acuerdo con esta política y para los fines relacionados con su objeto social y en especial para fines legales, contractuales, comerciales descritos en la misma. La información obtenida para el Tratamiento de mis datos personales la he suministrado de forma voluntaria y es verídica. Acepto lo anterior Firmando este documento.
           <br><br>

           <strong>DECIMA SEXTA: </strong> ASPECTOS CONDICIONADOS O VARIABLES:
           <br>
           _________________________________________________________________________
           <br>
           _________________________________________________________________________
           <br>
           Para constancia y aceptación, se firma por las partes en __________________, el día _____ del mes ______ del año 20______, en dos ejemplares del mismo valor, con destino cada uno de ellos a cada una de las partes.
           </div><div class="page-break"></div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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

           <div class="page-break"></div><br><br><br>

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

                    </tr>

    </div>
</body>
</html>
