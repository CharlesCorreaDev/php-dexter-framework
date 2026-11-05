# A classe LibXMLError

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.libxmlerror.php

---

# A classe LibXMLError

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

## Introdução

Contém várias informações sobre erros lançados pela biblioteca libxml. Os códigos de erro
estão descritos na
[» documentação da API xmlError](https://gnome.pages.gitlab.gnome.org/libxml2/devhelp/libxml2-xmlerror.html) oficial.

## Resumo da classe

class ****LibXMLError****
{

/\* Propriedades \*/

public
[int](language.types.integer.md)
[$level](class.libxmlerror.md#libxmlerror.props.level);

public
[int](language.types.integer.md)
[$code](class.libxmlerror.md#libxmlerror.props.code);

public
[int](language.types.integer.md)
[$column](class.libxmlerror.md#libxmlerror.props.column);

public
[string](language.types.string.md)
[$message](class.libxmlerror.md#libxmlerror.props.message);

public
[string](language.types.string.md)
[$file](class.libxmlerror.md#libxmlerror.props.file);

public
[int](language.types.integer.md)
[$line](class.libxmlerror.md#libxmlerror.props.line);

}

## Propriedades

level
:   A severidade do erro (uma das constantes a seguir:
    **`LIBXML_ERR_WARNING`**,
    **`LIBXML_ERR_ERROR`** ou
    **`LIBXML_ERR_FATAL`**)

code
:   O código do erro.

column
:   A coluna onde o erro ocorreu.

    > **Nota**:
    >
    > Esta propriedade não está completamente implementada na libxml e portanto
    > `0` é frequentemente retornado.

message
:   A mensagem de erro, se houver.

file
:   O nome do arquivo, ou vazio se o XML foi carregado de uma string.

line
:   A linha onde o erro ocorreu.

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
