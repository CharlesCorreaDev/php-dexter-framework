# Obtém o último erro ocorrido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.error-get-last.php

---

# error\_get\_last

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

error\_get\_last — Obtém o último erro ocorrido

### Descrição

function **error\_get\_last**(): [?](language.types.null.md)[array](language.types.array.md)

Obtém informações sobre o último erro que ocorreu.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array associativo que descreve o último erro com as chaves "type",
"message", "file" e "line". Se o erro foi causado por uma função interna do PHP,
então a "message" começa com o nome da função.
Retorna **`null`** se ainda não houve erro.

### Examples

**Exemplo #1 Um exemplo de **error\_get\_last()****

```
<?php
echo $a;
print_r(error_get_last());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [type] => 8
    [message] => Undefined variable: a
    [file] => C:\WWW\index.php
    [line] => 2
)
```

### Veja também

- [Constantes de erro](errorfunc.constants.md)
- Variável [$php\_errormsg](reserved.variables.phperrormsg.md)
- [error\_clear\_last()](function.error-clear-last.md) - Limpa o erro mais recente
- [Diretiva `display_errors`](errorfunc.configuration.md#ini.display-errors)
- [Diretiva `html_errors`](errorfunc.configuration.md#ini.html-errors)
- [Diretiva `xmlrpc_errors`](errorfunc.configuration.md#ini.xmlrpc-errors)

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
