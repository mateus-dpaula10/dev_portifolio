@extends('main')

@section('title', 'Home - MATEUS DE PAULA')

@section('content')
    <div id="home">
        <div class="img"></div>

        @if (session('success'))
            <p class="alert alert-success w-50">{{ session('success') }}</p>
        @endif
        @if (session('error'))
            <p class="alert alert-danger w-50">{{ session('error') }}</p>
        @endif

        <div class="container-fluid px-5">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <h1 class="titulo-principal">Atuo com desenvolvimento de Layouts Responsivos e Modernos para sua empresa e para seu próprio negócio!</h1>
                </div>

                <div class="col-lg-5 mt-5 mt-lg-0">
                    <div id="img_autor">
                        <img src="{{ asset('img/img_autor.jpg') }}" alt="Imagem autor">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="sobre">
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="mb-5">Desenvolvedor Frontend</h1>

                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col">
                            <p>
                                Formado em Análise e Desenvolvimento de Sistemas em 2022, no centro Universitário Eniac - Guarulhos / SP.
                            </p>
                            <p>
                                Com atuação em desenvolvimentos de layouts institucionais, com as seguintes 
                                tecnologias e atribuições:
                                <ul>
                                    <li><b>Javascript</b></li>
                                    <li><b>jQuery</b></li>
                                    <li><b>Vue Js</b></li>
                                    <li><b>Laravel</b></li>
                                    <li><b>Php</b></li>
                                    <li><b>Versionamento código git</b></li>
                                    <li><b>Banco de dados</b></li>
                                </ul>
                            </p>
                        </div>

                        <div class="col mt-3 mt-md-0">
                            <p>
                                Principais desenvolvimentos:
                                <ul>
                                    <li>Sistema de chamados para demandas internas</li>
                                    <li>Sistema de agenda de jogos para times de futebol</li>
                                    <li>Hotsites institucionais</li>                                
                                </ul>
                            </p>
                            <h6>
                                Profissional que sempre buscar estar atualizado com as tecnologias do mercado para melhor atender as solicitações e 
                                passar mais credibilidade aos clientes!
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="portifolio">
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-12">
                    <h1>Portifólio</h1>
                    <h6>Segue alguns desenvolvimentos:</h6>

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 mt-5">
                        <div class="col">
                            <div class="card">
                                <div class="card-footer">
                                    Hotsite Ceert 
                                </div>
                                <div class="card-body">
                                    <img src="{{ asset('img/portifolio/hotsite_ceert.png') }}" alt="ceert">
                                </div>
                                <div class="card-footer">
                                    <a target="_blank" href="https://ceert.org.br">https://ceert.org.br</a>
                                </div>
                            </div>
                        </div>
                        <div class="col mt-3 mt-sm-0">
                            <div class="card">
                                <div class="card-footer">
                                    Hotsite Prosseguir 
                                </div>
                                <div class="card-body">
                                    <img src="{{ asset('img/portifolio/hotsite_prosseguir.png') }}" alt="prosseguir">
                                </div>
                                <div class="card-footer">
                                    <a target="_blank" href="https://prosseguir.ceert.org.br">https://prosseguir.ceert.org.br</a>
                                </div>
                            </div>
                        </div>
                        <div class="col mt-3 mt-lg-0">
                            <div class="card">
                                <div class="card-footer">
                                    Hotsite Anansi 
                                </div>
                                <div class="card-body">
                                    <img src="{{ asset('img/portifolio/hotsite_anansi.png') }}" alt="anansi">
                                </div>
                                <div class="card-footer">
                                    <a target="_blank" href="https://anansi.ceert.org.br">https://anansi.ceert.org.br</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-12">                            
                            <a target="_blank" href="https://www.behance.net/mateusdepaula2">
                                <h5>Behance:</h5>
                            </a>

                            <hr>
                            
                            <a target="_blank" href="https://github.com/mateus-dpaula10?tab=repositories">
                                <h5>Github</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contato">
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Contato</h1>      
                    <h6 class="text-center mb-5">Preencha o formulário para mais informações que em breve retorno contato.</h6>              

                    <form action="{{ route('store.home') }}" method="POST">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="form-group col-11 col-sm-9 col-md-7 col-lg-5">
                                <label for="nome_home" class="form-label">Nome:</label>
                                <input type="text" class="form-control" id="nome_home" name="nome_home" required>
                            </div>
                        </div>

                        <div class="row justify-content-center mt-3">
                            <div class="form-group col-11 col-sm-9 col-md-7 col-lg-5">
                                <label for="email_home" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email_home" name="email_home" required>
                            </div>
                        </div>

                        <div class="row justify-content-center mt-3">
                            <div class="form-group col-11 col-sm-9 col-md-7 col-lg-5">
                                <label for="assunto_home" class="form-label">Assunto:</label>
                                <textarea name="assunto_home" id="assunto_home" rows="5" class="form-control" required></textarea>                                
                            </div>
                        </div>

                        <div class="row justify-content-center mt-3">
                            <div class="form-group col-11 col-sm-9 col-md-7 col-lg-5">
                                <input type="submit" class="btn btn-outline-dark float-end">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection