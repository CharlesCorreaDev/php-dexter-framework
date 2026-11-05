# Cria uma mensagem MIME com base nas seções de envelope e corpo fornecidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-mail-compose.php

---

# imap\_mail\_compose

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_mail\_compose — Cria uma mensagem MIME com base nas seções de envelope e corpo fornecidas

### Descrição

function **imap\_mail\_compose**([array](language.types.array.md) `$envelope`, [array](language.types.array.md) `$bodies`): [string](language.types.string.md)|[false](language.types.singleton.md)

Cria uma mensagem MIME com base nas seções `envelope`
e `bodies` fornecidas.

### Parâmetros

`envelope`
:   Um array associativo de campos de cabeçalho. As chaves válidas são: `"remail"`,
    `"return_path"`, `"date"`, `"from"`, `"reply_to"`, `"in_reply_to"`, `"subject"`,
    `"to"`, `"cc"`, `"bcc"` e `"message_id"`, que definem os respectivos cabeçalhos de mensagem para a [string](language.types.string.md) fornecida.
    Para definir cabeçalhos adicionais, a chave `"custom_headers"` é suportada, que espera
    um array desses cabeçalhos, por exemplo, `["User-Agent: My Mail Client"]`.

`bodies`
:   Um array indexado de corpos. O primeiro corpo é o corpo principal da mensagem;
    somente se ele tiver um tipo de **`TYPEMULTIPART`**, corpos adicionais
    são processados; esses corpos constituem os corpos das partes.

    **Body Array Structure**

    | Chave | Tipo | Descrição |
    | --- | --- | --- |
    | `type` | [int](language.types.integer.md) | O tipo MIME. Uma das constantes **`TYPETEXT`** (default), **`TYPEMULTIPART`**, **`TYPEMESSAGE`**, **`TYPEAPPLICATION`**, **`TYPEAUDIO`**, **`TYPEIMAGE`**, **`TYPEMODEL`** ou **`TYPEOTHER`**. |
    | `encoding` | [int](language.types.integer.md) | O `Content-Transfer-Encoding`. Uma das constantes **`ENC7BIT`** (padrão), **`ENC8BIT`**, **`ENCBINARY`**, **`ENCBASE64`**, **`ENCQUOTEDPRINTABLE`** ou **`ENCOTHER`**. |
    | `charset` | [string](language.types.string.md) | O parâmetro de conjunto de caracteres do tipo MIME. |
    | `type.parameters` | [array](language.types.array.md) | Um [array](language.types.array.md) associativo de nomes de parâmetros `Content-Type` e seus valores. |
    | `subtype` | [string](language.types.string.md) | O subtipo MIME, por exemplo, `'jpeg'` para **`TYPEIMAGE`**. |
    | `id` | [string](language.types.string.md) | O `Content-ID`. |
    | `description` | [string](language.types.string.md) | O `Content-Description`. |
    | `disposition.type` | [string](language.types.string.md) | O `Content-Disposition`, por exemplo, `'attachment'`. |
    | `disposition` | [array](language.types.array.md) | Um [array](language.types.array.md) associativo de nomes e valores de parâmetros `Content-Disposition`. |
    | `contents.data` | [string](language.types.string.md) | A carga útil. |
    | `lines` | [int](language.types.integer.md) | O tamanho da carga útil em linhas. |
    | `bytes` | [int](language.types.integer.md) | O tamanho da carga útil em bytes. |
    | `md5` | [string](language.types.string.md) | A soma de verificação MD5 da carga útil. |

### Valor Retornado

Retorna a mensagem MIME como [string](language.types.string.md), ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **imap\_mail\_compose()****

```
<?php

$envelope["from"]= "joe@example.com";
$envelope["to"]  = "foo@example.com";
$envelope["cc"]  = "bar@example.com";

$part1["type"] = TYPEMULTIPART;
$part1["subtype"] = "mixed";

$filename = "/tmp/imap.c.gz";
$fp = fopen($filename, "r");
$contents = fread($fp, filesize($filename));
fclose($fp);

$part2["type"] = TYPEAPPLICATION;
$part2["encoding"] = ENCBINARY;
$part2["subtype"] = "octet-stream";
$part2["description"] = basename($filename);
$part2["contents.data"] = $contents;

$part3["type"] = TYPETEXT;
$part3["subtype"] = "plain";
$part3["description"] = "description3";
$part3["contents.data"] = "contents.data3\n\n\n\t";

$body[1] = $part1;
$body[2] = $part2;
$body[3] = $part3;

echo nl2br(imap_mail_compose($envelope, $body));

?>
```

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
