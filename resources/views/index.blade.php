@extends('layouts.cia')

@section('style')

@endsection

@section('content')
                <div class="title">
                    CIA
                </div>
                <div class="subtitle">
                CONTROLE INFORMATIZADO DE ATENDIMENTO
                </div>

                <div class="links index-container-login d-flex justify-content-center align-items-center">
                    
                    <form action="" method="post" class="index-form-login">
                        <div class="form-group">
                            <label for="matricula">MATRÍCULA</label>
                            <input type="matricula" class="form-control text-center" id="matricula" placeholder="DIGITE SUA MATRÍCULA">
                        </div>
                        <div class="form-group">
                            <label for="senha">SENHA</label>
                            <input type="password" class="form-control text-center" id="senha" placeholder="DIGITE SUA SENHA">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">ENTRAR</button>
                    
                    </form>
                    
                </div>

@endsection

