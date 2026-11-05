# Retorna a posição e o comprimento de uma parte correspondida da expressão regular multibyte para uma string multibyte predefinida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-ereg-search-pos.php

---

# mb\_ereg\_search\_pos

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

mb\_ereg\_search\_pos — Retorna a posição e o comprimento de uma parte correspondida da expressão regular multibyte para uma string multibyte predefinida

### Descrição

function **mb\_ereg\_search\_pos**([?](language.types.null.md)[string](language.types.string.md) `$pattern` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$options` = **`null`**): [array](language.types.array.md)|[false](language.types.singleton.md)

Retorna a posição e o comprimento de uma parte correspondida da expressão regular multibyte
para uma string multibyte predefinida.

A string para a correspondência é especificada por
[mb\_ereg\_search\_init()](function.mb-ereg-search-init.md). Se não for especificada,
a anterior será usada.

### Parâmetros

`pattern`
:   O padrão de busca.

`options`
:   A opção de busca. Consulte [mb\_regex\_set\_options()](function.mb-regex-set-options.md) para obter uma explicação.

### Valor Retornado

Um [array](language.types.array.md) contendo dois elementos. O primeiro elemento é o
deslocamento, em bytes, onde a correspondência começa em relação ao início da
string de busca, e o segundo elemento é o comprimento, em bytes, da correspondência.

Se ocorrer um erro, é retornado **`false`**.

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
