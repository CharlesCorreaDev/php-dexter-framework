# Retorna o valor de uma chave no documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-document.offsetget.php

---

# MongoDB\BSON\Document::offsetGet

(mongodb >=1.17.0)

MongoDB\BSON\Document::offsetGet — Retorna o valor de uma chave no documento

### Descrição

final public function **MongoDB\BSON\Document::offsetGet**([mixed](language.types.mixed.md) `$key`): [mixed](language.types.mixed.md)

### Parâmetros

`key`
:   A chave a ser recuperada do documento.

### Valor Retornado

Retorna o valor associado com a chave informada. Se a chave não estiver presente no
documento, uma exceção é lançada.

> **Nota**:
>
> Ao encontrar um valor codificado como inteiro de 64 bits no documento BSON,
> o valor de retorno deste método será uma instância de
> [MongoDB\BSON\Int64](class.mongodb-bson-int64.md).

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma [MongoDB\Driver\Exception\RuntimeException](class.mongodb-driver-exception-runtimeexception.md) se a chave não estiver presente no documento.

### Veja também

- [ArrayAccess::offsetGet()](arrayaccess.offsetget.md) - Posição a ser obtida
- [MongoDB\BSON\Document::get()](mongodb-bson-document.get.md) - Retorna o valor de uma chave no documento

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
