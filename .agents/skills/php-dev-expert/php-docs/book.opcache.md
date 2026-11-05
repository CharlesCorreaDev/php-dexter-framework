# OPcache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.opcache.php

---

# OPcache

# Introdução

OPcache melhora o desempenho do PHP armazenando bytecode de script pré-compilado
na memória compartilhada, eliminando assim a necessidade do PHP carregar e analisar scripts
em cada solicitação.

Esta extensão é empacotada com o PHP 5.5.0 e posterior, e está
[» disponível no PECL](https://pecl.php.net/package/ZendOpcache)
para PHP versões 5.2, 5.3 e 5.4.

- [Instalação/Configuração](opcache.setup.md)
  - [Instalação](opcache.installation.md)
  - [Configurações de Execução](opcache.configuration.md)
- [Preloading](opcache.preloading.md)
- [Funções de OPcache](ref.opcache.md)
  - [opcache\_compile\_file](function.opcache-compile-file.md) — Compila e armazena em cache um script PHP sem executá-lo
  - [opcache\_get\_configuration](function.opcache-get-configuration.md) — Obtém informações de configuração sobre o cache
  - [opcache\_get\_status](function.opcache-get-status.md) — Obtém informações de status sobre o cache
  - [opcache\_invalidate](function.opcache-invalidate.md) — Invalida um script em cache
  - [opcache\_is\_script\_cached](function.opcache-is-script-cached.md) — Informa se um script é armazenado em cache no OPCache
  - [opcache\_is\_script\_cached\_in\_file\_cache](function.opcache-is-script-cached-in-file-cache.md) — Informa se um script está armazenado no cache de arquivo do OPCache
  - [opcache\_jit\_blacklist](function.opcache-jit-blacklist.md) — Impede que uma função seja compilada pelo JIT
  - [opcache\_reset](function.opcache-reset.md) — Redefine o conteúdo do cache opcode

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
