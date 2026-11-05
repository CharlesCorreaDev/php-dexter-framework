# Altera dinamicamente o nome do método fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.runkit7-method-rename.php

---

# runkit7\_method\_rename

(PECL runkit7 >= Unknown)

runkit7\_method\_rename — Altera dinamicamente o nome do método fornecido

### Descrição

function **runkit7\_method\_rename**([string](language.types.string.md) `$class_name`, [string](language.types.string.md) `$source_method_name`, [string](language.types.string.md) `$target_method_name`): [bool](language.types.boolean.md)

> **Nota**:
>
> Esta função não
> pode ser usada para manipular o método atualmente em execução (ou encadeado).

### Parâmetros

`class_name`
:   A classe na qual o método deve ser renomeado

`source_method_name`
:   O nome do método a ser renomeado.

`target_method_name`
:   O novo nome a ser dado ao método.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **runkit7\_method\_rename()****

```
<?php
class Example {
    function foo() {
        return "foo!\n";
    }
}

// Renomeia o método 'foo' para 'bar'
runkit7_method_rename(
    'Example',
    'foo',
    'bar'
);

// exibe o método renomeado
echo (new Example)->bar();
?>
```

O exemplo acima produzirá:

```
foo!
```

### Veja também

- [runkit7\_method\_add()](function.runkit7-method-add.md) - Adiciona dinamicamente um novo método a uma determinada classe
- [runkit7\_method\_copy()](function.runkit7-method-copy.md) - Copia um método de uma classe para outra
- [runkit7\_method\_redefine()](function.runkit7-method-redefine.md) - Altera dinamicamente o código do método fornecido
- [runkit7\_method\_remove()](function.runkit7-method-remove.md) - Remove dinamicamente o método fornecido
- [runkit7\_function\_rename()](function.runkit7-function-rename.md) - Altera o nome de uma função

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
