# Define sinalizadores de gancho para corrotina

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-runtime.set-hook-flags.php

---

# Swoole\Runtime::setHookFlags

(No version information available, might only be in Git)

Swoole\Runtime::setHookFlags — Define sinalizadores de gancho para corrotina

### Descrição

public static function **Swoole\Runtime::setHookFlags**([int](language.types.integer.md) `$flags`): [bool](language.types.boolean.md)

Define os sinalizadores de gancho para suporte à corrotina.
Isso altera dinamicamente os sinalizadores de gancho em tempo de execução.

### Parâmetros

`flags`
:   Máscara de bits de sinalizadores que especificam quais funções devem ser conectadas. Os mesmos sinalizadores de enableCoroutine.

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
