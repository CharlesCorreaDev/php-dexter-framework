# Converte uma string ISO-8859-1 em UTF-8

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.utf8-encode.php

---

# utf8\_encode

(PHP 4, PHP 5, PHP 7, PHP 8)

utf8\_encode — Converte uma string ISO-8859-1 em UTF-8

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.2.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **utf8\_encode**([string](language.types.string.md) `$string`): [string](language.types.string.md)

Esta função converte a string `string` da codificação
`ISO-8859-1` para a `UTF-8`.

> **Nota**:
>
> Esta função não tenta descobrir a codificação da string fornecida,
> ela assume que esteja codificada como ISO-8859-1 (também conhecida como "Latin 1")
> e converte-a para UTF-8. Como toda sequência de bytes é uma string ISO-8859-1
> válida, isto nunca irá resultar em erro, mas não irá resultar em uma string útil
> se uma codificação diferente era a intenção.
>
> Muitas páginas da web que dizem usar a codificação `ISO-8859-1`
> na verdade usam a codificação similar `Windows-1252`,
> e os navegadores irão interpretar as páginas `ISO-8859-1` como
> `Windows-1252`. `Windows-1252` apresenta
> caracteres imprimíveis adicionais, como o símbolo do Euro
> (`€`) e aspas inglesas (`“`
> `”`), ao invés de certos caracteres de controle
> `ISO-8859-1`. Esta função não converterá esses caracteres
> `Windows-1252` corretamente. Use uma função diferente
> se a conversão de `Windows-1252` for requerida.

### Parâmetros

`string`
:   Uma string em ISO-8859-1.

### Valor Retornado

Retorna a conversão em UTF-8 da `string`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | Esta função foi descontinuada. |
| 7.2.0 | Esta função foi movida de extensão XML para o núcleo do PHP. Em versões anteriores, estava disponível somente se a extensão XML estivesse instalada. |

### Examples

**Exemplo #1 Exemplo básico**

```
<?php
// Converte a string 'Zoë' de ISO 8859-1 para UTF-8
$iso8859_1_string = "\x5A\x6F\xEB";
$utf8_string = utf8_encode($iso8859_1_string);
echo bin2hex($utf8_string), "\n";
?>
```

O exemplo acima produzirá:

```
5a6fc3ab
```

### Notas

> **Nota**:
> **Descontinuação e alternativas**  
>
> Esta função foi *descontinuada* a partir do PHP 8.2.0,
> e será removida em uma versão futura. Usos existentes devem ser verificados
> e substituídos com alternativas apropriadas.
>
> Funcionalidade similar pode ser obtida com [mb\_convert\_encoding()](function.mb-convert-encoding.md),
> que suporta ISO-8859-1 e muitas outras codificações de caracteres.
>
> ```
> <?php
> $iso8859_1_string = "\xEB"; // 'ë' (e com trema) em ISO-8859-1
> $utf8_string = mb_convert_encoding($iso8859_1_string, 'UTF-8', 'ISO-8859-1');
> echo bin2hex($utf8_string), "\n";
>
> $iso8859_7_string = "\xEB"; // a mesma string em ISO-8859-7 representa 'λ' (letra grega lambda minúscula)
> $utf8_string = mb_convert_encoding($iso8859_7_string, 'UTF-8', 'ISO-8859-7');
> echo bin2hex($utf8_string), "\n";
>
> $windows_1252_string = "\x80"; // '€' (símbolo do Euro) em Windows-1252, mas não em ISO-8859-1
> $utf8_string = mb_convert_encoding($windows_1252_string, 'UTF-8', 'Windows-1252');
> echo bin2hex($utf8_string), "\n";
> ?>
> ```
>
> O exemplo acima produzirá:
>
> ```
> c3ab
> cebb
> e282ac
> ```
>
> Outros exemplos que podem estar disponíveis dependendo das extensões instaladas são
> [UConverter::transcode()](uconverter.transcode.md) e [iconv()](function.iconv.md).
>
> Todos os exemplos a seguir dão o mesmo resultado:
>
> ```
> <?php
> $iso8859_1_string = "\x5A\x6F\xEB"; // 'Zoë' em ISO-8859-1
>
> $utf8_string = utf8_encode($iso8859_1_string);
> echo bin2hex($utf8_string), "\n";
>
> $utf8_string = mb_convert_encoding($iso8859_1_string, 'UTF-8', 'ISO-8859-1');
> echo bin2hex($utf8_string), "\n";
>
> $utf8_string = UConverter::transcode($iso8859_1_string, 'UTF8', 'ISO-8859-1');
> echo bin2hex($utf8_string), "\n";
>
> $utf8_string = iconv('ISO-8859-1', 'UTF-8', $iso8859_1_string);
> echo bin2hex($utf8_string), "\n";
> ?>
> ```
>
> O exemplo acima produzirá:
>
> ```
> 5a6fc3ab
> 5a6fc3ab
> 5a6fc3ab
> 5a6fc3ab
> ```

### Veja também

- [utf8\_decode()](function.utf8-decode.md) - Converte uma string de UTF-8 para ISO-8859-1, substituindo caracteres inválidos ou não
  representáveis
- [mb\_convert\_encoding()](function.mb-convert-encoding.md) - Converte uma string de uma codificação de caracteres para outra
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
