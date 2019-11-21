@extends("theme.$theme.layout")
@section('titulo')
    Calendario
@endsection

@section('contenido')
<br>
<h3>Enviar Cuenta de Cobro</h3>
<div class="row">
    
    
    <div class="col-lg-7">
            <form class="form-horizontal">
                    
                    
                        <div class="form-group">
                            <label for="segundonombre" class="col-lg-5 col-form-label">Adjuntar Cuenta de Cobro</label>
                            <div class="col-lg-5">
                                <input type="file" name="segundonombre" id="segundonombre"  value="" required>
                            </div>
                            <br>
                            <br>
                            @include('includes.boton-form-crear')

                        </div>
                    
            </form>
    </div>
    <div class="col-lg-5">
        <!-- Calendar -->
            <div class="card bg-gradient-success">
            <div class="card-header border-0">

                <h3 class="card-title">
                <i class="far fa-calendar-alt"></i>
                Calendario de registro de pagos
                </h3>
                
            </div>
            <!-- /.card-header -->
            <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
            
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