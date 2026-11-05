# Obtém o tipo de um parâmetro de função

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ffi-ctype.getfuncparametertype.php

---

# FFI\CType::getFuncParameterType

(PHP 8 >= 8.1.0)

FFI\CType::getFuncParameterType — Obtém o tipo de um parâmetro de função

### Descrição

public function **FFI\CType::getFuncParameterType**([int](language.types.integer.md) `$index`): [FFI\CType](class.ffi-ctype.md)

Retorna o tipo de um parâmetro para o tipo da função subjacente.

### Parâmetros

`index`
:   Índice do parâmetro da função, baseado em zero.

### Valor Retornado

Retorna o tipo de um parâmetro para o tipo da função subjacente.
Se o tipo subjacente não for uma função, ou se o ínice informado estiver fora
do intervalo de parâmetros da função, uma
[FFI\Exception](class.ffi-exception.md) será lançada.

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
