# Configura a string e a expressão regular para uma correspondência de expressão regular multibyte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-ereg-search-init.php

---

# mb\_ereg\_search\_init

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

mb\_ereg\_search\_init — Configura a string e a expressão regular para uma correspondência de expressão regular multibyte

### Descrição

function **mb\_ereg\_search\_init**([string](language.types.string.md) `$string`, [?](language.types.null.md)[string](language.types.string.md) `$pattern` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$options` = **`null`**): [bool](language.types.boolean.md)

**mb\_ereg\_search\_init()** configura
`string` e `pattern`
para uma expressão regular multibyte. Esses valores são usados para
[mb\_ereg\_search()](function.mb-ereg-search.md),
[mb\_ereg\_search\_pos()](function.mb-ereg-search-pos.md) e
[mb\_ereg\_search\_regs()](function.mb-ereg-search-regs.md).

### Parâmetros

`string`
:   A string de busca.

`pattern`
:   O padrão de busca.

`options`
:   A opção de busca. Consulte [mb\_regex\_set\_options()](function.mb-regex-set-options.md) para obter uma explicação.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `pattern` e `options` são anuláveis agora. |

### Notas

> **Nota**:
>
> A codificação interna ou a
> codificação de caracteres especificada por [mb\_regex\_encoding()](function.mb-regex-encoding.md)
> será usada como a codificação de caracteres para esta função.

### Veja também

- [mb\_regex\_encoding()](function.mb-regex-encoding.md) - Define/Obtém codificação de caracteres para regex multibyte
- [mb\_ereg\_search\_regs()](function.mb-ereg-search-regs.md) - Retorna a parte correspondida de uma expressão regular multibyte

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
