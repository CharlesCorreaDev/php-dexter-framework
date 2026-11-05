# Funções para Sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.session.php

---

# Funções para Sessão

## Índice

- [session\_abort](function.session-abort.md) — Descarta as alterações no array da sessão e encerra a sessão
- [session\_cache\_expire](function.session-cache-expire.md) — Obter e/ou definir a expiração do cache atual
- [session\_cache\_limiter](function.session-cache-limiter.md) — Obtém e/ou define o limitador do cache atual
- [session\_commit](function.session-commit.md) — Sinônimo de session\_write\_close
- [session\_create\_id](function.session-create-id.md) — Cria novo ID de sessão
- [session\_decode](function.session-decode.md) — Decodifica dados de sessão de uma sessão codificada em formato string
- [session\_destroy](function.session-destroy.md) — Destrói todos os dados registrados em uma sessão
- [session\_encode](function.session-encode.md) — Codifica os dados atuais da sessão como uma sessão codificada em formato string
- [session\_gc](function.session-gc.md) — Executa a coleta de lixo de dados da sessão
- [session\_get\_cookie\_params](function.session-get-cookie-params.md) — Obtém os parâmetros do cookie da sessão
- [session\_id](function.session-id.md) — Obtém e/ou define o id de sessão atual
- [session\_module\_name](function.session-module-name.md) — Obtém e/ou define o módulo da sessão atual
- [session\_name](function.session-name.md) — Obtém e/ou define o nome da sessão atual
- [session\_regenerate\_id](function.session-regenerate-id.md) — Atualiza o id da sessão atual com um novo id gerado
- [session\_register\_shutdown](function.session-register-shutdown.md) — Função de finalização da sessão
- [session\_reset](function.session-reset.md) — Reinicializa um array de sessão com os valores originais
- [session\_save\_path](function.session-save-path.md) — Obtém e/ou define o caminho para armazenamento da sessão atual
- [session\_set\_cookie\_params](function.session-set-cookie-params.md) — Define os parâmetros do cookie de sessão
- [session\_set\_save\_handler](function.session-set-save-handler.md) — Define funções de armazenamento de sessão à nível de usuário
- [session\_start](function.session-start.md) — Inicia uma nova sessão ou continua uma sessão existente
- [session\_status](function.session-status.md) — Retorna o status atual da sessão
- [session\_unset](function.session-unset.md) — Libera todas as variáveis de sessão
- [session\_write\_close](function.session-write-close.md) — Guarda os dados de sessão e fecha a sessão

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
