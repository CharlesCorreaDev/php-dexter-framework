# Retorna a versão da cifra usada pela conexão SSL atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbufferevent.sslgetcipherversion.php

---

# EventBufferEvent::sslGetCipherVersion

(PECL event >= 1.10.0)

EventBufferEvent::sslGetCipherVersion — Retorna a versão da cifra usada pela conexão SSL atual

### Descrição

public
function **EventBufferEvent::sslGetCipherVersion**(): [string](language.types.string.md)

Recupera a versão da cifra usada pela conexão SSL atual.

> **Nota**:
>
> Esta função está disponível somente se
> `Event`
> for compilado com suporte OpenSSL.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a versão atual da cifra da conexão SSL ou **`false`** em caso de erro.

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
