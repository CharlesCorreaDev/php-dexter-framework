# Detectar a codificação de caracteres

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-detect-encoding.php

---

# mb\_detect\_encoding

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

mb\_detect\_encoding — Detectar a codificação de caracteres

### Descrição

function **mb\_detect\_encoding**([string](language.types.string.md) `$string`, [array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$encodings` = **`null`**, [bool](language.types.boolean.md) `$strict` = **`false`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Detecta a codificação de caracteres mais provável para a [string](language.types.string.md) `string`
a partir de uma lista de candidatos.

A partir do PHP 8.1, esta função usa heurística para detectar qual das codificações de texto válidas na lista
especificada tem maior probabilidade de estar correta e pode não estar na ordem das codificações fornecidas no parâmetro `encodings`.

A detecção automática da codificação de caracteres pretendida nunca pode ser totalmente confiável;
sem informações adicionais, é semelhante a decodificar uma string criptografada
sem a chave. É sempre preferível usar uma indicação de codificação de caracteres
armazenada ou transmitida com os dados, como um cabeçalho HTTP "Content-Type".

Esta função é mais útil com codificações multibyte, onde nem todas as sequências de
bytes formam uma string válida. Se a string de entrada contiver tal sequência,
essa codificação será rejeitada.

**Aviso**

# O resultado não é preciso

O nome dessa função é enganoso: ela realiza "adivinhação" em vez de "detecção".

Os palpites estão longe de ser precisos e, portanto, esta função não pode ser usada para
detectar com precisão a codificação correta de caracteres.

### Parâmetros

`string`
:   A [string](language.types.string.md) sendo inspecionada.

`encodings`
:   Uma lista de codificações de caracteres para tentar. A lista pode ser especificada como
    um array de strings ou uma única string separada por vírgulas.

    Se `encodings` for omitido ou **`null`**,
    a detect\_order atual (definida com a opção de configuração
    [mbstring.detect\_order](mbstring.configuration.md#ini.mbstring.detect-order),
    ou função [mb\_detect\_order()](function.mb-detect-order.md)) será usada.

`strict`
:   Controla o comportamento quando `string`
    não é válida em nenhuma das `encodings` listadas.
    Se `strict` for definido como **`false`**, a codificação mais próxima
    correspondente será retornada; se `strict` for definido como **`true`**,
    **`false`** será retornado.

    O valor padrão para `strict` pode ser definido
    com a opção de configuração
    [mbstring.strict\_detection](mbstring.configuration.md#ini.mbstring.strict-detection).

### Valor Retornado

A codificação de caracteres detectada ou **`false`** se a string não for válida
em nenhuma das codificações listadas.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | **mb\_detect\_encoding()** não retornará mais as seguintes codificações não textuais: `"Base64"`, `"QPrint"`, `"UUencode"`, `"HTML entities"`, `"7 bit"` e `"8 bit"`. |

### Examples

**Exemplo #1 Exemplo de **mb\_detect\_encoding()****

```
<?php

$str = "\x95\xB6\x8E\x9A\x83\x52\x81\x5B\x83\x68";

// Detecta codificação de caracteres com a ordem de detecção atual
var_dump(mb_detect_encoding($str));

// "auto" é expandido de acordo com mbstring.language
var_dump(mb_detect_encoding($str, "auto"));

// Especifica parâmetro "encodings" com lista separada por vírgula
var_dump(mb_detect_encoding($str, "JIS, eucjp-win, sjis-win"));

// Usa array para especificar parâmetro "encodings"
$encodings = [
  "ASCII",
  "JIS",
  "EUC-JP"
];
var_dump(mb_detect_encoding($str, $encodings));
?>
```

O exemplo acima produzirá:

```
string(5) "ASCII"
string(5) "ASCII"
string(8) "SJIS-win"
string(5) "ASCII"
```

**Exemplo #2 Efeito do parâmetro `strict`**

```
<?php
// 'áéóú' codificado em ISO-8859-1
$str = "\xE1\xE9\xF3\xFA";

// A string não é válida em ASCII ou UTF-8, mas UTF-8 é considerado uma correspondência mais próxima
var_dump(mb_detect_encoding($str, ['ASCII', 'UTF-8'], false));
var_dump(mb_detect_encoding($str, ['ASCII', 'UTF-8'], true));

// Se uma codificação válida for encontrada, o parâmetro strict não muda o resultado
var_dump(mb_detect_encoding($str, ['ASCII', 'UTF-8', 'ISO-8859-1'], false));
var_dump(mb_detect_encoding($str, ['ASCII', 'UTF-8', 'ISO-8859-1'], true));
?>
```

O exemplo acima produzirá:

```
string(5) "UTF-8"
bool(false)
string(10) "ISO-8859-1"
string(10) "ISO-8859-1"
```

Em alguns casos, a mesma sequência de bytes pode formar uma string válida em várias
codificações de caracteres, e é impossível saber qual interpretação foi
pretendida. Por exemplo, entre muitos outros, a sequência de bytes "\xC4\xA2" poderia ser:

- "Ä¢" (U+00C4 LATIN CAPITAL LETTER A WITH DIAERESIS seguido por U+00A2 CENT SIGN)
  codificado em qualquer um de of ISO-8859-1, ISO-8859-15, ou Windows-1252
- "ФЂ" (U+0424 CYRILLIC CAPITAL LETTER EF seguido por U+0402 CYRILLIC CAPITAL LETTER
  DJE) codificado em ISO-8859-5
- "Ģ" (U+0122 LATIN CAPITAL LETTER G WITH CEDILLA) codificado em UTF-8

**Exemplo #3 Efeito da ordem quando várias codificações correspondem**

```
<?php
$str = "\xC4\xA2";

// A string é válida em todas as três codificações, mas a primeira listada pode nem sempre ser a retornada
var_dump(mb_detect_encoding($str, ['UTF-8']));
var_dump(mb_detect_encoding($str, ['UTF-8', 'ISO-8859-1', 'ISO-8859-5'])); // a partir do PHP 8.1, retorna ISO-8859-1 em vez de UTF-8
var_dump(mb_detect_encoding($str, ['ISO-8859-1', 'ISO-8859-5', 'UTF-8']));
var_dump(mb_detect_encoding($str, ['ISO-8859-5', 'UTF-8', 'ISO-8859-1']));
?>
```

O exemplo acima produzirá:

```
string(5) "UTF-8"
string(10) "ISO-8859-1"
string(10) "ISO-8859-1"
string(10) "ISO-8859-5"
```

### Veja também

- [mb\_detect\_order()](function.mb-detect-order.md) - Define ou obtém a ordem de detecção de codificação de caracteres

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
