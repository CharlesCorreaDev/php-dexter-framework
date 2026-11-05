# Variáveis predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reserved.variables.php

---

# Variáveis predefinidas

O PHP fornece variáveis predefinidas que representam
[variáveis externas](language.variables.external.md),
variáveis nativas de ambiente e outras informações sobre o ambiente
de execução, como o número e os valores dos argumentos passados para o
script no ambiente CLI.

## Índice

- [Superglobais](language.variables.superglobals.md) — Variáveis nativas que estão sempre disponíveis em todos escopos
- [$GLOBALS](reserved.variables.globals.md) — Referencia todas variáveis disponíveis no escopo global
- [$\_SERVER](reserved.variables.server.md) — Informação do servidor e ambiente de execução
- [$\_GET](reserved.variables.get.md) — Variáveis de string de consulta
- [$\_POST](reserved.variables.post.md) — Dados de formulário de requisições POST HTTP
- [$\_FILES](reserved.variables.files.md) — Variáveis de Upload de Arquivos HTTP
- [$\_REQUEST](reserved.variables.request.md) — Variáveis de requisição HTTP
- [$\_SESSION](reserved.variables.session.md) — Variáveis de sessão
- [$\_ENV](reserved.variables.environment.md) — Variáveis de ambiente
- [$\_COOKIE](reserved.variables.cookies.md) — Cookies HTTP
- [$php\_errormsg](reserved.variables.phperrormsg.md) — A mensagem de erro anterior
- [$http\_response\_header](reserved.variables.httpresponseheader.md) — Cabeçalhos de resposta HTTP
- [$argc](reserved.variables.argc.md) — O número de argumentos passados para o script
- [$argv](reserved.variables.argv.md) — Array de argumentos passados para o script

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
