
@extends("theme.$theme.layout")
@section('titulo')
    Usuarios Registrados
@endsection

@section('contenido')
<div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Usuarios Registrados</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Documento</th>
                    <th>Numero de telefono</th>
                    <th>Detalles</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>183</td>
                    <td>John Doe</td>
                    <td>JohnD@hotmail.com</td>
                    <td><span class="tag tag-success">143752820</span></td>
                    <td>310410104</td>
                    <td><i class="fa fa-search"></i></td>
                  </tr>
                  <tr>
                    <td>219</td>
                    <td>Alexander Pierce</td>
                    <td>AlexP@gmail.com</td>
                    <td><span class="tag tag-warning">22665398</span></td>
                    <td>0317854112</td>
                    <td><i class="fa fa-search"></i></td>
                  </tr>
                  <tr>
                    <td>657</td>
                    <td>Bob Sinclar</td>
                    <td>B.Sinclar@outlook.es</td>
                    <td><span class="tag tag-primary">22665059</span></td>
                    <td>4124730202</td>
                    <td><i class="fa fa-search"></i></td>
                  </tr>
                  <tr>
                    <td>175</td>
                    <td>Mike Dannes</td>
                    <td>Mikedan@gmail.com</td>
                    <td><span class="tag tag-danger">857415236</span></td>
                    <td>3008104756</td>
                    <td><i class="fa fa-search"></i></td>
                  </tr>
                  <tr>
                      <td>183</td>
                      <td>John Doe</td>
                      <td>JohnD@hotmail.com</td>
                      <td><span class="tag tag-success">143752820</span></td>
                      <td>310410104</td>
                      <td><i class="fa fa-search"></i></td>
                    </tr>
                    <tr>
                      <td>219</td>
                      <td>Alexander Pierce</td>
                      <td>AlexP@gmail.com</td>
                      <td><span class="tag tag-warning">22665398</span></td>
                      <td>0317854112</td>
                      <td><i class="fa fa-search"></i></td>
                    </tr>
                    <tr>
                      <td>657</td>
                      <td>Bob Sinclar</td>
                      <td>B.Sinclar@outlook.es</td>
                      <td><span class="tag tag-primary">22665059</span></td>
                      <td>4124730202</td>
                      <td><i class="fa fa-search"></i></td>
                    </tr>
                    <tr>
                      <td>175</td>
                      <td>Mike Dannes</td>
                      <td>Mikedan@gmail.com</td>
                      <td><span class="tag tag-danger">857415236</span></td>
                      <td>3008104756</td>
                      <td><i class="fa fa-search"></i></td>
                    </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
@endsection 