# Serializa um DateTime

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetime.serialize.php

---

# DateTime::\_\_serialize

# DateTimeImmutable::\_\_serialize

# DateTimeInterface::\_\_serialize

(PHP 8 >= 8.2.0)

DateTime::\_\_serialize -- DateTimeImmutable::\_\_serialize -- DateTimeInterface::\_\_serialize — Serializa um DateTime

### Descrição

public function **DateTime::\_\_serialize**(): [array](language.types.array.md)

public function **DateTimeImmutable::\_\_serialize**(): [array](language.types.array.md)

public function **DateTimeInterface::\_\_serialize**(): [array](language.types.array.md)

O manipulador [\_\_serialize()](language.oop5.magic.md#object.serialize).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A representação serializada do objeto
[DateTime](class.datetime.md).

### Examples

**Exemplo #1 Exemplo de **DateTime::\_\_serialize()****

```
<?php

class CustomDateTimeImmutable extends DateTimeImmutable
{
    #[\Override]
    public function __serialize(): array
    {
        return [
            'date' => $this->format(DateTimeInterface::W3C),
            'timestamp' => $this->getTimestamp(),
            'timezone' => $this->getTimeZone()->getName(),
            'to' => 'Tome uma xícara de café',
        ];
    }
}

$date = new CustomDateTimeImmutable('2025-03-27');
var_dump(serialize($date));
```

O exemplo acima produzirá:

```
string(190) "O:23:"CustomDateTimeImmutable":4:{s:4:"date";s:25:"2025-03-27T00:00:00-03:00";s:9:"timestamp";i:1743044400;s:8:"timezone";s:17:"America/Sao_Paulo";s:2:"to";s:25:"Tome uma xícara de café";}"
```

### Notas

**Aviso**

Um [Error](class.error.md) é lançado ao tentar
desserializar um objeto [DateTime](class.datetime.md) personalizado se
[\_\_serialize()](language.oop5.magic.md#object.serialize) estiver definido, mas
[\_\_unserialize()](language.oop5.magic.md#object.unserialize) estiver ausente.

### Veja também

- [DateTime::\_\_unserialize()](datetime.unserialize.md) - Desserializa um Datetime

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
