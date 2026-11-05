# Inicializa o objeto no estado padrão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/compersisthelper.initnew.php

---

# COMPersistHelper::InitNew

(PHP 5, PHP 7, PHP 8)

COMPersistHelper::InitNew — Inicializa o objeto no estado padrão

### Descrição

public function **COMPersistHelper::InitNew**(): [bool](language.types.boolean.md)

Inicializa um objeto para o estado padrão.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Uma [com\_exception](class.com-exception.md) é lançada se o objeto associado não
implementar a interface COM **IPersistStreamInit**,
ou se a chamada ao método **IPersistStreamInit::Init()** falhar.

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
