# Retorna uma descrição textual da cifra

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbufferevent.sslgetcipherinfo.php

---

# EventBufferEvent::sslGetCipherInfo

(PECL event >= 1.10.0)

EventBufferEvent::sslGetCipherInfo — Retorna uma descrição textual da cifra

### Descrição

public
function **EventBufferEvent::sslGetCipherInfo**(): [string](language.types.string.md)

Recupera a descrição da cifra atual por meio da
função da API SSL `SSL_CIPHER_description` (consulte a
página do manual *SSL\_CIPHER\_get\_name(3)*).

> **Nota**:
>
> Esta função está disponível somente se
> `Event`
> for compilado com suporte OpenSSL.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma descrição textual da cifra em caso de sucesso, ou **`false`** em caso de erro.

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
