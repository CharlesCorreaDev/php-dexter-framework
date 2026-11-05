# Ativa o coletor de referência circular

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gc-enable.php

---

# gc\_enable

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

gc\_enable — Ativa o coletor de referência circular

### Descrição

function **gc\_enable**(): [void](language.types.void.md)

Ativa o coletor de referência circular, definindo
[zend.enable\_gc](info.configuration.md#ini.zend.enable-gc) para `1`.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [Coleta de Lixo](features.gc.md)

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
