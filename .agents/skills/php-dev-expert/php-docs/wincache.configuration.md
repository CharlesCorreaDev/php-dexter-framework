# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/wincache.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

A tabela a seguir lista e explica as configurações
fornecidas pela extensão WinCache:

**Opções de configuração do WinCache**

| Nome | Padrão | Mínimo | Máximo | Modificável | Registro de Alterações |
| --- | --- | --- | --- | --- | --- |
| [wincache.fcenabled](wincache.configuration.md#ini.wincache.fcenabled) | "1" | "0" | "1" | **`INI_ALL`** | Disponível a partir do WinCache 1.0.0 |
| [wincache.fcenabledfilter](wincache.configuration.md#ini.wincache.fcenabledfilter) | "NULL" | "NULL" | "NULL" | **`INI_SYSTEM`** | Disponível a partir do WinCache 1.0.0 |
| [wincache.fcachesize](wincache.configuration.md#ini.wincache.fcachesize) | "24" | "5" | "255" | **`INI_SYSTEM`** | Disponível a partir do WinCache 1.0.0 |
| [wincache.fcndetect](wincache.configuration.md#ini.wincache.fcndetect) | "1" | "0" | "1" | **`INI_SYSTEM`** | Disponível a partir do WinCache 1.1.0 |
| [wincache.maxfilesize](wincache.configuration.md#ini.wincache.maxfilesize) | "256" | "10" | "2048" | **`INI_SYSTEM`** | Disponível a partir do WinCache 1.0.0 |
| [wincache.ocenabled](wincache.configuration.md#ini.wincache.ocenabled) | "1" | "0" | "1" | **`INI_ALL`** | Disponível a partir do WinCache 1.0.0. Removida a partir do 2.0.0.0 |
| [wincache.ocenabledfilter](wincache.configuration.md#ini.wincache.ocenabledfilter) | "NULL" | "NULL" | "NULL" | **`INI_SYSTEM`** | Disponível a partir do WinCache 1.0.0. Removida a partir do 2.0.0.0 |
| [wincache.ocachesize](wincache.configuration.md#ini.wincache.ocachesize) | "96" | "15" | "255" | **`INI_SYSTEM`** | Disponível a partir do WinCache 1.0.0. Removida a partir do 2.0.0.0 |
| [wincache.filecount](wincache.configuration.md#ini.wincache.filecount) | "4096" | "1024" | "16384" | **`INI_SYSTEM`** | Disponível a partir do WinCache 1.0.0 |
| [wincache.chkinterval](wincache.configuration.md#ini.wincache.chkinterval) | "30" | "0" | "300" | **`INI_SYSTEM`** | Disponível a partir do WinCache 1.0.0 |
| [wincache.ttlmax](wincache.configuration.md#ini.wincache.ttlmax) | "1200" | "0" | "7200" | **`INI_SYSTEM`** | Disponível a partir do WinCache 1.0.0 |
| [wincache.enablecli](wincache.configuration.md#ini.wincache.enablecli) | 0 | 0 | 1 | **`INI_SYSTEM`** | Disponível a partir do WinCache 1.0.0 |
| [wincache.ignorelist](wincache.configuration.md#ini.wincache.ignorelist) | NULL | NULL | NULL | **`INI_ALL`** | Disponível a partir do WinCache 1.0.0 |
| [wincache.namesalt](wincache.configuration.md#ini.wincache.namesalt) | NULL | NULL | NULL | **`INI_SYSTEM`** | Disponível a partir do WinCache 1.0.0 |
| [wincache.ucenabled](wincache.configuration.md#ini.wincache.ucenabled) | 1 | 0 | 1 | **`INI_SYSTEM`** | Disponível a partir do WinCache 1.1.0 |
| [wincache.ucachesize](wincache.configuration.md#ini.wincache.ucachesize) | 8 | 5 | 85 | **`INI_SYSTEM`** | Disponível a partir do WinCache 1.1.0 |
| [wincache.scachesize](wincache.configuration.md#ini.wincache.scachesize) | 8 | 5 | 85 | **`INI_SYSTEM`** | Disponível a partir do WinCache 1.1.0 |
| [wincache.rerouteini](wincache.configuration.md#ini.wincache.rerouteini) | NULL | NULL | NULL | **`INI_SYSTEM`** | Disponível a partir do WinCache 1.2.0. Removida a partir do 1.3.7 |
| [wincache.reroute\_enabled](wincache.configuration.md#ini.wincache.reroute_enabled) | 1 | 0 | 1 | **`INI_SYSTEM`**|**`INI_PERDIR`** | Disponível a partir do WinCache 1.3.7 |
| [wincache.srwlocks](wincache.configuration.md#ini.wincache.srwlocks) | 1 | 0 | 1 | **`INI_SYSTEM`** | Disponível a partir do WinCache 1.3.6.3. Removida a partir do 2.0.0.0 |
| [wincache.filemapdir](wincache.configuration.md#ini.wincache.filemapdir) | NULL | NULL | NULL | **`INI_SYSTEM`** | Disponível a partir do WinCache 1.3.7.4 |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`wincache.fcenabled` [bool](language.types.boolean.md)
:   Habilita ou desabilita a funcionalidade de cache de arquivos.

`wincache.fcenabledfilter` [string](language.types.string.md)
:   Define uma lista separada por vírgulas de identificadores de sites do IIS onde o cache de arquivos
    deve ser habilitado ou desabilitado. Esta configuração funciona em conjunto
    com `wincache.fcenabled`: se `wincache.fcenabled`
    for definido como 1, os sites listados em `wincache.fcenabledfilter`
    terão o cache de arquivos desativado; se `wincache.fcenabled`
    for definido como 0, os sites listados em `wincache.fcenabledfilter`
    terão o cache de arquivos ativado.

`wincache.fcachesize` [int](language.types.integer.md)
:   Define o tamanho máximo de memória (em megabytes) alocado para o cache de arquivos.
    Se o tamanho total de todos os arquivos em cache exceder o valor especificado nesta configuração,
    a maioria dos arquivos obsoletos será removida do cache de arquivos.

`wincache.fcndetect` [bool](language.types.boolean.md)
:   Habilita ou desabilita a funcionalidade de detecção de notificação de alteração de arquivo. Se a notificação de alteração de arquivo
    for suportada, ela será usada para atualizar o opcode e as entradas de cache de arquivos
    assim que os arquivos correspondentes forem modificados em um sistema de arquivos. Se a notificação de alteração de arquivo
    não for suportada, por exemplo, ao usar compartilhamentos de arquivos de rede, o wincache verificará
    as alterações de arquivo em intervalos regulares especificados por `wincache.chkinterval`.

`wincache.maxfilesize` [int](language.types.integer.md)
:   Define o tamanho máximo permitido (em quilobytes) para que um único arquivo seja armazenado em cache.
    Se o tamanho de um arquivo exceder o valor especificado, ele não será armazenado em cache.
    Esta configuração se aplica apenas ao cache de arquivos.

`wincache.ocenabled` [bool](language.types.boolean.md)
:   **Aviso**

    Esta opção foi *REMOVIDA* a partir do 2.0.0.0

    Habilita ou desabilita a funcionalidade de cache do opcode

`wincache.ocenabledfilter` [string](language.types.string.md)
:   **Aviso**

    Esta opção foi *REMOVIDA* a partir do 2.0.0.0

    Define uma lista separada por vírgulas de identificadores de sites do IIS onde o cache de opcode
    deve ser habilitado ou desabilitado. Esta configuração funciona em conjunto
    com `wincache.ocenabled`: se `wincache.ocenabled`
    for definido como 1, os sites listados no `wincache.ocenabledfilter`
    terão o cache de opcode desativado; se `wincache.ocenabled`
    for definido como 0, os sites listados no `wincache.ocenabledfilter`
    terão o cache de opcode ativado.

`wincache.ocachesize` [int](language.types.integer.md)
:   **Aviso**

    Esta opção foi *REMOVIDA* a partir do 2.0.0.0

    Define o tamanho máximo de memória (em megabytes) alocado para o cache do opcode.
    Se o tamanho do opcode armazenado em cache exceder o valor especificado,
    a maior parte do opcode obsoleto será removida do cache. Observe que o tamanho do cache
    do opcode deve ser pelo menos 3 vezes maior que o tamanho do cache do arquivo.
    Caso contrário, o tamanho do cache do opcode será aumentado automaticamente.

`wincache.filecount` [int](language.types.integer.md)
:   Define quantos arquivos devem ser armazenados em cache pela extensão, para que o tamanho de memória
    apropriado seja alocado na inicialização. Se o número de arquivos exceder o valor
    especificado, o WinCache realocará mais memória conforme necessário.

`wincache.chkinterval` [int](language.types.integer.md)
:   Define a frequência (em segundos) em que a extensão verifica se há alterações no arquivo para
    atualizar o cache. Definir como 0 desabilitará a atualização do cache.
    As alterações no arquivo não serão refletidas no cache, a menos que a entrada de cache para
    esse arquivo seja removida pelo scavenger ou o pool de aplicativos do IIS seja reciclado ou
    a função wincache\_refresh\_if\_changed seja chamada.

`wincache.ttlmax` [int](language.types.integer.md)
:   Define o tempo máximo de vida (em segundos) para uma entrada em cache sem ser utilizada.
    Definir como 0 desabilitará a limpeza de cache, de forma que as entradas em cache nunca
    serão removidas do cache durante o tempo de vida do processo de trabalho do IIS.

`wincache.enablecli` [bool](language.types.boolean.md)
:   Define se o cache está habilitado quando o PHP está sendo executado no modo de linha de comando (CLI).

`wincache.ignorelist` [string](language.types.string.md)
:   Define uma lista de arquivos que não devem ser armazenados em cache pela extensão.
    A lista de arquivos é especificada usando apenas nomes de arquivos, separados
    pelo símbolo de barra vertical - "|".

    **Exemplo #1 Exemplo de `wincache.ignorelist`**

    ```
    wincache.ignorelist = "index.php|misc.php|admin.php"
    ```

`wincache.namesalt` [string](language.types.string.md)
:   Define uma string que será usada ao nomear a extensão
    de objetos específicos armazenados na memória compartilhada. Isso é usado
    para evitar conflitos que podem ser causados ​​se outros aplicativos dentro
    de um processo de trabalho do IIS tentarem acessar a memória compartilhada. O comprimento da
    string namesalt não pode exceder 8 caracteres.

`wincache.ucenabled` [bool](language.types.boolean.md)
:   Habilita ou desabilita a funcionalidade de cache do usuário.

`wincache.ucachesize` [int](language.types.integer.md)
:   Define o tamanho máximo de memória em megabytes alocado para o cache do usuário. Se o tamanho total
    das variáveis ​​armazenadas no cache do usuário exceder o valor especificado, as variáveis ​​mais obsoletas
    serão removidas do cache.

`wincache.scachesize` [int](language.types.integer.md)
:   Define o tamanho máximo de memória em megabytes alocado para o cache de sessão. Se o tamanho total
    dos dados armazenados no cache de sessão exceder o valor especificado, os dados mais obsoletos
    serão removidos do cache.

`wincache.rerouteini` [string](language.types.string.md)
:   **Aviso**

    Esta opção foi *REMOVIDA* a partir do 1.3.7. Veja `wincache.reroute_enabled` para funcionalidade similar a partir do 1.3.7.

    Especifica um caminho absoluto ou relativo para o arquivo reroute.ini que contém a lista de funções PHP
    cuja implementação deve ser substituída pelos equivalentes da função WinCache. Se um caminho relativo for especificado
    então, presume-se que seja relativo à localização do arquivo php-cgi.exe.

`wincache.reroute_enabled` [bool](language.types.boolean.md)
:   Habilita ou desabilita o redirecionamento de determinadas funções de E/S de arquivo por meio do cache de arquivo.

`wincache.srwlocks` [bool](language.types.boolean.md)
:   **Aviso**

    Esta opção foi *REMOVIDA* a partir do 2.0.0.0

    Habilita ou desabilita o uso de bloqueios compartilhados de leitor/gravador. Desabilitar é útil na solução de condições de impasse no WinCache.

`wincache.filemapdir` [string](language.types.string.md)
:   Especifica um caminho absoluto para um diretório onde o WinCache armazenará os arquivos temporários usados ​​para segmentos de memória compartilhada.

    Este diretório deve estar na máquina local e não em um sistema de arquivos em rede.

    Se o diretório não for especificado, o WinCache usará o arquivo de paginação do sistema Windows para todos os segmentos de memória compartilhada.

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
