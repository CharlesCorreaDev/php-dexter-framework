# Codifica os dados atuais da sessão como uma sessão codificada em formato string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.session-encode.php

---

# session\_encode

(PHP 4, PHP 5, PHP 7, PHP 8)

session\_encode — Codifica os dados atuais da sessão como uma sessão codificada em formato string

### Descrição

function **session\_encode**(): [string](language.types.string.md)|[false](language.types.singleton.md)

**session\_encode()** retorna uma string serializada do
conteúdo atual da sessão armazenados na super global $\_SESSION.

Por padrão, o método de serialização usado é interno do PHP e não é o mesmo que [serialize()](function.serialize.md).
O método de serialização pode ser configurado usando [session.serialize\_handler](session.configuration.md#ini.session.serialize-handler).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o conteúdo da sessão atual codificado, ou **`false`** em caso de falha.

### Notas

**Aviso**

É necessário chamar [session\_start()](function.session-start.md) antes de usar **session\_encode()**.

### Veja também

- [session\_decode()](function.session-decode.md) - Decodifica dados de sessão de uma sessão codificada em formato string
- [session.serialize\_handler](session.configuration.md#ini.session.serialize-handler)

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
