# Retorna o horário da última atualização do servidor em microssegundos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-serverdescription.getlastupdatetime.php

---

# MongoDB\Driver\ServerDescription::getLastUpdateTime

(mongodb >=1.13.0)

MongoDB\Driver\ServerDescription::getLastUpdateTime — Retorna o horário da última atualização do servidor em microssegundos

### Descrição

final public function **MongoDB\Driver\ServerDescription::getLastUpdateTime**(): [int](language.types.integer.md)

Retorna o horário da última atualização do servidor em microssegundos.

> **Nota**:
>
> O valor retornado é um timestamp monotônico, que começa em um ponto
> arbitrário. Como tal, só é adequado comparar com outros valores de retorno de
> **MongoDB\Driver\ServerDescription::getLastUpdateTime()**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o horário da última atualização do servidor em microssegundos.

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
