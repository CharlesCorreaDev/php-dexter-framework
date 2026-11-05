# Remove dinamicamente o método fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.runkit7-method-remove.php

---

# runkit7\_method\_remove

(PECL runkit7 >= Unknown)

runkit7\_method\_remove — Remove dinamicamente o método fornecido

### Descrição

function **runkit7\_method\_remove**([string](language.types.string.md) `$class_name`, [string](language.types.string.md) `$method_name`): [bool](language.types.boolean.md)

> **Nota**:
>
> Esta função não
> pode ser usada para manipular o método atualmente em execução (ou encadeado).

### Parâmetros

`class_name`
:   A classe da qual o método deve ser removido.

`method_name`
:   O nome do método a ser removido.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **runkit7\_method\_remove()****

```
<?php
class Example {
    function foo() {
        return "foo!\n";
    }

    function bar() {
        return "bar!\n";
    }
}

// Remove o método 'foo'
runkit7_method_remove(
    'Example',
    'foo'
);

echo implode(' ', get_class_methods('Example'));

?>
```

O exemplo acima produzirá:

```
bar
```

### Veja também

- [runkit7\_method\_add()](function.runkit7-method-add.md) - Adiciona dinamicamente um novo método a uma determinada classe
- [runkit7\_method\_copy()](function.runkit7-method-copy.md) - Copia um método de uma classe para outra
- [runkit7\_method\_redefine()](function.runkit7-method-redefine.md) - Altera dinamicamente o código do método fornecido
- [runkit7\_method\_rename()](function.runkit7-method-rename.md) - Altera dinamicamente o nome do método fornecido
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
