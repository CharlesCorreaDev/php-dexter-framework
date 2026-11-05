# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/apache.configuration.php

---

## Configurações de Execução

O comportamento do módulo PHP sob o Apache é afetado pelas configurações
no php.ini. As diretivas de configuração no php.ini podem ser sobrescritas
por [diretivas php\_flag](configuration.changes.md#configuration.changes.apache)
no arquivo de configuração do servidor ou por arquivos .htaccess locais.

**Exemplo #1 Desligando a interpretação do PHP em um diretório utilizando .htaccess**

```
php_flag engine off
```

**Opções de configuração do Apache**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [engine](apache.configuration.md#ini.engine) | "1" | **`INI_ALL`** |  |
| [child\_terminate](apache.configuration.md#ini.child-terminate) | "0" | **`INI_ALL`** |  |
| [last\_modified](apache.configuration.md#ini.last-modified) | "0" | **`INI_ALL`** |  |
| [xbithack](apache.configuration.md#ini.xbithack) | "0" | **`INI_ALL`** |  |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`engine` [bool](language.types.boolean.md)
:   Liga ou desliga a interpretação do PHP.
    Esta diretiva é útil somente para a módulo do Apache
    do PHP. É utilizada por sites que desejam desligar e ligar a
    interpretação do PHP em nível de diretórios ou servidores
    virtuais. Colocando **`engine off`**
    nos lugares apropriados do arquivo httpd.conf, o PHP pode
    ser ativado ou desativado.

`child_terminate` [bool](language.types.boolean.md)
:   Especifica se scripts PHP podem requisitar o término de processos filhos no final da
    requisição, veja também [apache\_child\_terminate()](function.apache-child-terminate.md).

`last_modified` [bool](language.types.boolean.md)
:   Envia a data de modificação dos scripts PHP com cabeçalho Last-Modified: para esta requisição.

`xbithack` [bool](language.types.boolean.md)
:   Interpreta arquivos marcados como executável como PHP, indiferente da extensão.

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
