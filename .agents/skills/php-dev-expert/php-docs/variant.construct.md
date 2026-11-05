# Construtor da classe variant

> **Fonte / Source:** https://www.php.net/manual/pt_BR/variant.construct.php

---

# variant::\_\_construct

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

variant::\_\_construct — Construtor da classe variant

### Descrição

public function **variant::\_\_construct**([mixed](language.types.mixed.md) `$value` = **`null`**, [int](language.types.integer.md) `$type` = **`VT_EMPTY`**, [int](language.types.integer.md) `$codepage` = **`CP_ACP`**)

Constrói um novo objeto variant.

### Parâmetros

`value`
:   Valor inicial. Se omitido ou definido para **`null`**, um objeto VT\_EMPTY é criado.

`type`
:   Especifica o tipo de conteúdo do objeto variant. Pode ser
    uma das constantes [Constantes predefinidas](com.constants.md)
    **`VT_*`**.

    O PHP consegue detectar parâmetros passados por referência
    automaticamente; eles nem mesmo precisam ser passados como objetos variant.

    Consulte a biblioteca MSDN para informação adicional
    sobre o tipo VARIANT.

`codepage`
:   Especifica a página de códigos a ser usada na conversão de strings para
    Unicode. Veja o parâmetro de mesmo nome na classe
    [com](class.com.md) para mais informações.

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
