# Liga/desliga a saída de depuração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.memcache-debug.php

---

# memcache\_debug

(PECL memcache >= 0.2.0)

memcache\_debug — Liga/desliga a saída de depuração

### Descrição

function **memcache\_debug**([bool](language.types.boolean.md) `$on_off`): [bool](language.types.boolean.md)

**memcache\_debug()** ativa a saída de depuração se o parâmetro
`on_off` for igual a **`true`** e desativa se for
**`false`**.
> **Nota**:
>
> **memcache\_debug()** é acessível somente se o PHP foi construído
> com a opção --enable-debug e sempre retorna **`true`** neste caso.
> Caso contrário, esta função não tem efeito e sempre retorna **`false`**.

### Parâmetros

`on_off`
:   Liga a saída de depuração se for igual a **`true`**.
    Desliga a saída de depuração se for igual a **`false`**.

### Valor Retornado

Retorna **`true`** se o PHP foi construído com a opção --enable-debug, caso contrário
retorna **`false`**.

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
