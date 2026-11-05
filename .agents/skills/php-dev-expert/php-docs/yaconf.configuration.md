# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaconf.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração de Yaconf**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [yaconf.check\_delay](yaconf.configuration.md#ini.yaconf.check-delay) | 300 | **`INI_SYSTEM`** |  |
| [yaconf.directory](yaconf.configuration.md#ini.yaconf.directory) | /tmp/conf/ | **`INI_SYSTEM`** |  |

Aqui está uma breve explicação das
diretivas de configuração.

`yaconf.check_delay` [int](language.types.integer.md)
:   Define o intervalo de tempo no qual o Yaconf irá detectar alterações no arquivo INI (pelo horário de modificação do diretório).
    Se for definido para zero, o PHP deve ser reiniciado para recarregamento das configurações.

`yaconf.directory` [string](language.types.string.md)
:   Caminho para o diretório onde todos os arquivos de configuração INI estão localizados.

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
