# Abre um manipulador de diretório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/streamwrapper.dir-opendir.php

---

# streamWrapper::dir\_opendir

(PHP 4 >= 4.3.2, PHP 5, PHP 7, PHP 8)

streamWrapper::dir\_opendir — Abre um manipulador de diretório

### Descrição

public function **streamWrapper::dir\_opendir**([string](language.types.string.md) `$path`, [int](language.types.integer.md) `$options`): [bool](language.types.boolean.md)

Este método é chamado em resposta a [opendir()](function.opendir.md).

### Parâmetros

`path`
:   Especifica a URL que foi passada a [opendir()](function.opendir.md).

    > **Nota**:
    >
    > A URL pode ser quebrada em partes com [parse\_url()](function.parse-url.md).

`options`

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [opendir()](function.opendir.md) - Abre um manipulador de diretório
- [streamWrapper::dir\_closedir()](streamwrapper.dir-closedir.md) - Fecha o manipulador de diretório
- [parse\_url()](function.parse-url.md) - Analisa uma URL e retorna seus componentes

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
