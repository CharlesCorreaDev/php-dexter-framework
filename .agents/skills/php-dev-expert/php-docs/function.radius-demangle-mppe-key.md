# Deriva chaves mppe de dados criptografados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.radius-demangle-mppe-key.php

---

# radius\_demangle\_mppe\_key

(PECL radius >= 1.2.0)

radius\_demangle\_mppe\_key — Deriva chaves mppe de dados criptografados

### Descrição

function **radius\_demangle\_mppe\_key**([resource](language.types.resource.md) `$radius_handle`, [string](language.types.string.md) `$mangled`): [string](language.types.string.md)

Ao usar MPPE com MS-CHAPv2, as chaves de envio e recebimento são criptografadas
(consulte [» RFC 2548](https://datatracker.ietf.org/doc/html/rfc2548)). No entanto, esta função é
não é útil, pois ainda não existe e não há planos para uma implementação PPTP-MPPE
em PHP.

### Parâmetros

`radius_handle`
:   O resource RADIUS.

`mangled`
:   Os dados criptografados para serem descriptografados.

### Valor Retornado

Retorna os dados descriptografados ou **`false`** em caso de erro.

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
