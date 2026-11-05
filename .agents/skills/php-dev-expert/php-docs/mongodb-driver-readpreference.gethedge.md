# Retorna a opção "hedge" do ReadPreference

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-readpreference.gethedge.php

---

# MongoDB\Driver\ReadPreference::getHedge

(mongodb >=1.8.0)

MongoDB\Driver\ReadPreference::getHedge — Retorna a opção "hedge" do ReadPreference

### Descrição

final public function **MongoDB\Driver\ReadPreference::getHedge**(): [?](language.types.null.md)[object](language.types.object.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a opção "hedge" do ReadPreference.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

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
