 <body class="d-flex h-100 text-center white">
    
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto text-center">
      <div >
        <h3 class="mb-0">Studio Visual</h3>
       
      </div>
    </header>

    <main class="px-3">
      <h1 class="sweet-sans-pro-bold">Consulte o CEP</h1>
      <p class="sweet-sans-pro">Insira o cep no campo abaixo e clique em 'Enviar' para exibir as informações.</p>
      <form method="get" action=".">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">CEP:</label>
          <input type="text" class="form-control cep" name="cep"  id="cep" value="" size="10" maxlength="9">
        </div>
        <button type="button" class="btn btn-primary btn-studio" onClick="pesquisacep(cep.value);">Enviar</button>

        
      </form>

         
      <hr>
        <div class="row g-3">
          <div class="col-md-6">
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" readonly>
          </div>
          <div class="col-md-6">
            <label for="estado" class="form-label">Estado</label>
            <input type="text" class="form-control" name="uf"  id="uf" readonly>
          </div>
          <div class="col-12">
            <label for="rua" class="form-label">Rua</label>
            <input type="text" class="form-control" id="rua" name="rua" readonly>
          </div>
          <div class="col-12">
            <label for="bairro" class="form-label">Bairro</label>
            <input type="text" class="form-control"  name="bairro"  id="bairro" readonly>
          </div>
         
          
         
          
        </div>
      

    </main>

   