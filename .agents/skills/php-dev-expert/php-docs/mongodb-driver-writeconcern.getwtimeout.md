# Retorna a opção "wtimeout" do WriteConcern

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-writeconcern.getwtimeout.php

---

# MongoDB\Driver\WriteConcern::getWtimeout

(mongodb >=1.0.0)

MongoDB\Driver\WriteConcern::getWtimeout — Retorna a opção "wtimeout" do WriteConcern

### Descrição

final public function **MongoDB\Driver\WriteConcern::getWtimeout**(): [int](language.types.integer.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a opção "wtimeout" do WriteConcern.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 1.7.0 | Em sistemas de 32 bits, este método sempre truncará o valor `wTimeout` se exceder o intervalo de 32 bits. Nesse caso, um alerta será emitido. |

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\WriteConcern::getWtimeout()****

```
<?php

$wc = new MongoDB\Driver\WriteConcern(1);
var_dump($wc->getWtimeout());

$wc = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 3000);
var_dump($wc->getWtimeout());

?>
```

O exemplo acima produzirá:

```
int(0)
int(3000)
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
