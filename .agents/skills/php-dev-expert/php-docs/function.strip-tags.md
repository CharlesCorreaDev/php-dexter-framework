# Retira as tags HTML e PHP de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.strip-tags.php

---

# strip\_tags

(PHP 4, PHP 5, PHP 7, PHP 8)

strip\_tags — Retira as tags HTML e PHP de uma string

### Descrição

function **strip\_tags**([string](language.types.string.md) `$string`, [array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$allowed_tags` = **`null`**): [string](language.types.string.md)

Esta função tenta retornar uma string com todos os bytes nulos e tags HTML e PHP removidas
da `string` informada. Usa a mesma máquina de estados de remoção
de tags que a função [fgetss()](function.fgetss.md).

### Parâmetros

`string`
:   A string de entrada.

`allowed_tags`
:   Pode-se utilizar o segundo parâmetro, que é opcional, para indicar
    tags que não devam ser retiradas.
    Podem ser informadas como [string](language.types.string.md), ou a partir do PHP 7.4.0, como [array](language.types.array.md).
    Refira-se ao exemplo abaixo sobre o formato deste parâmetro.

    > **Nota**:
    >
    > Comentários HTML e tags PHP também são retirados. Isto não pode ser
    > modificado com `allowed_tags`.

    > **Nota**:
    >
    > Tags XHTML com auto-fechamento são ignoradas e apenas tags sem auto-fechamento devem ser usadas em
    > `allowed_tags`. Por exemplo,
    > para permitir tanto `<br>` quanto
    > `<br/>`, deve-se usar:
    >
    > ```
    > <?php
    > strip_tags($input, '<br>');
    > ?>
    > ```

### Valor Retornado

Retorna a string modificada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `allowed_tags` agora pode ser nulo. |
| 7.4.0 | O parâmetro `allowed_tags` agora alternativamente aceita um [array](language.types.array.md). |

### Examples

**Exemplo #1 Exemplo de **strip\_tags()****

```
<?php
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

// Permite <p> e <a>
echo strip_tags($text, '<p><a>');

// A partir do PHP 7.4.0 a linha acima pode ser escrita como:
// echo strip_tags($text, ['p', 'a']);
?>
```

O exemplo acima produzirá:

```
Test paragraph. Other text
<p>Test paragraph.</p> <a href="#fragment">Other text</a>
```

### Notas

**Aviso**

Esta função não deve ser usada para evitar ataques XSS.
Use funções mais apropriadas como [htmlspecialchars()](function.htmlspecialchars.md)
ou outros meios dependendo do contexto da saída.

**Aviso**

Como **strip\_tags()** não valida realmente o
HTML, tags parciais ou quebradas podem resultar na remoção de mais
texto e dados que o esperado.

**Aviso**

Esta função não modifica nenhum dos atributos das tags que forem permitidas
usando `allowed_tags`, incluindo os atributos
`style` e `onmouseover`
que um usuário malicioso pode abusar ao enviar texto que será
mostrado a outros usuários.

> **Nota**:
>
> Nomes de tags no HTML de entrada que forem maiores que 1023 bytes em comprimento
> serão tratados como se fossem inválidos, independente, do
> parâmetro `allowed_tags`.

### Veja também

- [htmlspecialchars()](function.htmlspecialchars.md) - Converte caracteres especiais para entidades HTML

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
