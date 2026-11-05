# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/apcu.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

Embora as configurações padrão do APCu são adequadas para muitas instalações, usuários
devem considerar ajustes para os parâmetros abaixo.

Existe uma decisão a ser tomada ao configurar o APCu:
quanta memória será alocada ao APCu.
A diretiva ini que controla isso é `apc.shm_size`,
leia cuidadosamente as seções sobre este assunto abaixo.

Uma vez que o servidor está em execução, o script `apc.php` que é
incluído com a extensão deve ser copiado para algum lugar dentro do diretório raiz dos documentos e
visualizado com um navegador pois ele fornece uma análise detalhada do funcionamento
interno do APCu. Se a GD estiver habilitada no PHP, ele irá mostrar inclusive alguns
gráficos interessantes.

Se o APCu estiver funcionando, o número `Cache full count` (na esquerda) mostrará o número de vezes que o cache
atingiu a capacidade máxima e teve que despejar entradas para liberar memória.
Durante o despejo, se `apc.ttl` foi especificado, o APCu inicialmente
tentará remover entradas expiradas, isto é, entradas cujo TTL tenha expirado ou
entradas que não tenham o TTL definido e não tenham sido acessadas nos últimos
`apc.ttl` segundos. Se `apc.ttl` não foi definido,
ou se a remoção de entradas expiradas não liberou espaço suficiente, o APCu limpará
o cache inteiro.

O número de despejos deve ser mínimo em um cache bem configurado. Se o
cache está constantemente atingindo o limite, e por isso sendo liberado à força,
a agitação resultante terá efeitos depreciativos no desempenho do script. A maneira mais fácil
de minimizar este número é alocar mais memória para o APCu.

Quando o APCu é compilado com suporte a mmap (Mapeamento de Memória), ele usará somente um
segmento de memória, ao contrário de quando for compilado com suporte a SHM (Memória Compartilhada SysV)
que usa múltiplos segmentos. MMAP não tem um limite máximo como o SHM
em `/proc/sys/kernel/shmmax`. Em geral o suporte MMAP é
recomendado porque ele irá recuparar a memória mais rapidamente quando o servidor web for
reiniciado e, sumazirando, reduzirá o impacto na alocação de memória na inicialização.

**Opções de configuração APCu**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [apc.enabled](apcu.configuration.md#ini.apcu.enabled) | 1 | **`INI_SYSTEM`** |  |
| [apc.shm\_segments](apcu.configuration.md#ini.apcu.shm-segments) | 1 | **`INI_SYSTEM`** |  |
| [apc.shm\_size](apcu.configuration.md#ini.apcu.shm-size) | "32M" | **`INI_SYSTEM`** |  |
| [apc.entries\_hint](apcu.configuration.md#ini.apcu.entries-hint) | 512 \* apc.shm\_size | **`INI_SYSTEM`** | Antes do APCu 5.1.25, o padrão era 4096 |
| [apc.ttl](apcu.configuration.md#ini.apcu.ttl) | 0 | **`INI_SYSTEM`** |  |
| [apc.gc\_ttl](apcu.configuration.md#ini.apcu.gc-ttl) | 3600 | **`INI_SYSTEM`** |  |
| [apc.mmap\_file\_mask](apcu.configuration.md#ini.apcu.mmap-file-mask) | NULL | **`INI_SYSTEM`** |  |
| [apc.slam\_defense](apcu.configuration.md#ini.apcu.slam-defense) | 0 | **`INI_SYSTEM`** |  |
| [apc.enable\_cli](apcu.configuration.md#ini.apcu.enable-cli) | 0 | **`INI_SYSTEM`** |  |
| [apc.use\_request\_time](apcu.configuration.md#ini.apcu.use-request-time) | 0 | **`INI_ALL`** | Antes do APCu 5.1.19, o padrão era `1`. |
| [apc.serializer](apcu.configuration.md#ini.apcu.serializer) | "php" | **`INI_SYSTEM`** | Antes do APCu 5.1.15, o padrão era `"default"`. |
| [apc.coredump\_unmap](apcu.configuration.md#ini.apcu.coredump-unmap) | 0 | **`INI_SYSTEM`** |  |
| [apc.preload\_path](apcu.configuration.md#ini.apcu.preload-path) | NULL | **`INI_SYSTEM`** |  |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`apc.enabled` [bool](language.types.boolean.md)
:   `apc.enabled` pode ser definido para 0 para desabilitar o APC. Isto é
    útil principalmente quando o APC é compilado estaticamente
    no PHP, já que não há outra maneira de desabilitá-lo
    (quando compilado como um DSO, a linha `extension`
    no `php.ini` pode ser simplesmente comentada).

`apc.shm_segments` [int](language.types.integer.md)
:   O número de segmentos de memória compartilhada a alocar
    para o cache do compilador. Se o APC estiver com pouca
    memória compartilhada mas `apc.shm_size`
    estiver definido com um valor tão alto quanto o sistema permite, aumentar
    este valor pode evitar que o APC tenha a memória exaurida.

`apc.shm_size` [string](language.types.string.md)
:   O tamanho de cada segmento de memória compartilhada, informado como uma notação reduzida
    como descrito [neste FAQ](faq.using.md#faq.using.shorthandbytes).
    Por padrão, alguns sistemas (incluindo a maior parte das variantes
    BSD) têm limites muito baixos no tamanho de um
    segmento de memória compartilhada.

`apc.entries_hint` [int](language.types.integer.md)
:   Uma "pista" sobre o número de variáveis distintas que podem ser armazenadas.
    Defina para zero ou omita se não tiver essa informação.

`apc.ttl` [int](language.types.integer.md)
:   Considera que entradas de cache sem um TTL explícito estão
    expiradas se não foram acessadas nos segundos definidos por esta
    diretiva. Efetivamente, isto permite que tais entradas sejam
    removida oportunamente durante uma inserção de cache ou antes de
    uma eliminação completa. Observe que devido à remoção ser
    oportunap, as entradas ainda podem ser lidas mesmo se
    forem mais antigas que `apc.ttl` segundos.
    Esta configuração não tem efeito em entradas de cache que tenham
    um TTL explícito especificado.

`apc.gc_ttl` [int](language.types.integer.md)
:   O número de segundos que uma entrada de cache pode
    permanecer na lista de coleta de lixo após ser removida ou inicializada.
    Uma entrada é elegível a remoção se sua contagem de referência for zero,
    ou se exceder este limite de tempo.
    Se definido para `0`, a limpeza baseada em tempo é desativada,
    e as entradas só serão removidas quando suas contagens de referência caírem para zero.

`apc.mmap_file_mask` [string](language.types.string.md)
:   Se compilado com suporte MMAP usando `--enable-mmap`
    esta é a máscara de arquivo em estilo mktemp a ser passada ao
    módulo mmap para determinar se a região de memória mapeada pelo MMAP
    será apoiada por arquivo ou apoiada por memória
    comparilhada. Para MMAP diretamente apoiada por arquivo, defina para
    algo como `/tmp/apc.XXXXXX`
    (exatamente 6 `X`).
    Oara usar shm\_open/mmap em estilo POSIX, insira um `.shm`
    em algum lugar da máscara (por exemplo, `/apc.shm.XXXXXX`).
    Pode-se também defini-la para `/dev/zero` para usar a
    interface `/dev/zero` do kernel para memória mapeada
    anonimamente. Deixar este valor indefinido força um mapeamento anônimo.

`apc.slam_defense` [bool](language.types.boolean.md)
:   Em um servidor muito ocupado, toda vez que ele for reiniciado
    ou quando arquivos forem modificados, pode-se criar uma condição de corrida onde muitos
    processos tentam inserir o mesmo arquivo no cache ao mesmo tempo.
    Definir `apc.slam_defense` para `1`
    pode ajudar a evitar que múltiplos processos tentem fazer cache do
    mesmo arquivo ao mesmo tempo, através da introdução de um mecanismo
    probabilístico. Se a mesma chave sofrer tentativa de cache
    dentro de um intervalo curto de tempo por diferentes processos, ele
    pula a tarefa de cache do processo atual para mitigar potenciais
    conflitos de cache.

`apc.enable_cli` [int](language.types.integer.md)
:   Esta diretiva serve principalmente para teste e depuração. Habilita APC
    para a versão CLI do PHP. Em circunstâncias normais, não é
    ideal criar, popular e destruir o cache APC a cada
    requisição CLI, mas para vários cenários de teste é útil para
    ser capaz de habilitar o APC para a versão CLI do PHP facilmente.

`apc.serializer` [string](language.types.string.md)
:   Usada para configurar o APC para usar um serializador de terceiros.

`apc.coredump_unmap` [bool](language.types.boolean.md)
:   Habilita o gerenciamento APC de sinais, tal como SIGSEGV, que grava
    arquivos de núcleo quando sinalizado. Quandos esses sinais são recebidos,
    o APC tentará desmapear o segmento de memória compartilhada para
    excluí-lo do arquivo de núcleo. Esta configuração pode melhorar
    a estabilidade do sistema quando sinais fatais são recebidos e um grande
    segmento de memória compartilhada APC estiver configurado.

    **Aviso**

    Este recurso é potencialmente perigoso. Desmapear o segmento de memória
    compartilhada em um gerenciador de sinal fatal pode causar comportamento
    indefinido de um erro fatal ocorrer.

    > **Nota**:
    >
    > Embora alguns kernels possam fornecer um recurso para ignorar vários
    > tipos de memória compartilhada ao gerar um arquivo de despejo de núcleo, estas
    > implementações podem também ignorar segmentos de memória compartilhada importantes
    > tal como o Scoreboard do Apache.

`apc.preload_path` [string](language.types.string.md)
:   Opcionalmente, define um caminho para o diretório onde o APC irá carregar
    dados de cache na inicialização.

`apc.use_request_time` [bool](language.types.boolean.md)
:   Usa o horário de início da requisição SAPI para o
    TTL.

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
