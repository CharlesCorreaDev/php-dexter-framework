# Retorna o comprimento do buffer de saída

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ob-get-length.php

---

# ob\_get\_length

(PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8)

ob\_get\_length — Retorna o comprimento do buffer de saída

### Descrição

function **ob\_get\_length**(): [int](language.types.integer.md)|[false](language.types.singleton.md)

Esta função retornará o comprimento do conteúdo do buffer de saída, em bytes.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o comprimento do conteúdo do buffer de saída ou **`false`** se o
buffer não estiver ativo.

### Examples

**Exemplo #1 Um simples exemplo de **ob\_get\_length()****

```
<?php

ob_start();

echo "Olá, ";

$len1 = ob_get_length();

echo "Mundo";

$len2 = ob_get_length();

ob_end_clean();

echo $len1 . ", ." . $len2;
?>
```

O exemplo acima produzirá:

```
5, 10
```

### Veja também

- [ob\_start()](function.ob-start.md) - Ativa o buffer de saída
- [ob\_get\_contents()](function.ob-get-contents.md) - Retorna o conteúdo do buffer de saída

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
