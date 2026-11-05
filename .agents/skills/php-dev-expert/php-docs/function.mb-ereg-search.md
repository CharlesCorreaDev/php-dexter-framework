# Correspondência de expressão regular multibyte para uma string multibyte predefinida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-ereg-search.php

---

# mb\_ereg\_search

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

mb\_ereg\_search — Correspondência de expressão regular multibyte para uma string multibyte predefinida

### Descrição

function **mb\_ereg\_search**([?](language.types.null.md)[string](language.types.string.md) `$pattern` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$options` = **`null`**): [bool](language.types.boolean.md)

Realiza uma correspondência de expressão regular multibyte para uma string multibyte predefinida.

### Parâmetros

`pattern`
:   O padrão de busca.

`options`
:   A opção de busca. Veja [mb\_regex\_set\_options()](function.mb-regex-set-options.md) para explicação.

### Valor Retornado

**mb\_ereg\_search()** retorna **`true`** se a
string multibyte corresponder à expressão regular, ou **`false`**
caso contrário. A [string](language.types.string.md) para correspondência é definida por
[mb\_ereg\_search\_init()](function.mb-ereg-search-init.md). Se
`pattern` não for especificado, o anterior
é utilizado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `pattern` e `options` agora são anuláveis. |

### Notas

> **Nota**:
>
> A codificação interna ou a
> codificação de caracteres especificada por [mb\_regex\_encoding()](function.mb-regex-encoding.md)
> será usada como a codificação de caracteres para esta função.

### Veja também

- [mb\_regex\_encoding()](function.mb-regex-encoding.md) - Define/Obtém codificação de caracteres para regex multibyte
- [mb\_ereg\_search\_init()](function.mb-ereg-search-init.md) - Configura a string e a expressão regular para uma correspondência de expressão regular multibyte

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
