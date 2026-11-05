# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/image.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração de Image**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [gd.jpeg\_ignore\_warning](image.configuration.md#ini.gd.jpeg-ignore-warning) | "1" | **`INI_ALL`** |  |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`gd.jpeg_ignore_warning` [bool](language.types.boolean.md)
:   Ignora os avisos (mas não os erros) criado por libjpeg(-turbo).

**Registro de alterações para `gd.jpeg_ignore_warning`**

| Versão | Descrição |
| --- | --- |
| 7.1.0 | O padrão de gd.jpeg\_ignore\_warning foi alterado de 0 para 1. |

Veja também as diretivas de configuração [exif](exif.configuration.md).

**Aviso**

As funções para imagem usam bastante memória. Certifique-se de definir [memory\_limit](ini.core.md#ini.memory-limit) grande o bastante, se você estiver usando
a versão fornecida da biblioteca GD.

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
