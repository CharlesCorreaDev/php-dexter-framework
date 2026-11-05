# Obtém a média de carga do sistema

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sys-getloadavg.php

---

# sys\_getloadavg

(PHP 5 >= 5.1.3, PHP 7, PHP 8)

sys\_getloadavg — Obtém a média de carga do sistema

### Descrição

function **sys\_getloadavg**(): [array](language.types.array.md)|[false](language.types.singleton.md)

Retorna três amostras representando a carga média do sistema
(o número de processos na fila de execução do sistema) nos últimos 1, 5 e 15
minutos, respectivamente. Retorna **`false`** em caso de falha.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um [array](language.types.array.md) com três amostras (últimos 1, 5 e 15
minutos).

### Examples

**Exemplo #1 Um exemplo de **sys\_getloadavg()****

```
<?php
$load = sys_getloadavg();
if ($load[0] > 0.80) {
    header('HTTP/1.1 503 Muito ocupado, tente novamente mais tarde');
    die('Servidor muito ocupado. Por favor tente novamente mais tarde.');
}
?>
```

### Notas

> **Nota**:
>
> Esta função não foi
> implementada em plataformas Windows.

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
