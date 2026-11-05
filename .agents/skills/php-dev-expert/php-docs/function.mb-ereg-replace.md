# Substituir expressão regular com suporte a multibyte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-ereg-replace.php

---

# mb\_ereg\_replace

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

mb\_ereg\_replace — Substituir expressão regular com suporte a multibyte

### Descrição

function **mb\_ereg\_replace**(  
    [string](language.types.string.md) `$pattern`,  
    [string](language.types.string.md) `$replacement`,  
    [string](language.types.string.md) `$string`,  
    [?](language.types.null.md)[string](language.types.string.md) `$options` = **`null`**  
): [string](language.types.string.md)|[false](language.types.singleton.md)|[null](language.types.null.md)

Examina `string` em busca de correspondências com
`pattern`, em seguida, substitui o texto correspondido
por `replacement`

### Parâmetros

`pattern`
:   O padrão de expressão regular.

    Caracteres multibyte podem ser usados em `pattern`.

`replacement`
:   O texto de substituição.

`string`
:   A [string](language.types.string.md) sendo verificada.

`options`
:   A opção de pesquisa. Consulte [mb\_regex\_set\_options()](function.mb-regex-set-options.md) para explicação.

### Valor Retornado

A [string](language.types.string.md) resultante em caso de sucesso, ou **`false`** em caso de erro.
Se `string` não for válida para a codificação atual, **`null`**
é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `options` é anulável agora. |
| 7.1.0 | A função verifica se `string` é válida para a codificação atual. |
| 7.1.0 | O modificador `e` foi descontinuado. |

### Notas

> **Nota**:
>
> A codificação interna ou a
> codificação de caracteres especificada por [mb\_regex\_encoding()](function.mb-regex-encoding.md)
> será usada como a codificação de caracteres para esta função.

**Aviso**

Nunca use o modificador `e` ao trabalhar com entradas não confiáveis. Nenhum escape automático acontecerá (como é conhecido em [preg\_replace()](function.preg-replace.md)). Não cuidar disso provavelmente criará vulnerabilidades de execução remota de código na sua aplicação.

### Veja também

- [mb\_regex\_encoding()](function.mb-regex-encoding.md) - Define/Obtém codificação de caracteres para regex multibyte
- [mb\_eregi\_replace()](function.mb-eregi-replace.md) - Substituir expressão regular com suporte multibyte, ignorando maiúsculas e minúsculas

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
