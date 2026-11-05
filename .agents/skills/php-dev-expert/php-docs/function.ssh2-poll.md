# Pesquisa os canais/ouvintes/transmissões para eventos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-poll.php

---

# ssh2\_poll

(PECL ssh2 >= 0.9.0)

ssh2\_poll — Pesquisa os canais/ouvintes/transmissões para eventos

### Descrição

function **ssh2\_poll**([array](language.types.array.md) `&$desc`, [int](language.types.integer.md) `$timeout` = 30): [int](language.types.integer.md)

Pesquisa os canais/ouvintes/transmissões para eventos,
e retorna o número de descritores que retornaram eventos diferentes de zero.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`desc`
:   Um array indexado de subarrays com as chaves
    `'resource'` e `'events'`.
    O valor do recurso é um fluxo (canal) ou um recurso do Listener SSH2.
    O valor do evento são as constantes SSH2\_POLL\* unidas por OR binário.
    Cada subarray será preenchido com um elemento `'revents'` no retorno,
    cujos valores são as constantes SSH2\_POLL\* unidas por OR binário dos eventos que ocorreram.

`timeout`
:   O tempo limite em segundos.

### Valor Retornado

Retorna o número de descritores que retornaram eventos diferentes de zero.

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
