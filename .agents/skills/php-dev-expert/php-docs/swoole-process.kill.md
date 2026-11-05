# Envia sinal para o processo filho.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-process.kill.php

---

# Swoole\Process::kill

(PECL swoole >= 1.9.0)

Swoole\Process::kill — Envia sinal para o processo filho.

### Descrição

public static function **Swoole\Process::kill**([int](language.types.integer.md) `$pid`, [int](language.types.integer.md) `$signal_no` = ?): [bool](language.types.boolean.md)

Envia sinal para o processo filho.

### Parâmetros

`pid`
:   PID do processo

`signal_no`
:   Sinal a ser enviado

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
