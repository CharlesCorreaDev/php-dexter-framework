# Obtém a variável ENV

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-request-abstract.getenv.php

---

# Yaf\_Request\_Abstract::getEnv

(Yaf >=1.0.0)

Yaf\_Request\_Abstract::getEnv — Obtém a variável ENV

### Descrição

public function **Yaf\_Request\_Abstract::getEnv**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$default` = ?): [void](language.types.void.md)

Obtém a variável ENV.

### Parâmetros

`name`
:   O nome da variável.

`default`
:   Se este parâmetro for informado, seu valor será retornado se a variável
    não puder ser encontrada.

### Valor Retornado

Retorna uma string.

### Veja também

- [Yaf\_Request\_Abstract::getServer()](yaf-request-abstract.getserver.md) - Obtém a variável SERVER
- [Yaf\_Request\_Abstract::getParam()](yaf-request-abstract.getparam.md) - Obtém o parâmetro da chamada

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
