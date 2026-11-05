# Retorna documento de metadados para WriteError

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-writeerror.getinfo.php

---

# MongoDB\Driver\WriteError::getInfo

(mongodb >=1.0.0)

MongoDB\Driver\WriteError::getInfo — Retorna documento de metadados para WriteError

### Descrição

final public function **MongoDB\Driver\WriteError::getInfo**(): [?](language.types.null.md)[object](language.types.object.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o documento de metadados para WriteError ou **`null`** se nenhum metadado
estiver disponível.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

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
