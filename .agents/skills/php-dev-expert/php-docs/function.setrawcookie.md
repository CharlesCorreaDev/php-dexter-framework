# Envie um cookie sem codificar em URL o valor do cookie

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.setrawcookie.php

---

# setrawcookie

(PHP 5, PHP 7, PHP 8)

setrawcookie — Envie um cookie sem codificar em URL o valor do cookie

### Descrição

function **setrawcookie**(  
    [string](language.types.string.md) `$name`,  
    [string](language.types.string.md) `$value` = ?,  
    [int](language.types.integer.md) `$expires_or_options` = 0,  
    [string](language.types.string.md) `$path` = ?,  
    [string](language.types.string.md) `$domain` = ?,  
    [bool](language.types.boolean.md) `$secure` = **`false`**,  
    [bool](language.types.boolean.md) `$httponly` = **`false`**  
): [bool](language.types.boolean.md)

Assinatura alternativa disponível a partir do PHP 7.3.0 (não suportada com parâmetros nomeados):

function **setrawcookie**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value` = ?, [array](language.types.array.md) `$options` = []): [bool](language.types.boolean.md)

**setrawcookie()** é exatamente o mesmo que
[setcookie()](function.setcookie.md) exceto que o valor do cookie não será
automaticamente codificado em URL quando enviado ao navegador.

### Parâmetros

Para informações sobre parâmetros, consulte a documentação
da função [setcookie()](function.setcookie.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.3.0 | Uma assinatura alternativa que suporta um array `options` foi adicionada. Esta assinatura também suporta a configuração do atributo de cookie "SameSite". |

### Veja também

- [setcookie()](function.setcookie.md) - Envia um cookie

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
