# Recursos do Serviço de Ativação de Processo do Windows (WAS) | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/features-of-the-windows-process-activation-service-was

---

Sumário 

Sair do modo Editor

Pergunte e aprenda

Pergunte e aprenda

Modo de leitura

Sumário
[Ler em inglês](#)

Adicionar

Adicionar a Planos

---

Copiar Markdown

Imprimir

---

Observação

O acesso a essa página exige autorização. Você pode tentar [entrar](#) ou alterar diretórios.

O acesso a essa página exige autorização. Você pode tentar alterar os diretórios.

# Recursos do Serviço de Ativação de Processo do Windows (WAS)

Comentários

por [Thomas Deml](https://github.com/thomasdeml)

O Was (Serviço de Ativação de Processo do Windows) do IIS 7 é o componente chave que fornece recursos de modelo de processo e configuração para Aplicativos Web e Serviços Web. A tarefa principal do WAS é gerenciar pools de aplicativos. Os Pools de Aplicativos são contêineres de configuração que representam o ambiente de hospedagem para grupos de URLs.

Quando um cliente HTTP solicita uma URL HTTP.SYS mapeia a solicitação para uma fila de solicitações do Pool de Aplicativos. Um processo de trabalho para a fila de solicitações do Pool de Aplicativos é gerado pelo WAS e o processo de trabalho executa o código necessário para enviar uma resposta. Uma das principais tarefas do WAS é gerenciar os processos de trabalho gerados, ou seja, o WAS monitora sua integridade, recicla-os se necessário e garante que nenhum deles consuma mais recursos do que o especificado na configuração correspondente do AppPool. WAS também é o árbitro e o coletor para dados de tempo de execução e de estado, por exemplo, contadores de desempenho, site e estado do Pool de Aplicativos.

## Diagrama de Arquitetura

![Arquitetura do IIS 7.0](features-of-the-windows-process-activation-service-was/_static/image1.jpg "IIS 7.0")

## Recursos do modelo de processo

Dar suporte a 10.000 ou mais sites a serem hospedados no mesmo computador físico é um requisito fundamental para os ambientes de hospedagem em massa de hoje. O código em execução nesses sites geralmente não é bem testado, se é que é. Para dar suporte a esses requisitos, a WAS precisa fornecer um modelo de processo avançado e um gerenciamento eficiente de recursos.

### Gerenciamento eficiente de recursos

#### Ativação sob demanda

Recursos como RAM e CPU são escassos em cenários multilocatários. O WAS iniciará um processo de trabalho do IIS somente depois que as solicitações de um determinado site ou aplicativo Web chegarem.

#### Tempo limite de inatividade

Como os recursos geralmente são escassos, o WAS pode desligar aplicativos Web com base em um tempo limite ocioso configurável.

#### Monitoramento de Saúde

Para garantir sua integridade, o WAS monitora os processos de trabalho que gerou. Mensagens de saúde são enviadas periodicamente para cada processo de trabalho em execução. Se o processo de trabalho não responder em um intervalo de tempo configurável, o processo de trabalho será reiniciado ou finalizado. Dessa forma, os deadlocks não detectados nos processos de trabalho são corrigidos automaticamente reiniciando o processo de trabalho.

#### Limite de inicialização

Parte do recurso Rapid-Fail Protection é o limite de inicialização. Se um processo de trabalho não se reportar ao WAS dentro do limite de inicialização configurável, ele será encerrado e o contador de Rapid-Fail-Protection será incrementado. Os pools de aplicativos são interrompidos, ou seja, a reinicialização do processo de trabalho não será mais tentada, se o contador de Rapid-Fail-Protection atingir um limite configurável dentro de um período de tempo configurável. Isso impede cenários em que os processos de trabalho travam ou falham durante a inicialização.

#### Limite de desligamento

Um processo de trabalho também precisa ser desligado em um limite configurável. Se o desligamento não acontecer neste período de tempo, o processo de trabalho será encerrado pelo WAS. Isso impede o uso excessivo de recursos devido a processos travados na fase de encerramento. Configurações de desligamento adicionais permitem que um executável seja iniciado (por exemplo, um depurador) quando o desligamento não for concluído dentro do tempo alocado.

#### Afinidade de CPU

As configurações permitem que o WAS inicie processos de trabalho afinizados com uma ou mais CPUs. Isso impede que os locatários interfiram uns com os outros se compartilharem o mesmo computador físico.

#### Perfil de Usuário

WAS pode iniciar processos de trabalho com ou sem carregar o perfil do usuário.

### Segurança

#### Identidade do pool de aplicativos

Os processos de trabalho do IIS podem ser executados como uma conta personalizada, conta interna (LocalService, LocalSystem, NetworkService) ou identidade do pool de aplicativos (padrão). O uso da identidade do pool de aplicativos é recomendado porque ele não exige o gerenciamento de senhas e as identidades do pool de aplicativos já respeitam o princípio do privilégio mínimo. Contas internas também não exigem gerenciamento de senhas. Se uma identidade de usuário personalizada for usada, a senha será criptografada automaticamente. As configurações podem ser replicadas para vários computadores compartilhando as chaves de criptografia de configuração entre computadores.

#### Recursos do objeto Job

Os objetos de trabalho permitem que os administradores restrinjam processos de trabalho a um limite específico de CPU. Uma ação configurável será tomada se esse limite de CPU for excedido. Os objetos de trabalho também garantirão que os processos gerados pelo processo de trabalho sejam encerrados.

## Isolamento e segurança de configuração

Antes de WAS iniciar um Pool de Aplicativos e seu processo de trabalho, ele gera um arquivo de configuração exclusivo para esse Pool de Aplicativos. Os Pools de Aplicações também possuem configurações para serem executados sob identidades exclusivas. No entanto, o isolamento pode ser alcançado mesmo se a mesma identidade for usada. WAS cria um SID (Identificador de Segurança) exclusivo para cada pool de aplicativos. O arquivo de configuração do Pool de Aplicativos é protegido com esse SID exclusivo. Isso garante que os arquivos de configuração do Pool de Aplicativos só possam ser lidos pelos Administradores e pelo próprio Pool de Aplicativos. Até mesmo permissões de arquivo podem ser configuradas usando esse SID exclusivo.

## Diagnóstico e monitoramento

#### Log de eventos

Eventos relativos à configuração inválida, à reciclagem, à inicialização ou ao desligamento dos processos de trabalho são relatados ao System Eventlog.

#### Atualmente executando solicitações

O WAS expõe uma interface de controle de estado e tempo de execução que permite que scripts e ferramentas consultem as solicitações em execução de um determinado processo de trabalho no momento. Isso é útil para localizar requisições que travam ou requisições que levam muito tempo para serem concluídas.

#### Contadores de desempenho

Todos os contadores de desempenho do IIS são canalizados por meio do WAS. O WAS reúne esses contadores de desempenho porque os contadores do IIS são baseados em site e os aplicativos Web podem residir em diferentes Pools de Aplicativos.

## Reciclagem

A reciclagem permite a atualização de processos de trabalho sem perder uma única solicitação devido ao tempo de inatividade. Isso é feito por meio de um recurso chamado "reciclagem sobreposta".

#### Reciclagem sobreposta

A WAS faz isso gerando um novo processo de trabalho paralelo ao antigo que ainda está tratando solicitações. Depois que o novo processo de trabalho estiver ativo, ele começará a captar solicitações da fila de solicitações, enquanto o processo de trabalho antigo é instruído pelo WAS a parar de captar solicitações. Depois que o processo de trabalho antigo concluir todas as solicitações em execução, ele se desliga. Esse recurso é chamado de "reciclagem sobreposta". Isso garante que nenhuma solicitação seja perdida durante uma reinicialização.

### Configuração de reciclagem

Os parâmetros de reciclagem são configuráveis no sistema de configuração do IIS.

#### Reciclagem agendada

Talvez os clientes queiram reciclar seus aplicativos com base em um agendamento regular. Por meio das configurações, a reciclagem pode ser agendada periodicamente, por exemplo, a cada 4 horas, todos os dias à 1h etc.

#### Reciclagem com base no consumo de memória

Os aplicativos podem vazar memória ao longo do tempo. O WAS pode monitorar o consumo de memória de cada processo de trabalho para garantir que nenhum processo de trabalho use mais do que seu limite pré-configurado. Alcançar um limite configurado de memória virtual ou privada acionará a reciclagem de um processo de trabalho.

#### Reciclagem com base no número de solicitações

A reciclagem também pode ser configurada com base no número de solicitações tratadas por um determinado processo de trabalho.

#### Reciclagem personalizada

O código personalizado pode customizar as estatísticas de integridade e iniciar uma reinicialização por meio de uma chamada de API para as APIs de estado e tempo de execução WAS.

#### Orfandade de Processos

Alguns erros ocorrem apenas em um ambiente de produção. A eliminação de processos de trabalho garante tempo de atividade, mas a solução de problemas desses erros torna-se difícil, por exemplo, se o processo de trabalho com falha precisar ser depurado. A funcionalidade de orfandade de processo no WAS permite que os processos de trabalho com falha sejam reciclados sem encerrar o processo de trabalho com falha. Agora, pode ser conectado um depurador a ele. Configurações adicionais de orfanização de processos permitem a execução de um processo (por exemplo, um depurador) caso ocorra a orfandade de um processo.

## Gerenciamento de Estado do Pool de Aplicativos

Os Pools de Aplicativos podem ser interrompidos, reciclados ou iniciados por meio de API disponíveis publicamente, por exemplo, se um aplicativo precisar ser colocado offline ou se a reciclagem precisar ser feita com base em parâmetros diferentes do que é configurável no arquivo applicationhost.config.

## Funcionalidades adicionais do WAS

#### Recursos do Balanceador de Carga

HTTP.SYS ainda escuta na rede e retornará uma mensagem de erro HTTP 500 se as solicitações não forem captadas por um Pool de Aplicativos. Isso é um problema porque para um TCP/IP (Balanceadores de Carga) de Nível 5, um erro HTTP 500 parece uma conexão TCP/IP válida. Uma configuração WAS pode habilitar HTTP.SYS rejeitar conexões em vez de enviar respostas HTTP.

O WAS pode ser configurado para iniciar processos de trabalho com as seguintes configurações:

#### Suporte a WoW64

O WAS pode iniciar processos de trabalho de 32 bits ou 64 bits.

#### Pré-carregamento do .NET Framework

WAS pode ser configurado para pré-carregar uma versão específica do .NET Framework. Isso pode facilitar muito a solução de problemas de conflitos de versão.

#### Jardins da Web

Um Web Garden é o nome dado a um Pool de Aplicativos que é executado com vários processos de trabalho simultâneos. As solicitações são distribuídas entre essas instâncias de processo de trabalho usando um mecanismo round robin.

## Suporte a vários protocolos WAS

WAS não hospeda apenas a pilha HTTP. Ele também pode hospedar outros protocolos por meio do Adaptador de Escuta e do Worker Process Framework. Os serviços do WCF aproveitam o suporte a múltiplos protocolos do WAS. Os protocolos WCF vêm com seus próprios Ouvintes (por exemplo, o Ouvinte NET.TCP, NET.MSMQ ou Ouvinte NET.PIPE). Esses ouvintes se conectam ao WAS usando as interfaces Listener Adapter que o WAS fornece.

Os protocolos de aplicativo que aproveitam essa infraestrutura podem hospedar código de aplicativo personalizado no mesmo Domínio de Aplicativo do .NET que aplicativos de ASP.NET regulares. Eles também podem aproveitar os serviços independentes de protocolo que o ambiente de hospedagem ASP.NET fornece, por exemplo, compilação sob demanda, suporte à configuração etc.

---

## Comentários

Esta página foi útil?

Sim

Não

Não

Precisa de ajuda com este tópico?

Quer experimentar o Pergunte e aprenda para esclarecer ou guiar você neste tópico?

Pergunte e aprenda

Pergunte e aprenda

 Sugerir uma correção?

---

## Recursos adicionais

---

- Última atualização em 
  2026-03-27
