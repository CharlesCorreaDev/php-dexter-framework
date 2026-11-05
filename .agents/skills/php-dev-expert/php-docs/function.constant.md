# Retorna o valor de uma constante

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.constant.php

---

# constant

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

constant — Retorna o valor de uma constante

### Descrição

function **constant**([string](language.types.string.md) `$name`): [mixed](language.types.mixed.md)

Retorna o valor de uma constante indicada pelo
parâmetro `name`.

A função **constant()** é útil se você precisa pegar
o valor de uma constante, mas não sabe o seu nome. I.e.
esta guardada em uma variável ou é retornada por uma função.

Esta função funciona também com [constantes de classes](language.oop5.constants.md) e [casos de enumeração](language.types.enumerations.md).

### Parâmetros

`name`
:   O nome da constante.

### Valor Retornado

Retorna o valor da constante.

### Erros/Exceções

Se a constante não estiver definida, uma exceção [Error](class.error.md) é lançada.
Antes do PHP 8.0.0, um erro de nível **`E_WARNING`** era gerado nesse caso.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Se a constante não estiver definida, **constant()** agora lança uma exceção [Error](class.error.md); anteriormente um **`E_WARNING`** era gerado e **`null`** era retornado. |

### Examples

**Exemplo #1 Usando **constant()** com Constantes**

```
<?php

define("MAXSIZE", 100);

echo MAXSIZE;
echo constant("MAXSIZE"); // mesma coisa que a linha anterior

interface bar {
    const test = 'foobar!';
}

class foo {
    const test = 'foobar!';
}

$const = 'test';

var_dump(constant('bar::'. $const)); // string(7) "foobar!"
var_dump(constant('foo::'. $const)); // string(7) "foobar!"

?>
```

**Exemplo #2 Usando **constant()**com Casos de Enumeração (a partir do PHP 8.1.0)**

```
<?php

enum Suit
{
    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;
}

$case = 'Hearts';

var_dump(constant('Suit::'. $case)); // enum(Suit::Hearts)

?>
```

### Veja também

- [define()](function.define.md) - Define uma constante com nome
- [defined()](function.defined.md) - Verifica se existe uma constante com o nome informado
- [get\_defined\_constants()](function.get-defined-constants.md) - Retorna um array associativo com os nomes de todas as constantes e seus valores
- A seção sobre [Constantes](language.constants.md)

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
