


<div id="addmodal" class="addmodal">
    <div class="addmodal-content">
        <span class="addmodal-close">&times;</span>
        <h2>Adicionar Usuário</h2>
        <form id="add-user-form" >
            <input type="text" name="nome_alu" id="add-user-name" placeholder="Nome do usuário" required>
            <input type="email" name="email" id="add-user-email" placeholder="E-mail do usuário" required>
            <input type="text" name="senha" id="add-user-senha" placeholder="Telefone do usuário" required>
            <input type="tel" name="tel" id="add-user-phone" placeholder="Telefone do usuário" required>
            <input type="date" name="dt_nascimento" id="add-user-dt_nasc" placeholder="Telefone do usuário" required>
            <select>
            <option disabled selected name="genero"></option>
            <option>Masculino</option>
                <option>Feminino</option>
                <option>Outro</option>
                <option>Não quero declarar</option>
            </select>
            <input type="text" name="rg" id="add-user-rg" placeholder="Telefone do usuário" required>
            <input type="text" name="instituicao" id="add-user-inst" placeholder="Telefone do usuário" required>
            <select>
            <option disabled selected name="pcd"></option>
                <option>Sim</option>
                <option>Não</option>
            </select>
            <select id="add-user-icon">
                <option value="👤">👤</option>
                <option value="👩">👩</option>
                <option value="👨">👨</option>
                <option value="👧">👧</option>
                <option value="🧑">🧑</option>
                <option value="🧒">🧒</option>
                <option value="👨">👨</option>
                <option value="🧔">🧔</option>
                <option value="👨‍🦱">👨‍🦱</option>
                <option value="👱">👱</option>
                <option value="👱‍♀️">👱‍♀️</option>
            </select>
            <button type="submit" class="btn-submit">Adicionar</button>
        </form>
    </div>
</div>

