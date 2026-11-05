# Grava o objeto no fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/compersisthelper.savetostream.php

---

# COMPersistHelper::SaveToStream

(PHP 5, PHP 7, PHP 8)

COMPersistHelper::SaveToStream — Grava o objeto no fluxo

### Descrição

public function **COMPersistHelper::SaveToStream**([resource](language.types.resource.md) `$stream`): [bool](language.types.boolean.md)

Grava um objeto no fluxo especificado.

### Parâmetros

`stream`
:   O [resource](language.types.resource.md) de fluxo no qual o objeto será gravado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Uma [com\_exception](class.com-exception.md) é lançada se o objeto associado não
implementar a interface COM **IPersistStream**
ou **IPersistStreamInit**, ou se a chamada ao método
**IPersistStream::Save()** falhar.

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
