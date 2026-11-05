# Opções e parâmetros de contexto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/context.php

---

# Opções e parâmetros de contexto

O PHP oferece várias opções e parâmetros de contexto que podem ser usados com
todos os sistemas de arquivos e empacotadores de fluxo. O contexto é criado com a função
[stream\_context\_create()](function.stream-context-create.md). As opções são definidas com a função
[stream\_context\_set\_option()](function.stream-context-set-option.md) e os parâmetros com a função
[stream\_context\_set\_params()](function.stream-context-set-params.md).

## Índice

- [Opções de contexto de Socket](context.socket.md) — Lista de opções de contexto de Socket
- [Opções de contexto do HTTP](context.http.md) — Lista de opções de contexto do HTTP
- [Opções de contexto do FTP](context.ftp.md) — Lista de opções de contexto do FTP
- [Opções de contexto de SSL](context.ssl.md) — Lista de opções de contexto de SSL
- [Opções de contexto do Phar](context.phar.md) — Lista de opções de contexto do Phar
- [Parâmetros de contexto](context.params.md) — Listagem de parâmetros de contexto
- [Opções de contexto para Zip](context.zip.md) — Lista de opções de contexto de Zip
- [Opções de contexto Zlib](context.zlib.md) — Lista de opções de contexto de Zlib

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
