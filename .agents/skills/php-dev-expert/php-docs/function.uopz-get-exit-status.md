# Recupera o último status de saída definido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.uopz-get-exit-status.php

---

# uopz\_get\_exit\_status

(PECL uopz 5, PECL uopz , PECL uopz 7)

uopz\_get\_exit\_status — Recupera o último status de saída definido

### Descrição

function **uopz\_get\_exit\_status**(): [mixed](language.types.mixed.md)

Recupera o último status de saída definido, ou seja, o valor passado para
[exit()](function.exit.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Esta função retorna o último status de saída, ou **`null`** se [exit()](function.exit.md)
não tiver sido chamada.

### Examples

**Exemplo #1 Exemplo de **uopz\_get\_exit\_status()****

```
<?php
exit(123);
echo uopz_get_exit_status();?>
```

O exemplo acima produzirá:

```
123
```

### Notas

**Cuidado**

[OPcache](book.opcache.md) otimiza o código morto após a saída incondicional.

### Veja também

- [uopz\_allow\_exit()](function.uopz-allow-exit.md) - Permite o controle sobre o código de operação de saída desabilitado

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
