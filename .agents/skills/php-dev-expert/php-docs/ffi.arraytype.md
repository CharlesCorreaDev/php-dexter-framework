# Constrói dinamicamente um novo array tipo C

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ffi.arraytype.php

---

# FFI::arrayType

(PHP 7 >= 7.4.0, PHP 8)

FFI::arrayType — Constrói dinamicamente um novo array tipo C

### Descrição

public static function **FFI::arrayType**([FFI\CType](class.ffi-ctype.md) `$type`, [array](language.types.array.md) `$dimensions`): [FFI\CType](class.ffi-ctype.md)

Constrói dinamicamente um novo array tipo C com elementos do tipo definido por `type`
e dimensões especificadas por `dimensions`. No exemplo a seguir, `$t1`
e `$t2` são tipos de array equivalentes:

```
<?php
$t1 = FFI::type("int[2][3]");
$t2 = FFI::arrayType(FFI::type("int"), [2, 3]);
?>
```

### Parâmetros

`type`
:   Uma declaração C válida como uma [string](language.types.string.md) ou como uma instância de [FFI\CType](class.ffi-ctype.md)
    que já tenha sido criada.

`dimensions`
:   As dimensões do tipo como um [array](language.types.array.md).

### Valor Retornado

Retorna o objeto [FFI\CType](class.ffi-ctype.md) recentemente criado.

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
