# Chama manipuladores de sinais para sinais pendentes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-signal-dispatch.php

---

# pcntl\_signal\_dispatch

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

pcntl\_signal\_dispatch — Chama manipuladores de sinais para sinais pendentes

### Descrição

function **pcntl\_signal\_dispatch**(): [bool](language.types.boolean.md)

A função **pcntl\_signal\_dispatch()** chama os manipuladores de sinal
instalados por [pcntl\_signal()](function.pcntl-signal.md) para cada sinal
pendente.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **pcntl\_signal\_dispatch()****

```
<?php
echo "Instalando o manipulador de sinal...\n";
pcntl_signal(SIGHUP,  function($signo) {
     echo "manipulador de sinal chamado\n";
});

echo "Gerando sinal SIGHUP para si mesmo...\n";
posix_kill(posix_getpid(), SIGHUP);

echo "Despachando...\n";
pcntl_signal_dispatch();

echo "Feito\n";

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Instalando o manipulador de sinal...
Gerando sinal SIGHUP para si mesmo...
Despachando...
manipulador de sinal chamado
Feito
```

### Veja também

- [pcntl\_signal()](function.pcntl-signal.md) - Instala um manipulador de sinal
- [pcntl\_sigprocmask()](function.pcntl-sigprocmask.md) - Define e recupera sinais bloqueados
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
