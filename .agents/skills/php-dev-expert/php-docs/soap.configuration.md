# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/soap.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração de SOAP**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [soap.wsdl\_cache\_enabled](soap.configuration.md#ini.soap.wsdl-cache-enabled) | 1 | **`INI_ALL`** |  |
| [soap.wsdl\_cache\_dir](soap.configuration.md#ini.soap.wsdl-cache-dir) | /tmp | **`INI_ALL`** |  |
| [soap.wsdl\_cache\_ttl](soap.configuration.md#ini.soap.wsdl-cache-ttl) | 86400 | **`INI_ALL`** |  |
| [soap.wsdl\_cache](soap.configuration.md#ini.soap.wsdl-cache) | 1 | **`INI_ALL`** |  |
| [soap.wsdl\_cache\_limit](soap.configuration.md#ini.soap.wsdl-cache-limit) | 5 | **`INI_ALL`** |  |

Aqui está uma breve explicação das
diretivas de configuração.

`soap.wsdl_cache_enabled` [int](language.types.integer.md)
:   Ativa ou desativa o recurso de cache WSDL.

`soap.wsdl_cache_dir` [string](language.types.string.md)
:   Define o nome do diretório onde a extensão SOAP colocará os arquivos de cache.

`soap.wsdl_cache_ttl` [int](language.types.integer.md)
:   Define o número de segundos (tempo de vida) que os arquivos em cache serão usados
    em vez dos originais.

`soap.wsdl_cache` [int](language.types.integer.md)
:   Se `soap.wsdl_cache_enabled` estiver ativado, esta configuração
    determina o tipo de cache. Pode ser qualquer um dos seguintes:
    **`WSDL_CACHE_NONE`** (`0`),
    **`WSDL_CACHE_DISK`** (`1`),
    **`WSDL_CACHE_MEMORY`** (`2`) ou
    **`WSDL_CACHE_BOTH`** (`3`). Isso pode
    também pode ser definido através do array `options` no
    [SoapClient](class.soapclient.md) ou construtor
    [SoapServer](class.soapserver.md).

`soap.wsdl_cache_limit` [int](language.types.integer.md)
:   Número máximo de arquivos WSDL armazenados em cache na memória. Adicionando mais arquivos em
    um cache de memória cheio excluirá os arquivos mais antigos nele.

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
