# strstr insensível a maiúsculas/minúsculas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stristr.php

---

# stristr

(PHP 4, PHP 5, PHP 7, PHP 8)

stristr — [strstr()](function.strstr.md) insensível a maiúsculas/minúsculas

### Descrição

function **stristr**([string](language.types.string.md) `$haystack`, [string](language.types.string.md) `$needle`, [bool](language.types.boolean.md) `$before_needle` = **`false`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna todo o `haystack` iniciando a partir de (e incluindo) a primeira
ocorrência de `needle` até o final.

### Parâmetros

`haystack`
:   A string onde será feita a pesquisa.

`needle`
:   A string que está sendo procurada.

    Antes do PHP 8.0.0, se `needle` não for uma string, ela será convertida
    para um número inteiro e aplicada como o valor ordinal de um caractere.
    Este comportamento foi descontinuado a partir do PHP 7.3.0 e depender dele é altamente
    desaconselhado. Dependendo do comportamento pretendido, o parâmetro
    `needle` deve ser explicitamente convertido em string
    ou uma chamada explícita para [chr()](function.chr.md) deve ser realizada.

`before_needle`
:   Se igual a **`true`**, **stristr()**
    retorna a parte de `haystack` antes da
    primeira ocorrência de `needle` (excluindo-o).

`needle` e `haystack`
são examinados de maneira insensível a maiúsculas/minúsculas.

### Valor Retornado

Retorna a substring correspondente. Se `needle` não for
encontrada, retorna **`false`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | A redução de todas as letras a maiúsculas ou minúsculas não depende mais da localidade definida com [setlocale()](function.setlocale.md). Somente a redução de todas as letras ASCII a maiúsculas ou minúsculas será feita. Os bytes não ASCII serão comparados por seu valor de byte. |
| 8.0.0 | O parâmetro `needle` agora aceita uma string vazia. |
| 8.0.0 | Passar um [int](language.types.integer.md) em `needle` não é mais suportado. |
| 7.3.0 | Passar um [int](language.types.integer.md) em `needle` foi descontinuado. |

### Examples

**Exemplo #1 Exemplo de **stristr()****

```
<?php
  $email = 'USER@EXAMPLE.com';
  echo stristr($email, 'e'), PHP_EOL; // mostra ER@EXAMPLE.com
  echo stristr($email, 'e', true), PHP_EOL; // mostra US
?>
```

**Exemplo #2 Testando se uma string é encontrada ou não**

```
<?php
  $string = 'Olá Mundo!';
  if (stristr($string, 'Terra') === FALSE) {
    echo '"Terra" não encontrado na string';
  }
// mostra: "Terra" não encontrado na string
?>
```

### Notas

> **Nota**:
>
> Esta função é
> compatível com dados binários.

### Veja também

- [strstr()](function.strstr.md) - Encontra a primeira ocorrência de uma string
- [strrchr()](function.strrchr.md) - Encontra a última ocorrência de um caractere em uma string
- [stripos()](function.stripos.md) - Encontra a posição da primeira ocorrência de uma substring em uma string, de forma insensível a maiúsculas/minúsculas
- [strpbrk()](function.strpbrk.md) - Procura na string por um dos caracteres de um conjunto
- [preg\_match()](function.preg-match.md) - Realiza uma correspondência com expressão regular

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
