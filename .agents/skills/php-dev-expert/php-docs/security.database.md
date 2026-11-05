# Segurança de Bancos de Dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/security.database.php

---

# Segurança de Bancos de Dados

## Índice

- [Desenhando Bancos de Dados](security.database.design.md)
- [Conectando com o Banco de Dados](security.database.connection.md)
- [Modelo de Armazenamento Criptografado](security.database.storage.md)
- [Injeção de SQL](security.database.sql-injection.md)

Hoje em dia, bancos de dados são componentes cardinais de qualquer aplicação web
permitindo que websites forneçam conteúdo dinâmico variável. Uma vez que informações muito
sensíveis e/ou secretas podem ser guardadas em um banco de dados, proteger seus
bancos de dados é essencial.

Para retirar ou guardar qualquer informação, você precisa conectar-se ao banco
de dados, enviar uma consulta (query) legítima, pegar o resultado e fechar a conexão.
Atualmente, a linguagem mais usada para consulta nessa interação é a
Structured Query Language (SQL). Veja como um atacante pode [manipular uma consulta SQL](security.database.sql-injection.md).

O PHP não pode proteger seu banco de dados sozinho. As
seções a seguir tentam ser uma introdução básica em relação a como
acessar e manipular banco de dados a partir de scripts PHP.

É preciso manter em mente essa regra simples: defesa em profundidade. Em quanto mais lugares
há ações para aumentar a proteção do banco de dados, menor a probabilidade
de um atacante ter sucesso em expor ou abusar de qualquer informação
guardada. Uma boa modelagem do esquema (schema) do banco de dados e da aplicação
para lidar com os maiores medos.

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
