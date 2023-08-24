<!-- Modal adicionar podcast -->
<div class="modal fade" id="criarGrupo" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
      <form id="sendMusica" class="modal-content" enctype="multipart/form-data" action="{{ route('grupo.add') }}" method="POST">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="criarGrupoTitle">Criar grupo</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col mb-3">
                    <label for="nameBackdrop" class="form-label">Nome do grupo</label>
                    <input name="nome" type="text" id="nameBackdrop" class="form-control" placeholder="Informe o nome do grupo">
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label for="emailBackdrop" class="form-label">Descrição (opcional)</label>
                    <textarea name="descricao" id="emailBackdrop" class="form-control" placeholder=""></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label for="dobBackdrop" class="form-label">Foto de perfil</label>
                    <input name="img" type="file" id="dobBackdrop" class="form-control" aria-label="Seleciona a foto de perfil">
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label for="dobBackdrop" class="form-label">Foto de capa</label>
                    <input name="img_capa" type="file" id="dobBackdrop" class="form-control" aria-label="Seleciona a foto de capa">
                </div>
            </div>
            <div class="row gb-2">
                <div class="col mb-3">
                    <label for="nameBackdrop" class="form-label">Privacidade</label>
                    <select name="privacidade" class="form-control">
                        <option value="Privado">Privado</option>
                        <option value="Público">Público</option>
                    </select>
                </div>
                <div class="col mb-3">
                    <label for="nameBackdrop" class="form-label">URL do site (opcional)</label>
                    <input name="site_url" type="text" id="nameBackdrop" class="form-control" placeholder="Informe o nome do grupo">
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