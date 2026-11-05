# Adquire o bloqueio, bloqueando se necessário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-coroutine-lock.lock.php

---

# Swoole\Coroutine\Lock::lock

(No version information available, might only be in Git)

Swoole\Coroutine\Lock::lock — Adquire o bloqueio, bloqueando se necessário

### Descrição

public function **Swoole\Coroutine\Lock::lock**(): [bool](language.types.boolean.md)

Ao executar a operação de bloqueio, se o bloqueio já estiver sendo mantido por outra corrotina,
a corrotina atual cederá ativamente o controle da CPU e entrará em um estado suspenso.
Quando a corrotina que mantém o bloqueio chamar unlock(), a corrotina em espera será
despertada e tentará obter o bloqueio novamente.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o bloqueio foi adquirido com sucesso,
**`false`** caso contrário.

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
