# Obtém as propriedades de um objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.get-object-vars.php

---

# get\_object\_vars

(PHP 4, PHP 5, PHP 7, PHP 8)

get\_object\_vars — Obtém as propriedades de um objeto

### Descrição

function **get\_object\_vars**([object](language.types.object.md) `$object`): [array](language.types.array.md)

Obtém as propriedades não estáticas acessíveis do `object`
informado de acordo com o escopo.

### Parâmetros

`object`
:   Uma instância de objeto.

### Valor Retornado

Retorna um array associativo das propriedades não estáticas acessíveis definidas
para o `object` especificado dentro do escopo.

### Examples

**Exemplo #1 Uso da **get\_object\_vars()****

```
<?php

class foo {
    private $a;
    public $b = 1;
    public $c;
    private $d;
    static $e;

    public function test() {
        var_dump(get_object_vars($this));
    }
}

$test = new foo;
var_dump(get_object_vars($test));

$test->test();

?>
```

O exemplo acima produzirá:

```
array(2) {
  ["b"]=>
  int(1)
  ["c"]=>
  NULL
}
array(4) {
  ["a"]=>
  NULL
  ["b"]=>
  int(1)
  ["c"]=>
  NULL
  ["d"]=>
  NULL
}
```

> **Nota**:
>
> Propriedades não inicializadas são consideradas inacessíveis, e portanto não serão incluídas no array.

### Veja também

- [get\_class\_methods()](function.get-class-methods.md) - Obtém o nome dos métodos da classe
- [get\_class\_vars()](function.get-class-vars.md) - Obtém as propriedades padrão da classe

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
