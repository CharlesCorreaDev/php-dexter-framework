# Funções de WinCache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.wincache.php

---

# Funções de WinCache

## Índice

- [wincache\_fcache\_fileinfo](function.wincache-fcache-fileinfo.md) — Recupera informações sobre arquivos armazenados em cache no cache de arquivos
- [wincache\_fcache\_meminfo](function.wincache-fcache-meminfo.md) — Recupera informações sobre o uso da memória cache do arquivo
- [wincache\_lock](function.wincache-lock.md) — Adquire um bloqueio exclusivo em uma determinada chave
- [wincache\_ocache\_fileinfo](function.wincache-ocache-fileinfo.md) — Recupera informações sobre arquivos armazenados em cache no cache do opcode
- [wincache\_ocache\_meminfo](function.wincache-ocache-meminfo.md) — Recupera informações sobre o uso da memória cache do opcode
- [wincache\_refresh\_if\_changed](function.wincache-refresh-if-changed.md) — Atualiza as entradas de cache para os arquivos armazenados em cache
- [wincache\_rplist\_fileinfo](function.wincache-rplist-fileinfo.md) — Recupera informações sobre o cache do caminho do arquivo de resolução
- [wincache\_rplist\_meminfo](function.wincache-rplist-meminfo.md) — Recupera informações sobre o uso de memória pelo cache do caminho do arquivo de resolução
- [wincache\_scache\_info](function.wincache-scache-info.md) — Recupera informações sobre arquivos armazenados em cache no cache de sessão
- [wincache\_scache\_meminfo](function.wincache-scache-meminfo.md) — Recupera informações sobre o uso da memória cache da sessão
- [wincache\_ucache\_add](function.wincache-ucache-add.md) — Adiciona uma variável no cache do usuário somente se a variável ainda não existir no cache
- [wincache\_ucache\_cas](function.wincache-ucache-cas.md) — Compara a variável com o valor antigo e atribui um novo valor a ela
- [wincache\_ucache\_clear](function.wincache-ucache-clear.md) — Exclui todo o conteúdo do cache do usuário
- [wincache\_ucache\_dec](function.wincache-ucache-dec.md) — Decrementa o valor associado à chave
- [wincache\_ucache\_delete](function.wincache-ucache-delete.md) — Exclui variáveis ​​do cache do usuário
- [wincache\_ucache\_exists](function.wincache-ucache-exists.md) — Verifica se uma variável existe no cache do usuário
- [wincache\_ucache\_get](function.wincache-ucache-get.md) — Obtém uma variável armazenada no cache do usuário
- [wincache\_ucache\_inc](function.wincache-ucache-inc.md) — Incrementa o valor associado à chave
- [wincache\_ucache\_info](function.wincache-ucache-info.md) — Recupera informações sobre dados armazenados no cache do usuário
- [wincache\_ucache\_meminfo](function.wincache-ucache-meminfo.md) — Recupera informações sobre o uso da memória cache do usuário
- [wincache\_ucache\_set](function.wincache-ucache-set.md) — Adiciona uma variável no cache do usuário e substitui uma variável se ela já existir no cache
- [wincache\_unlock](function.wincache-unlock.md) — Libera um bloqueio exclusivo em uma determinada chave

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
