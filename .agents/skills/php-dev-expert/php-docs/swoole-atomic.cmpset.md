# Compara e define o valor do objeto atômico.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-atomic.cmpset.php

---

# Swoole\Atomic::cmpset

(PECL swoole >= 1.9.0)

Swoole\Atomic::cmpset — Compara e define o valor do objeto atômico.

### Descrição

public function **Swoole\Atomic::cmpset**([int](language.types.integer.md) `$cmp_value`, [int](language.types.integer.md) `$new_value`): [int](language.types.integer.md)

### Parâmetros

`cmp_value`
:   O valor a ser comparado com o valor atual do objeto atômico.

`new_value`
:   O valor a ser definido para o objeto atômico se o cmp\_value for o mesmo que o valor
    atual do objeto atômico.

### Valor Retornado

O novo valor do objeto atômico.

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
