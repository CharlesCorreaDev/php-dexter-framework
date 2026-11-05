# Decodifica vários campos de cabeçalho MIME de uma só vez

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.iconv-mime-decode-headers.php

---

# iconv\_mime\_decode\_headers

(PHP 5, PHP 7, PHP 8)

iconv\_mime\_decode\_headers — Decodifica vários campos de cabeçalho `MIME` de uma só vez

### Descrição

function **iconv\_mime\_decode\_headers**([string](language.types.string.md) `$headers`, [int](language.types.integer.md) `$mode` = 0, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**): [array](language.types.array.md)|[false](language.types.singleton.md)

Decodifica vários campos de cabeçalho `MIME` de uma só vez.

### Parâmetros

`headers`
:   Os cabeçalhos codificados como uma string.

`mode`
:   `mode` determina o comportamento no caso de
    **iconv\_mime\_decode\_headers()** encontrar um campo de
    cabeçalho `MIME` malformado. Você pode especificar qualquer
    combinação das seguintes máscaras de bits.

    **Máscaras de bits aceitáveis para **iconv\_mime\_decode\_headers()****

    | Valor | Constante | Descrição |
    | --- | --- | --- |
    | 1 | ICONV\_MIME\_DECODE\_STRICT | Se definido, o cabeçalho fornecido é decodificado em total conformidade com os padrões definidos em [» RFC2047](https://datatracker.ietf.org/doc/html/rfc2047). Esta opção está desativada por padrão porque há muitos agentes de usuário de e-mail quebrados que não seguem a especificação e não produzem cabeçalhos `MIME` corretos. |
    | 2 | ICONV\_MIME\_DECODE\_CONTINUE\_ON\_ERROR | Se definido, **iconv\_mime\_decode\_headers()** tenta ignorar quaisquer erros gramaticais e continuar a processar um determinado cabeçalho. |

`encoding`
:   O parâmetro opcional `encoding` especifica o
    conjunto de caracteres pelo qual representar o resultado. Se omitido ou **`null`**,
    [iconv.internal\_encoding](iconv.configuration.md)
    será usado.

### Valor Retornado

Retorna um array associativo que contém todo um conjunto de
campos de cabeçalho `MIME` especificados por
`headers` em caso de sucesso ou **`false`**
se ocorrer um erro durante a decodificação.

Cada chave do valor de retorno representa um nome de campo individual e
o elemento correspondente representa um valor de campo.
Se mais de um campo com o mesmo nome estiver presente,
**iconv\_mime\_decode\_headers()** os incorporará automaticamente
em um array indexado numericamente na ordem de ocorrência.
Observe que os nomes de cabeçalhos *são sensíveis a maiúsculas/minúsculas*.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `encoding` é anulável agora. |

### Examples

**Exemplo #1 Exemplo **iconv\_mime\_decode\_headers()****

```
<?php
$headers_string = <<<EOF
Subject: =?UTF-8?B?UHLDvGZ1bmcgUHLDvGZ1bmc=?=
To: example@example.com
Date: Thu, 1 Jan 1970 00:00:00 +0000
Message-Id: <example@example.com>
Received: from localhost (localhost [127.0.0.1]) by localhost
    with SMTP id example for <example@example.com>;
    Thu, 1 Jan 1970 00:00:00 +0000 (UTC)
    (envelope-from example-return-0000-example=example.com@example.com)
Received: (qmail 0 invoked by uid 65534); 1 Thu 2003 00:00:00 +0000

EOF;

$headers =  iconv_mime_decode_headers($headers_string, 0, "ISO-8859-1");
print_r($headers);
?>
```

O exemplo acima produzirá:

```
Array
(
    [Subject] => Prüfung Prüfung
    [To] => example@example.com
    [Date] => Thu, 1 Jan 1970 00:00:00 +0000
    [Message-Id] => <example@example.com>
    [Received] => Array
        (
            [0] => from localhost (localhost [127.0.0.1]) by localhost with SMTP id example for <example@example.com>; Thu, 1 Jan 1970 00:00:00 +0000 (UTC) (envelope-from example-return-0000-example=example.com@example.com)
            [1] => (qmail 0 invoked by uid 65534); 1 Thu 2003 00:00:00 +0000
        )

)
```

### Veja também

- [iconv\_mime\_decode()](function.iconv-mime-decode.md) - Decodifica um campo de cabeçalho MIME
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
