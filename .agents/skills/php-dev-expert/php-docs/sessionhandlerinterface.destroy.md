# Destrói uma sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sessionhandlerinterface.destroy.php

---

# SessionHandlerInterface::destroy

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

SessionHandlerInterface::destroy — Destrói uma sessão

### Descrição

public function **SessionHandlerInterface::destroy**([string](language.types.string.md) `$id`): [bool](language.types.boolean.md)

Destrói uma sessão. Chamada por [session\_regenerate\_id()](function.session-regenerate-id.md) (se $destroy = **`true`**),
[session\_destroy()](function.session-destroy.md) e quando [session\_decode()](function.session-decode.md) falhar.

### Parâmetros

`id`
:   O ID da sessão a ser destruída.

### Valor Retornado

O valor retornado (geralmente **`true`** em caso de sucesso, **`false`** em caso de falha). Note que este valor é retornado internamente ao PHP para processamento.

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
