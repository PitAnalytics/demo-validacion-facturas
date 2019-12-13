    <div class="row justify-content-center mt-5">
      <div class="col-12 col-md-12 col-lg-12 pb-5">
        <div class="card rounded-0">
          <div class="row">
            <div class="col-lg-4">
              <img class="card-img img-fluid" src="{{url}}/img/logo.jpg">
            </div>
            <div class="col-lg-8">
              <div class="card-body p-3">

                <h3 class="card-title text-info mt-5 mb-5">Validación Facturas CFDI</h3>

                <form method="POST" action="{{url}}/index.php">
                  <div class="row mb-2">
                    <div class="form-group col-sm-12 col-lg-6">
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text bg-info"><i class="fas fa-address-card text-white"></i></div>
                        </div>
                        <input class="form-control rounded-0" type="text" class="form-control" id="nombre" name="rfc_emisor" placeholder="RFC Emisor" value="{{rfcEmisor}}" required>
                      </div>
                    </div>
                    <div class="form-group col-sm-12 col-lg-6">
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text bg-info"><i class="fas fa-address-card text-white"></i></div>
                        </div>
                        <input class="form-control rounded-0" type="text" class="form-control" id="nombre" name="rfc_receptor" placeholder="RFC Receptor" value="{{rfcReceptor}}" required>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="form-group col-sm-12 col-lg-6">
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text bg-info"><i class="fas fa-hashtag text-white"></i></div>
                        </div>
                        <input class="form-control rounded-0" type="text" class="form-control" id="nombre" name="uuid" placeholder="UUID" value="{{uuid}}" required>
                      </div>
                    </div>
                    <div class="form-group col-sm-12 col-lg-6">
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text bg-info"><i class="fas fa-dollar-sign text-white"></i></div>
                        </div>
                        <input class="form-control rounded-0" type="text" class="form-control" id="nombre" name="total" placeholder="Total" value="{{total}}" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-lg-12">
                      <input type="submit" value="VALIDAR" class="btn btn-info btn-block rounded-0 py-2 text-md-center font-weight-bold">
                    </div>
                  </div>
                </form>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>