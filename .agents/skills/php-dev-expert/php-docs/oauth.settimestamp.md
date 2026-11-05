# Define o timestamp

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauth.settimestamp.php

---

# OAuth::setTimestamp

(PECL OAuth >= 1.0.0)

OAuth::setTimestamp — Define o timestamp

### Descrição

public function **OAuth::setTimestamp**([string](language.types.string.md) `$timestamp`): [mixed](language.types.mixed.md)

Define o timestamp OAuth para requisições subsequentes.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`timestamp`
:   O timestamp.

### Valor Retornado

Retorna **`true`**, a menos que `timestamp` seja inválido, neste
caso retorna **`false`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL oauth 1.0.0 | Anteriormente, retornava **`null`** em caso de falha, em vez de **`false`**. |

### Veja também

- [OAuth::setNonce()](oauth.setnonce.md) - Define o nonce para requisições subsequentes

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
