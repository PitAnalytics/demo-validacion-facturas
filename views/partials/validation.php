    <div class="row">

      <div class="col-lg-12">
        <div class="card">
          <div class="card-body rounded-0">
            <h3 class="card-title mb-5 mt-5 text-center text-info">Resultados</h3>
            <div class="row mb-4 ml-4">
              <div class="col-lg-4">
                <span class="text-primary">RFC Emisor:</span>
              </div>
              <div class="col-lg-8">
                <span class="text-success">{{rfcEmisor}}</span>
              </div>
            </div>
            <div class="row mb-4 ml-4">
              <div class="col-lg-4">
                <span class="text-primary">RFC Receptor:</span>
              </div>
              <div class="col-lg-8">
                <span class="text-success">{{rfcReceptor}}</span>
              </div>
            </div>
            <div class="row mb-4 ml-4">
              <div class="col-lg-4">
                <span class="text-primary">UUID:</span>
              </div>
              <div class="col-lg-8">
                <span class="text-success">{{uuid}}</span>
              </div>
            </div>
            <div class="row mb-4 ml-4">
              <div class="col-lg-4">
                <span class="text-primary">$ Total:</span>
              </div>
              <div class="col-lg-8">
                <span class="text-success">${{totalNumero}}</span>
              </div>
            </div>
            <div class="row mb-4 ml-4">
              <div class="col-lg-4">
                <span class="text-primary">Estado:</span>
              </div>
              {% if status ==1 %}
              <div class="col-lg-8">
                <span class="text-success">Factura Vigente</span>
              </div>
              {% elseif status==0 %}
              <div class="col-lg-8">
                <span class="text-danger">Factura Cancelada</span>
              </div>
              {% else %}
              <div class="col-lg-8">
                <span class="text-warning">Factura No Encontrada</span>
              </div>
              {% endif %}
            </div>
            <div class="row mb-4 ml-4">
              <div class="col-lg-4">
                <span class="text-primary">Código de Respuesta:<span>
              </div>
              {% if codigo=='S' %}
              <div class="col-lg-8">
                <span class="text-success">Comprobante obtenido satisfactoriamente</span>
              </div>
              {% else %}
              <div class="col-lg-8">
                <span class="text-danger">Comprobante no encontrado o parámetros incorrectos</span>
              </div>
              {% endif %}
            </div>

          </div>
        </div>
      </div>
      
    </div>