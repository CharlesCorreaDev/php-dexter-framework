# Chamado no fechamento do filtro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/php-user-filter.onclose.php

---

# php\_user\_filter::onClose

(PHP 5, PHP 7, PHP 8)

php\_user\_filter::onClose — Chamado no fechamento do filtro

### Descrição

public function **php\_user\_filter::onClose**(): [void](language.types.void.md)

Este método é chamado no fechamento do filtro (tipicamente, também é
o fechamento do fluxo), e é executado *depois*
que o médoto de `flush` é chamado. Se quaisquer recursos
foram alocados ou inicializados durante `onCreate()`
este seria o momento para destrui-los ou descartá-los.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O valor de retorno é ignorado.

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
