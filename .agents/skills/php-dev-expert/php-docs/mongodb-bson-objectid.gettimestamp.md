# Retorna o componente timestamp deste ObjectId

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-objectid.gettimestamp.php

---

# MongoDB\BSON\ObjectId::getTimestamp

(mongodb >=1.2.0)

MongoDB\BSON\ObjectId::getTimestamp — Retorna o componente timestamp deste ObjectId

### Descrição

final public function **MongoDB\BSON\ObjectId::getTimestamp**(): [int](language.types.integer.md)

O componente timestamp de um ObjectId são seus 32 bits mais significativos, o que
denota o número de segundos desde a época Unix. Este valor é lido como um
número inteiro sem sinal de 32 bits com ordem de bytes big-endian.

> **Nota**:
>
> Como o tipo inteiro do PHP possui sinal, alguns valores retornados por este
> método podem aparecer como números inteiros negativos em plataformas de 32 bits. O
> formatador `"%u"` de [sprintf()](function.sprintf.md) pode ser
> usado para obter uma representação em string do valor decimal sem sinal.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o componente timestamp deste ObjectId.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\ObjectId::getTimestamp()****

```
<?php

var_dump((new MongoDB\BSON\ObjectId())->getTimestamp());

var_dump((new MongoDB\BSON\ObjectId('0000002a0000000000000000'))->getTimestamp());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
integer(1484854719)
integer(42)
```

### Veja também

- [» Referência sobre ObjectId](https://www.mongodb.com/docs/manual/reference/bson-types/#objectid)
- [» Tipos BSON: ObjectId](https://www.mongodb.com/docs/manual/reference/bson-types/#objectid)

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
