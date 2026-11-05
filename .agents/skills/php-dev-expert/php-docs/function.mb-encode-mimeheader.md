# Codificar string para cabeçalho MIME

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-encode-mimeheader.php

---

# mb\_encode\_mimeheader

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

mb\_encode\_mimeheader — Codificar string para cabeçalho MIME

### Descrição

function **mb\_encode\_mimeheader**(  
    [string](language.types.string.md) `$string`,  
    [?](language.types.null.md)[string](language.types.string.md) `$charset` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$transfer_encoding` = **`null`**,  
    [string](language.types.string.md) `$newline` = "\r\n",  
    [int](language.types.integer.md) `$indent` = 0  
): [string](language.types.string.md)

Codifica uma [string](language.types.string.md)
`string` pelo esquema de codificação de cabeçalho MIME.

### Parâmetros

`string`
:   A [string](language.types.string.md) a ser codificada.
    Sua codificação deve ser a mesma que [mb\_internal\_encoding()](function.mb-internal-encoding.md).

`charset`
:   `charset` especifica o nome do conjunto de caracteres
    no qual `string` está representada. O valor padrão
    é determinado pela configuração NLS atual (`mbstring.language`).

`transfer_encoding`
:   `transfer_encoding` especifica o esquema de codificação MIME.
    Deve ser ou `"B"` (Base64) ou
    `"Q"` (Quoted-Printable). Retrocede para
    `"B"` se não fornecido.

`newline`
:   `newline` especifica o marcador de EOL (end-of-line)
    com o qual **mb\_encode\_mimeheader()** realiza
    a quebra de linha (um termo [» RFC](https://datatracker.ietf.org/doc/html/rfc2822),
    o ato de quebrar uma linha mais longa que um certo comprimento em várias
    linhas. O comprimento é atualmente codificado como 74 caracteres).
    Retrocede para `"\r\n"` (CRLF) se não fornecido.

`indent`
:   Recuo da primeira linha (número de caracteres no cabeçalho
    antes de `string`).

### Valor Retornado

Uma versão convertida da [string](language.types.string.md) representada em ASCII.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Bytes `NUL` (0) não são mais excluídos quando codificados através da codificação Quoted-Printable, mas são codificados como `=00`. |
| 8.0.0 | `charset` e `transfer_encoding` agora são anuláveis. |

### Examples

**Exemplo #1 Exemplo de **mb\_encode\_mimeheader()****

```
<?php
$name = "太郎"; // kanji
$mbox = "kru";
$doma = "gtinn.mon";
$addr = '"' . addcslashes(mb_encode_mimeheader($name, "UTF-7", "Q"), '"') . '" <' . $mbox . "@" . $doma . ">";
echo $addr;
?>
```

O exemplo acima produzirá:

```
"=?UTF-7?Q?+WSqQzg-?=" <kru@gtinn.mon>
```

### Notas

> **Nota**:
>
> Esta função não é projetada para quebrar linhas em pontos de quebra
> de contexto de nível superior (limites de palavra, etc.).
> Esse comportamento pode poluir a string original com espaços inesperados.

### Veja também

- [mb\_decode\_mimeheader()](function.mb-decode-mimeheader.md) - Decodifica string no campo de cabeçalho MIME

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
