# Obtém a contagem de parâmetros de um tipo de função

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ffi-ctype.getfuncparametercount.php

---

# FFI\CType::getFuncParameterCount

(PHP 8 >= 8.1.0)

FFI\CType::getFuncParameterCount — Obtém a contagem de parâmetros de um tipo de função

### Descrição

public function **FFI\CType::getFuncParameterCount**(): [int](language.types.integer.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o número de parâmetros para o tipo de função subjacente.
Se o tipo não for uma função, uma exceção
[FFI\Exception](class.ffi-exception.md) é lançada.

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
