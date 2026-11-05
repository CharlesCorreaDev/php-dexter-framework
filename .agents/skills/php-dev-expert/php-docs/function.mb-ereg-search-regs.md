# Retorna a parte correspondida de uma expressão regular multibyte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-ereg-search-regs.php

---

# mb\_ereg\_search\_regs

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

mb\_ereg\_search\_regs — Retorna a parte correspondida de uma expressão regular multibyte

### Descrição

function **mb\_ereg\_search\_regs**([?](language.types.null.md)[string](language.types.string.md) `$pattern` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$options` = **`null`**): [array](language.types.array.md)|[false](language.types.singleton.md)

Retorna a parte correspondida de uma expressão regular multibyte.

### Parâmetros

`pattern`
:   O padrão de busca.

`options`
:   A opção de busca. Consulte [mb\_regex\_set\_options()](function.mb-regex-set-options.md) para obter uma explicação.

### Valor Retornado

**mb\_ereg\_search\_regs()** executa a correspondência da expressão
regular multibyte e, se houver alguma parte correspondida, ela
retorna um [array](language.types.array.md) contendo a substring da parte correspondida como primeiro
elemento, a primeira parte agrupada com colchetes como segundo elemento,
a segunda parte agrupada como terceiro elemento, e assim por diante.
Retorna **`false`** em caso de erro.

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
