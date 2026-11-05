# Retorna a entrada atual do array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfixedarray.current.php

---

# SplFixedArray::current

(PHP 5 >= 5.3.0, PHP 7)

SplFixedArray::current — Retorna a entrada atual do array

### Descrição

public function **SplFixedArray::current**(): [mixed](language.types.mixed.md)

Obtém o elemento atual do array.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O valor do elemento atual.

### Erros/Exceções

Lança [RuntimeException](class.runtimeexception.md) quando o ponteiro interno do array aponta para um
índice inválido ou está fora dos limites.

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
