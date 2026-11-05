# Obtém as propriedades padrão da classe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.get-class-vars.php

---

# get\_class\_vars

(PHP 4, PHP 5, PHP 7, PHP 8)

get\_class\_vars — Obtém as propriedades padrão da classe

### Descrição

function **get\_class\_vars**([string](language.types.string.md) `$class`): [array](language.types.array.md)

Obtém as propriedades padrão de uma dada classe.

### Parâmetros

`class`
:   O nome da classe

### Valor Retornado

Retorna um array associativo das propriedades declaradas visíveis no
escopo atual, com seu valor padrão.
Os elementos do array resultante estão na forma de
`varname => value`.
Em caso de um erro, retornará **`false`**.

### Examples

**Exemplo #1 Exemplo da **get\_class\_vars()****

```
<?php

class MyClass
{
    public $var1; // Esta não tem valor padrão explícito (tecnicamente tem NULL como padrão)...
    public $var2 = "xyz";
    public $var3 = 100;
    private $var4;

    public function __construct()
    {
        // altera algumas propriedades
        $this->var1 = "foo";
        $this->var2 = "bar";
        return true;
    }
}

$my_class = new MyClass();

$class_vars = get_class_vars(get_class($my_class));

foreach ($class_vars as $name => $value) {
    echo "{$name}: ", var_export($value, true), "\n";
}

?>
```

O exemplo acima produzirá:

```
var1: NULL
var2: 'xyz'
var3: 100
```

**Exemplo #2 **get\_class\_vars()** e comportamento de escopo**

```
<?php

function format($array)
{
    return implode('|', array_keys($array)) . "\r\n";
}

class TestCase
{
    public $a    = 1;
    protected $b = 2;
    private $c   = 3;

    public static function expose()
    {
        echo format(get_class_vars(__CLASS__));
    }
}

TestCase::expose();
echo format(get_class_vars('TestCase'));

?>
```

O exemplo acima produzirá:

```
// 5.0.0
a| * b| TestCase c
a| * b| TestCase c

// 5.0.1 - 5.0.2
a|b|c
a|b|c

// 5.0.3 +
a|b|c
a
```

### Veja também

- [get\_class\_methods()](function.get-class-methods.md) - Obtém o nome dos métodos da classe
- [get\_object\_vars()](function.get-object-vars.md) - Obtém as propriedades de um objeto

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
