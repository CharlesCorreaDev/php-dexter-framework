# Retorna a opção "tagSets" do ReadPreference

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-readpreference.gettagsets.php

---

# MongoDB\Driver\ReadPreference::getTagSets

(mongodb >=1.0.0)

MongoDB\Driver\ReadPreference::getTagSets — Retorna a opção "tagSets" do ReadPreference

### Descrição

final public function **MongoDB\Driver\ReadPreference::getTagSets**(): [array](language.types.array.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a opção "tagSets" do ReadPreference.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\ReadPreference::getTagSets()****

```
<?php

$mode = MongoDB\Driver\ReadPreference::SECONDARY_PREFERRED;

/* Nulo ou array vazio denotam nenhuma preferência de conjunto de tags. */
$rp = new MongoDB\Driver\ReadPreference($mode, null);
var_dump($rp->getTagSets());

$rp = new MongoDB\Driver\ReadPreference($mode, []);
var_dump($rp->getTagSets());

/* Prefere um nó em Nova Iorque, mas volta para qualquer nó disponível. */
$rp = new MongoDB\Driver\ReadPreference($mode, [['dc' => 'ny']]);
var_dump($rp->getTagSets());

/* Prefere um nó em Nova Iorque, seguido por um nó em São Francisco que seja
   rotulado para uso de relatórios e, finalmente, retorna a qualquer nó disponível. */
$rp = new MongoDB\Driver\ReadPreference($mode, [
  ['dc' => 'ny'],
  ['dc' => 'sf', 'use' => 'reporting'],
  [],
]);
var_dump($rp->getTagSets());

?>
```

O exemplo acima produzirá:

```
array(0) {
}
array(0) {
}
array(2) {
  [0]=>
  array(1) {
    ["dc"]=>
    string(2) "ny"
  }
  [1]=>
  array(0) {
  }
}
array(3) {
  [0]=>
  array(1) {
    ["dc"]=>
    string(2) "ny"
  }
  [1]=>
  array(2) {
    ["dc"]=>
    string(2) "sf"
    ["use"]=>
    string(9) "reporting"
  }
  [2]=>
  array(0) {
  }
}
```

### Veja também

- [» Referência de Preferência de Leitura](https://www.mongodb.com/docs/manual/core/read-preference/)

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
