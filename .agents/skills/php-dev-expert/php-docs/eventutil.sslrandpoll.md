# Gera entropia por meio de RAND_poll() do OpenSSL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventutil.sslrandpoll.php

---

# EventUtil::sslRandPoll

(PECL event >= 1.2.6-beta)

EventUtil::sslRandPoll — Gera entropia por meio de RAND\_poll() do OpenSSL

### Descrição

public
static
function **EventUtil::sslRandPoll**(): [void](language.types.void.md)

Gera entropia por meio do OpenSSL
`RAND_poll()`
(veja o manual do sistema).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

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
