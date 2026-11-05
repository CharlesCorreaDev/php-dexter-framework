# Retorna o nome da cifra atual da conexão SSL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbufferevent.sslgetciphername.php

---

# EventBufferEvent::sslGetCipherName

(PECL event >= 1.10.0)

EventBufferEvent::sslGetCipherName — Retorna o nome da cifra atual da conexão SSL

### Descrição

public
function **EventBufferEvent::sslGetCipherName**(): [string](language.types.string.md)

Recupera o nome da cifra usada pela conexão SSL atual.

> **Nota**:
>
> Esta função está disponível somente se
> `Event`
> for compilado com suporte OpenSSL.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o nome da cifra atual da conexão SSL ou **`false`** em caso de erro.

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
