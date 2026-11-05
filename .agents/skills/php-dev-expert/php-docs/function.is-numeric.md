# Verifica se uma variável é um número ou uma string numérica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.is-numeric.php

---

# is\_numeric

(PHP 4, PHP 5, PHP 7, PHP 8)

is\_numeric — 
Verifica se uma variável é um número ou uma string numérica

### Descrição

function **is\_numeric**([mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

Determina se a variável fornecida é um número ou uma
[string numérica](language.types.numeric-strings.md).

### Parâmetros

`value`
:   A variável a ser avaliada.

### Valor Retornado

Retorna **`true`** se `value` for um número ou uma
[string numérica](language.types.numeric-strings.md),
**`false`** caso contrário.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | String numéricas terminando com espaços (`"42 "`) agora retornam **`true`**. Anteriormente, **`false`** era retornado. |

### Examples

**Exemplo #1 Exemplos de **is\_numeric()****

```
<?php
$tests = array(
    "42",
    1337,
    0x539,
    02471,
    0b10100111001,
    1337e0,
    "0x539",
    "02471",
    "0b10100111001",
    "1337e0",
    "not numeric",
    array(),
    9.1,
    null,
    '',
);

foreach ($tests as $element) {
    if (is_numeric($element)) {
        echo var_export($element, true) . " é numérico", PHP_EOL;
    } else {
        echo var_export($element, true) . " NÃO é numérico", PHP_EOL;
    }
}
?>
```

O exemplo acima produzirá:

```
'42' é numérico
1337 é numérico
1337 é numérico
1337 é numérico
1337 é numérico
1337.0 é numérico
'0x539' NÃO é numérico
'02471' é numérico
'0b10100111001' NÃO é numérico
'1337e0' é numérico
'not numeric' NÃO é numérico
array (
) NÃO é numérico
9.1 é numérico
NULL NÃO é numérico
'' NÃO é numérico
```

**Exemplo #2 **is\_numeric()** com espaço em branco**

```
<?php
$tests = [
    " 42",
    "42 ",
    "\u{A0}9001", // caractere de espaço sem quebra
    "9001\u{A0}", // caractere de espaço sem quebra
];

foreach ($tests as $element) {
    if (is_numeric($element)) {
        echo var_export($element, true) . " é numérico", PHP_EOL;
    } else {
        echo var_export($element, true) . " NÃO é numérico", PHP_EOL;
    }
}
?>
```

Saída do exemplo acima no PHP 8:

```
' 42' é numérico
'42 ' é numérico
' 9001' NÃO é numérico
'9001 ' NÃO é numérico
```

Saída do exemplo acima no PHP 7:

```
' 42' é numérico
'42 ' NÃO é numérico
' 9001' NÃO é numérico
'9001 ' NÃO é numérico
```

### Veja também

- [Strings numéricas](language.types.numeric-strings.md)
- [ctype\_digit()](function.ctype-digit.md) - Verifica se os caracteres são numéricos
- [is\_bool()](function.is-bool.md) - Verifica se a variável é um booleano
- [is\_null()](function.is-null.md) - Verifica se uma variável é null
- [is\_float()](function.is-float.md) - Verifica se a variável é do tipo float
- [is\_int()](function.is-int.md) - Informa se o tipo de uma variável é um inteiro
- [is\_string()](function.is-string.md) - Verifica se o tipo de uma variável é string
- [is\_object()](function.is-object.md) - Verifica se uma variável é um objeto
- [is\_array()](function.is-array.md) - Verifica se a variável é um array
- [filter\_var()](function.filter-var.md) - Filtra uma variável com um filtro especificado

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
