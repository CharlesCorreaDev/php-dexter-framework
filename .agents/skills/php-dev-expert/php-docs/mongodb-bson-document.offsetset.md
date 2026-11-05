# Implementação de ArrayAccess

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-document.offsetset.php

---

# MongoDB\BSON\Document::offsetSet

(mongodb >=1.17.0)

MongoDB\BSON\Document::offsetSet — Implementação de [ArrayAccess](class.arrayaccess.md)

### Descrição

final public function **MongoDB\BSON\Document::offsetSet**([mixed](language.types.mixed.md) `$key`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

Define o valor na chave especificada `key` para `value`.

### Parâmetros

`key`
:   O índice da chave sendo definida.

`value`
:   O novo valor para a chave `key`.

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
