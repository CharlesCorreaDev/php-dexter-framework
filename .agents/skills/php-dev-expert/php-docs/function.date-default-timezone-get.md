# Retorna o fuso horário padrão usado por todas as funções de data/horário em um script

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.date-default-timezone-get.php

---

# date\_default\_timezone\_get

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

date\_default\_timezone\_get — 
Retorna o fuso horário padrão usado por todas as funções de data/horário em um script

### Descrição

function **date\_default\_timezone\_get**(): [string](language.types.string.md)

Em ordem de preferência, essa função retorna o fuso horário padrão:

- Lendo o fuso horário configurado pela função
  [date\_default\_timezone\_set()](function.date-default-timezone-set.md) (se existir)
- Lendo o valor da opção [date.timezone](datetime.configuration.md#ini.date.timezone) do arquivo INI
  (se configurada)

Se nenhuma das opções acima tiver êxito, a função **date\_default\_timezone\_get()**
retornará o fuso horário padrão `UTC`.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma [string](language.types.string.md).

### Examples

**Exemplo #1 Lendo o fuso horário padrão**

```
<?php
date_default_timezone_set('Europe/London');

if (date_default_timezone_get()) {
    echo 'date_default_timezone_set: ' . date_default_timezone_get() . "\n";
}

if (ini_get('date.timezone')) {
    echo 'date.timezone: ' . ini_get('date.timezone');
}
```

O exemplo acima produzirá
algo semelhante a:

```
date_default_timezone_set: Europe/London
date.timezone: Europe/London
```

**Exemplo #2 Lendo a abreviação de um fuso horário**

```
<?php
date_default_timezone_set('America/Los_Angeles');
$ts = mktime(0, 0, 0, 1, 1, 2024);
echo date_default_timezone_get() . ' => ' . date('e') . ' => ' . date('T', $ts);
```

O exemplo acima produzirá:

```
America/Los_Angeles => America/Los_Angeles => PST
```

### Veja também

- [date\_default\_timezone\_set()](function.date-default-timezone-set.md) - Configura o fuso horário padrão utilizado por todas as funções de data/horário em um script
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
