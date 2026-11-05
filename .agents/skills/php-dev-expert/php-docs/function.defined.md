# Verifica se existe uma constante com o nome informado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.defined.php

---

# defined

(PHP 4, PHP 5, PHP 7, PHP 8)

defined — Verifica se existe uma constante com o nome informado

### Descrição

function **defined**([string](language.types.string.md) `$constant_name`): [bool](language.types.boolean.md)

Verifica se uma constante com o nome informado em `constant_name`
está definida.

A função também funciona com [constantes de classe](language.oop5.constants.md) e [casos de enumeração](language.types.enumerations.md).

> **Nota**:
>
> Se o objetivo for verificar se uma variável existe, use a função [isset()](function.isset.md)
> já que a função **defined()** somente se aplica a [constantes](language.constants.md). Se o objetivo for verificar se uma
> função existe, use a função [function\_exists()](function.function-exists.md).

### Parâmetros

`constant_name`
:   O nome da constante.

### Valor Retornado

Retorna **`true`** se a constante nomeada informada por `constant_name`
já está definida, **`false`** caso contrário.

### Examples

**Exemplo #1 Verificando constantes**

```
<?php

/* Observe o uso de aspas, isto é importante. Este exemplo está verificando
 * se a string 'TEST' é o nome de uma constante chamada TEST */
if (defined('TEST')) {
    echo TEST;
}

interface bar {
    const test = 'foobar!';
}

class foo {
    const test = 'foobar!';
}

var_dump(defined('bar::test')); // bool(true)
var_dump(defined('foo::test')); // bool(true)

?>
```

**Exemplo #2 Verificando Casos de Enumeração (a partir do PHP 8.1.0)**

```
<?php

enum Suit
{
    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;
}

var_dump(defined('Suit::Hearts')); // bool(true)

?>
```

### Veja também

- [define()](function.define.md) - Define uma constante com nome
- [constant()](function.constant.md) - Retorna o valor de uma constante
- [get\_defined\_constants()](function.get-defined-constants.md) - Retorna um array associativo com os nomes de todas as constantes e seus valores
- [function\_exists()](function.function-exists.md) - Retorna true se a função informada estiver definida
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
