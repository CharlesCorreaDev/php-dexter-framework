# Recodifica uma string de acordo com uma solicitação de recodificação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.recode-string.php

---

# recode\_string

(PHP 4, PHP 5, PHP 7 < 7.4.0)

recode\_string — Recodifica uma string de acordo com uma solicitação de recodificação

### Descrição

function **recode\_string**([string](language.types.string.md) `$request`, [string](language.types.string.md) `$string`): [string](language.types.string.md)

Recodifica a string `string` de acordo com
a solicitação de recodificação `request`.

### Parâmetros

`request`
:   O tipo de solicitação de recodificação desejada

`string`
:   A [string](language.types.string.md) a ser recodificada

### Valor Retornado

Retorna a [string](language.types.string.md) recodificada ou **`false`** se não for possível
executar a solicitação de recodificação.

### Examples

**Exemplo #1 Exemplo básico de **recode\_string()****

```
<?php
echo recode_string("us..flat", "O caractere a seguir tem uma marca diacrítica: á");
?>
```

### Notas

Uma solicitação de recodificação simples pode ser "lat1..iso646-de".

### Veja também

- A documentação do GNU Recode para instruções
  detalhadas sobre solicitações de recodificação.
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
