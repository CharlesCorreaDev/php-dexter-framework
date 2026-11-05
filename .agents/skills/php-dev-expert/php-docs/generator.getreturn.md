# Obtém o valor de retorno de um gerador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/generator.getreturn.php

---

# Generator::getReturn

(PHP 7, PHP 8)

Generator::getReturn — Obtém o valor de retorno de um gerador

### Descrição

public function **Generator::getReturn**(): [mixed](language.types.mixed.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o valor de retorno de um gerador, assim que finalizada sua execução.

### Examples

**Exemplo #1 Exemplo do método **Generator::getReturn()****

```
<?php

$gen = (function() {
    yield 1;
    yield 2;

    return 3;
})();

foreach ($gen as $val) {
    echo $val, PHP_EOL;
}

echo $gen->getReturn(), PHP_EOL;
```

O exemplo acima produzirá:

```
1
2
3
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
