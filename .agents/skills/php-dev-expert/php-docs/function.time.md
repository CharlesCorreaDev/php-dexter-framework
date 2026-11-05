# Retorna o timestamp Unix atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.time.php

---

# time

(PHP 4, PHP 5, PHP 7, PHP 8)

time — Retorna o timestamp Unix atual

### Descrição

function **time**(): [int](language.types.integer.md)

Retorna o horário atual medido como o número de segundos desde
a Época Unix (1 de janeiro de 1970 00:00:00 GMT).

> **Nota**:
>
> Timestamps Unix não contêm nenhuma informação sobre fuso
> horário local. Recomenda-se usar a classe
> [DateTimeImmutable](class.datetimeimmutable.md) para lidar com informações de data e
> horário para evitar as armadilhas que vêm com o uso exclusivo de
> timestamps Unix.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o timestamp atual.

### Examples

**Exemplo #1 Exemplo de **time()****

```
<?php
echo 'Agora: '. time();
```

O exemplo acima produzirá
algo semelhante a:

```
Agora: 1660338149
```

### Notas

**Dica**

O timestamp do início da requisição está disponível na variável
[$\_SERVER['REQUEST\_TIME']](reserved.variables.server.md).

### Veja também

- [DateTimeImmutable](class.datetimeimmutable.md)
- [date()](function.date.md) - Formata um timestamp Unix
- [microtime()](function.microtime.md) - Retorna o timestamp Unix atual com microssegundos

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
