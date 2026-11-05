# Converte uma string de uma codificação de caracteres para outra

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-convert-encoding.php

---

# mb\_convert\_encoding

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

mb\_convert\_encoding — Converte uma string de uma codificação de caracteres para outra

### Descrição

function **mb\_convert\_encoding**([array](language.types.array.md)|[string](language.types.string.md) `$string`, [string](language.types.string.md) `$to_encoding`, [array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$from_encoding` = **`null`**): [array](language.types.array.md)|[string](language.types.string.md)|[false](language.types.singleton.md)

Converte `string` de `from_encoding`,
ou a codificação interna atual, para `to_encoding`.
Se `string` for um [array](language.types.array.md), todos os seus valores [string](language.types.string.md) serão
convertidos recursivamente.

### Parâmetros

`string`
:   A [string](language.types.string.md) ou [array](language.types.array.md) a ser convertida.

`to_encoding`
:   A codificação desejada para o resultado.

`from_encoding`
:   A codificação atual usada para interpretar `string`.
    Múltiplas codificações podem ser especificadas como um [array](language.types.array.md) ou uma lista separada por vírgulas,
    nesse caso, a codificação correta será detectada usando
    o mesmo algoritmo que [mb\_detect\_encoding()](function.mb-detect-encoding.md).

    Se `from_encoding` for omitida ou **`null`**, a
    configuração [mbstring.internal\_encoding](mbstring.configuration.md#ini.mbstring.internal-encoding)
    será usada se definida, caso contrário, a configuração [default\_charset](ini.core.md#ini.default-charset).

    Consulte [codificações suportadas](mbstring.supported-encodings.md)
    para os valores válidos de `to_encoding`
    e `from_encoding`.

### Valor Retornado

A [string](language.types.string.md) ou [array](language.types.array.md) codificada em caso de sucesso, ou **`false`** em caso de falha.

### Erros/Exceções

A partir do PHP 8.0.0, um [ValueError](class.valueerror.md) é lançado se o
valor de `to_encoding` ou
`from_encoding` for uma codificação inválida.
Antes do PHP 8.0.0, um **`E_WARNING`** era emitido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | **mb\_convert\_encoding()** não retornará mais as seguintes codificações não textuais: `"Base64"`, `"QPrint"`, `"UUencode"`, `"HTML entities"`, `"7 bit"` e `"8 bit"`. |
| 8.0.0 | **mb\_convert\_encoding()** agora lançará um [ValueError](class.valueerror.md) quando `to_encoding` receber uma codificação inválida. |
| 8.0.0 | **mb\_convert\_encoding()** agora lançará um [ValueError](class.valueerror.md) quando `from_encoding` receber uma codificação inválida. |
| 8.0.0 | `from_encoding` agora é anulável. |
| 7.2.0 | Esta função agora aceita um [array](language.types.array.md) como `string`. Anteriormente, apenas [string](language.types.string.md)s eram suportadas. |

### Examples

**Exemplo #1 Exemplo de **mb\_convert\_encoding()****

```
<?php
/* Converte a codificação interna para SJIS */
$str = mb_convert_encoding($str, "SJIS");

/* Converte EUC-JP para UTF-7 */
$str = mb_convert_encoding($str, "UTF-7", "EUC-JP");

/* Detecta automaticamente a codificação a partir de JIS, eucjp-win, sjis-win, e converte str para UCS-2LE */
$str = mb_convert_encoding($str, "UCS-2LE", "JIS, eucjp-win, sjis-win");

/* Se mbstring.language for "Japanese", "auto" é expandido para "ASCII,JIS,UTF-8,EUC-JP,SJIS" */
$str = mb_convert_encoding($str, "EUC-JP", "auto");
?>
```

### Veja também

- [mb\_detect\_order()](function.mb-detect-order.md) - Define ou obtém a ordem de detecção de codificação de caracteres
- [UConverter::transcode()](uconverter.transcode.md) - Converte uma string de uma codificação de caracteres para outra
- [iconv()](function.iconv.md) - Converte uma string de uma codificação de caracteres para outra

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
