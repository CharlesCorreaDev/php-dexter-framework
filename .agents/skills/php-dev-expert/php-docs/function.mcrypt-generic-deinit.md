# Esta função desinicializa um módulo de criptografia

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mcrypt-generic-deinit.php

---

# mcrypt\_generic\_deinit

(PHP 4 >= 4.0.7, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0)

mcrypt\_generic\_deinit — Esta função desinicializa um módulo de criptografia

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.1.0 e foi
*REMOVIDA* a partir do PHP 7.2.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **mcrypt\_generic\_deinit**([resource](language.types.resource.md) `$td`): [bool](language.types.boolean.md)

Esta função encerra a criptografia especificada pelo descritor de criptografia
(`td`). Ela limpa todos os buffers, mas
não fecha o módulo. É necessário chamar
[mcrypt\_module\_close()](function.mcrypt-module-close.md) por conta própria. Porém, o PHP faz isso
automaticamente no final do script.

### Parâmetros

`td`
:   O descritor de criptografia.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [mcrypt\_module\_open()](function.mcrypt-module-open.md) - Abre o módulo do algoritmo e o modo a ser utilizado
- [mcrypt\_generic\_init()](function.mcrypt-generic-init.md) - Esta função inicializa todos os buffers necessários para criptografia

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
