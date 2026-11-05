# Retorna a opção "mode" do ReadPreference

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-readpreference.getmodestring.php

---

# MongoDB\Driver\ReadPreference::getModeString

(mongodb >=1.7.0)

MongoDB\Driver\ReadPreference::getModeString — Retorna a opção "mode" do ReadPreference

### Descrição

final public function **MongoDB\Driver\ReadPreference::getModeString**(): [string](language.types.string.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a opção "mode" do ReadPreference como uma string.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\ReadPreference::getModeString()****

```
<?php

$rp = new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::PRIMARY);
var_dump($rp->getModeString());

$rp = new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::PRIMARY_PREFERRED);
var_dump($rp->getModeString());

$rp = new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::SECONDARY);
var_dump($rp->getModeString());

$rp = new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::SECONDARY_PREFERRED);
var_dump($rp->getModeString());

$rp = new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::NEAREST);
var_dump($rp->getModeString());

?>
```

O exemplo acima produzirá:

```
string(7) "primary"
string(16) "primaryPreferred"
string(9) "secondary"
string(18) "secondaryPreferred"
string(7) "nearest"
```

### Veja também

- [MongoDB\Driver\ReadPreference::getMode()](mongodb-driver-readpreference.getmode.md) - Retorna a opção "mode" do ReadPreference
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
