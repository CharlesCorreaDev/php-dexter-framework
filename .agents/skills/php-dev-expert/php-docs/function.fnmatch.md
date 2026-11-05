# Compara nome de arquivo com um padrão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fnmatch.php

---

# fnmatch

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

fnmatch — Compara nome de arquivo com um padrão

### Descrição

function **fnmatch**([string](language.types.string.md) `$pattern`, [string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$flags` = 0): [bool](language.types.boolean.md)

**fnmatch()** verifica se o parâmetro `filename` informado
corresponde com o padrão de curingas shell `pattern`.

### Parâmetros

`pattern`
:   O parâmetro `pattern` deve conter o padrão para correspondência. Normalmente, `pattern`
    conterá curingas como `'?'` e `'*'`.

    **Curingas a serem usados no parâmetro `pattern`**

    | Curinga | Descrição |
    | --- | --- |
    | `?` | Ponto de interrogação irá corresponder a um caractere único. Por exemplo, o padrão `"file?.txt"` corresponderá a `"file1.txt"` e `"fileA.txt"`, mas não a `"file10.txt"`. |
    | `*` | Asteriscos corresponderá zero ou mais caracteres. Por exemplo, o padrão `"foo*.xml"` corresponderá a `"foo.xml"` e `"foobar.xml"`. |
    | `[ ]` | Colchetes são usados para criar intervalos de caracteres ASCII ou conjuntos de caracteres. Por exemplo, o padrão `"index.php[45]"` corresponderá a `"index.php4"` e `"index.php5"`, mas não a `"index.phpt"`. Intervalos bem conhecidos são `[0-9]`, `[a-z]` e `[A-Z]`. Conjuntos e intervalos múltiplos podem ser usados ao mesmo tempo, por exemplo `[0-9a-zABC]`. |
    | `!` | Ponto de exclamação é usado para negar caracteres dentro de colchetes. Por exemplo, `"[!A-Z]*.html"` corresponderá a `"demo.html"`, mas não a `"Demo.html"`. |
    | `\` | Barra invertida é usada para escapar caracteres especiais. Por exemplo, `"Name\?"` corresponderá a `"Name?"`, mas não a `"Names"`. |

`filename`
:   A string testada. Esta função é especialmente útil para nomes de arquivo,
    mas também pode ser usada em strings normais.

    O usuário comum pode estar acostumado com padrões shell ou pelo menos, na sua
    forma mais simples, aos curingas `'?'` e `'*'`.
    Então usar **fnmatch()** ao invés de
    [preg\_match()](function.preg-match.md) para
    entrada de expressões de busca na interface com o usuário pode ser muito mais conveniente para
    não programadores.

`flags`
:   O valor do parâmetro `flags` pode ser qualquer combinação das
    opções a seguir, unidos com o
    [operador binário OR (|)](language.operators.bitwise.md).

    **Uma lista de opções possíveis para **fnmatch()****

    | `Flag` | Descrição |
    | --- | --- |
    | **`FNM_NOESCAPE`** | Desabilita escape por barra invertida. |
    | **`FNM_PATHNAME`** | Barra na string somente corresponde a barra no padrão fornecido. |
    | **`FNM_PERIOD`** | Um ponto no início da string deve corresponder a exatamente um ponto no padrão fornecido. |
    | **`FNM_CASEFOLD`** | Não diferencia maiúsculas de minúsculas. Parte da extensão GNU. |

### Valor Retornado

Retorna **`true`** se houver correspondência, **`false`** caso contrário.

### Examples

**Exemplo #1 Comparando uma cor com um padrão de curingas shell**

```
<?php
if (fnmatch("*gr[ae]y", $color)) {
  echo "alguma forma de cinza (grey ou gray) ...";
}
?>
```

### Notas

**Aviso**

Por enquanto esta função não está disponível em sistemas não-POSIX
exceto pelo Windows.

### Veja também

- [glob()](function.glob.md) - Encontra caminhos que combinam com uma expressão
- [preg\_match()](function.preg-match.md) - Realiza uma correspondência com expressão regular
- [sscanf()](function.sscanf.md) - Interpreta a entrada de uma string de acordo com um formato
- [printf()](function.printf.md) - Envia uma string formatada para a saída
- [sprintf()](function.sprintf.md) - Retona uma string formatada

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
