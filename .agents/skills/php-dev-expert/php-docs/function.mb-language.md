# Define/Obtém o idioma atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-language.php

---

# mb\_language

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

mb\_language — Define/Obtém o idioma atual

### Descrição

function **mb\_language**([?](language.types.null.md)[string](language.types.string.md) `$language` = **`null`**): [string](language.types.string.md)|[bool](language.types.boolean.md)

Define/Obtém o idioma atual.

### Parâmetros

`language`
:   Usado para codificar mensagens de e-mail.
    Os idiomas válidos estão listados na tabela a seguir.
    [mb\_send\_mail()](function.mb-send-mail.md) usa essa configuração para codificar e-mails.

    | Idioma | Charset | Codificação | Alias |
    | --- | --- | --- | --- |
    | German/de | ISO-8859-15 | Quoted-Printable | Deutsch |
    | English/en | ISO-8859-1 | Quoted-Printable |  |
    | Armenian/hy | ArmSCII-8 | Quoted-Printable |  |
    | Japanese/ja | ISO-2022-JP | BASE64 |  |
    | Korean/ko | ISO-2022-KR | BASE64 |  |
    | neutral | UTF-8 | BASE64 |  |
    | Russian/ru | KOI8-R | Quoted-Printable |  |
    | Turkish/tr | ISO-8859-9 | Quoted-Printable |  |
    | Ukrainian/ua | KOI8-U | Quoted-Printable |  |
    | uni | UTF-8 | BASE64 | universal |
    | Simplified Chinese/zh-cn | HZ | BASE64 |  |
    | Traditional Chinese/zh-tw | BIG-5 | BASE64 |  |

### Valor Retornado

Se `language` for definido e
`language` for válido, retorna
**`true`**. Caso contrário, retorna **`false`**.
Quando `language` é omitido ou **`null`**, retorna o nome do idioma
como uma [string](language.types.string.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `language` é anulável agora. |

### Veja também

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
