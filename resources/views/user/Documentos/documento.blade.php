@extends("theme.$theme.layout")
@section('titulo')
    Calendario
@endsection

@section('contenido')
<br>
<div class="row">
    
    
    <div class="col-lg-7">
            <form class="form-horizontal">
                    
                    
                        <div class="form-group">
                            <label for="segundonombre" class="col-lg-5 col-form-label">Enviar documentos</label>
                            <div class="col-lg-5">
                                <input type="file" name="segundonombre" id="segundonombre"  value="" required>
                            </div>
                            <br>
                            <br>
                            @include('includes.boton-form-crear')

                        </div>
                    
            </form>
    </div>
    
    <div class="col-lg-12">
            <p><font color="red"> Nota: <font color="black">El sistema de registro de pagos solo se habilita los dias jueves cada 15 dias, en el calendario de registro de pago se muestran los dias que estara habilitada la carga de datos.</p> 
            <p>En caso de inquietudes escribir al WhatsApp 3123427911</p>  
    </div>
    <div id="sparkline-2" style="visibility: hidden"></div>
            <div id="sparkline-3" style="visibility: hidden"></div>
            <div id="sparkline-1" style="visibility: hidden"></div>
</div>



  
@endsection 