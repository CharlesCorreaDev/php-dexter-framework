# Retorna a opção "mode" do ReadPreference

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-readpreference.getmode.php

---

# MongoDB\Driver\ReadPreference::getMode

(mongodb >=1.0.0)

MongoDB\Driver\ReadPreference::getMode — Retorna a opção "mode" do ReadPreference

**Aviso**

Esta função tornou-se *PRETERIDA* a partir da versão de
extensão 1.20.0 e foi removida na 2.0. As aplicações devem usar
[MongoDB\Driver\ReadPreference::getModeString()](mongodb-driver-readpreference.getmodestring.md)
em seu lugar.

### Descrição

final public function **MongoDB\Driver\ReadPreference::getMode**(): [int](language.types.integer.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a opção "mode" do ReadPreference.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Este método foi removido. |

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\ReadPreference::getMode()****

```
<?php

$rp = new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::PRIMARY);
var_dump($rp->getMode());

$rp = new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::PRIMARY_PREFERRED);
var_dump($rp->getMode());

$rp = new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::SECONDARY);
var_dump($rp->getMode());

$rp = new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::SECONDARY_PREFERRED);
var_dump($rp->getMode());

$rp = new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::NEAREST);
var_dump($rp->getMode());

?>
```

O exemplo acima produzirá:

```
int(1)
int(5)
int(2)
int(6)
int(10)
```

### Veja também

- [MongoDB\Driver\ReadPreference::getModeString()](mongodb-driver-readpreference.getmodestring.md) - Retorna a opção "mode" do ReadPreference
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
