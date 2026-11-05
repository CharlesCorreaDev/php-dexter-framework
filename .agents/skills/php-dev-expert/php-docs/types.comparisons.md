# Tabela de comparações de tipos do PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/types.comparisons.php

---

# Tabela de comparações de tipos do PHP

As seguintes tabelas demonstram o comportamento dos
[tipos](language.types.md) e
[operadores
de comparação](language.operators.comparison.md) no PHP, tanto para comparações aproximadas ou exatas. Este
complemento é também relacionado com a seção do manual sobre
[type juggling](language.types.type-juggling.md).
A inspiração vem dos comentários de vários usuários e do trabalho feito pela
[» BlueShoes](http://www.blueshoes.org/en/developer/php_cheat_sheet/).

Antes de utilizar essas tabelas, é importante entender os tipos e seus
significados. Por exemplo, `"42"` é uma [string](language.types.string.md)
enquanto `42` é um [int](language.types.integer.md). **`false`** é um
[bool](language.types.boolean.md) enquanto `"false"` é uma
[string](language.types.string.md).

> **Nota**:
>
> Formulários HTML não passam inteiros, floats ou booleanos; eles passam strings.
> Para saber se uma string é do tipo númerico, você pode usar a função
> [is\_numeric()](function.is-numeric.md).

> **Nota**:
>
> Usar apenas `if ($x)` quando $x estiver
> indefinido irá gerar um erro do nível **`E_NOTICE`**.
> Em vez disso, considere usar [empty()](function.empty.md) ou
> [isset()](function.isset.md) ou ainda inicialize suas variáveis.

> **Nota**:
>
> Algumas operações numéricas podem resultar em um valor representado pela constante
> **`NAN`**. Quaisquer comparações exatas ou aproximadas deste valor
> contra qualquer outro valor, incluindo ele mesmo, com exceção de **`true`**, terão como resultado **`false`**.
> (por exemplo `NAN != NAN` e `NAN !== NAN`)
> Exemplos de operações que geram **`NAN`** são
> `sqrt(-1)`, `asin(2)`, e
> `acosh(0)`.

**Comparações de $x com funções PHP**

| Expressão | [gettype()](function.gettype.md) | [empty()](function.empty.md) | [is\_null()](function.is-null.md) | [isset()](function.isset.md) | [bool](language.types.boolean.md) : `if($x)` |
| --- | --- | --- | --- | --- | --- |
| `$x = "";` | [string](language.types.string.md) | **`true`** | **`false`** | **`true`** | **`false`** |
| `$x = null;` | [NULL](language.types.null.md) | **`true`** | **`true`** | **`false`** | **`false`** |
| `var $x;` | [NULL](language.types.null.md) | **`true`** | **`true`** | **`false`** | **`false`** |
| $x está indefinido | [NULL](language.types.null.md) | **`true`** | **`true`** | **`false`** | **`false`** |
| `$x = [];` | [array](language.types.array.md) | **`true`** | **`false`** | **`true`** | **`false`** |
| `$x = ['a', 'b'];` | [array](language.types.array.md) | **`false`** | **`false`** | **`true`** | **`true`** |
| `$x = false;` | [bool](language.types.boolean.md) | **`true`** | **`false`** | **`true`** | **`false`** |
| `$x = true;` | [bool](language.types.boolean.md) | **`false`** | **`false`** | **`true`** | **`true`** |
| `$x = 1;` | [int](language.types.integer.md) | **`false`** | **`false`** | **`true`** | **`true`** |
| `$x = 42;` | [int](language.types.integer.md) | **`false`** | **`false`** | **`true`** | **`true`** |
| `$x = 0;` | [int](language.types.integer.md) | **`true`** | **`false`** | **`true`** | **`false`** |
| `$x = -1;` | [int](language.types.integer.md) | **`false`** | **`false`** | **`true`** | **`true`** |
| `$x = "1";` | [string](language.types.string.md) | **`false`** | **`false`** | **`true`** | **`true`** |
| `$x = "0";` | [string](language.types.string.md) | **`true`** | **`false`** | **`true`** | **`false`** |
| `$x = "-1";` | [string](language.types.string.md) | **`false`** | **`false`** | **`true`** | **`true`** |
| `$x = "php";` | [string](language.types.string.md) | **`false`** | **`false`** | **`true`** | **`true`** |
| `$x = "true";` | [string](language.types.string.md) | **`false`** | **`false`** | **`true`** | **`true`** |
| `$x = "false";` | [string](language.types.string.md) | **`false`** | **`false`** | **`true`** | **`true`** |

**Comparações aproximadas com `==`**

|  | **`true`** | **`false`** | `1` | `0` | `-1` | `"1"` | `"0"` | `"-1"` | **`null`** | `[]` | `"php"` | `""` |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| **`true`** | **`true`** | **`false`** | **`true`** | **`false`** | **`true`** | **`true`** | **`false`** | **`true`** | **`false`** | **`false`** | **`true`** | **`false`** |
| **`false`** | **`false`** | **`true`** | **`false`** | **`true`** | **`false`** | **`false`** | **`true`** | **`false`** | **`true`** | **`true`** | **`false`** | **`true`** |
| `1` | **`true`** | **`false`** | **`true`** | **`false`** | **`false`** | **`true`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** |
| `0` | **`false`** | **`true`** | **`false`** | **`true`** | **`false`** | **`false`** | **`true`** | **`false`** | **`true`** | **`false`** | **`false`**\* | **`false`**\* |
| `-1` | **`true`** | **`false`** | **`false`** | **`false`** | **`true`** | **`false`** | **`false`** | **`true`** | **`false`** | **`false`** | **`false`** | **`false`** |
| `"1"` | **`true`** | **`false`** | **`true`** | **`false`** | **`false`** | **`true`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** |
| `"0"` | **`false`** | **`true`** | **`false`** | **`true`** | **`false`** | **`false`** | **`true`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** |
| `"-1"` | **`true`** | **`false`** | **`false`** | **`false`** | **`true`** | **`false`** | **`false`** | **`true`** | **`false`** | **`false`** | **`false`** | **`false`** |
| **`null`** | **`false`** | **`true`** | **`false`** | **`true`** | **`false`** | **`false`** | **`false`** | **`false`** | **`true`** | **`true`** | **`false`** | **`true`** |
| `[]` | **`false`** | **`true`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`true`** | **`true`** | **`false`** | **`false`** |
| `"php"` | **`true`** | **`false`** | **`false`** | **`false`**\* | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`true`** | **`false`** |
| `""` | **`false`** | **`true`** | **`false`** | **`false`**\* | **`false`** | **`false`** | **`false`** | **`false`** | **`true`** | **`false`** | **`false`** | **`true`** |

\* **`true`** anteriormente ao PHP 8.0.0.

**Comparações exatas com `===`**

|  | **`true`** | **`false`** | `1` | `0` | `-1` | `"1"` | `"0"` | `"-1"` | **`null`** | `[]` | `"php"` | `""` |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| **`true`** | **`true`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** |
| **`false`** | **`false`** | **`true`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** |
| `1` | **`false`** | **`false`** | **`true`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** |
| `0` | **`false`** | **`false`** | **`false`** | **`true`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** |
| `-1` | **`false`** | **`false`** | **`false`** | **`false`** | **`true`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** |
| `"1"` | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`true`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** |
| `"0"` | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`true`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** |
| `"-1"` | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`true`** | **`false`** | **`false`** | **`false`** | **`false`** |
| **`null`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`true`** | **`false`** | **`false`** | **`false`** |
| `[]` | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`true`** | **`false`** | **`false`** |
| `"php"` | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`true`** | **`false`** |
| `""` | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`false`** | **`true`** |

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
