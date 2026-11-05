# Iteração de Objetos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.oop5.iterations.php

---

## Iteração de Objetos

O PHP fornece uma maneira de definir objetos para que seja possível
iterar por uma lista de itens como, por exemplo, a instrução [`foreach`](control-structures.foreach.md). Por padrão,
todas as propriedades [visíveis](language.oop5.visibility.md) serão
utilizadas para a iteração.

**Exemplo #1 Iteração simples de objetos**

```
<?php
class MyClass
{
    public $var1 = 'valor 1';
    public $var2 = 'valor 2';
    public $var3 = 'valor 3';

    protected $protected = 'protected var';
    private   $private   = 'private var';

    function iterateVisible() {
       echo "MyClass::iterateVisible:\n";
       foreach ($this as $key => $value) {
           print "$key => $value\n";
       }
    }
}

$class = new MyClass();

foreach($class as $key => $value) {
    print "$key => $value\n";
}
echo "\n";

$class->iterateVisible();

?>
```

O exemplo acima produzirá:

```
var1 => valor 1
var2 => valor 2
var3 => valor 3

MyClass::iterateVisible:
var1 => valor 1
var2 => valor 2
var3 => valor 3
protected => protected var
private => private var
```

Como a saída mostra, o [`foreach`](control-structures.foreach.md) passou por cada uma
das variáveis [visíveis](language.oop5.visibility.md) que podem ser
acessadas.

### Veja também

- [Generators](language.generators.md)
- [Iterator](class.iterator.md)
- [IteratorAggregate](class.iteratoraggregate.md)
- [SPL Iterators](spl.iterators.md)

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
