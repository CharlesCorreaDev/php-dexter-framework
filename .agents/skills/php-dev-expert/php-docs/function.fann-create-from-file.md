# Constrói uma rede neural de retropropagação a partir de um arquivo de configuração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-create-from-file.php

---

# fann\_create\_from\_file

(PECL fann >= 1.0.0)

fann\_create\_from\_file — Constrói uma rede neural de retropropagação a partir de um arquivo de configuração

### Descrição

function **fann\_create\_from\_file**([string](language.types.string.md) `$configuration_file`): [resource](language.types.resource.md)

Constrói uma rede neural de retropropagação a partir de um arquivo de configuração, que foi salvo por [fann\_save()](function.fann-save.md).

### Parâmetros

`configuration_file`
:   O caminho do arquivo de configuração.

### Valor Retornado

Retorna um [resource](language.types.resource.md) de rede neural em caso de sucesso ou **`false`** em caso de erro.

### Veja também

- [fann\_save()](function.fann-save.md) - Grava a rede neural inteira em um arquivo de configuração

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
