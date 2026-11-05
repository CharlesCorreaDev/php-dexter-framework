# Implementação de ArrayAccess

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-packedarray.offsetset.php

---

# MongoDB\BSON\PackedArray::offsetSet

(mongodb >=1.17.0)

MongoDB\BSON\PackedArray::offsetSet — Implementação de [ArrayAccess](class.arrayaccess.md)

### Descrição

final public function **MongoDB\BSON\PackedArray::offsetSet**([mixed](language.types.mixed.md) `$key`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

Define o valor na chave especificada em `key` para `value`.

### Parâmetros

`key`
:   O índice a ser definido.

`value`
:   O novo valor para `key`.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

- Sempre lança uma [MongoDB\Driver\Exception\LogicException](class.mongodb-driver-exception-logicexception.md).

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
