# Define ou obtém a ordem de detecção de codificação de caracteres

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-detect-order.php

---

# mb\_detect\_order

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

mb\_detect\_order — Define ou obtém a ordem de detecção de codificação de caracteres

### Descrição

function **mb\_detect\_order**([array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$encoding` = **`null`**): [array](language.types.array.md)|[bool](language.types.boolean.md)

Define a ordem automática de
detecção de codificação de caracteres para `encoding`.

### Parâmetros

`encoding`
:   `encoding` é um [array](language.types.array.md) ou
    lista de codificações de caracteres separadas por vírgula. Veja [codificações suportadas](mbstring.supported-encodings.md).

    Se `encoding` for omitido ou **`null`**, ele retorna
    a ordem atual de detecção de codificação de caracteres como um array.

    Essa configuração afeta [mb\_detect\_encoding()](function.mb-detect-encoding.md) e
    [mb\_send\_mail()](function.mb-send-mail.md).

    `mbstring` implementa atualmente os seguintes
    filtros de detecção de codificação. Se houver uma sequência de bytes inválida
    para as seguintes codificações, a detecção de codificação falhará.

    `UTF-8`, `UTF-7`,
    `ASCII`,
    `EUC-JP`,`SJIS`,
    `eucJP-win`, `SJIS-win`,
    `JIS`, `ISO-2022-JP`

    Para `ISO-8859-*`, `mbstring`
    sempre detecta como `ISO-8859-*`.

    Para `UTF-16`, `UTF-32`,
    `UCS2` e `UCS4`, a detecção
    de codificação sempre falhará.

### Valor Retornado

Ao definir a ordem de detecção de codificação, **`true`** é retornado em caso de sucesso ou **`false`** em caso de falha.

Ao obter a ordem de detecção de codificação, um array ordenado das codificações é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `encoding` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplos de **mb\_detect\_order()****

```
<?php
/* Define ordem de detecção por lista enumerada */
mb_detect_order("eucjp-win,sjis-win,UTF-8");

/* Define ordem de detecção por array */
$ary[] = "ASCII";
$ary[] = "JIS";
$ary[] = "EUC-JP";
mb_detect_order($ary);

/* Exibe ordem de detecção atual */
echo implode(", ", mb_detect_order());
?>
```

**Exemplo #2 Exemplo mostrando ordens de detecção inúteis**

```
; Sempre detecta como ISO-8859-1
detect_order = ISO-8859-1, UTF-8

; Sempre detecta como UTF-8, porque os valores ASCII/UTF-7 são
; válidos para UTF-8
detect_order = UTF-8, ASCII, UTF-7
```

### Veja também

- [mb\_internal\_encoding()](function.mb-internal-encoding.md) - Define/Obtém a codificação de caracteres interna
- [mb\_http\_input()](function.mb-http-input.md) - Detecta a codificação de caracteres de entrada HTTP
- [mb\_http\_output()](function.mb-http-output.md) - Define/Obtém a codificação de caracteres de saída HTTP
- [mb\_send\_mail()](function.mb-send-mail.md) - Envia email codificado

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
