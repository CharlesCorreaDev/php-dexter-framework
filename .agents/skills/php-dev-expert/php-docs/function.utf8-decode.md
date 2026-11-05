# Converte uma string de UTF-8 para ISO-8859-1, substituindo caracteres inválidos ou não
   representáveis

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.utf8-decode.php

---

# utf8\_decode

(PHP 4, PHP 5, PHP 7, PHP 8)

utf8\_decode — 
Converte uma string de UTF-8 para ISO-8859-1, substituindo caracteres inválidos ou não
representáveis

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.2.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **utf8\_decode**([string](language.types.string.md) `$string`): [string](language.types.string.md)

Esta função converte a string `string` da codificação
`UTF-8` para a `ISO-8859-1`. Bytes
na string que não sejam válidos em `UTF-8`, e caracteres
`UTF-8` que não existam em
`ISO-8859-1` (isto é, pontos de código acima de
`U+00FF`) são substituídos por `?`.

> **Nota**:
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
:   Uma string em UTF-8.

### Valor Retornado

Retorna a conversão em ISO-8859-1 da `string`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | Esta função foi descontinuada. |
| 7.2.0 | Esta função foi movida de extensão XML para o núcleo do PHP. Em versões anteriores, estava disponível somente se a extensão XML estivesse instalada. |

### Examples

**Exemplo #1 Exemplos básicos**

```
<?php
// Converte a string 'Zoë' de UTF-8 para ISO 8859-1
$utf8_string = "\x5A\x6F\xC3\xAB";
$iso8859_1_string = utf8_decode($utf8_string);
echo bin2hex($iso8859_1_string), "\n";

// Sequências inválidas em UTF-8 são substituídas por '?'
$invalid_utf8_string = "\xC3";
$iso8859_1_string = utf8_decode($invalid_utf8_string);
var_dump($iso8859_1_string);

// Caracteres que não existem em ISO 8859-1, tal como
// '€' (símbolo do Euro) também são substituídas por '?'
$utf8_string = "\xE2\x82\xAC";
$iso8859_1_string = utf8_decode($utf8_string);
var_dump($iso8859_1_string);
?>
```

O exemplo acima produzirá:

```
5a6feb
string(1) "?"
string(1) "?"
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
> $utf8_string = "\xC3\xAB"; // 'ë' (e com trema) em UTF-8
> $iso8859_1_string = mb_convert_encoding($utf8_string, 'ISO-8859-1', 'UTF-8');
> echo bin2hex($iso8859_1_string), "\n";
>
> $utf8_string = "\xCE\xBB"; // 'λ' (letra grega lambda minúscula) em UTF-8
> $iso8859_7_string = mb_convert_encoding($utf8_string, 'ISO-8859-7', 'UTF-8');
> echo bin2hex($iso8859_7_string), "\n";
>
> $utf8_string = "\xE2\x82\xAC"; // '€' (símbolo do Euro) em UTF-8 (ausente na ISO-8859-1)
> $windows_1252_string = mb_convert_encoding($utf8_string, 'Windows-1252', 'UTF-8');
> echo bin2hex($windows_1252_string), "\n";
> ?>
> ```
>
> O exemplo acima produzirá:
>
> ```
> eb
> eb
> 80
> ```
>
> Outros exemplos que podem estar disponíveis dependendo das extensões instaladas são
> [UConverter::transcode()](uconverter.transcode.md) e [iconv()](function.iconv.md).
>
> Todos os exemplos a seguir dão o mesmo resultado:
>
> ```
> <?php
> $utf8_string = "\x5A\x6F\xC3\xAB"; // 'Zoë' em UTF-8
> $iso8859_1_string = utf8_decode($utf8_string);
> echo bin2hex($iso8859_1_string), "\n";
>
> $iso8859_1_string = mb_convert_encoding($utf8_string, 'ISO-8859-1', 'UTF-8');
> echo bin2hex($iso8859_1_string), "\n";
>
> $iso8859_1_string = iconv('UTF-8', 'ISO-8859-1', $utf8_string);
> echo bin2hex($iso8859_1_string), "\n";
>
> $iso8859_1_string = UConverter::transcode($utf8_string, 'ISO-8859-1', 'UTF8');
> echo bin2hex($iso8859_1_string), "\n";
> ?>
> ```
>
> O exemplo acima produzirá:
>
> ```
> 5a6feb
> 5a6feb
> 5a6feb
> 5a6feb
> ```
>
> Especificar `'?'` como a opção `'to_subst'`
> no método [UConverter::transcode()](uconverter.transcode.md) dá o mesmo resultado que
> **utf8\_decode()** para strings inválidas ou que não possam
> ser representadas em ISO 8859-1.
>
> ```
> <?php
> $utf8_string = "\xE2\x82\xAC"; // € (símbolo do Euro) não existe na ISO 8859-1
> $iso8859_1_string = UConverter::transcode(
>     $utf8_string, 'ISO-8859-1', 'UTF-8', ['to_subst' => '?']
> );
> var_dump($iso8859_1_string);
> ?>
> ```
>
> O exemplo acima produzirá:
>
> ```
> string(1) "?"
> ```

### Veja também

- [utf8\_encode()](function.utf8-encode.md) - Converte uma string ISO-8859-1 em UTF-8
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
