# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mcrypt.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração do Mcrypt**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [mcrypt.algorithms\_dir](mcrypt.configuration.md#ini.mcrypt.algorithms-dir) | **`null`** | **`INI_ALL`** |  |
| [mcrypt.modes\_dir](mcrypt.configuration.md#ini.mcrypt.modes-dir) | **`null`** | **`INI_ALL`** |  |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`mcrypt.algorithms_dir` [string](language.types.string.md)
:   O diretório que contém os algoritmos. Padrão para os diretórios
    compilados dentro do libmcrypt, que é tipicamente
    */usr/local/lib/libmcrypt*. Consulte
    [mcrypt\_list\_algorithms()](function.mcrypt-list-algorithms.md) para detalhes adicionais.

`mcrypt.modes_dir` [string](language.types.string.md)
:   O diretório que contém os modos. Padrão para os diretórios
    compilados dentro do libmcrypt, que é tipicamente
    */usr/local/lib/libmcrypt*. Consulte
    [mcrypt\_list\_modes()](function.mcrypt-list-modes.md) para detalhes adicionais.

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
