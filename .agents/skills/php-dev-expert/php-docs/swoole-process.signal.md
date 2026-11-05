# Envia sinal para os processos filhos.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-process.signal.php

---

# Swoole\Process::signal

(PECL swoole >= 1.9.0)

Swoole\Process::signal — Envia sinal para os processos filhos.

### Descrição

public static function **Swoole\Process::signal**([string](language.types.string.md) `$signal_no`, [callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

### Parâmetros

`signal_no`

`callback`

### Valor Retornado

Se o sinal for enviado com sucesso, retorna TRUE, caso contrário, retorna FALSE.

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
