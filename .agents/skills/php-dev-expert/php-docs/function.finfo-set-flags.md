# Define as opções de configuração da libmagic

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.finfo-set-flags.php

---

# finfo\_set\_flags

# finfo::set\_flags

(PHP >= 5.3.0, PHP 7, PHP 8, PECL fileinfo >= 0.1.0)

finfo\_set\_flags -- finfo::set\_flags — Define as opções de configuração da libmagic

### Descrição

Estilo procedural

function **finfo\_set\_flags**([finfo](class.finfo.md) `$finfo`, [int](language.types.integer.md) `$flags`): [true](language.types.singleton.md)

Estilo orientado a objetos

public function [finfo::set\_flags](finfo.set-flags.md)([int](language.types.integer.md) `$flags`): [true](language.types.singleton.md)

Esta função define várias opções de Fileinfo. As opções também podem ser definidas
diretamente em [finfo\_open()](function.finfo-open.md) ou em outras funções da Fileinfo.

### Parâmetros

`finfo`
:   Uma instância de [finfo](class.finfo.md), retornada por [finfo\_open()](function.finfo-open.md).

`flags`
:   Uma ou disjunção de mais
    [constantes Fileinfo](fileinfo.constants.md).

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `finfo` agora espera uma instância de [finfo](class.finfo.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

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
