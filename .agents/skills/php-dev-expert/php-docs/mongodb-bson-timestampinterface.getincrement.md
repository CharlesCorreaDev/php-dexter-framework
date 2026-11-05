# Retorna o componente de incremento deste TimestampInterface

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-timestampinterface.getincrement.php

---

# MongoDB\BSON\TimestampInterface::getIncrement

(mongodb >=1.3.0)

MongoDB\BSON\TimestampInterface::getIncrement — Retorna o componente de incremento deste TimestampInterface

### Descrição

abstract public function **MongoDB\BSON\TimestampInterface::getIncrement**(): [int](language.types.integer.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o componente de incremento deste TimestampInterface.

**Aviso**

Em sistemas de 32 bits, este método pode retornar um número negativo. Embora as
partes de incremento e timestamp do tipo Timestamp do BSON consistam em dois
valores sem sinal de 32 bits, o PHP não pode representá-los em plataformas de 32 bits.

### Veja também

- [MongoDB\BSON\Timestamp::getIncrement()](mongodb-bson-timestamp.getincrement.md) - Retorna o componente de incremento deste Timestamp

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
