# Retorna o timestamp Unix atual com microssegundos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.microtime.php

---

# microtime

(PHP 4, PHP 5, PHP 7, PHP 8)

microtime — Retorna o timestamp Unix atual com microssegundos

### Descrição

function **microtime**([bool](language.types.boolean.md) `$as_float` = **`false`**): [string](language.types.string.md)|[float](language.types.float.md)

A função **microtime()** retorna o timestamp atual com
microssegundos. Esta função está disponível apenas em sistemas operacionais que suportam
a chamada de sistema gettimeofday().

Para medições de desempenho, é recomendado utilizar [hrtime()](function.hrtime.md).

### Parâmetros

`as_float`
:   Se utilizada e definida como **`true`**, a função **microtime()** retornará um
    [float](language.types.float.md) em vez de uma [string](language.types.string.md), como descrito na
    seção de valores de retorno a seguir.

### Valor Retornado

Por padrão, a função **microtime()** retorna uma [string](language.types.string.md) no
formato "msec sec", onde `sec` é o número de segundos
desde a época Unix (1 de Janeiro de 1970, 00:00:00 GMT), e `msec`
mensura os microssegundos que se passaram desde `sec`
e também é expressa em segundos, na forma de fração decimal.

Se o parâmetro opcional `as_float` for definido para **`true`**,
a função **microtime()** retorna um [float](language.types.float.md) que
representa a hora atual em segundos desde a época Unix com precisão
de microssegundos.

### Examples

**Exemplo #1 Cronometrando a execução do script**

```
<?php
$time_start = microtime(true);

// Espera um momento
usleep(10_000);

$time_end = microtime(true);
$time = $time_end - $time_start;

print "Nada foi feito em $time segundo(s).\n";
```

**Exemplo #2 **microtime()** e `REQUEST_TIME_FLOAT`**

```
<?php
// Tempo de espera aleatório
usleep(random_int(10_000, 1_000_000));

// REQUEST_TIME_FLOAT está disponível no array superglobal $_SERVER.
// Ele contém o timestamp do início da requisição com precisão de microssegundos.
$time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];

echo "Nada foi feito em $time segundo(s).\n";
```

### Veja também

- [time()](function.time.md) - Retorna o timestamp Unix atual
- [hrtime()](function.hrtime.md) - Obtém o tempo de alta resolução do sistema

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
