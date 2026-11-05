# Retorna a opção "maxStalenessSeconds" do ReadPreference

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-readpreference.getmaxstalenessseconds.php

---

# MongoDB\Driver\ReadPreference::getMaxStalenessSeconds

(mongodb >=1.2.0)

MongoDB\Driver\ReadPreference::getMaxStalenessSeconds — Retorna a opção "maxStalenessSeconds" do ReadPreference

### Descrição

final public function **MongoDB\Driver\ReadPreference::getMaxStalenessSeconds**(): [int](language.types.integer.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a opção "maxStalenessSeconds" do ReadPreference. Se nenhuma inatividade máxima
tiver sido especificada,
**`MongoDB\Driver\ReadPreference::NO_MAX_STALENESS`**
será retornada.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\ReadPreference::getMaxStalenessSeconds()****

```
<?php

$rp = new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::SECONDARY);
var_dump($rp->getMaxStalenessSeconds());

$rp = new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::SECONDARY, null, [
    'maxStalenessSeconds' => MongoDB\Driver\ReadPreference::NO_MAX_STALENESS,
]);
var_dump($rp->getMaxStalenessSeconds());

$rp = new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::SECONDARY, null, [
    'maxStalenessSeconds' => MongoDB\Driver\ReadPreference::SMALLEST_MAX_STALENESS_SECONDS,
]);
var_dump($rp->getMaxStalenessSeconds());

$rp = new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::SECONDARY, null, [
    'maxStalenessSeconds' => 1000,
]);
var_dump($rp->getMaxStalenessSeconds());

?>
```

O exemplo acima produzirá:

```
int(-1)
int(-1)
int(90)
int(1000)
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
