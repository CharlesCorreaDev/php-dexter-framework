# Divide um dado fonte em tokens do PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.token-get-all.php

---

# token\_get\_all

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

token\_get\_all — Divide um dado fonte em tokens do PHP

### Descrição

function **token\_get\_all**([string](language.types.string.md) `$code`, [int](language.types.integer.md) `$flags` = 0): [array](language.types.array.md)

**token\_get\_all()** analisa o `code` fornecido
em tokens da linguagem PHP usando o avaliador léxico do Zend engine.

Para uma lista dos tokens do avaliador, veja [Lista de Tokens do Analisador](tokens.md), ou use
[token\_name()](function.token-name.md) para traduzir um valor de um token para sua
representação em formato string.

### Parâmetros

`code`
:   O código-fonte do PHP à ser avaliado.

`flags`
:   Flags válidas:

    - **`TOKEN_PARSE`** - Reconhece a capacidade de usar
      palavras reservadas em contextos específicos.

### Valor Retornado

Um array de identificadores de tokens. Cada identificador de token individual ou é um
caracter único (ex.: `;`, `.`,
`>`, `!`, etc...),
ou um array com três elementos contendo o índice do token no elemento 0, a string
contendo o token original no elemento 1 e o número da linha no elemento 2.

### Examples

**Exemplo #1 Exemplo de **token\_get\_all()****

```
<?php
$tokens = token_get_all('<?php echo; ?>');

foreach ($tokens as $token) {
    if (is_array($token)) {
        echo "Line {$token[2]}: ", token_name($token[0]), " ('{$token[1]}')", PHP_EOL;
    }
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Line 1: T_OPEN_TAG ('<?php ')
Line 1: T_ECHO ('echo')
Line 1: T_WHITESPACE (' ')
Line 1: T_CLOSE_TAG ('?>')
```

**Exemplo #2 Exemplo de uso incorreto de **token\_get\_all()****

```
<?php
$tokens = token_get_all('/* comment */');

foreach ($tokens as $token) {
    if (is_array($token)) {
        echo "Line {$token[2]}: ", token_name($token[0]), " ('{$token[1]}')", PHP_EOL;
    }
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Line 1: T_INLINE_HTML ('/* comment */')
```

Observe no exemplo anterior que a string é analisada como
**`T_INLINE_HTML`** em vez do esperado
**`T_COMMENT`**. Isso ocorre porque nenhuma tag aberta foi usada no
código fornecido. Isso seria equivalente a colocar um comentário fora da
tag PHP em um arquivo normal.

**Exemplo #3
**token\_get\_all()** em uma classe usando um exemplo de palavra reservada**

```
<?php

$source = <<<'code'
<?php

class A
{
    const PUBLIC = 1;
}
code;

$tokens = token_get_all($source, TOKEN_PARSE);

foreach ($tokens as $token) {
    if (is_array($token)) {
        echo token_name($token[0]) , PHP_EOL;
    }
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
T_OPEN_TAG
T_WHITESPACE
T_CLASS
T_WHITESPACE
T_STRING
T_CONST
T_WHITESPACE
T_STRING
T_LNUMBER
```

Sem a flag **`TOKEN_PARSE`**, o penúltimo
token (**`T_STRING`**) teria sido
**`T_PUBLIC`**.

### Veja também

- [PhpToken::tokenize()](phptoken.tokenize.md) - Divide a fonte fornecida em tokens PHP, representados por objetos PhpToken
- [token\_name()](function.token-name.md) - Pega o nome simbólico de um dado token do PHP

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
