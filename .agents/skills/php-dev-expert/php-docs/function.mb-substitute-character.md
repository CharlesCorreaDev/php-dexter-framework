# Define/Obtém caractere de substituição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-substitute-character.php

---

# mb\_substitute\_character

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

mb\_substitute\_character — Define/Obtém caractere de substituição

### Descrição

function **mb\_substitute\_character**([string](language.types.string.md)|[int](language.types.integer.md)|[null](language.types.null.md) `$substitute_character` = **`null`**): [string](language.types.string.md)|[int](language.types.integer.md)|[bool](language.types.boolean.md)

Especifica um caractere de substituição quando a codificação de caracteres de entrada é inválida
ou o código de caractere não existe na codificação de caracteres de saída.
Caracteres inválidos podem ser substituídos por `"none"` (sem saída),
[string](language.types.string.md) ou valor [int](language.types.integer.md) (valor do código de caractere Unicode).

Essa configuração afeta as funções [mb\_convert\_encoding()](function.mb-convert-encoding.md),
[mb\_convert\_variables()](function.mb-convert-variables.md),
[mb\_output\_handler()](function.mb-output-handler.md),
[mb\_scrub()](function.mb-scrub.md)
e [mb\_send\_mail()](function.mb-send-mail.md).

### Parâmetros

`substitute_character`
:   Especifique o valor Unicode como um [int](language.types.integer.md),
    ou como uma das seguintes [string](language.types.string.md)s:

    - `"none"`: sem saída
    - `"long"`: Valor do código de caractere de saída (Exemplo:
      `U+3000`, `JIS+7E7E`)
    - `"entity"`: Entidade de caractere de saída (Exemplo:
      `&#x200;`)

### Valor Retornado

Se `substitute_character` for configurado, retorna **`true`** para sucesso,
caso contrário, retorna **`false`**.
Se `substitute_character` não estiver configurado, retorna a
configuração atual.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Passar uma string vazia para `substitute_character` não é mais suportado; deve-se passar `"none"` em vez disso. |
| 8.0.0 | O parâmetro `encoding` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo de **mb\_substitute\_character()****

```
<?php
/* Definir com Unicode U+3013 (GETA MARK) */
mb_substitute_character(0x3013);

/* Definir no formato hexadecimal */
mb_substitute_character("long");

/* Exibir configuração atual */
echo mb_substitute_character();
?>
```

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
