# Define/Obtém as opções padrão para funções mbregex

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-regex-set-options.php

---

# mb\_regex\_set\_options

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

mb\_regex\_set\_options — Define/Obtém as opções padrão para funções mbregex

### Descrição

function **mb\_regex\_set\_options**([?](language.types.null.md)[string](language.types.string.md) `$options` = **`null`**): [string](language.types.string.md)

Define/obtém as opções padrão descritas por `options`
para funções de regex multibyte.

### Parâmetros

`options`
:   As opções a serem definidas. Esta é uma string onde cada
    caractere é uma opção. Para definir um modo, o caractere de modo
    deve ser o último a ser definido, no entanto,
    pode haver apenas um modo, mas várias opções podem ser definidas.

    **Opções de Regex**

    | Opção | Significado | Registro de Alterações |
    | --- | --- | --- |
    | i | correspondência ambígua ativada |  |
    | x | Ativa a forma de padrão estendida |  |
    | m | `'.'` corresponde a quebras de linha |  |
    | s | `'^'` -> `'\A'`, `'$'` -> `'\Z'` |  |
    | p | Mesmo que as opçõe `m` e `s` |  |
    | l | Encontrar as correspondências mais longas |  |
    | n | Ignorar correspondências vazias |  |
    | e | [eval()](function.eval.md) código resultante | Descontinuado desde o PHP 7.1.0 e removido a partir do PHP 8.0.0 |

    > **Nota**:
    >
    > A opção `"e"` não tem efeito quando definida através de **mb\_regex\_set\_options()**.
    > Use-a com [mb\_ereg\_replace()](function.mb-ereg-replace.md) ou [mb\_eregi\_replace()](function.mb-eregi-replace.md).

    **Modos de sintaxe Regex (apenas um pode ser definido)**

    | Modo | Significado |
    | --- | --- |
    | j | Java (Sun java.util.regex) |
    | u | GNU regex |
    | g | grep |
    | c | Emacs |
    | r | Ruby |
    | z | Perl |
    | b | Regex Básico POSIX |
    | d | Regex Estendido POSIX |

### Valor Retornado

As opções anteriores. Se `options` for omitido ou **`null`**,
retorna a [string](language.types.string.md) que descreve as opções atuais.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Se o parâmetro `options` for fornecido e não for **`null`**, as opções *anteriores* são retornadas. Anteriormente, as opções *atuais* eram retornadas. |
| 8.0.0 | `options` é anulável agora. |
| 8.0.0 | A opção `"e"` agora lança um [ValueError](class.valueerror.md). |
| 7.1.0 | A opção `"e"` agora emite um **`E_DEPRECATED`**. |

### Veja também

- [mb\_split()](function.mb-split.md) - Divide uma string multibyte usando expressão regular
- [mb\_ereg()](function.mb-ereg.md) - Correspondência de expressão regular com suporte multibyte
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
