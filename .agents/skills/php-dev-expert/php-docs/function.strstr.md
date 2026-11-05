# Encontra a primeira ocorrência de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.strstr.php

---

# strstr

(PHP 4, PHP 5, PHP 7, PHP 8)

strstr — Encontra a primeira ocorrência de uma string

### Descrição

function **strstr**([string](language.types.string.md) `$haystack`, [string](language.types.string.md) `$needle`, [bool](language.types.boolean.md) `$before_needle` = **`false`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna parte da string `haystack` iniciando a partir da primeira
ocorrência de `needle` (inclusive) até o final de
`haystack`.

> **Nota**:
>
> Este função é sensível a maiúsculas/minúsculas. Para pesquisas insensíveis a maiúsculas/minúsculas, use
> [stristr()](function.stristr.md).

> **Nota**:
>
> Se for necessário apenas determinar se um `needle` em particular
> ocorre dentro de `haystack`, a função mais rápida e que
> consome menos memória, [str\_contains()](function.str-contains.md), deve ser usada em seu lugar.

### Parâmetros

`haystack`
:   A string de entrada.

`needle`
:   A string sendo procurada.

    Antes do PHP 8.0.0, se `needle` não for uma string, ela será convertida
    para um número inteiro e aplicada como o valor ordinal de um caractere.
    Este comportamento foi descontinuado a partir do PHP 7.3.0 e depender dele é altamente
    desaconselhado. Dependendo do comportamento pretendido, o parâmetro
    `needle` deve ser explicitamente convertido em string
    ou uma chamada explícita para [chr()](function.chr.md) deve ser realizada.

`before_needle`
:   Se for igual a **`true`**, **strstr()** retorna
    a parte de `haystack` antes da primeira
    ocorrência de `needle` (excluindo este último).

### Valor Retornado

Retorna a parte da string ou **`false`** se `needle`
não for encontrada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `needle` agora aceita uma string vazia. |
| 8.0.0 | Passar um [int](language.types.integer.md) em `needle` não é mais suportado. |
| 7.3.0 | Passar um [int](language.types.integer.md) em `needle` foi descontinuado. |

### Examples

**Exemplo #1 Exemplo de **strstr()****

```
<?php
$email  = 'nome@exemplo.com';
$domain = strstr($email, '@');
echo $domain, PHP_EOL; // mostra @exemplo.com

$user = strstr($email, '@', true);
echo $user, PHP_EOL; // mostra nome
?>
```

### Veja também

- [stristr()](function.stristr.md) - strstr insensível a maiúsculas/minúsculas
- [strrchr()](function.strrchr.md) - Encontra a última ocorrência de um caractere em uma string
- [strpos()](function.strpos.md) - Encontra a posição da primeira ocorrência de uma substring em uma string
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
