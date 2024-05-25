@yield('content')
<div id="myModal" class="modal-cont-user">
    <div class="modal-content-user">
        <!-- Barra de Navegação -->
        <div class="desc-user-inform">

        </div>

        <div class="navbar">
            <a href="#" class="nav-item" id="btn-dados"
                onclick="toggleModalActive('dados'); toggleNavActive('btn-dados')">Dados</a>
            <a href="#" class="nav-item" id="btn-chat"
                onclick="toggleModalActive('chat'); toggleNavActive('btn-chat')">Chat</a>
            <a href="#" class="nav-item" id="btn-responsavel"
                onclick="toggleModalActive('responsavel'); toggleNavActive('btn-responsavel')">Responsável</a>
            <div class="line"></div>
        </div>
        <div class="modal-screen active cont-modal-inicio" id="inicio">
            Bem vindo
        </div>
        <div class="modal-screen cont-modal-user-dados" id="dados">
                <!-- Aqui é onde os dados do usuário serão exibidos -->
                <div class="cont-dados">
                    
                </div>
            </div>
        <!-- chat -->
        <div class="modal-screen cont-modal-user-chat" id="chat">
            
        </div>
        <!-- fim chat -->
        <div class="modal-screen cont-modal-user-responsavel" id="responsavel">
        <div class="cont-dados"> 
                <div class="cont-12">  
                    <h3>ID:</h3>
                    <div class="cont-id">
                        <p>23047-25</p>
                    </div>
                </div>
                <div class="cont-13 oi">
                    <h3>Nome:</h3>
                    <div class="cont-nome">
                        <p>Manuela Monte de Sousa</p>
                    </div>
                </div>
                <div class="cont-14 oi">
                    <h3>Email:</h3>
                    <div class="cont-email">
                        <p>mannu131@live.com</p>
                    </div>
                </div>
                <div class="cont-15 oi">
                    <h3>Telefone:</h3>
                    <div class="cont-telefone">
                        <p>(11)98451-6598</p>
                    </div>
                </div>
                <div class="cont-16 oi">
                    <h3>RG:</h3>
                    <div class="cont-nome">
                        <p>63.473.357-7</p>
                    </div>
                </div>
                <div class="cont-17 oi">
                    <h3>CPF:</h3>
                    <div class="cont-nome">
                        <p>588.546.349.35</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
