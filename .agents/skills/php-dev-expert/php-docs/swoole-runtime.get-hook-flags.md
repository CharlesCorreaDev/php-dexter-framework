# Obtém os sinalizadores de gancho atuais

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-runtime.get-hook-flags.php

---

# Swoole\Runtime::getHookFlags

(No version information available, might only be in Git)

Swoole\Runtime::getHookFlags — Obtém os sinalizadores de gancho atuais

### Descrição

public static function **Swoole\Runtime::getHookFlags**(): [int](language.types.integer.md)

Obtém os sinalizadores de gancho atuais.
Observe que os sinalizadores retornados podem ser diferentes do que foi definido caso alguns ganchos falhem.

### Parâmetros

Esta função não tem parâmetros.

### Valor Retornado

Retorna os sinalizadores de gancho atuais como uma máscara de bits.

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
