# Obtém a variável SERVER

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-request-abstract.getserver.php

---

# Yaf\_Request\_Abstract::getServer

(Yaf >=1.0.0)

Yaf\_Request\_Abstract::getServer — Obtém a variável SERVER

### Descrição

public function **Yaf\_Request\_Abstract::getServer**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$default` = ?): [void](language.types.void.md)

Obtém a variável SERVER.

### Parâmetros

`name`
:   O nome da variável.

`default`
:   Se este parâmetro for informado, seu valor será retornado se a variável
    não puder ser encontrada.

### Valor Retornado

### Veja também

- [Yaf\_Request\_Abstract::getParam()](yaf-request-abstract.getparam.md) - Obtém o parâmetro da chamada
- [Yaf\_Request\_Abstract::getEnv()](yaf-request-abstract.getenv.md) - Obtém a variável ENV

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
