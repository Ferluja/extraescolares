<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generar PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      .img{
        justify-content: center;
        align-items: center;
        display: flex;
        margin-left: 30px;
        padding-bottom: 30px
      }
      .text{
        margin-bottom: 100px;
      }

      p{
        font-size: 13px
      }
      .text-padding{
        padding-top: 30px
      }
      .text-firma{
        font-size: 13px;
        padding-top: 100px
      }
    </style>
</head>
<body>
  <table class="table table-bordered">
    <thead class="">
      <tr>
        <th><img src="https://surnayarit.tecnm.mx/web/images/tecNM/TecNM_r.png" alt="" style="height: 100px" class="img"></th>
        <th class="text-center text">INSTITUTO TECNOLÓGICO DE MILPA ALTA ll <hr>DEPARTAMENTO DE ACTIVIDADES EXTRAESCOLARES</th>
        <th><img src="https://milpaalta2.tecnm.mx/img/itma2.webp" alt="" style="height: 130px" class="img"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($datosEscolares as $datos)
        <tr>
          <td class="text-uppercase">Numero de control</td>
          <td class="text-center">{{$datos->numero_control}}</td>
          <td class="text-center text-uppercase">Febrero - Junio 2023</td>
        </tr>
       
      @endforeach
      @foreach ($datosUsuarios as $usuarios)
        <tr>
          <td>Nombre</td>
          <td class="text-center font-weight-bold text-uppercase" colspan="2">{{$usuarios->apellido_paterno . ' ' .  $usuarios->apellido_materno  . ' ' .  $usuarios->nombre}}</td>
        </tr>
      @endforeach
        <tr>
          <td class="text-uppercase">Actividad <hr>
            Participación como Trovador en evento del 14 de febrero
          </td>
          <td class="text-uppercase text-center">Fecha <hr> 14/02/2023</td>
          <td class="text-uppercase text-center">Grupo <hr> 8sis</td>
        </tr>

        <tr>
          <td class="text-uppercase">HRS. Acreditadas</td>
          <td class="text-uppercase text-center" colspan="2">5 horas civicas</td>
        </tr>
    </tbody>
  </table>
  <p class="text-uppercase text-justify text-padding"> <span class="font-weight-bold">NOTA:</span> El alumno debe conservar este documento y entregarlo al despartamento de extraescolares al complementar un crédito equivalente a 20 hrs.</p>
  <p class="text-uppercase text-justify">Este documento será justificación para sus actividades extraescolares en cada una de sus asignaturas.</p>
  <p class="text-uppercase text-justify">Para que tenga valides este documento debe de tener firma y sello del jefe de departamento que proporciona el apoyo.</p>
  <p class="text-uppercase text-center font-weight-bold text-firma">ing. aquino segura roldan</p>
  <p class="text-uppercase text-center">jefe de departamento de actividades <br> extraescolares</p>
  <p style="padding-top: 10px" class="text-center">_______________________________________</p>
</body>
</html>