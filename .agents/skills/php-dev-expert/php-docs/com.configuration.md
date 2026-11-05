# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/com.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de configuação de COM**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [com.allow\_dcom](com.configuration.md#ini.com.allow-dcom) | "0" | **`INI_SYSTEM`** |  |
| [com.autoregister\_typelib](com.configuration.md#ini.com.autoregister-typelib) | "0" | **`INI_ALL`** |  |
| [com.autoregister\_verbose](com.configuration.md#ini.com.autoregister-verbose) | "0" | **`INI_ALL`** |  |
| [com.autoregister\_casesensitive](com.configuration.md#ini.com.autoregister-casesensitive) | "1" | **`INI_ALL`** |  |
| [com.code\_page](com.configuration.md#ini.com.code-page) | "" | **`INI_ALL`** |  |
| [com.dotnet\_version](com.configuration.md#ini.com.dotnet-version) | "" | **`INI_SYSTEM`** | A partir do PHP 8.0.0 |
| [com.typelib\_file](com.configuration.md#ini.com.typelib-file) | "" | **`INI_SYSTEM`** |  |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`com.allow_dcom`
:   Quando ativado, o PHP poderá operar como um cliente D-COM
    (COM Distribuído) e permitirá que o script PHP instancie
    objetos COM em um servidor remoto.

`com.autoregister_typelib`
:   Quando ativado, o PHP tentará registrar constantes da
    biblioteca de tipos de objetos [COM](class.com.md) que ele instancia, se esses objetos
    implementarem as interfaces necessárias para obter essas informações.
    A distinção entre maiúsculas e minúsculas das constantes que ele registra é controlada Please
    diretiva [com.autoregister\_casesensitive](com.configuration.md#ini.com.autoregister-casesensitive) do php.ini.

`com.autoregister_verbose`
:   Quando ativado, quaisquer problemas com o carregamento de uma biblioteca de tipos durante
    a instanciação do objeto serão relatados usando o mecanismo de erro do PHP.
    O padrão é desativado, o que não emite nenhuma indicação se houve
    um erro ao localizar ou carregar a biblioteca de tipos.

`com.autoregister_casesensitive`
:   Quando ativado (o padrão), as constantes encontradas nas bibliotecas
    de tipos carregadas automaticamente ao instanciar objetos [COM](class.com.md) serão registradas com distinção entre maiúsculas e minúsculas. Consulte
    [com\_load\_typelib()](function.com-load-typelib.md) para mais detalhes.

`com.code_page`
:   Controla a página de código do conjunto de caracteres padrão a ser usada ao passar
    strings de e para objetos COM. Se definida como uma string vazia, o PHP
    assumirá o valor **`CP_ACP`**, que é a página de código
    ANSI padrão do sistema.

    Se o texto nos scripts for codificado usando por padrão um conjunto
    de caracteres ou uma codificação diferente, definir esta diretiva evitará que
    seja necessário passar a página de código como um parâmetro para o construtor de classe [com](class.com.md). Observe que ao
    usar esta diretiva (como acontece com qualquer diretiva de configuração PHP), o script
    PHP se torna menos portável; deve-se usar o parâmetro do construtor COM
    sempre que possível.

`com.dotnet_version`
:   A versão do .NET Framework a ser usada para objetos [dotnet](class.dotnet.md).
    O valor da configuração são as três primeiras partes do número da versão do Framework,
    separadas por pontos e prefixadas com `v`, por exemplo, `v4.0.30319`.

`com.typelib_file`
:   Quando definida, deve informar o caminho para um arquivo que contém uma lista
    de bibliotecas de tipos que devem ser carregadas na inicialização. Cada linha do
    arquivo será tratada como o nome da biblioteca de tipos e carregada como
    se [com\_load\_typelib()](function.com-load-typelib.md) tivesse sido chamada.
    As constantes serão registradas de forma persistente, de forma que a biblioteca
    só precise ser carregada uma vez. Se o nome de uma biblioteca de tipos terminar com a
    string `#cis` ou `#case_insensitive`,
    as constantes dessa biblioteca serão registradas
    sem distinção entre maiúsculas e minúsculas.

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
