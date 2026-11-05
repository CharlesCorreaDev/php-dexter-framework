# Decodifica um campo de cabeçalho MIME

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.iconv-mime-decode.php

---

# iconv\_mime\_decode

(PHP 5, PHP 7, PHP 8)

iconv\_mime\_decode — Decodifica um campo de cabeçalho `MIME`

### Descrição

function **iconv\_mime\_decode**([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$mode` = 0, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Decodifica um campo de cabeçalho `MIME`.

### Parâmetros

`string`
:   O cabeçalho codificado, como uma string.

`mode`
:   `mode` determina o comportamento no caso de
    **iconv\_mime\_decode()** encontrar um campo de
    cabeçalho `MIME` malformado. Você pode especificar qualquer
    combinação das seguintes máscaras de bits.

    **Máscaras de bits aceitáveis para **iconv\_mime\_decode()****

    | Valor | Constante | Descrição |
    | --- | --- | --- |
    | 1 | ICONV\_MIME\_DECODE\_STRICT | Se definido, o cabeçalho fornecido é decodificado em total conformidade com os padrões definidos em [» RFC2047](https://datatracker.ietf.org/doc/html/rfc2047). Esta opção está desativada por padrão porque há muitos agentes de usuário de e-mail quebrados que não seguem a especificação e não produzem cabeçalhos `MIME` corretos. |
    | 2 | ICONV\_MIME\_DECODE\_CONTINUE\_ON\_ERROR | Se definido, [iconv\_mime\_decode\_headers()](function.iconv-mime-decode-headers.md) tenta ignorar quaisquer erros gramaticais e continuar a processar um determinado cabeçalho. |

`encoding`
:   O parâmetro opcional `encoding` especifica o
    conjunto de caracteres pelo qual representar o resultado. Se omitido ou **`null`**,
    [iconv.internal\_encoding](iconv.configuration.md)
    será usado.

### Valor Retornado

Retorna um campo `MIME` decodificado em caso de sucesso
ou **`false`** se ocorrer um erro durante a decodificação.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `encoding` é anulável agora. |

### Examples

**Exemplo #1 Exemplo **iconv\_mime\_decode()****

```
<?php
// Isto resulta em "Subject: Prüfung Prüfung"
echo iconv_mime_decode("Subject: =?UTF-8?B?UHLDvGZ1bmcgUHLDvGZ1bmc=?=",
                       0, "ISO-8859-1");
?>
```

### Veja também

- [iconv\_mime\_decode\_headers()](function.iconv-mime-decode-headers.md) - Decodifica vários campos de cabeçalho MIME de uma só vez
- [mb\_decode\_mimeheader()](function.mb-decode-mimeheader.md) - Decodifica string no campo de cabeçalho MIME
- [imap\_mime\_header\_decode()](function.imap-mime-header-decode.md) - Decodifica elementos do cabeçalho MIME
- [imap\_base64()](function.imap-base64.md) - Decodifica texto codificado em BASE64
- [imap\_qprint()](function.imap-qprint.md) - Converte uma string imprimível escapada em uma string de 8 bits

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
