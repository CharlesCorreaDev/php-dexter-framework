# Tenta adquirir o bloqueio sem bloquear

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-coroutine-lock.trylock.php

---

# Swoole\Coroutine\Lock::trylock

(No version information available, might only be in Git)

Swoole\Coroutine\Lock::trylock — Tenta adquirir o bloqueio sem bloquear

### Descrição

public function **Swoole\Coroutine\Lock::trylock**(): [bool](language.types.boolean.md)

Ao chamar a operação de bloqueio, se o bloqueio já estiver sendo mantido por outra corrotina,
a função retornará imediatamente falso sem suspender a corrotina atual
ou ceder o controle da CPU. Este design não bloqueante permite que o chamador lide com flexibilidade
com situações de contenção, como novas tentativas, desistências ou execução de outra lógica.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o bloqueio foi adquirido com sucesso,
**`false`** se o bloqueio não estiver disponível.

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
