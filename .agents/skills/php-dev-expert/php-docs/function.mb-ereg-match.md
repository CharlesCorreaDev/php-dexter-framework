# Coincidência de expressão regular para string multibyte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-ereg-match.php

---

# mb\_ereg\_match

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

mb\_ereg\_match — Coincidência de expressão regular para string multibyte

### Descrição

function **mb\_ereg\_match**([string](language.types.string.md) `$pattern`, [string](language.types.string.md) `$string`, [?](language.types.null.md)[string](language.types.string.md) `$options` = **`null`**): [bool](language.types.boolean.md)

Uma correspondência de expressão regular para uma string multibyte
> **Nota**:
>
> `pattern` só é correspondido no início de
> `string`.

### Parâmetros

`pattern`
:   O padrão de expressão regular.

`string`
:   A [string](language.types.string.md) sendo avaliada.

`options`
:   A opção de pesquisa. Consulte [mb\_regex\_set\_options()](function.mb-regex-set-options.md) para explicação.

### Valor Retornado

Retorna **`true`** se
`string` coincide com a expressão regular
`pattern`, **`false`** se não.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `options` é anulável agora. |

### Notas

> **Nota**:
>
> A codificação interna ou a
> codificação de caracteres especificada por [mb\_regex\_encoding()](function.mb-regex-encoding.md)
> será usada como a codificação de caracteres para esta função.

### Veja também

- [mb\_regex\_encoding()](function.mb-regex-encoding.md) - Define/Obtém codificação de caracteres para regex multibyte
- [mb\_ereg()](function.mb-ereg.md) - Correspondência de expressão regular com suporte multibyte

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
