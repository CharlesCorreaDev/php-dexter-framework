# Converte uma string de uma codificação de caracteres para outra

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uconverter.transcode.php

---

# UConverter::transcode

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

UConverter::transcode — Converte uma string de uma codificação de caracteres para outra

### Descrição

public static function **UConverter::transcode**(  
    [string](language.types.string.md) `$str`,  
    [string](language.types.string.md) `$toEncoding`,  
    [string](language.types.string.md) `$fromEncoding`,  
    [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**  
): [string](language.types.string.md)|[false](language.types.singleton.md)

Converte `str` de `fromEncoding` para `toEncoding`.

### Parâmetros

`str`
:   A [string](language.types.string.md) a ser convertida.

`toEncoding`
:   A codificação desejada do resultado.

`fromEncoding`
:   A codificação atual usada para interpretar `str`.

`options`
:   Um [array](language.types.array.md) opcional, que pode conter as seguintes chaves:

    - `'to_subst'` - o caractere de substituição a ser usado
      no lugar de qualquer caractere de `str` que não possa
      ser codificado com `toEncoding`. Se especificado, deve
      representar um único caractere na codificação de destino.

### Valor Retornado

Retorna a string convertida ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Convertendo de UTF-8 para UTF-16 e vice-versa**

```
<?php
$utf8_string = "\x5A\x6F\xC3\xAB"; // 'Zoë' em UTF-8
$utf16_string = UConverter::transcode($utf8_string, 'UTF-16BE', 'UTF-8');
echo bin2hex($utf16_string), "\n";

$new_utf8_string = UConverter::transcode($utf16_string, 'UTF-8', 'UTF-16BE');
echo bin2hex($new_utf8_string), "\n";
?>
```

O exemplo acima produzirá:

```
005a006f00eb
5a6fc3ab
```

**Exemplo #2 Caracteres inválidos na entrada**

Se a string de entrada contiver uma sequência de bytes que não seja válida na
codificação especificada por `fromEncoding`, eles são
substituídos pelo código do ponto em Unicode U+FFFD (Caractere de Substituição) antes da
conversão para `toEncoding`.

```
<?php
$invalid_utf8_string = "\xC3"; // sequência UTF-8 multi-bytes incompleta
$utf16_string = UConverter::transcode($invalid_utf8_string, 'UTF-16BE', 'UTF-8');
echo bin2hex($utf16_string), "\n";
?>
```

O exemplo acima produzirá:

```
fffd
```

**Exemplo #3 Caracteres que não podem ser codificados**

Se a string de entrada contiver caracteres que não possam ser representados
na codificação especificada por `toEncoding`, eles são substituídos por um
caractere simples. O caractere padrão a ser usado depende da codificação e
pode ser controlado usando a opção `'to_subst'`.

```
<?php
$utf8_string = "\xE2\x82\xAC"; // € (sinal de Euro) não existe na ISO 8859-1

// Substituição padrão na ISO 8859-1 é "\x1A" (Substituto)
$iso8859_1_string = UConverter::transcode($utf8_string, 'ISO-8859-1', 'UTF-8');
echo bin2hex($iso8859_1_string), "\n";

// Especifica uma substituição por '?' ("\x3F") alternativamente
$iso8859_1_string = UConverter::transcode(
    $utf8_string, 'ISO-8859-1', 'UTF-8', ['to_subst' => '?']
);
echo bin2hex($iso8859_1_string), "\n";

// Como a ISO 8859-1 não consegue mapear U+FFFD, a entrada inválida também é substituída por to_subst
$invalid_utf8_string = "\xC3"; // sequência UTF-8 multi-bytes incompleta
$iso8859_1_string = UConverter::transcode(
    $invalid_utf8_string, 'ISO-8859-1', 'UTF-8', ['to_subst' => '?']
);
echo bin2hex($iso8859_1_string), "\n";
?>
```

O exemplo acima produzirá:

```
1a
3f
3f
```

### Veja também

- [mb\_convert\_encoding()](function.mb-convert-encoding.md) - Converte uma string de uma codificação de caracteres para outra
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
