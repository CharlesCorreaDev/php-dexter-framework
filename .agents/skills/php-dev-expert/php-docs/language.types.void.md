# Void

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.types.void.php

---

## Void

[void](language.types.void.md) é uma declaração de tipo de retorno indicando que
a função não retorna um valor, mas a função ainda pode terminar.
Portanto, não pode fazer parte de uma declaração de
[tipo de união](language.types.type-system.md#language.types.type-system.composite.union).
Disponível a partir do PHP 7.1.0.

> **Nota**:
>
> Mesmo que uma função tenha um tipo de retorno [void](language.types.void.md), ela ainda
> retornará um valor, esse valor é sempre **`null`**.

### Descartando um valor com `(void)`

A sintaxe `(void)` pode ser usada para descartar
explicitamente o resultado de uma expressão. Isso é útil para indicar que
ignorar um valor de retorno é intencional, especialmente ao chamar uma
função ou método marcado com o atributo
[NoDiscard](class.nodiscard.md).

Diferentemente de outras conversões, `(void)` não converte
o valor para outro tipo e não produz um valor. É uma instrução e não pode
ser usada como parte de uma expressão.

**Exemplo #1 Descartando um valor de retorno**

```
<?php
#[\NoDiscard]
function process(): bool {
    return true;
}

(void) process(); // Descarta explicitamente o valor de retorno
?>
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
