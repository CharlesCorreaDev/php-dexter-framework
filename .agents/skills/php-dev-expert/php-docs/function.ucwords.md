# Converte para maiúsculas o primeiro caractere de cada palavra

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ucwords.php

---

# ucwords

(PHP 4, PHP 5, PHP 7, PHP 8)

ucwords — Converte para maiúsculas o primeiro caractere de cada palavra

### Descrição

function **ucwords**([string](language.types.string.md) `$string`, [string](language.types.string.md) `$separators` = " \t\r\n\f\v"): [string](language.types.string.md)

Retorna uma string com o primeiro caractere de cada palavra em
`string` em maiúscula, se este caractere for uma letra ASCII
entre `"a"` (0x61) e `"z"`
(0x7a).

Nesta função, uma palavra é qualquer sequência de caracteres não listada
no parâmetro `separators`. Por padrão, os separadores são:
espaço, tab horizontal, retorno de carro, nova linha, form feed e tab vertical.

Para realizar uma conversão similar em strings multibyte, utilize
[mb\_convert\_case()](function.mb-convert-case.md) com a opção **`MB_CASE_TITLE`**.

### Parâmetros

`string`
:   A string de entrada.

`separators`
:   O parâmetro opcional `separators` contém os caracteres separadores das palavras.

### Valor Retornado

Retorna a string modificada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | A conversão de maiúsculas e minúsculas não depende mais da localidade definida com [setlocale()](function.setlocale.md). Somente caracteres ASCII serão convertidos. |

### Examples

**Exemplo #1 Exemplo de **ucwords()****

```
<?php
$foo = 'hello world!';
echo ucwords($foo), PHP_EOL;              // Hello World!

$bar = 'HELLO WORLD!';
echo ucwords($bar), PHP_EOL;              // HELLO WORLD!
echo ucwords(strtolower($bar)), PHP_EOL;  // Hello World!
?>
```

**Exemplo #2 Exemplo de **ucwords()** com delimitador**

```
<?php
$foo = 'hello|world!';
echo ucwords($foo), PHP_EOL;             // Hello|world!

echo ucwords($foo, "|"), PHP_EOL;        // Hello|World!
?>
```

**Exemplo #3 Exemplo de **ucwords()** com delimitadores adicionais**

```
<?php
$foo = "mike o'hara";
echo ucwords($foo), PHP_EOL;                 // Mike O'hara

echo ucwords($foo, " \t\r\n\f\v'"), PHP_EOL; // Mike O'Hara
?>
```

### Notas

> **Nota**:
>
> Esta função é
> compatível com dados binários.

### Veja também

- [strtoupper()](function.strtoupper.md) - Converte uma string em maiúsculas
- [strtolower()](function.strtolower.md) - Converte uma string para minúsculas
- [ucfirst()](function.ucfirst.md) - Transforma o primeiro caractere de uma string em maiúsculo
- [mb\_convert\_case()](function.mb-convert-case.md) - Realiza a conversão de caixa em uma string

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
