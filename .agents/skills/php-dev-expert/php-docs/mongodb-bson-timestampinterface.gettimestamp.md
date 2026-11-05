# Retorna o componente de timestamp deste TimestampInterface

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-timestampinterface.gettimestamp.php

---

# MongoDB\BSON\TimestampInterface::getTimestamp

(mongodb >=1.3.0)

MongoDB\BSON\TimestampInterface::getTimestamp — Retorna o componente de timestamp deste TimestampInterface

### Descrição

abstract public function **MongoDB\BSON\TimestampInterface::getTimestamp**(): [int](language.types.integer.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o componente de timestamp deste TimestampInterface.

**Aviso**

Em sistemas de 32 bits, este método pode retornar um número negativo. Embora as
partes de incremento e timestamp do tipo Timestamp do BSON consistam em dois
valores sem sinal de 32 bits, o PHP não pode representá-los em plataformas de 32 bits.

### Veja também

- [MongoDB\BSON\Timestamp::getTimestamp()](mongodb-bson-timestamp.gettimestamp.md) - Retorna o componente de timestamp deste Timestamp

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
