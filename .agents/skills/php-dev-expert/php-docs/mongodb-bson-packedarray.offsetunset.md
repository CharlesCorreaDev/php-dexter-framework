# Implementação de ArrayAccess

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-packedarray.offsetunset.php

---

# MongoDB\BSON\PackedArray::offsetUnset

(mongodb >=1.17.0)

MongoDB\BSON\PackedArray::offsetUnset — Implementação de [ArrayAccess](class.arrayaccess.md)

### Descrição

final public function **MongoDB\BSON\PackedArray::offsetUnset**([mixed](language.types.mixed.md) `$key`): [void](language.types.void.md)

Remove a definição do valor no índice especificado.

### Parâmetros

`key`
:   O índice que será removido.

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
