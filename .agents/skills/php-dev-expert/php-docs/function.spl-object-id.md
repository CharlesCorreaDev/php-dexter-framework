# Retorna o identificador inteiro do objeto fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.spl-object-id.php

---

# spl\_object\_id

(PHP 7 >= 7.2.0, PHP 8)

spl\_object\_id — 
Retorna o identificador inteiro do objeto fornecido

### Descrição

function **spl\_object\_id**([object](language.types.object.md) `$object`): [int](language.types.integer.md)

Esta função retorna um identificador único para o objeto. O ID do objeto é
único durante a vida útil do objeto. Depois que o objeto é destruído, seu ID
pode ser reutilizado por outros objetos. Esse comportamento é semelhante ao
[spl\_object\_hash()](function.spl-object-hash.md).

### Parâmetros

`object`
:   Qualquer objeto.

### Valor Retornado

Um identificador inteiro que é único para cada objeto atualmente existente e
é sempre o mesmo para cada objeto.

### Examples

**Exemplo #1 Um exemplo de **spl\_object\_id()****

```
<?php
$id = spl_object_id($object);
$storage[$id] = $object;
?>
```

### Notas

> **Nota**:
>
> Quando um objeto é destruído, seu ID pode ser reutilizado por outros objetos.

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
