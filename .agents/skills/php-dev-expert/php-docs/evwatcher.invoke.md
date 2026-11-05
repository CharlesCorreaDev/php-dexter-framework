# Invoca a função de retorno do observador com a máscara de bits dos eventos
  recebidos fornecidos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evwatcher.invoke.php

---

# EvWatcher::invoke

(PECL ev >= 0.2.0)

EvWatcher::invoke — Invoca a função de retorno do observador com a máscara de bits dos eventos
recebidos fornecidos

### Descrição

public
function **EvWatcher::invoke**(
[int](language.types.integer.md) `$revents`
): [void](language.types.void.md)

Invoca a função de retorno do observador com a máscara de bits dos eventos recebidos fornecidos.

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
