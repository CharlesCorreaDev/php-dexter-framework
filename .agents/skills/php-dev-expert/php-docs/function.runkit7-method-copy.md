# Copia um método de uma classe para outra

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.runkit7-method-copy.php

---

# runkit7\_method\_copy

(PECL runkit7 >= Unknown)

runkit7\_method\_copy — Copia um método de uma classe para outra

### Descrição

function **runkit7\_method\_copy**(  
    [string](language.types.string.md) `$destination_class`,  
    [string](language.types.string.md) `$destination_method_name`,  
    [string](language.types.string.md) `$source_class`,  
    [string](language.types.string.md) `$source_method_name` = ?  
): [bool](language.types.boolean.md)

### Parâmetros

`destination_class`
:   Classe de destino para o método copiado

`destination_method_name`
:   Nome do método de destino

`source_class`
:   Classe de origem do método a ser copiado

`source_method_name`
:   Nome do método a ser copiado da classe de origem. Se este parâmetro for
    omitido, o valor de `destination_method_name` será assumido.

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **runkit7\_method\_copy()****

```
<?php
class Foo {
    function example() {
        return "foo!\n";
    }
}

class Bar {
    // inicialmente, nenhum método
}

// copia o método example() da classe Foo para a classe Bar, como baz()
runkit7_method_copy('Bar', 'baz', 'Foo', 'example');

// exibe a função copiada
echo Bar::baz();
?>
```

O exemplo acima produzirá:

```
foo!
```

### Veja também

- [runkit7\_method\_add()](function.runkit7-method-add.md) - Adiciona dinamicamente um novo método a uma determinada classe
- [runkit7\_method\_redefine()](function.runkit7-method-redefine.md) - Altera dinamicamente o código do método fornecido
- [runkit7\_method\_remove()](function.runkit7-method-remove.md) - Remove dinamicamente o método fornecido
- [runkit7\_method\_rename()](function.runkit7-method-rename.md) - Altera dinamicamente o nome do método fornecido
- [runkit7\_function\_copy()](function.runkit7-function-copy.md) - Copia uma função para um novo nome de função

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
