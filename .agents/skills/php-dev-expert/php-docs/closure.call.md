# Vincula e chama a closure

> **Fonte / Source:** https://www.php.net/manual/pt_BR/closure.call.php

---

# Closure::call

(PHP 7, PHP 8)

Closure::call — Vincula e chama a closure

### Descrição

public function **Closure::call**([object](language.types.object.md) `$newThis`, [mixed](language.types.mixed.md) `...$args`): [mixed](language.types.mixed.md)

Vincula temporáriamente a closure ao `newThis`, e a chama
com qualquer parâmetro fornecido.

### Parâmetros

`newThis`
:   O [object](language.types.object.md) a ser vinculado a closure enquanto durar a
    chamada.

`args`
:   Zero ou mais parâmetros, que serão fornecidos como parâmetros para a
    closure.

### Valor Retornado

Retorna o valor de retorno da closure.

### Examples

**Exemplo #1 Exemplo do método **Closure::call()****

```
<?php
class Value {
    protected $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getValue() {
        return $this->value;
    }
}

$three = new Value(3);
$four = new Value(4);

$closure = function ($delta) { var_dump($this->getValue() + $delta); };
$closure->call($three, 4);
$closure->call($four, 4);
?>
```

O exemplo acima produzirá:

```
int(7)
int(8)
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
