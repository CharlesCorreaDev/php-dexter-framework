# Remove o escape de strings escapadas com addcslashes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stripcslashes.php

---

# stripcslashes

(PHP 4, PHP 5, PHP 7, PHP 8)

stripcslashes — Remove o escape de strings escapadas com [addcslashes()](function.addcslashes.md)

### Descrição

function **stripcslashes**([string](language.types.string.md) `$string`): [string](language.types.string.md)

Retorna uma string com as barras invertidas retiradas. Reconhece
representações no estilo C `\n`, `\r` ..., octais
e hexadecimais.

### Parâmetros

`string`
:   A string para remover os escapes.

### Valor Retornado

Retorna a string com escapes retirados.

### Examples

**Exemplo #1 Exemplo de **stripcslashes()****

```
<?php

var_dump(stripcslashes('I\'d have a coffee.\nNot a problem.') === "I'd have a coffee.
Not a problem."); // verdadeiro
?>
```

### Veja também

- [addcslashes()](function.addcslashes.md) - Escapa string com barras invertidas no estilo C

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
