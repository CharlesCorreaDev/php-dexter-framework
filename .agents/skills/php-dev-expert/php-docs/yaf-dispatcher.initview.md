# Inicializa a visualização e a retorna

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-dispatcher.initview.php

---

# Yaf\_Dispatcher::initView

(Yaf >=1.0.0)

Yaf\_Dispatcher::initView — Inicializa a visualização e a retorna

### Descrição

public function **Yaf\_Dispatcher::initView**([string](language.types.string.md) `$templates_dir`, [array](language.types.array.md) `$options` = ?): [Yaf\_View\_Interface](class.yaf-view-interface.md)

### Parâmetros

`templates_dir`

`options`

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
