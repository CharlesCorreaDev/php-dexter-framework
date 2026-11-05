# Cria um novo objeto DateTimeZone

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetimezone.construct.php

---

# DateTimeZone::\_\_construct

# timezone\_open

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

DateTimeZone::\_\_construct -- timezone\_open — Cria um novo objeto DateTimeZone

### Descrição

Estilo orientado a objetos

public function **DateTimeZone::\_\_construct**([string](language.types.string.md) `$timezone`)

Estilo procedural

function [timezone\_open](function.timezone-open.md)([string](language.types.string.md) `$timezone`): [DateTimeZone](class.datetimezone.md)|[false](language.types.singleton.md)

Cria um novo objeto DateTimeZone.

Um objeto DateTimeZone dá acesso a três diferentes tipos de regras de
fuso horário: deslocamento UTC (tipo `1`), abreviação de fuso (tipo
`2`), e [identificadores
de fuso horário](timezones.md) como publicado no banco de dados de fusos horários da IANA
(tipo `3`).

O objeto DateTimeZone pode ser anexado aos objetos [DateTime](class.datetime.md) e
[DateTimeImmutable](class.datetimeimmutable.md) para que sejam capazes de mostrar o
fuso horário encapsulado por estes objetos em um fuso horário local.

### Parâmetros

`timezone`
:   Um dos [nomes de fuso horário](timezones.md) suportados,
    um valor de deslocamento (+0200), ou um identificador de fuso (BST).

### Valor Retornado

Retorna um objeto [DateTimeZone](class.datetimezone.md) em caso de sucesso.
Estilo procedural retorna **`false`** em caso de falha.

### Erros/Exceções

Este método lança uma exceção
[DateInvalidTimeZoneException](class.dateinvalidtimezoneexception.md) se o fuso horário informado não
for reconhecido com um fuso horário válido. Antes do PHP 8.3, era uma
exceção [Exception](class.exception.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Valores inválidos agora retornam uma [DateInvalidTimeZoneException](class.dateinvalidtimezoneexception.md) em vez de uma [Exception](class.exception.md) genérica. |

### Examples

**Exemplo #1 Criando e anexando DateTimeZone a um DateTimeImmutable**

```
<?php
$d = new DateTimeImmutable("2022-06-02 15:44:48 UTC");

$timezones = [ 'Europe/London', 'GMT+04:45', '-06:00', 'CEST' ];

foreach ($timezones as $tz) {
    $tzo = new DateTimeZone($tz);

    $local = $d->setTimezone($tzo);
    echo $local->format(DateTimeInterface::RFC2822 . ' — e') . "\n";
}
```

O exemplo acima produzirá:

```
Thu, 02 Jun 2022 16:44:48 +0100 — Europe/London
Thu, 02 Jun 2022 20:29:48 +0445 — +04:45
Thu, 02 Jun 2022 09:44:48 -0600 — -06:00
Thu, 02 Jun 2022 17:44:48 +0200 — CEST
```

**Exemplo #2 Capturando erros na instanciação de [DateTimeZone](class.datetimezone.md)**

```
<?php
// Lidando com erros através de captura de exceções
$timezones = array('Europe/London', 'Mars/Phobos', 'Jupiter/Europa');

foreach ($timezones as $tz) {
    try {
        $mars = new DateTimeZone($tz);
        echo $mars->getName() . "\n";
    } catch(Exception $e) {
        echo $e->getMessage() . "\n";
    }
}
```

O exemplo acima produzirá:

```
Europe/London
DateTimeZone::__construct() [datetimezone.--construct]: Unknown or bad timezone (Mars/Phobos)
DateTimeZone::__construct() [datetimezone.--construct]: Unknown or bad timezone (Jupiter/Europa)
```

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
