# Finaliza um pacote WDDX com o ID especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.wddx-packet-end.php

---

# wddx\_packet\_end

(PHP 4, PHP 5, PHP 7)

wddx\_packet\_end — Finaliza um pacote WDDX com o ID especificado

**Aviso**

Esta função foi
*REMOVIDA* a partir do PHP 7.4.0.

### Descrição

function **wddx\_packet\_end**([resource](language.types.resource.md) `$packet_id`): [string](language.types.string.md)

Finaliza e retorna um pacote WDDX escolhido.

### Parâmetros

`packet_id`
:   Um pacote WDDX, retornado por [wddx\_packet\_start()](function.wddx-packet-start.md).

### Valor Retornado

Retorna a string com o pacote WDDX.

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
