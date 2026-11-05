# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de configuração de Imagick**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [imagick.locale\_fix](imagick.configuration.md#ini.imagick.locale-fix) | **`false`** | **`INI_ALL`** | Disponível desde Imagick 2.1.0 |
| [imagick.progress\_monitor](imagick.configuration.md#ini.imagick.progress-monitor) | **`false`** | **`INI_SYSTEM`** | Disponível desde Imagick 2.2.2 |
| [imagick.skip\_version\_check](imagick.configuration.md#ini.imagick.skip-version-check) | **`false`** | **`INI_SYSTEM`** | Disponível desde Imagick 3.3.0 |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`imagick.locale_fix` [bool](language.types.boolean.md)
:   Corrige um problema de desenho com localidades que usam '`,`' como
    separador de decimais.

`imagick.progress_monitor` [bool](language.types.boolean.md)
:   Usada para habilitar o monitor de progresso de imagem.

`imagick.skip_version_check` [bool](language.types.boolean.md)
:   Quando a Imagick é carregada, ela compara a versão da ImageMagick com a qual foi compilada, com a versão atualmente utilizada e gera um alerta caso sejam diferentes. Este alerta pode ser suprimido habilitando-se esta configuração ini.

    Não é recomendado usar uma versão da Imagick que foi compilada em uma versão diferente da ImageMagick sendo utilizada. Embora possa parecer funcionar, pode levar a travamentos aleatórios ou outro comportamento indefinido.

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
