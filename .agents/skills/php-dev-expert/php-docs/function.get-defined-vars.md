# Retorna um array com todas variáveis definidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.get-defined-vars.php

---

# get\_defined\_vars

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

get\_defined\_vars — 
Retorna um array com todas variáveis definidas

### Descrição

function **get\_defined\_vars**(): [array](language.types.array.md)

Essa função retorna um array multimensional contendo uma lista com
todas as variáveis definidas, incluindo variáveis de ambiente, servidor ou variáveis
definidas pelo usuário, dentro do escopo que **get\_defined\_vars()** foi
chamada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um array multidimensional com todas as variáveis.

### Examples

**Exemplo #1 Exemplo da **get\_defined\_vars()****

```
<?php
$b = array(1,1,2,3,5,8);

$arr = get_defined_vars();

// mostra $b
print_r($arr["b"]);

/* mostra o caminho do interpretador do PHP (se for usado como CGI)
 * por exemplo /usr/local/bin/php */
echo $arr["_"];

// mostra os parâmetros da linha de comando se for usado
print_r($arr["argv"]);

// mostra todas variáveis de servidor
print_r($arr["_SERVER"]);

// mostra todos os indíces possíveis para o array de variáveis
print_r(array_keys(get_defined_vars()));
?>
```

### Veja também

- [isset()](function.isset.md) - Determina se uma variável está declarada e é diferente de null
- [get\_defined\_functions()](function.get-defined-functions.md) - Retorna um array com todas as funções definidas
- [get\_defined\_constants()](function.get-defined-constants.md) - Retorna um array associativo com os nomes de todas as constantes e seus valores

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
