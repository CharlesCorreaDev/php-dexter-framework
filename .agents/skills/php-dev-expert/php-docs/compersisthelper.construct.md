# Constrói um objeto COMPersistHelper

> **Fonte / Source:** https://www.php.net/manual/pt_BR/compersisthelper.construct.php

---

# COMPersistHelper::\_\_construct

(PHP 5, PHP 7, PHP 8)

COMPersistHelper::\_\_construct — Constrói um objeto COMPersistHelper

### Descrição

public function **COMPersistHelper::\_\_construct**([?](language.types.null.md)[variant](class.variant.md) `$variant` = **`null`**)

Constrói um objeto auxiliar de persistência, geralmente associado a uma
`variant`.

### Parâmetros

`variant`
:   Um objeto COM que implementa **IDispatch**.
    Para poder chamar com sucesso qualquer um dos métodos de [COMPersistHelper](class.compersisthelper.md), o objeto
    deve implementar **IPersistFile**, **IPersistStream**
    e/ou **IPersistStreamInit**.

    Passar **`null`** como `variant` só é útil se o objeto for
    carregado de um fluxo ao chamar [COMPersistHelper::LoadFromStream()](compersisthelper.loadfromstream.md).

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
