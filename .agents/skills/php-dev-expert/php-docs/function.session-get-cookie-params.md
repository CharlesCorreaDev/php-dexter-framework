# Obtém os parâmetros do cookie da sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.session-get-cookie-params.php

---

# session\_get\_cookie\_params

(PHP 4, PHP 5, PHP 7, PHP 8)

session\_get\_cookie\_params — Obtém os parâmetros do cookie da sessão

### Descrição

function **session\_get\_cookie\_params**(): [array](language.types.array.md)

Obtém os parâmetros do cookie da sessão.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array com informação do cookie da sessão atual. O array contém
os seguintes items:

- ["lifetime"](session.configuration.md#ini.session.cookie-lifetime) - A
  duração do cookie em segundos.
- ["path"](session.configuration.md#ini.session.cookie-path) - O caminho onde
  a informação está armazenada.
- ["domain"](session.configuration.md#ini.session.cookie-domain) - O domínio
  do cookie.
- ["secure"](session.configuration.md#ini.session.cookie-secure) - O cookie
  deve ser enviado apenas em conexões seguras.
- ["httponly"](session.configuration.md#ini.session.cookie-httponly) - O
  cookie pode ser acessado somente atráves do protocolo HTTP.
- ["samesite"](session.configuration.md#ini.session.cookie-samesite) - Controla
  o envio entre domínios do cookie.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.3.0 | A entrada "samesite" foi adicionada ao array retornado. |

### Veja também

- [session.cookie\_lifetime](session.configuration.md#ini.session.cookie-lifetime)
- [session.cookie\_path](session.configuration.md#ini.session.cookie-path)
- [session.cookie\_domain](session.configuration.md#ini.session.cookie-domain)
- [session.cookie\_secure](session.configuration.md#ini.session.cookie-secure)
- [session.cookie\_httponly](session.configuration.md#ini.session.cookie-httponly)
- [session.cookie\_samesite](session.configuration.md#ini.session.cookie-samesite)
- [session\_set\_cookie\_params()](function.session-set-cookie-params.md) - Define os parâmetros do cookie de sessão

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
