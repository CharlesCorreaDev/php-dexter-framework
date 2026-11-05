# Divide a fonte fornecida em tokens PHP, representados por objetos PhpToken

> **Fonte / Source:** https://www.php.net/manual/pt_BR/phptoken.tokenize.php

---

# PhpToken::tokenize

(PHP 8)

PhpToken::tokenize — Divide a fonte fornecida em tokens PHP, representados por objetos PhpToken

### Descrição

public static function **PhpToken::tokenize**([string](language.types.string.md) `$code`, [int](language.types.integer.md) `$flags` = 0): [array](language.types.array.md)

Retorna um array de objetos PhpToken representando um código informado no parâmetro `code`.

### Parâmetros

`code`
:   A fonte PHP a ser analisada.

`flags`
:   Opções válidas:

    - **`TOKEN_PARSE`** - Reconhece a capacidade de usar
      palavras reservadas em contextos específicos.

### Valor Retornado

Um array de tokens PHP representados por instâncias de PhpToken ou seus descendentes.
Este método retorna static[] para que o PhpToken possa ser estendido perfeitamente.

### Examples

**Exemplo #1 Exemplo de **PhpToken::tokenize()****

```
<?php
$tokens = PhpToken::tokenize('<?php echo; ?>');

foreach ($tokens as $token) {
    echo "Line {$token->line}: {$token->getTokenName()} ('{$token->text}')", PHP_EOL;
}
```

Os exemplos acima produzirão:

```
Line 1: T_OPEN_TAG ('<?php ')
Line 1: T_ECHO ('echo')
Line 1: ; (';')
Line 1: T_WHITESPACE (' ')
Line 1: T_CLOSE_TAG ('?>')
```

**Exemplo #2 Estendendo PhpToken**

```
<?php

class MyPhpToken extends PhpToken {
    public function getUpperText() {
        return strtoupper($this->text);
    }
}

$tokens = MyPhpToken::tokenize('<?php echo; ?>');
echo "'{$tokens[0]->getUpperText()}'";
```

Os exemplos acima produzirão:

```
'<?PHP '
```

### Veja também

- [token\_get\_all()](function.token-get-all.md) - Divide um dado fonte em tokens do PHP

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
