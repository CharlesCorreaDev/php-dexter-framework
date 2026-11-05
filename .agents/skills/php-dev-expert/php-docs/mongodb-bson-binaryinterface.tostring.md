# Retorna os dados da BinaryInterface

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-binaryinterface.tostring.php

---

# MongoDB\BSON\BinaryInterface::\_\_toString

(mongodb >=1.3.0)

MongoDB\BSON\BinaryInterface::\_\_toString — Retorna os dados da BinaryInterface

### Descrição

abstract public function **MongoDB\BSON\BinaryInterface::\_\_toString**(): [string](language.types.string.md)

Este método é um apelido para: [MongoDB\BSON\BinaryInterface::getData()](mongodb-bson-binaryinterface.getdata.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna os dados da BinaryInterface.

### Veja também

- [MongoDB\BSON\BinaryInterface::getData()](mongodb-bson-binaryinterface.getdata.md) - Retorna os dados da BinaryInterface
- [MongoDB\BSON\Binary::\_\_toString()](mongodb-bson-binary.tostring.md) - Retorna string representando os dados de Binary

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
