# Retorna um identificador inteiro para o recurso informado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.get-resource-id.php

---

# get\_resource\_id

(PHP 8)

get\_resource\_id — 
Retorna um identificador inteiro para o recurso informado

### Descrição

function **get\_resource\_id**([resource](language.types.resource.md) `$resource`): [int](language.types.integer.md)

Esta função fornece uma maneira segura (do ponto de vista de tipo) de gerar o identificador inteiro
para um recurso.

### Parâmetros

`resource`
:   O manipulador de recurso a ser avaliado.

### Valor Retornado

O identificador [int](language.types.integer.md) para o recurso informado em `resource`.

Esta função é essencialmente uma conversão para [int](language.types.integer.md) do parâmetro
`resource` para tornar mais fácil a obtenção do ID do recurso.

### Examples

**Exemplo #1 **get\_resource\_id()** produz o mesmo resultado de uma conversão [int](language.types.integer.md)**

```
<?php
$handle = fopen("php://stdout", "w");

echo (int) $handle . "\n";

echo get_resource_id($handle);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
698
698
```

### Veja também

- [get\_resource\_type()](function.get-resource-type.md) - Retorna o tipo de recurso

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
