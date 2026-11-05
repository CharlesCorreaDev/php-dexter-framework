# Mostra informações sobre a configuração do PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.phpinfo.php

---

# phpinfo

(PHP 4, PHP 5, PHP 7, PHP 8)

phpinfo — Mostra informações sobre a configuração do PHP

### Descrição

function **phpinfo**([int](language.types.integer.md) `$flags` = **`INFO_ALL`**): [true](language.types.singleton.md)

Mostra uma grande quantidade de informações sobre o estado atual do PHP.
Isso inclui informações sobre opções e extensões de compilação do PHP,
a versão do PHP, informações do servidor e ambiente (se compilado como um
módulo), o ambiente do PHP, informações da versão do sistema operacional, caminhos, valores
principais e locais das opções de configuração, cabeçalhos HTTP e a Licença do PHP.

Como cada sistema é configurado de maneira diferente, **phpinfo()** é
comumente usado para verificar [definições de configuração](configuration.md) e disponibilidade
de [variáveis predefinidas](language.variables.predefined.md)
em um determinado sistema.

**phpinfo()** também é uma ferramenta de depuração valiosa,
pois contém todos os dados EGPCS (Environment - ambiente, GET, POST, Cookie, Servidor).

### Parâmetros

`flags`
:   A saída pode ser personalizada passando um ou mais dos
    seguintes valores de *constantes* bit a bit somados
    no parâmetro opcional `flags`.
    Também é possível combinar as respectivas constantes ou valores bit a bit
    com o [operador binário OR](language.operators.bitwise.md).

    **Opções de **phpinfo()****

    | Nome (constante) | Valor | Descrição |
    | --- | --- | --- |
    | INFO\_GENERAL | 1 | A linha de configuração, localização do php.ini, data de construção, servidor Web, sistema e muito mais. |
    | INFO\_CREDITS | 2 | Créditos do PHP. Veja também [phpcredits()](function.phpcredits.md). |
    | INFO\_CONFIGURATION | 4 | Valores atuais das diretivas do PHP locais e principais. Veja também [ini\_get()](function.ini-get.md). |
    | INFO\_MODULES | 8 | Módulos carregados e suas respectivas configurações. Veja também [get\_loaded\_extensions()](function.get-loaded-extensions.md). |
    | INFO\_ENVIRONMENT | 16 | Informações sobre variáveis ​​de ambiente que também estão disponíveis em [$\_ENV](reserved.variables.environment.md). |
    | INFO\_VARIABLES | 32 | Mostra todas as [variáveis ​​predefinidas](language.variables.predefined.md) de EGPCS (Environment - ambiente, GET, POST, Cookie, Servidor). |
    | INFO\_LICENSE | 64 | Informações de Licença do PHP. Veja também a seção de [» Perguntas e Respostas sobre Licença](https://www.php.net/license/). |
    | INFO\_ALL | -1 | Mostra todas as informações acima. |

### Valor Retornado

Sempre retorna **`true`**.

### Examples

**Exemplo #1 Exemplo de **phpinfo()****

```
<?php

// Mostra todas as informações, equivalente ao padrão INFO_ALL
phpinfo();

// Mostra apenas informações sobre módulos.
// phpinfo(8) gera resultados idênticos.
phpinfo(INFO_MODULES);

?>
```

### Notas

> **Nota**:
>
> Nas versões do PHP anteriores à 5.5, partes das informações exibidas eram
> desativadas quando a configuração [expose\_php](ini.core.md#ini.expose-php)
> estava definida como `off`. Isso incluía os
> logotipos PHP e Zend e os créditos.

> **Nota**:
>
> **phpinfo()** gera texto puro ao invés de HTML ao
> usar o modo CLI.

### Veja também

- [phpversion()](function.phpversion.md) - Obtém a versão atual do PHP
- [phpcredits()](function.phpcredits.md) - Mostra os créditos para o PHP
- [ini\_get()](function.ini-get.md) - Obtém o valor de uma opção de configuração
- [ini\_set()](function.ini-set.md) - Define o valor de uma opção de configuração
- [get\_loaded\_extensions()](function.get-loaded-extensions.md) - Retorna um array com os nomes de todos os módulos compilados e carregados
- [Variáveis Predefinidas](language.variables.predefined.md)

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
