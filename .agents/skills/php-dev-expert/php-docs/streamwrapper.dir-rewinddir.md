# Retrocede um manipulador de diretório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/streamwrapper.dir-rewinddir.php

---

# streamWrapper::dir\_rewinddir

(PHP 4 >= 4.3.2, PHP 5, PHP 7, PHP 8)

streamWrapper::dir\_rewinddir — Retrocede um manipulador de diretório

### Descrição

public function **streamWrapper::dir\_rewinddir**(): [bool](language.types.boolean.md)

Este método é chamado em resposta a [rewinddir()](function.rewinddir.md).

Deve redefinir a saída gerada por
[streamWrapper::dir\_readdir()](streamwrapper.dir-readdir.md).
Isto é, a próxima chamada a [streamWrapper::dir\_readdir()](streamwrapper.dir-readdir.md)
deve retornar a primeira entrada na localização retornada por
[streamWrapper::dir\_opendir()](streamwrapper.dir-opendir.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [rewinddir()](function.rewinddir.md) - Retroceder o manipulador de diretório
- [streamWrapper::dir\_readdir()](streamwrapper.dir-readdir.md) - Lê entrada do manipulador de diretório

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
