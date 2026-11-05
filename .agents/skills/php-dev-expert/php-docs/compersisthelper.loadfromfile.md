# Carrega objeto de um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/compersisthelper.loadfromfile.php

---

# COMPersistHelper::LoadFromFile

(PHP 5, PHP 7, PHP 8)

COMPersistHelper::LoadFromFile — Carrega objeto de um arquivo

### Descrição

public function **COMPersistHelper::LoadFromFile**([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$flags` = 0): [bool](language.types.boolean.md)

Abre o arquivo especificado e inicializa o objeto a partir do conteúdo do arquivo.

### Parâmetros

`filename`
:   O nome do arquivo a partir do qual o objeto será carregado.

`flags`
:   O modo de acesso a ser usado ao abrir o arquivo. Os valores possíveis são
    obtidos da [» enumeração STGM](https://docs.microsoft.com/en-us/windows/win32/stg/stgm-constants).
    O método pode tratar esse valor como uma sugestão, adicionando permissões mais
    restritivas se necessário. Se `flags` for `0`,
    a implementação deverá abrir o arquivo usando quaisquer permissões padrão
    usadas quando um usuário abre o arquivo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Uma [com\_exception](class.com-exception.md) é lançada se o objeto associado não
implementar a interface COM **IPersistFile**,
ou se a chamada ao método **IPersistFile::Load()** falhar.

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
