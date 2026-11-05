# Decodifica uma URL codificada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.urldecode.php

---

# urldecode

(PHP 4, PHP 5, PHP 7, PHP 8)

urldecode — Decodifica uma URL codificada

### Descrição

function **urldecode**([string](language.types.string.md) `$string`): [string](language.types.string.md)

Decodifica qualquer `%##`
codificado na string. Os símbolos 'mais' ('`+`') são
decodificados para um caractere de espaço.

### Parâmetros

`string`
:   A string a ser decodificada.

### Valor Retornado

Retorna a string decodificada.

### Examples

**Exemplo #1 Exemplo de **urldecode()****

```
<?php
$query = "my=apples&are=green+and+red";

foreach (explode('&', $query) as $chunk) {
    $param = explode("=", $chunk);

    if ($param) {
        printf("O valor para o parâmetro \"%s\" é \"%s\"<br/>\n", urldecode($param[0]), urldecode($param[1]));
    }
}
?>
```

### Notas

**Aviso**

As superglobais [$\_GET](reserved.variables.get.md) e [$\_REQUEST](reserved.variables.request.md)
já são decodificadas. Usar **urldecode()** em um elemento
[$\_GET](reserved.variables.get.md) ou [$\_REQUEST](reserved.variables.request.md) podem gerar
resultados inesperados e perigosos.

### Veja também

- [urlencode()](function.urlencode.md) - Codifica uma string no formato URL
- [rawurlencode()](function.rawurlencode.md) - Codifica uma URL de acordo com RFC 3986
- [rawurldecode()](function.rawurldecode.md) - Decodifica uma URL
- [» RFC 3986](https://datatracker.ietf.org/doc/html/rfc3986)

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
