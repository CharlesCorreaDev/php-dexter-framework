# Alimenta o conjunto de "revents" fornecido no laço de eventos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evwatcher.feed.php

---

# EvWatcher::feed

(PECL ev >= 0.2.0)

EvWatcher::feed — Alimenta o conjunto de "revents" fornecido no laço de eventos

### Descrição

public
function **EvWatcher::feed**(
[int](language.types.integer.md) `$revents`
): [void](language.types.void.md)

Alimenta o conjunto de "revents" fornecido no laço de eventos, como se o evento especificado
tivesse ocorrido para o observador.

### Parâmetros

`revents`
:   Máscara de bits de
    [eventos recebidos](class.ev.md#ev.constants.watcher-revents) pelo observador.

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
