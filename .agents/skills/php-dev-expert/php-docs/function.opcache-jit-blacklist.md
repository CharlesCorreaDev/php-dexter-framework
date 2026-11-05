# Impede que uma função seja compilada pelo JIT

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.opcache-jit-blacklist.php

---

# opcache\_jit\_blacklist

(PHP 8 >= 8.4.0)

opcache\_jit\_blacklist — Impede que uma função seja compilada pelo JIT

### Descrição

function **opcache\_jit\_blacklist**(
[Closure](class.closure.md) `$closure`
): [void](language.types.void.md)

Esta função impede que uma função em particular seja compilada pelo JIT quando o rastreamento JIT estiver em uso.
Esta função é especificada usando um [Closure](class.closure.md).

**Aviso**

Qualquer parte da função que já tenha sido compilada pelo JIT permacece não afetada
e ainda será compilada pelo JIT.

### Parâmetros

`closure`
:   A função a ser impedida, representada como um chamável de primeira classe.
    Também é possível passar uma função anônima,
    e nesse caso a própria função anônima é impedida.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1
Exemplo básico de
**opcache\_jit\_blacklist()****

```
<?php
function foo() {
    $x = 1;
    $x += 0;
    ++$x;
    var_dump($x);
}
opcache_jit_blacklist(foo(...));
foo();
?>
```

### Veja também

- [opcache\_invalidate()](function.opcache-invalidate.md) - Invalida um script em cache
- [opcache\_reset()](function.opcache-reset.md) - Redefine o conteúdo do cache opcode

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
