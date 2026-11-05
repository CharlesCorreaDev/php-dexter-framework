# Obtém e/ou define o módulo da sessão atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.session-module-name.php

---

# session\_module\_name

(PHP 4, PHP 5, PHP 7, PHP 8)

session\_module\_name — Obtém e/ou define o módulo da sessão atual

### Descrição

function **session\_module\_name**([?](language.types.null.md)[string](language.types.string.md) `$module` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

**session\_module\_name()** obtém o nome do módulo da
sessão atual, que também é conhecido como
[session.save\_handler](session.configuration.md#ini.session.save-handler).

### Parâmetros

`module`
:   Se `module` é especificado e não **`null`**, então é este módulo que será
    usado.
    É proibido passar `"user"` para este parâmetro. Em vez de
    [session\_set\_save\_handler()](function.session-set-save-handler.md) deve ser chamado para definir um usuário
    manipulador de sessão definido.

### Valor Retornado

Retorna o nome do módulo da sessão atual, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `module` é anulável agora. |
| 7.2.0 | Agora é explicitamente proibido definir o nome do módulo como `"user"`. Anteriormente, isso era silenciosamente ignorado. |

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
