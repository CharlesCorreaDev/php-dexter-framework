# Retorna a opção "journal" do WriteConcern

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-writeconcern.getjournal.php

---

# MongoDB\Driver\WriteConcern::getJournal

(mongodb >=1.0.0)

MongoDB\Driver\WriteConcern::getJournal — Retorna a opção "journal" do WriteConcern

### Descrição

final public function **MongoDB\Driver\WriteConcern::getJournal**(): [?](language.types.null.md)[bool](language.types.boolean.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a opção "journal" do WriteConcern.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\WriteConcern::getJournal()****

```
<?php

$wc = new MongoDB\Driver\WriteConcern(1);
var_dump($wc->getJournal());

$wc = new MongoDB\Driver\WriteConcern(1, 0, true);
var_dump($wc->getJournal());

$wc = new MongoDB\Driver\WriteConcern(1, 0, false);
var_dump($wc->getJournal());

?>
```

O exemplo acima produzirá:

```
NULL
bool(true)
bool(false)
```

### Veja também

- [» Referência de Preocupação de Gravação](https://www.mongodb.com/docs/manual/reference/write-concern/)

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
