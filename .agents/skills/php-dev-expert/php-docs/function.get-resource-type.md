# Retorna o tipo de recurso

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.get-resource-type.php

---

# get\_resource\_type

(PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8)

get\_resource\_type — 
Retorna o tipo de recurso

### Descrição

function **get\_resource\_type**([resource](language.types.resource.md) `$resource`): [string](language.types.string.md)

Essa função obtém o tipo do recurso informado.

### Parâmetros

`resource`
:   O manipulador de recurso a ser avaliado.

### Valor Retornado

Se o parâmetro `resource` for um recurso, esta função
retornará uma string representando seu tipo. Se o tipo não for identificado
por esta função, o valor de retorno será a string
`Unknown`.

Esta função retornará **`null`** e gerará um erro se
`resource` não for um recurso do tipo [resource](language.types.resource.md).

### Examples

**Exemplo #1 Exemplo de **get\_resource\_type()****

```
<?php
$fp = fopen("foo", "w");
echo get_resource_type($fp) . "\n";
?>
```

Saída do exemplo acima no PHP 7:

```
stream
```

### Veja também

- [get\_resource\_id()](function.get-resource-id.md) - Retorna um identificador inteiro para o recurso informado

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
