# Compõe um campo de cabeçalho MIME

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.iconv-mime-encode.php

---

# iconv\_mime\_encode

(PHP 5, PHP 7, PHP 8)

iconv\_mime\_encode — Compõe um campo de cabeçalho `MIME`

### Descrição

function **iconv\_mime\_encode**([string](language.types.string.md) `$field_name`, [string](language.types.string.md) `$field_value`, [array](language.types.array.md) `$options` = []): [string](language.types.string.md)|[false](language.types.singleton.md)

Compõe e retorna uma string que representa um campo de cabeçalho `MIME` válido,
semelhante ao seguinte:

```
Subject: =?ISO-8859-1?Q?Pr=FCfung_f=FCr?= Entwerfen von einer MIME kopfzeile
```

No exemplo acima, "Subject" é o nome do campo e a parte que
começa com "=?ISO-8859-1?..." é o valor do campo.

### Parâmetros

`field_name`
:   O nome do campo.

`field_value`
:   O valor do campo.

`options`
:   Você pode controlar o comportamento de **iconv\_mime\_encode()**
    especificando um array associativo que contém itens de configuração
    para as `options` opcionais do terceiro parâmetro.
    Os itens suportados por **iconv\_mime\_encode()** estão
    listados abaixo. Observe que os nomes dos itens são tratados com distinção entre maiúsculas e minúsculas.

    **Itens de configuração suportados por **iconv\_mime\_encode()****

    | Item | Tipo | Descrição | Valor padrão | Exemplo |
    | --- | --- | --- | --- | --- |
    | scheme | [string](language.types.string.md) | Especifica o método para codificar um valor de campo. O valor deste item pode ser "B" ou "Q", onde "B" significa esquema de codificação `base64` e "Q" significa esquema de codificação `quoted-printable`. | B | B |
    | input-charset | [string](language.types.string.md) | Especifica o conjunto de caracteres no qual o primeiro parâmetro `field_name` e o segundo parâmetro `field_value` são apresentados. Se não for fornecido, **iconv\_mime\_encode()** assume que esses parâmetros são apresentados a ele na configuração ini [iconv.internal\_encoding](iconv.configuration.md). | [iconv.internal\_encoding](iconv.configuration.md) | ISO-8859-1 |
    | output-charset | [string](language.types.string.md) | Especifica o conjunto de caracteres a ser usado para compor o cabeçalho `MIME`. | [iconv.internal\_encoding](iconv.configuration.md) | UTF-8 |
    | line-length | [int](language.types.integer.md) | Especifica o comprimento máximo das linhas de cabeçalho. O cabeçalho resultante é "dobrado" em um conjunto de múltiplas linhas caso o campo do cabeçalho resultante seja maior que o valor deste parâmetro, de acordo com [» RFC2822 - Internet Message Format](https://datatracker.ietf.org/doc/html/rfc2822). Se não for fornecido, o comprimento será limitado a 76 caracteres. | 76 | 996 |
    | line-break-chars | [string](language.types.string.md) | Especifica a sequência de caracteres a ser anexada a cada linha como um sinal de fim de linha quando a "dobragem" é executada em um campo de cabeçalho longo. Se não fornecido, o padrão é "\r\n" (`CR` `LF`). Observe que esse parâmetro é sempre tratado como uma string ASCII, independentemente do valor de `input-charset`. | \r\n | \n |

### Valor Retornado

Retorna um campo `MIME` codificado em caso de sucesso
ou **`false`** se ocorrer um erro durante a codificação.

### Examples

**Exemplo #1 Exemplo **iconv\_mime\_encode()****

```
<?php
$preferences = array(
    "input-charset" => "ISO-8859-1",
    "output-charset" => "UTF-8",
    "line-length" => 76,
    "line-break-chars" => "\n"
);
$preferences["scheme"] = "Q";
// Isto resulta em "Subject: =?UTF-8?Q?Pr=C3=BCfung=20Pr=C3=BCfung?="
echo iconv_mime_encode("Subject", "Prüfung Prüfung", $preferences);

$preferences["scheme"] = "B";
// Isto resulta em "Subject: =?UTF-8?B?UHLDvGZ1bmcgUHLDvGZ1bmc=?="
echo iconv_mime_encode("Subject", "Prüfung Prüfung", $preferences);
?>
```

### Veja também

- [imap\_binary()](function.imap-binary.md) - Converte uma string de 8 bits em uma string base64
- [mb\_encode\_mimeheader()](function.mb-encode-mimeheader.md) - Codificar string para cabeçalho MIME
- [imap\_8bit()](function.imap-8bit.md) - Converte uma string de 8 bits em uma string imprimível escapada
- [quoted\_printable\_encode()](function.quoted-printable-encode.md) - Converte uma string de 8 bits para uma string Quoted-Printable

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
