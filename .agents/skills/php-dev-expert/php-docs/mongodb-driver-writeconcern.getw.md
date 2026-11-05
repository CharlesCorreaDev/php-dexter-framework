# Retorna a opção "w" do WriteConcern

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-writeconcern.getw.php

---

# MongoDB\Driver\WriteConcern::getW

(mongodb >=1.0.0)

MongoDB\Driver\WriteConcern::getW — Retorna a opção "w" do WriteConcern

### Descrição

final public function **MongoDB\Driver\WriteConcern::getW**(): [string](language.types.string.md)|[int](language.types.integer.md)|[null](language.types.null.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a opção "w" do WriteConcern.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\WriteConcern::getW()****

```
<?php

$wc = new MongoDB\Driver\WriteConcern(1);
var_dump($wc->getW());

$wc = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY);
var_dump($wc->getW());

?>
```

O exemplo acima produzirá:

```
int(1)
string(8) "majority"
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
