# Configura o fuso horário padrão utilizado por todas as funções de data/horário em um script

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.date-default-timezone-set.php

---

# date\_default\_timezone\_set

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

date\_default\_timezone\_set — 
Configura o fuso horário padrão utilizado por todas as funções de data/horário em um script

### Descrição

function **date\_default\_timezone\_set**([string](language.types.string.md) `$timezoneId`): [bool](language.types.boolean.md)

**date\_default\_timezone\_set()** configura o fuso horário padrão
utilizado por todas as funções de data e hora.

Em vez de utilizar essa função para definir o fuso horário padrão no
script, a configuração INI [date.timezone](datetime.configuration.md#ini.date.timezone) também pode ser usada para configurar o fuso horário
padrão.

### Parâmetros

`timezoneId`
:   O identificador do fuso horário, como `UTC`,
    `Africa/Lagos`, `Asia/Hong_Kong`, ou
    `Europe/Lisbon`. A lista de identificadores válidos
    está disponível em [Lista de Fusos Horários Suportados](timezones.md).

### Valor Retornado

A função retorna **`false`** se o
`timezoneId` não for válido, ou **`true`**
caso contrário.

### Examples

**Exemplo #1 Lendo o fuso horário padrão**

```
<?php
date_default_timezone_set('America/Los_Angeles');

$script_tz = date_default_timezone_get();
$ini_tz = ini_get('date.timezone');

if (strcmp($script_tz, $ini_tz)){
    echo 'Fuso horário do script é diferente do definido no INI.';
} else {
    echo 'Fuso horário do script corresponde ao definido no INI.';
}
```

### Veja também

- [date\_default\_timezone\_get()](function.date-default-timezone-get.md) - Retorna o fuso horário padrão usado por todas as funções de data/horário em um script
- [Lista de Fusos Horários Suportados](timezones.md)

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
