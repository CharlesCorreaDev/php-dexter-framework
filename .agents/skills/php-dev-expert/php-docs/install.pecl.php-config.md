# php-config

> **Fonte / Source:** https://www.php.net/manual/pt_BR/install.pecl.php-config.php

---

## **php-config**

**Aviso**

PECL está obsoleto.
O PHP Installer for Extensions (PIE) substitui o PECL e é o recomendado para instalar extensões.
Descubra mais em [» https://github.com/php/pie](https://github.com/php/pie)

**php-config**
é um script shell para obter informações sobre a configuração do PHP
instalado.

Quando as extensões estão sendo compiladas, se várias versões do PHP
estiverem instaladas, a instalação para a qual compilar pode ser especificada
usando a opção
**--with-php-config**
durante a configuração, definindo o caminho do respectivo script
**php-config**.

A lista de opções de linha de comando fornecida pelo script
**php-config**
pode ser consultada a qualquer momento executando
**php-config**
com a opção **-h**:

```
Usage: /usr/local/bin/php-config [OPTION]
Options:
  --prefix            [...]
  --includes          [...]
  --ldflags           [...]
  --libs              [...]
  --extension-dir     [...]
  --include-dir       [...]
  --php-binary        [...]
  --php-sapis         [...]
  --configure-options [...]
  --version           [...]
  --vernum            [...]
```

**Opções de linha de comando**

| Opção | Descrição |
| --- | --- |
| --prefix | Prefixo do diretório onde o PHP está instalado, por exemplo /usr/local |
| --includes | Lista de opções `-I` com todos os arquivos de inclusão. |
| --ldflags | Flags `LD` com as quais o PHP foi compilado. |
| --libs | Bibliotecas extras com as quais o PHP foi compilado. |
| --extension-dir | Diretório onde as extensões são pesquisadas por padrão. |
| --include-dir | Prefixo do diretório onde os arquivos de cabeçalho são instalados por padrão. |
| --php-binary | Caminho completo para o binário php CLI ou CGI. |
| --php-sapis | Exibe todos os módulos SAPI disponíveis. |
| --configure-options | Opções de configuração para recriar a configuração da instalação atual do PHP. |
| --version | Versão do PHP. |
| --vernum | Versão do PHP como inteiro. |

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
