# Decodifica dados de sessão de uma sessão codificada em formato string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.session-decode.php

---

# session\_decode

(PHP 4, PHP 5, PHP 7, PHP 8)

session\_decode — Decodifica dados de sessão de uma sessão codificada em formato string

### Descrição

function **session\_decode**([string](language.types.string.md) `$data`): [bool](language.types.boolean.md)

**session\_decode()** decodifica os dado de sessão serializados fornecidos em
`data` e preenche a super global $\_SESSION
com o resultado.

Por padrão, o método de deserialização usado é interno do PHP e não é o mesmo que [unserialize()](function.unserialize.md).
O método de deserialização pode ser configurado usando [session.serialize\_handler](session.configuration.md#ini.session.serialize-handler).

### Parâmetros

`data`
:   Os dados codificados para serem armazenados.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [session\_encode()](function.session-encode.md) - Codifica os dados atuais da sessão como uma sessão codificada em formato string
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
