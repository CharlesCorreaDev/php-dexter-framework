# Cria um objeto FFI\CType a partir de uma declaração C

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ffi.type.php

---

# FFI::type

(PHP 7 >= 7.4.0, PHP 8)

FFI::type — Cria um objeto FFI\CType a partir de uma declaração C

### Descrição

public function **FFI::type**([string](language.types.string.md) `$type`): [?](language.types.null.md)[FFI\CType](class.ffi-ctype.md)

Esta função cria e retorna um objeto [FFI\CType](class.ffi-ctype.md) para a
[string](language.types.string.md) fornecida contendo uma declaração de tipo C.
Qualquer tipo declarado para a instância é permitido.

### Parâmetros

`type`
:   Uma [string](language.types.string.md) com uma declaração C válida.

### Valor Retornado

Retorna o objeto [FFI\CType](class.ffi-ctype.md) recém-criado
ou **`null`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Chamar **FFI::type()** estaticamente agora foi descontinuado. |

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
