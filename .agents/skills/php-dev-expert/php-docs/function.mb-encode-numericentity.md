# Codificar caractere para referência numérica HTML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-encode-numericentity.php

---

# mb\_encode\_numericentity

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

mb\_encode\_numericentity — Codificar caractere para referência numérica HTML

### Descrição

function **mb\_encode\_numericentity**(  
    [string](language.types.string.md) `$string`,  
    [array](language.types.array.md) `$map`,  
    [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**,  
    [bool](language.types.boolean.md) `$hex` = **`false`**  
): [string](language.types.string.md)

Converte
códigos de caractere especificados em [string](language.types.string.md) `string`
de códigos de caractere para referência numérica de caractere HTML.

### Parâmetros

`string`
:   A [string](language.types.string.md) a ser codificada.

`map`
:   `map` é um array que especifica a área de código para
    converter.

`encoding`
:   O parâmetro `encoding`
    é a codificação de caracteres. Se for omitido ou **`null`**, o valor da codificação
    de caracteres interna será usado.

`hex`
:   Se a referência de entidade retornada deve estar em notação hexadecimal
    (caso contrário, estará em notação decimal).

### Valor Retornado

A [string](language.types.string.md) convertida.

### Erros/Exceções

Lança uma exceção [ValueError](class.valueerror.md) se
`map` não for uma lista de [int](language.types.integer.md)s.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | **mb\_encode\_numericentity()** agora lança uma exceção [ValueError](class.valueerror.md) se `map` não for uma lista de [int](language.types.integer.md)s. |
| 8.0.0 | O parâmetro `encoding` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo de `map`**

```
<?php

$convmap = array (
 int start_code1, int end_code1, int offset1, int mask1,
 int start_code2, int end_code2, int offset2, int mask2,
 ........
 int start_codeN, int end_codeN, int offsetN, int maskN );
// Especifique o valor Unicode para start_codeN e end_codeN
// Adicione offsetN ao valor e faça um 'AND' bit a bit com maskN, então
// converta o valor para referência numérica de string.
?>
```

**Exemplo #2 Exemplo de **mb\_encode\_numericentity()****

```
<?php
$str = "aAæÆあア𩸽";

/* Converte todos os caracteres UTF8 de até 4 bytes para referência numérica de caracteres HTML */
$convmap = [0, 0x1FFFFF, 0, 0x10FFFF];
var_dump(mb_encode_numericentity($str, $convmap, "utf8"));

/* Converte somente caracteres UTF8 de 2 bytes e de 4 bytes para referência numérica de caracteres HTML */
$convmap = [
    0x80, 0x7FF, 0, 0x10FFFF,
    0x10000, 0x1FFFFF, 0, 0x10FFFF,
];
var_dump(mb_encode_numericentity($str, $convmap, "utf8"));
?>
```

O exemplo acima produzirá:

```
string(46) "&#97;&#65;&#230;&#198;&#12354;&#12450;&#40509;"
string(28) "aA&#230;&#198;あア&#40509;"
```

### Veja também

- [mb\_decode\_numericentity()](function.mb-decode-numericentity.md) - Decodifica referência de string numérica HTML para caractere

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
