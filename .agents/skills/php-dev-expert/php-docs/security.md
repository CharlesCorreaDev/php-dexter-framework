# Segurança

> **Fonte / Source:** https://www.php.net/manual/pt_BR/security.php

---

# Segurança

- [Introdução](security.intro.md)
- [Considerações Gerais](security.general.md)
- [Instalando como binário CGI](security.cgi-bin.md)
  - [Ataque Possível](security.cgi-bin.attacks.md)
  - [Caso 1: apenas arquivos públicos são disponibilizados](security.cgi-bin.default.md)
  - [Caso 2: usando cgi.force\_redirect](security.cgi-bin.force-redirect.md)
  - [Caso 3: configurando doc\_root ou user\_dir](security.cgi-bin.doc-root.md)
  - [Caso 4: Interpretador do PHP fora da árvore de diretórios do servidor web](security.cgi-bin.shell.md)
- [Instalando como módulo do Apache](security.apache.md)
- [Segurança da Sessão](security.sessions.md)
- [Segurança do Sistema de Arquivos](security.filesystem.md)
  - [Problemas relacionados aos bytes nulos](security.filesystem.nullbytes.md)
- [Segurança de Bancos de Dados](security.database.md)
  - [Desenhando Bancos de Dados](security.database.design.md)
  - [Conectando com o Banco de Dados](security.database.connection.md)
  - [Modelo de Armazenamento Criptografado](security.database.storage.md)
  - [Injeção de SQL](security.database.sql-injection.md)
- [Relatando Erros](security.errors.md)
- [Dados Enviados pelo Usuário](security.variables.md)
- [Escondendo o PHP](security.hiding.md)
- [Mantendo-se Atualizado](security.current.md)

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
