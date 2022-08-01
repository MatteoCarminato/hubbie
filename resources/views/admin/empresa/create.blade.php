
@extends('admin.includes.app')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Cadastro de empresa</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">CNPJ</label>
                                        <input type="text" class="form-control" name="cnpj" id="cnpj">
                                    </div>
                                    <hr>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Razão Social</label>
                                        <input type="text" class="form-control" name="razao_social"  id="razao_social">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Nome Fantasia</label>
                                        <input type="text" class="form-control" name="nome_fantasia" id="nome_fantasia">
                                    </div>
                                    
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Whatsapp</label>
                                        <input type="text" class="form-control" name="whatsapp">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Email</label>
                                        <input type="text" class="form-control" name="email" id="email">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="mb-3 col-md-3">
                                        <label>CEP</label>
                                        <input type="text" class="form-control" name="cep"  id="cep">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Endereço</label>
                                        <input type="text" class="form-control" name="rua" id="rua">
                                    </div>

                                    <div class="mb-3 col-md-2">
                                        <label>Numero</label>
                                        <input type="text" class="form-control" name="numero" id="numero">
                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <label>Bairro</label>
                                        <input type="text" class="form-control" name="bairro" id="bairro">
                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <label>Cidade</label>
                                        <input type="text" class="form-control" name="cidade" id="cidade">
                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <label>Estado</label>
                                        <input type="text" class="form-control" name="uf" id="uf">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label>Complemento</label>
                                        <input type="text" class="form-control" name="complemento" id="complemento">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                <div class="input-group mb-3  input-warning">
											<span class="input-group-text">https://hubbie.com/empresa/</span>
                                            <input type="text" class="form-control" name="url">
                                        </div>
                                </div>
                                
                                <button type="submit" class="btn btn-success">Cadastrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection