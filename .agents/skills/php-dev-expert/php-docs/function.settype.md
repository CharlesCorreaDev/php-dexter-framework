# Define o tipo de uma variável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.settype.php

---

# settype

(PHP 4, PHP 5, PHP 7, PHP 8)

settype — Define o tipo de uma variável

### Descrição

function **settype**([mixed](language.types.mixed.md) `&$var`, [string](language.types.string.md) `$type`): [bool](language.types.boolean.md)

Define o tipo da variável `var` para
`type`.

### Parâmetros

`var`
:   A variável a ser convertida.

`type`
:   Os valores possíveis para `type` são:

    - "boolean" ou "bool"
    - "integer" ou "int"
    - "float" ou "double"
    - "string"
    - "array"
    - "object"
    - "null"

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Lança um [ValueError](class.valueerror.md) se o valor de
`type` não for um tipo válido, a partir do PHP 8.0.0.
Antes do PHP 8.0.0, um **`E_WARNING`** era emitido e
a função retornava **`false`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Agora lança um [ValueError](class.valueerror.md) quando um tipo inválido é passado ao parâmetro `type`. Anteriormente, um **`E_WARNING`** era emitido e a função retornava **`false`**. |

### Examples

**Exemplo #1 Exemplo da função **settype()****

```
<?php
$foo = "5bar"; // string
$bar = true;   // boolean

settype($foo, "integer"); // $foo é agora 5   (integer)
settype($bar, "string");  // $bar é agora "1" (string)

var_dump($foo, $bar);
?>
```

### Notas

> **Nota**:
>
> O valor máximo para "int" é **`PHP_INT_MAX`**.

### Veja também

- [gettype()](function.gettype.md) - Obtém o tipo de uma variável
- [Conversão de tipos](language.types.type-juggling.md#language.types.typecasting)
- [Manipulação de tipos](language.types.type-juggling.md)

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
