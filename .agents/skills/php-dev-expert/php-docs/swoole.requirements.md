# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole.requirements.php

---

## Dependências

O Swoole requer a biblioteca libbrotli.

Habilitar a opção --enable-swoole-curl requer a biblioteca libcurl, e tanto o PHP quanto o Swoole devem vincular-se à
mesma biblioteca compartilhada libcurl e cabeçalhos para evitar comportamento indefinido.

Habilitar a opção --enable-iouring requer a biblioteca liburing (versão >= 2.0) e o kernel Linux (versão >= 5.12).

Habilitar a opção --enable-swoole-thread requer que o PHP esteja no modo ZTS (Zend Thread Safety).

Habilitar a opção --enable-cares requer a biblioteca libc-ares.

Habilitar a opção --enable-zstd requer a biblioteca libzstd (versão >= 1.4.0).

Habilitar a opção --enable-swoole-sqlite requer a biblioteca libsqlite.

Habilitar a opção --enable-swoole-pgsql requer a biblioteca libpq.

Habilitar a opção --with-swoole-odbc requer a biblioteca unixodbc-dev.

Habilitar a opção --with-swoole-oracle requer as bibliotecas do Oracle Instant Client.

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
