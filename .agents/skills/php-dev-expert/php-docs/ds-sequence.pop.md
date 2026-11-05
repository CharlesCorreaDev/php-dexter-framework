# Remove e retorna o último valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-sequence.pop.php

---

# Ds\Sequence::pop

(PECL ds >= 1.0.0)

Ds\Sequence::pop — Remove e retorna o último valor

### Descrição

abstract public function **Ds\Sequence::pop**(): [mixed](language.types.mixed.md)

Remove e retorna o último valor.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O último valor removido.

### Erros/Exceções

[UnderflowException](class.underflowexception.md) se vazio.

### Examples

**Exemplo #1 Exemplo de **Ds\Sequence::pop()****

```
<?php
$sequence = new \Ds\Vector([1, 2, 3]);

var_dump($sequence->pop());
var_dump($sequence->pop());
var_dump($sequence->pop());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(3)
int(2)
int(1)
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
