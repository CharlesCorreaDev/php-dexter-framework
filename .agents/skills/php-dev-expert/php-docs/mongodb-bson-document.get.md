# Retorna o valor de uma chave no documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-document.get.php

---

# MongoDB\BSON\Document::get

(mongodb >=1.16.0)

MongoDB\BSON\Document::get — Retorna o valor de uma chave no documento

### Descrição

final public function **MongoDB\BSON\Document::get**([string](language.types.string.md) `$key`): [mixed](language.types.mixed.md)

### Parâmetros

`key` ([string](language.types.string.md))
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

- [MongoDB\BSON\Document::has()](mongodb-bson-document.has.md) - Informa se uma chave está presente no documento
- [» Tipos BSON](https://www.mongodb.com/docs/manual/reference/bson-types/)

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
