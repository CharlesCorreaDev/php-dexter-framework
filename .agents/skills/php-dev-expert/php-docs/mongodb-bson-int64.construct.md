# Constrói um novo Int64

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-int64.construct.php

---

# MongoDB\BSON\Int64::\_\_construct

(mongodb >=1.5.0)

MongoDB\BSON\Int64::\_\_construct — Constrói um novo Int64

### Descrição

final public function **MongoDB\BSON\Int64::\_\_construct**([int](language.types.integer.md)|[string](language.types.string.md) `$value`)

Cria uma nova instância de [MongoDB\BSON\Int64](class.mongodb-bson-int64.md) para o
valor inteiro informado.

### Parâmetros

`value` ([int](language.types.integer.md)|[string](language.types.string.md))
:   O valor a ser atribuído à instância **Int64**. Este
    valor pode ser fornecido como um [int](language.types.integer.md) ou [string](language.types.string.md), sendo
    o último necessário em plataformas de 32 bits para representar valores de 64 bits.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 1.16.0 | Este método foi tornado público para oferecer suporte à criação de instâncias Int64 ao trabalhar com BSON bruto. |

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) se a string `value` não puder ser interpretada como um inteiro de 64 bits.

### Veja também

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
