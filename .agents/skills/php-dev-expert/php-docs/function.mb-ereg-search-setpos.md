# Define o ponto de início para a próxima correspondência de expressão regular

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-ereg-search-setpos.php

---

# mb\_ereg\_search\_setpos

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

mb\_ereg\_search\_setpos — Define o ponto de início para a próxima correspondência de expressão regular

### Descrição

function **mb\_ereg\_search\_setpos**([int](language.types.integer.md) `$offset`): [bool](language.types.boolean.md)

**mb\_ereg\_search\_setpos()** define o ponto
de início de uma correspondência para [mb\_ereg\_search()](function.mb-ereg-search.md).

### Parâmetros

`offset`
:   A posição a definir. Se for negativo, conta a partir do final da string.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.1.0 | Suporte para `offset`s negativo foi adicionado. |

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
