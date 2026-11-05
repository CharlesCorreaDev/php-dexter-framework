# Desserializa um Datetime

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetime.unserialize.php

---

# DateTime::\_\_unserialize

# DateTimeImmutable::\_\_unserialize

# DateTimeInterface::\_\_unserialize

(PHP 8 >= 8.2.0)

DateTime::\_\_unserialize -- DateTimeImmutable::\_\_unserialize -- DateTimeInterface::\_\_unserialize — Desserializa um Datetime

### Descrição

public function **DateTime::\_\_unserialize**([array](language.types.array.md) `$data`): [void](language.types.void.md)

public function **DateTimeImmutable::\_\_unserialize**([array](language.types.array.md) `$data`): [void](language.types.void.md)

public function **DateTimeInterface::\_\_unserialize**([array](language.types.array.md) `$data`): [void](language.types.void.md)

O manipulador [\_\_unserialize()](language.oop5.magic.md#object.unserialize).

### Parâmetros

`data`
:   O [DateTime](class.datetime.md) serializado.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **DateTime::\_\_unserialize()****

```
<?php

class CustomDateTimeImmutable extends DateTimeImmutable
{
    #[\Override]
    public function __unserialize(array $data): void
    {
        echo "Hora de `{$data['to']}`:\n\n";

        parent::__construct($data['date'], new DateTimeZone($data['timezone']));
    }
}

$serializedData = 'O:23:"CustomDateTimeImmutable":4:{s:4:"date";s:25:"2025-03-27T00:00:00-03:00";s:9:"timestamp";i:1743033600;s:8:"timezone";s:17:"America/Sao_Paulo";s:2:"to";s:26:"tomar uma xícara de café";}';

var_dump(unserialize($serializedData));
```

O exemplo acima produzirá:

```
Hora de `tomar uma xícara de café`:

object(CustomDateTimeImmutable)#1 (3) {
  ["date"]=>
  string(26) "2025-03-27 00:00:00.000000"
  ["timezone_type"]=>
  int(1)
  ["timezone"]=>
  string(6) "-03:00"
}
```

### Notas

**Aviso**

Um [Error](class.error.md) é lançado ao tentar
desserializar um objeto [DateTime](class.datetime.md) personalizado se
[\_\_serialize()](language.oop5.magic.md#object.serialize) estiver definido, mas
[\_\_unserialize()](language.oop5.magic.md#object.unserialize) estiver ausente.

### Veja também

- [DateTime::\_\_serialize()](datetime.serialize.md) - Serializa um DateTime

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
