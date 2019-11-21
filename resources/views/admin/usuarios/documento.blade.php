@extends("theme.$theme.layout")
@section('titulo')
    Calendario
@endsection

@section('contenido')
<br>
<h3>Envio de documentos</h3>
<div class="col-lg-12">
        <p><font color="red"> Nota: <font color="black"> Recuerda mantener tus documentos actualizados para evitar demoras en los pagos</p>  
</div>
<div class="row">

    
      
    
    
    <div class="col-lg-12">
            <form class="form-horizontal">
                    
                    
                        <div class="form-group">
                            <label for="segundonombre" class="col-lg-5 col-form-label">Copia de la cedula por ambas caras</label>
                            <div class="col-lg-5">
                                <input type="file" name="segundonombre" id="segundonombre"  value="" required>
                            </div>
                            <br>
                            

                        </div>

                        <div class="form-group">
                                <label for="segundonombre" class="col-lg-5 col-form-label">Certificado de EPS</label>
                                <div class="col-lg-5">
                                    <input type="file" name="segundonombre" id="segundonombre"  value="" required>
                                </div>
                                <br>
                               
    
                            </div>

                            <div class="form-group">
                                    <label for="segundonombre" class="col-lg-5 col-form-label">Certificacion bancaria</label>
                                    <div class="col-lg-5">
                                        <input type="file" name="segundonombre" id="segundonombre"  value="" required>
                                    </div>
                                    
                                    <br>
                                    @include('includes.boton-form-crear')
        
                                </div>
                    
            </form>
    </div>
    
    
  
</div>



  
@endsection 