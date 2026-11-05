# Liga/desliga o descarregamento instantânea

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-dispatcher.flushinstantly.php

---

# Yaf\_Dispatcher::flushInstantly

(Yaf >=1.0.0)

Yaf\_Dispatcher::flushInstantly — Liga/desliga o descarregamento instantânea

### Descrição

public function **Yaf\_Dispatcher::flushInstantly**([bool](language.types.boolean.md) `$flag` = ?): [Yaf\_Dispatcher](class.yaf-dispatcher.md)

### Parâmetros

`flag`
:   Um booleano.
    > **Nota**:
    >
    > Desde a versão 2.2.0, se este parâmetro não for informado, o estado atual
    > será retornado.

### Valor Retornado

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
