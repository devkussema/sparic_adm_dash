<!-- Modal adicionar musica -->
<div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
      <form id="sendMusica" class="modal-content" enctype="multipart/form-data" action="{{ route('musica.add') }}" method="POST">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="backDropModalTitle">Publicar Música</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <div class="row g-2">
            <div class="col mb-3">
              <label for="nameBackdrop" class="form-label">Titulo da musica</label>
              <input name="titulo" type="text" id="nameBackdrop" class="form-control" placeholder="Informe o titulo da musica"
              />
            </div>
            <div class="col mb-0">
                <label for="emailBackdrop" class="form-label">Descricao</label>
                <input name="descricao" type="text" id="emailBackdrop" class="form-control" placeholder="xxxx@xxx.xx"
                />
              </div>
          </div>
          <div class="row">
            <div class="col mb-0">
              <label for="dobBackdrop" class="form-label">Arquivo</label>
              <input name="arquivo" type="file" id="dobBackdrop" class="form-control" aria-label="Seleciona a musica"
              />
            </div>
          </div>
          <div class="row">
            <div class="col mb-0">
              <label for="dobBackdrop" class="form-label">Imagem de capa</label>
              <input name="img_capa" type="file" id="dobBackdrop" class="form-control" aria-label="Seleciona a musica"
              />
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
            Fechar
          </button>
          <button type="submit" id="btn-enviar-musica" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
</div>

<!-- Modal adicionar podcast -->
<div class="modal fade" id="postPodcast" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
      <form id="sendMusica" class="modal-content" enctype="multipart/form-data" action="{{ route('podcast.add') }}" method="POST">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="postPodcastTitle">Publicar Podcast</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <div class="row g-2">
            <div class="col mb-3">
              <label for="nameBackdrop" class="form-label">Titulo do podcast</label>
              <input name="titulo" type="text" id="nameBackdrop" class="form-control" placeholder="Informe o titulo da musica"
              />
            </div>
            <div class="col mb-0">
                <label for="emailBackdrop" class="form-label">Descricao</label>
                <input name="descricao" type="text" id="emailBackdrop" class="form-control" placeholder="xxxx@xxx.xx"
                />
              </div>
          </div>
          <div class="row">
            <div class="col mb-0">
              <label for="dobBackdrop" class="form-label">Arquivo</label>
              <input name="arquivo" type="file" id="dobBackdrop" class="form-control" aria-label="Seleciona a musica"
              />
            </div>
          </div>
          <div class="row">
            <div class="col mb-0">
              <label for="dobBackdrop" class="form-label">Imagem de capa</label>
              <input name="img_capa" type="file" id="dobBackdrop" class="form-control" aria-label="Seleciona a musica"
              />
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
            Fechar
          </button>
          <button type="submit" id="btn-enviar-musica" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
</div>