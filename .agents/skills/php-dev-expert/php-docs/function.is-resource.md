# Verifica se uma variável é um recurso

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.is-resource.php

---

# is\_resource

(PHP 4, PHP 5, PHP 7, PHP 8)

is\_resource — 
Verifica se uma variável é um recurso

### Descrição

function **is\_resource**([mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

Verifica se a variável informada é do tipo [resource](language.types.resource.md).

### Parâmetros

`value`
:   A variável a ser avaliada.

### Valor Retornado

Retorna **`true`** se `value` for do tipo [resource](language.types.resource.md),
**`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **is\_resource()****

```
<?php

$handle = fopen("php://stdout", "w");
if (is_resource($handle)) {
    echo '$handle é do tipo resource';
}

?>
```

O exemplo acima produzirá:

```
$handle é do tipo resource
```

### Notas

> **Nota**:
>
> **is\_resource()** não é um método estrito de validação de tipo: retornará **`false`** se `value` for uma variável do tipo resource que foi fechada.

### Veja também

- [Documentação sobre o tipo Resource](language.types.resource.md)
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
