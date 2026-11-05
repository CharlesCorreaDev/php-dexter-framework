# Retorna o componente de incremento deste Timestamp

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-timestamp.getincrement.php

---

# MongoDB\BSON\Timestamp::getIncrement

(mongodb >=1.3.0)

MongoDB\BSON\Timestamp::getIncrement — Retorna o componente de incremento deste Timestamp

### Descrição

final public function **MongoDB\BSON\Timestamp::getIncrement**(): [int](language.types.integer.md)

O componente de incremento de um Timestamp são seus 32 bits menos significativos,
o que denota o ordinal de incremento para operações dentro de um determinado segundo.
Este valor é lido como um número inteiro sem sinal de 32 bits com ordem de bytes big-endian.

> **Nota**:
>
> Como o tipo inteiro do PHP possui sinal, alguns valores retornados por este
> método podem aparecer como números inteiros negativos em plataformas de 32 bits. O
> formatador `"%u"` de [sprintf()](function.sprintf.md) pode ser
> usado para obter uma representação em string do valor decimal sem sinal.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o componente de incremento deste Timestamp.

**Aviso**

Em sistemas de 32 bits, este método pode retornar um número negativo. Embora as
partes de incremento e timestamp do tipo Timestamp do BSON consistam em dois
valores sem sinal de 32 bits, o PHP não pode representá-los em plataformas de 32 bits.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [» Tipos BSON: Timestamps](https://www.mongodb.com/docs/manual/reference/bson-types/#timestamps)

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
