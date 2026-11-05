# Define e recupera sinais bloqueados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-sigprocmask.php

---

# pcntl\_sigprocmask

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

pcntl\_sigprocmask — Define e recupera sinais bloqueados

### Descrição

function **pcntl\_sigprocmask**([int](language.types.integer.md) `$mode`, [array](language.types.array.md) `$signals`, [array](language.types.array.md) `&$old_signals` = **`null`**): [bool](language.types.boolean.md)

A função **pcntl\_sigprocmask()** adiciona, remove ou define sinais
bloqueados, dependendo do parâmetro `mode`.

### Parâmetros

`mode`
:   Define o comportamento de **pcntl\_sigprocmask()**. Valores
    possíveis:

    - **`SIG_BLOCK`**: Adiciona os sinais aos
      sinais atualmente bloqueados.
    - **`SIG_UNBLOCK`**: Remove os sinais dos
      sinais atualmente bloqueados.
    - **`SIG_SETMASK`**: Substitui os sinais atualmente
      bloqueados pela lista de sinais fornecida.

`signals`
:   Lista de sinais.

`old_signals`
:   O parâmetro `old_signals` é definido como um array
    contendo a lista dos sinais bloqueados anteriormente.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Um [ValueError](class.valueerror.md) é lançado se `signal` estiver vazio. |
| 8.4.0 | Um [TypeError](class.typeerror.md) é lançado se o valor `signal` não for um [int](language.types.integer.md). |
| 8.4.0 | Um [ValueError](class.valueerror.md) é lançado se o valor `signal` for inválido. |
| 8.4.0 | Um [ValueError](class.valueerror.md) é lançado se o valor de `mode` não for **`SIG_BLOCK`**, **`SIG_UNBLOCK`** ou **`SIG_SETMASK`**. |

### Examples

**Exemplo #1 Exemplo de **pcntl\_sigprocmask()****

```
<?php
pcntl_sigprocmask(SIG_BLOCK, array(SIGHUP));
$oldset = array();
pcntl_sigprocmask(SIG_UNBLOCK, array(SIGHUP), $oldset);
?>
```

### Veja também

- [pcntl\_sigwaitinfo()](function.pcntl-sigwaitinfo.md) - Espera por sinais
- [pcntl\_sigtimedwait()](function.pcntl-sigtimedwait.md) - Aguarda sinais, com tempo limite

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
