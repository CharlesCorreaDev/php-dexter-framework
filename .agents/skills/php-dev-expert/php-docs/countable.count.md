# Conta elementos de um objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/countable.count.php

---

# Countable::count

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

Countable::count — Conta elementos de um objeto

### Descrição

public function **Countable::count**(): [int](language.types.integer.md)

Este método é executado quando o parâmetro `value` para
a função [count()](function.count.md) é um objeto que implementa
[Countable](class.countable.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O número personalizado como um [int](language.types.integer.md).

### Examples

**Exemplo #1 Exemplo de **Countable::count()****

```
<?php

class Counter implements Countable 
{
    private $count = 0;

    public function count(): int 
    {
        return ++$this->count;
    }
}

$counter = new Counter();

for ($i = 0; $i < 10; ++$i) {
    echo "Eu fui contado " . count($counter) . " vezes\n";
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Eu fui contado 1 vezes
Eu fui contado 2 vezes
Eu fui contado 3 vezes
Eu fui contado 4 vezes
Eu fui contado 5 vezes
Eu fui contado 6 vezes
Eu fui contado 7 vezes
Eu fui contado 8 vezes
Eu fui contado 9 vezes
Eu fui contado 10 vezes
```

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
