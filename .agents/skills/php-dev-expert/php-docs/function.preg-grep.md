# Retorna entradas de array que correspondem à expressão regular

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.preg-grep.php

---

# preg\_grep

(PHP 4, PHP 5, PHP 7, PHP 8)

preg\_grep — Retorna entradas de array que correspondem à expressão regular

### Descrição

function **preg\_grep**([string](language.types.string.md) `$pattern`, [array](language.types.array.md) `$array`, [int](language.types.integer.md) `$flags` = 0): [array](language.types.array.md)|[false](language.types.singleton.md)

Retorna o array consistindo dos elementos do parâmetro
`array` que correspondem à expressão regular informada em
`pattern`.

### Parâmetros

`pattern`
:   A expressão a ser pesquisada, como uma string.

`array`
:   O array de entrada.

`flags`
:   Se definido para **`PREG_GREP_INVERT`**, esta função retornará
    os elementos do array de entrada que *não* correspondem
    ao `pattern` informado.

### Valor Retornado

Retorna um array indexado usando as chaves do parâmetro
`array`, ou **`false`** em caso de falha.

### Erros/Exceções

Se o padrão de expressão regular passado não for compilado para uma expressão regular válida, um **`E_WARNING`** será emitido.

### Examples

**Exemplo #1 Exemplo de **preg\_grep()****

```
<?php
$array = [ "4", M_PI, "2.74", 42 ];

// retorna todos os elementos do array contendo número em ponto flutuante
$fl_array = preg_grep("/^(\d+)?\.\d+$/", $array);

var_dump($fl_array);
?>
```

### Veja também

- [Expressões regulares PCRE](pcre.pattern.md)
- [preg\_quote()](function.preg-quote.md) - Escapa caracteres de expressão regular
- [preg\_match\_all()](function.preg-match-all.md) - Realiza uma correspondência global de expressão regular
- [preg\_filter()](function.preg-filter.md) - Executa pesquisa e substituição usando expressões regulares
- [preg\_last\_error()](function.preg-last-error.md) - Retorna o código de erro da última expressão regular PCRE executada

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
