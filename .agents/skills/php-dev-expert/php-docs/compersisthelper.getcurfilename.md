# Obtém o nome do arquivo atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/compersisthelper.getcurfilename.php

---

# COMPersistHelper::GetCurFileName

(PHP 5, PHP 7, PHP 8)

COMPersistHelper::GetCurFileName — Obtém o nome do arquivo atual

### Descrição

public function **COMPersistHelper::GetCurFileName**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Recupera o nome atual do arquivo associado ao objeto.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o nome atual do arquivo associado ao objeto.

### Erros/Exceções

Uma [com\_exception](class.com-exception.md) é lançada se o objeto associado não
implementar a interface COM **IPersistFile**,
ou a chamada ao método **IPersistFile::GetCurFile()** falhar.

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
