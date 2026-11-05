# Retorna o ID de hash para o objeto fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.spl-object-hash.php

---

# spl\_object\_hash

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

spl\_object\_hash — 
Retorna o ID de hash para o objeto fornecido

### Descrição

function **spl\_object\_hash**([object](language.types.object.md) `$object`): [string](language.types.string.md)

Esta função retorna um identificador de hash único para o objeto. Este ID pode ser
usado como uma chave de hash para armazenar objetos ou para identificar um objeto, desde que
o objeto não seja destruído. Uma vez que o objeto é destruído, seu hash pode
ser reutilizado por outros objetos. Este comportamento é semelhante ao
[spl\_object\_id()](function.spl-object-id.md).

### Parâmetros

`object`
:   Qualquer objeto.

### Valor Retornado

Uma string que é única para cada objeto atualmente existente e é sempre
a mesma para cada objeto.

### Examples

**Exemplo #1 Exemplo de **spl\_object\_hash()****

```
<?php
$id = spl_object_hash($object);
$storage[$id] = $object;
?>
```

### Notas

> **Nota**:
>
> Quando um objeto é destruído, seu hash pode ser reutilizado por outros objetos.

> **Nota**:
>
> Os hashes de objetos devem ser comparados para identidade com `===` e
> `!==`, porque o hash retornado pode ser uma
> [string numérica](language.types.numeric-strings.md).
> Por exemplo: `0000000000000e600000000000000000`.

### Veja também

- [spl\_object\_id()](function.spl-object-id.md) - Retorna o identificador inteiro do objeto fornecido

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
