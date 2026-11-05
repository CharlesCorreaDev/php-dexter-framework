# Sobrecarrega um opcode da máquina virtual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.uopz-overload.php

---

# uopz\_overload

(PECL uopz 1, PECL uopz 2)

uopz\_overload — Sobrecarrega um opcode da máquina virtual

**Aviso**

Esta função foi
*REMOVIDA* na uopz 5.0.0 no PECL.

### Descrição

function **uopz\_overload**([int](language.types.integer.md) `$opcode`, [Callable](language.types.callable.md) `$callable`): [void](language.types.void.md)

Sobrecarrega o `opcode` especificado com a função definida pelo usuário.

### Parâmetros

`opcode`
:   Um opcode válido, veja constantes para detalhes dos códigos suportados.

`callable`

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **uopz\_overload()****

```
<?php
uopz_overload(ZEND_EXIT, function(){});

exit();
echo "Hello World";
?>
```

O exemplo acima produzirá:

```
Hello World
```

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
