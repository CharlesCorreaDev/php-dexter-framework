# Copia uma função para um novo nome de função

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.runkit7-function-copy.php

---

# runkit7\_function\_copy

(PECL runkit7 >= Unknown)

runkit7\_function\_copy — 
Copia uma função para um novo nome de função

### Descrição

function **runkit7\_function\_copy**([string](language.types.string.md) `$source_name`, [string](language.types.string.md) `$target_name`): [bool](language.types.boolean.md)

### Parâmetros

`source_name`
:   Nome da função existente.

`target_name`
:   Nome da nova função para a qual a definição será copiada.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Um exemplo de **runkit7\_function\_copy()****

```
<?php
function original() {
  echo "Dentro de uma função\n";
}
runkit7_function_copy('original','duplicate');
original();
duplicate();
?>
```

O exemplo acima produzirá:

```
Dentro de uma função
Dentro de uma função
```

### Veja também

- [runkit7\_function\_add()](function.runkit7-function-add.md) - Adiciona uma nova função, semelhante a create\_function
- [runkit7\_function\_redefine()](function.runkit7-function-redefine.md) - Substitui uma definição de função por uma nova implementação
- [runkit7\_function\_rename()](function.runkit7-function-rename.md) - Altera o nome de uma função
- [runkit7\_function\_remove()](function.runkit7-function-remove.md) - Remove uma definição de função

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
