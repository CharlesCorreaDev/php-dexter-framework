# Define as variáveis ​​estáticas no escopo da função ou método

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.uopz-set-static.php

---

# uopz\_set\_static

(PECL uopz 5, PECL uopz , PECL uopz 7)

uopz\_set\_static — Define as variáveis ​​estáticas no escopo da função ou método

### Descrição

function **uopz\_set\_static**([string](language.types.string.md) `$function`, [array](language.types.array.md) `$static`): [void](language.types.void.md)

function **uopz\_set\_static**([string](language.types.string.md) `$class`, [string](language.types.string.md) `$function`, [array](language.types.array.md) `$static`): [void](language.types.void.md)

Define as variáveis ​​estáticas no escopo da função ou método.

### Parâmetros

`class`
:   O nome da classe.

`function`
:   O nome da função ou do método.

`static`
:   O [array](language.types.array.md) associativo de nomes de variáveis ​​mapeados para seus
    valores.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Uso básico de **uopz\_set\_static()****

```
<?php
function foo() {
    static $bar = 'baz';
    var_dump($bar);
}
uopz_set_static('foo', ['bar' => 'qux']);
foo();
?>
```

O exemplo acima produzirá:

```
string(3) "qux"
```

### Veja também

- [uopz\_get\_static()](function.uopz-get-static.md) - Obtém as variáveis ​​estáticas do escopo da função ou método

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
