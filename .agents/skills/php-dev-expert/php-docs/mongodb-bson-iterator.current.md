# Retorna o elemento atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-iterator.current.php

---

# MongoDB\BSON\Iterator::current

(mongodb >=1.16.0)

MongoDB\BSON\Iterator::current — Retorna o elemento atual

### Descrição

public function **MongoDB\BSON\Iterator::current**(): [mixed](language.types.mixed.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o valor do documento atual.

> **Nota**:
>
> Ao encontrar um valor codificado um inteiro de 64 bits na estrutura BSON,
> o valor de retorno deste métodos será uma instância
> [MongoDB\BSON\Int64](class.mongodb-bson-int64.md).

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma [MongoDB\Driver\Exception\LogicException](class.mongodb-driver-exception-logicexception.md) se o iterador não for válido.

### Veja também

- [Iterator::current()](iterator.current.md) - Retorna o elemento atual

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
