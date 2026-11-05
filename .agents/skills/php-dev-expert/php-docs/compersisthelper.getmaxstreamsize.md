# Obtém o tamanho máximo do fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/compersisthelper.getmaxstreamsize.php

---

# COMPersistHelper::GetMaxStreamSize

(PHP 5, PHP 7, PHP 8)

COMPersistHelper::GetMaxStreamSize — Obtém o tamanho máximo do fluxo

### Descrição

public function **COMPersistHelper::GetMaxStreamSize**(): [int](language.types.integer.md)

Recupera o tamanho do fluxo (em bytes) necessário para gravar o objeto.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o tamanho do fluxo (em bytes) necessário para gravar o objeto.

### Erros/Exceções

Uma [com\_exception](class.com-exception.md) é lançada se o objeto associado não
implementar a interface COM **IPersistStream**
ou **IPersistStreamInit**, ou se a chamada ao método
**IPersistStream::GetSizeMax()** falhar.

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
