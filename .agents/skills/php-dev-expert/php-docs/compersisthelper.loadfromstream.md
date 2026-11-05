# Carrega objeto a partir de um fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/compersisthelper.loadfromstream.php

---

# COMPersistHelper::LoadFromStream

(PHP 5, PHP 7, PHP 8)

COMPersistHelper::LoadFromStream — Carrega objeto a partir de um fluxo

### Descrição

public function **COMPersistHelper::LoadFromStream**([resource](language.types.resource.md) `$stream`): [bool](language.types.boolean.md)

Inicializa um objeto a partir do fluxo onde ele foi previamente gravado.

### Parâmetros

`stream`
:   O [resource](language.types.resource.md) de fluxo a partir do qual o objeto será carregado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Uma [com\_exception](class.com-exception.md) é lançada se o objeto associado não
implementar a interface COM **IPersistStream**,
ou se a chamada ao método **IPersistStream::Load()** falhar.

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
