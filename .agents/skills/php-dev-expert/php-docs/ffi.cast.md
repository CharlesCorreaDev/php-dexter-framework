# Realiza um conversão de tipo C

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ffi.cast.php

---

# FFI::cast

(PHP 7 >= 7.4.0, PHP 8)

FFI::cast — Realiza um conversão de tipo C

### Descrição

public function **FFI::cast**([FFI\CType](class.ffi-ctype.md)|[string](language.types.string.md) `$type`, [FFI\CData](class.ffi-cdata.md)|[int](language.types.integer.md)|[float](language.types.float.md)|[bool](language.types.boolean.md)|[null](language.types.null.md) `&$ptr`): [?](language.types.null.md)[FFI\CData](class.ffi-cdata.md)

**FFI::cast()** cria um novo objeto [FFI\CData](class.ffi-cdata.md),
que referencia a mesma estrutura de dados C, mas é associado com um tipo diferente.
O objeto resultante não detém o dado C, e o ponteiro de origem `ptr`
precisa sobreviver ao resultado. O tipo C pode ser especificado como uma [string](language.types.string.md) com qualquer
declaração de tipo C válida ou como objeto [FFI\CType](class.ffi-ctype.md), criado antes.
Qualquer tipo declarado para a instância é permitido.

### Parâmetros

`type`
:   Uma declaração válida em C como uma [string](language.types.string.md) ou uma instância de [FFI\CType](class.ffi-ctype.md)
    que já tenha sido criada.

`ptr`
:   O identificador do ponteiro para uma estrutura de dados C.

### Valor Retornado

Retorna o objeto [FFI\CData](class.ffi-cdata.md) recentemente criado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Chamar **FFI::cast()** estaticamente agora foi descontinuado. |

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
