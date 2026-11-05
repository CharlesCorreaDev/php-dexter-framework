# Correspondência de expressão regular com suporte multibyte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-ereg.php

---

# mb\_ereg

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

mb\_ereg — Correspondência de expressão regular com suporte multibyte

### Descrição

function **mb\_ereg**([string](language.types.string.md) `$pattern`, [string](language.types.string.md) `$string`, [array](language.types.array.md) `&$matches` = **`null`**): [bool](language.types.boolean.md)

Executa a correspondência de expressão regular com suporte multibyte..

### Parâmetros

`pattern`
:   O padrão de busca.

`string`
:   A [string](language.types.string.md) de busca.

`matches`
:   Se forem encontradas correspondências para substrings entre parênteses de
    `pattern` e a função for chamada com o terceiro argumento `matches`,
    as correspondências serão armazenadas
    nos elementos do array `matches`.
    Se não forem encontradas correspondências, `matches` é definido como um
    array vazio.

    $matches[1] conterá a substring que começa no primeiro
    parêntese à esquerda; $matches[2] conterá
    a substring que começa no segundo parêntese, e assim por diante.
    $matches[0] conterá uma cópia da string completa
    correspondida.

### Valor Retornado

Retorna se `pattern` corresponde a `string`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função agora retorna **`true`** em caso de sucesso. Anteriormente, ela retornava o comprimento em bytes da string correspondida se uma correspondência para `pattern` fosse encontrada em `string` e `matches` fosse passado. Se o parâmetro opcional `matches` não fosse passado ou o comprimento da string correspondida fosse `0`, esta função retornava `1`. |
| 7.1.0 | **mb\_ereg()** agora define `matches` como um [array](language.types.array.md) vazio se nada for correspondido. Anteriormente, `matches` não era modificado nesse caso. |

### Notas

> **Nota**:
>
> A codificação interna ou a
> codificação de caracteres especificada por [mb\_regex\_encoding()](function.mb-regex-encoding.md)
> será usada como a codificação de caracteres para esta função.

### Veja também

- [mb\_regex\_encoding()](function.mb-regex-encoding.md) - Define/Obtém codificação de caracteres para regex multibyte
- [mb\_eregi()](function.mb-eregi.md) - Correspondência de expressão regular sem diferenciar maiúsculas e minúsculas com suporte multibyte

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
