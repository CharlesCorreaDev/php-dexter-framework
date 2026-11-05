# Estudo de caso: Dimensionamento do IIS 8 em um sistema de soquete HP Proliant DL980 G7 de 8 processadores | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/case-studies/case-study-iis-80-scaling-on-an-hp-proliant-dl980-g7-8-processor-socket-system

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

# Estudo de caso: Dimensionamento do IIS 8 em um sistema de soquete HP Proliant DL980 G7 de 8 processadores

Comentários

pela [Microsoft](https://github.com/Microsoft)

> Este Whitepaper compila as descobertas de um esforço conjunto entre a HP e a equipe de produtos do IIS para avaliar os recursos de desempenho do IIS em execução nos sistemas de 8 vias da HP. Esse white paper também serve como um guia de implantação que pode ser usado pelos clientes para configurar o IIS nesses sistemas.

**Resumo**: este estudo de caso descreve como implantar e otimizar o Microsoft IIS 8.0 Server em sistemas de 8 vias da HP.

**Autores**: Hewlett-Packard (HP), Grupo de Produtos IIS (IIS), Centro de Engenharia Empresarial (EEC) da Microsoft

## Introdução

*A carga de trabalho do Servidor Web geralmente está associada a servidores comuns em um modelo de expansão. Quando a energia de processamento adicional é necessária, computadores extras são adicionados ao pool. Esse é um modelo muito comum, e o IIS (Serviços de Informações da Internet) da Microsoft tem vários recursos para facilitar a configuração e a implantação dessa abordagem.*

*Normalmente, o modelo de expansão é associado a outras cargas de trabalho, por exemplo: SQL Server. A realidade, porém, é que, durante a versão do Windows Server 2012, vários investimentos foram feitos na infraestrutura do IIS para habilitar melhor o modelo de expansão. Como resultado desses investimentos, o IIS 8.0 pode ser implantado de forma a aproveitar todas as características de servidores de grande escala. Isso permite que os clientes liberem toda a potência e confiabilidade desses computadores.*

*Como parte do ciclo de desenvolvimento do Windows Server 2012, uma série de testes de desempenho foram realizados para caracterizar as cargas de trabalho do IIS em termos de desempenho. Esses testes foram realizados em um HP DL980 G7 usando as instalações do EEC (Enterprise Engineering Center) da Microsoft, que é a instalação de Validação de Clientes da Microsoft para Windows Server.*

*Este Whitepaper compila as descobertas de um esforço conjunto entre a HP e a equipe de produtos do IIS para avaliar os recursos de desempenho do IIS em execução nos sistemas de 8 vias da HP. Esse white paper também serve como um guia de implantação que pode ser usado pelos clientes para configurar o IIS nesses sistemas.*

## O problema do cliente

De um modo geral, aumentar o número de núcleos deve resultar em um maior desempenho. Quando os clientes do IIS implantaram seus aplicativos em hardware compatível com Acesso Não Uniforme à Memória (NUMA) com o Windows Server 2008 R2, eles perceberam que, depois de certo ponto, o aumento do número de núcleos resultou na degradação do desempenho. Isso ocorreu porque o custo da sincronização de memória de software supera os benefícios de núcleos adicionais no hardware NUMA. O IIS 8.0 no Windows Server 2012 resolve esse problema distribuindo inteligentemente a afinidade de thread para processos no hardware NUMA e essa prova de conceito permitiu identificar o ajuste de E/S de rede e do sistema operacional para garantir a escalabilidade ideal do IIS 8.0.

## IIS 8.0

O IIS (Serviços de Informações da Internet) no Windows Server 2012 tem reconhecimento de NUMA e fornece a configuração ideal para os administradores de TI. A seção a seguir descreve como o IIS 8.0 aproveita o hardware NUMA para fornecer um desempenho ideal.

O IIS dá suporte a duas maneiras a seguir de particionar a carga de trabalho:

1. ***Execute vários processos de trabalho em um pool de aplicativos (ou seja, jardim da Web).***  
   Se você estiver usando esse modo, por padrão, o pool de aplicativos será configurado para ser executado em um único processo de trabalho. Para obter o desempenho máximo, você deve considerar a execução do mesmo número de processos de trabalho que existem nós NUMA, de modo que haja afinidade 1:1 entre os processos de trabalho e nós NUMA. Isso pode ser feito definindo a configuração "**Maximum Worker Processes**" do AppPool como 0. Quando essa configuração estiver configurada, o IIS determinará quantos nós NUMA estão disponíveis no hardware e iniciará o mesmo número de processos de trabalho.
2. ***Execute vários pools de aplicativos em uma única carga de trabalho/site.***  
   Nessa configuração, a carga de trabalho/site é dividida em vários pools de aplicativos. Por exemplo, o site pode conter vários aplicativos configurados para serem executados em pools de aplicativos separados. Efetivamente, essa configuração resulta na execução de vários processos de trabalho do IIS para a carga de trabalho/site e o IIS distribui de forma inteligente a afinidade de processo para o desempenho máximo.

Dependendo da carga de trabalho, o administrador particiona a carga de trabalho em vários processos de trabalho. Depois que uma carga de trabalho é particionada corretamente, o IIS 8.0 identifica o nó NUMA mais ideal quando o processo de trabalho do IIS está prestes a ser iniciado. Por padrão, o IIS escolhe o nó NUMA com mais memória disponível. O IIS tem o conhecimento do consumo de memória por cada nó NUMA e usa essas informações para "balancear a carga" dos processos de trabalho do IIS. Essa opção difere do padrão do Windows, que é o round robin, e foi projetada especialmente para a carga de trabalho do IIS.

Por fim, há duas maneiras diferentes de configurar a afinidade de threads de um processo de trabalho do IIS para um nó NUMA.

1. ***Afinidade Suave (padrão)***  
   Com afinidade leve, se outros nós NUMA tiverem ciclos disponíveis, os threads de um processo de trabalho do IIS poderão ser designados para um nó NUMA sem configuração de afinidade. Essa abordagem ajuda a maximizar todos os recursos disponíveis no sistema como um todo.
2. ***Afixação Rígida***  
   Com afinidade dura, independentemente de qual seja a carga em outros nós NUMA no sistema, todos os threads de um processo de trabalho do IIS são atribuídos ao nó NUMA escolhido que foi selecionado para afinidade com o design mencionado acima.

*Embora a Afinidade Dura possa fornecer melhor desempenho geral, configurar a Afinidade Dura requer mais configuração e compreensão mais profunda do hardware. Além disso, se configurado incorretamente, também resulta em um desempenho mais ruim. Portanto, a configuração padrão é Afinidade Reversa.*

## Plataforma HP

### Informações sobre o HP DL980 G7

DL980 G7 é o primeiro servidor HP Proliant de escalabilidade com 8 soquetes de processador, usando a arquitetura HP PREMA, incorporando controladores de nó com cache inteligente de CPU e tecido de sistema redundante. A primeira iteração dos servidores DL980 G7 usou processador Intel® Xeon® série 7500/6500 (também conhecido como Nehalem-EX) processadores (SKUs de 4, 6 e 8 núcleos), 128 soquetes DIMM e 16 slots PCIe. A segunda versão dá suporte aos processadores Intel® Xeon® E7-8800/4800/2800 (também conhecidos como Westmere-EX) (até o SKU de 10 núcleos). Com a configuração atual do Intel Nehalem-EX com 8 processadores, cada um com 8 núcleos e com hiper threading habilitado, o Windows Server 2008 R2 permite um total de 128 Processadores Lógicos, o suporte máximo do sistema operacional de 2 TB de RAM e os 16 slots PCIe. Com processadores Intel Westmere-EX SKU de 10 núcleos e hyper-threading habilitados, o Windows Server 2008 R2 permite um total de 160 Processadores Lógicos para o DL980 G7. E hoje, o Windows Server 2012 habilita o 4TB de RAM compatível com essa plataforma.

Os recursos de desempenho e escalabilidade desses servidores baseados em Intel de 8 vias com controladores de nó de escalabilidade HP excedem qualquer coisa que já existiu no Intel/AMD e atendem ou excedem o desempenho de muitas plataformas UNIX, fazendo isso a um preço consideravelmente menor do que as plataformas UNIX. Ademais, estes novos Nehalem-EX & Westmere-EX estão próximos da paridade com as plataformas UNIX no que diz respeito ao conjunto de funcionalidades R.A.S, conforme o Gartner e outros analistas do setor.

A instalação e a configuração de um HP DL980 diferem dos servidores SMP mais simples anteriores em vários aspectos:

- O posicionamento de cartões PCIe, como HBA e cartões de rede, é fundamental
- Os drivers de dispositivos devem ser compatíveis com KGROUP do Windows e compatíveis com NUMA.

Embora o suporte a servidores escaláveis pelo Windows Server 2012 tenha sido significativamente aprimorado, para as versões anteriores do sistema operacional Windows e aplicativos, é necessário que possuam as versões e patches corretos para suportar e escalar completamente na plataforma DL980 G7.

Como o Windows x64 Server e suas cargas de trabalho de usuário utilizam configurações com 8 ou mais soquetes, a configuração incorreta ou o uso dessas plataformas, como o HP DL980 G7, pode resultar em penalidades substanciais de desempenho. Com essa configuração de 8 processadores, drivers de dispositivo incorretos ou aplicativos não compatíveis com NUMA podem não estar fornecendo os ganhos de escalabilidade esperados pelo usuário. Problemas típicos que podem ocorrer incluem o sobrecarregamento das transações não escalonáveis que interconectam os chipsets QPI, Hub de E/S e PREMA.

As equipes do Microsoft SQL Server, SAP e IIS testaram, implantaram e fizeram benchmark de seus produtos extensivamente no DL980 G7 e demonstraram excelentes resultados. O HP DL980 G7 e outros sistemas de 8 processadores demonstraram excelentes resultados como Servidores de Banco de Dados, mas também agora como Servidores de Informações da Internet

A figura a seguir ilustra o diagrama de bloco DL980 G7 e é fornecido como uma conveniência para o leitor, pois ele segue as diferentes opções de configuração e ajuste apresentados nos seguintes parágrafos:

[![Diagrama da configuração D L 980 G 7.](case-study-iis-80-scaling-on-an-hp-proliant-dl980-g7-8-processor-socket-system/_static/image2.png)](https://learn.microsoft.com/pt-br/iis/get-started/case-studies/case-study-iis-80-scaling-on-an-hp-proliant-dl980-g7-8-processor-socket-system/_static/image1.png)

**Opções de configuração:**

O DL980 G7 é fornecido em uma variedade de configurações: modelos de soquete de processador 4 e 8 estão disponíveis. Além disso, há várias configurações diferentes para slots de expansão de PCI. Elas estão documentadas no [Guia de Referência Técnica da HP para o DL980](https://community.hpe.com/hpeb/attachments/hpeb/itrc-264/106801/1/363896.pdf)

Ao longo deste documento, vamos nos referir aos Processadores em termos de como o Windows os reconhece e descreve: Processadores 0 - 7 e NÓS NUMA 0 - 7.

Foto das bandejas do processador superior e inferior no D L 980 G 7.

DL980 G7 tem duas "bandejas". A bandeja superior contém os processadores 0-3 e controla diretamente as placas principal e sub IO. A bandeja inferior contém o Processador 4-7 e controla a placa de E/S "Option" ou Low Profile (LP).

O DL980 G7 tem três placas de E/S:

![Diagrama das opções de slot de expansão de E/S no D L 980 G 7.](case-study-iis-80-scaling-on-an-hp-proliant-dl980-g7-8-processor-socket-system/_static/image5.png)

1. Placa PCI principal – Diretamente conectada aos **processadores 0-1,** esta placa fornece 5x slots de E/S PCIe Gen 2 [ 2 (x8) e 3 (x4) conectores elétricos] adequados para dispositivos PCI de alta largura de banda, como HBA de altura total, NIC e cartões FusionIO/SSD, ele também conecta os dispositivos inseridos como o LAN On Motherboard (LOM -NC375i), vídeo, controlador de disco interno (Matriz inteligente P410i), DVD SATA, portas USB, ...
2. Placa PCI de Sub E/S (opcional) – Diretamente conectada aos **Processadores 2-3,** essa placa fornece 5 slots PCIe Gen2 [4 (x8) e 1 (x4) conexões elétricas] e 1 slot PCIe Gen 1 (x4) - slot ID 1 - (opcionalmente um slot PCI-X - não recomendado) adequado para dispositivos de alta largura de banda e altura total.
3. Placa de E/S de Perfil Baixo (LP) – Diretamente conectada aos **Processadores 4-5,** essa placa fornece 4 x slots PCIe x8 e 1 x PCIe x4. Esses slots têm apenas meia altura. As placas de rede e HBA mais recentes são fornecidas com um suporte de perfil baixo que pode substituir o padrão para caber em slots de meia altura.

### Configuração e configurações recomendadas

#### RAM

O DL980 G7 tem processadores extremamente poderosos, cada um contendo dois controladores de memória e é capaz de taxa de transferência de E/S maciça quando configurado corretamente. A plataforma é configurada para que os acessos à memória sejam distribuídos uniformemente entre ambos os controladores de memória de cada processador. Para garantir um design de sistema "equilibrado", recomendamos pelo menos 512 GB de RAM, com implantações mais típicas com 1 TB de RAM a partir de maio de 2011. Um DL980 G7 com menos de 512 GB-1 TB de RAM provavelmente nunca é capaz de aproveitar os processadores muito poderosos devido à RAM insuficiente. A maioria dos clientes observará uma redução significativa no IOPS e uma grande melhoria tanto na E/S quanto nas performances de dimensionamento com o Windows Server 2012, graças à maior reconhecimento do NUMA em relação à E/S e às melhorias de dimensionamento nesta versão do sistema operacional Windows.

Observe os seguintes fatos de configuração de memória:

- Somente DIMMs DDR3.
- Cada processador se conecta a 2 Elevadores de Memória, e cada elevador suporta 1 controlador de memória e 8 conectores DIMM.
- Suporta apenas DIMMs Registrados (RDIMM). Não há suporte para DIMMs não bufferizados (UDIMM).

  - Há suporte apenas para LR ou DDR3L com processadores Westmere-EX.
- Dá suporte a módulos DIMM de classificação única (SR), DR (classificação dupla) e QR (quad-rank)
- Há suporte para tecnologias DRAM de 1 GB e 2 GB com processadores Nehalem-EX e 4 GB também têm suporte com processadores Westmere-EX.
- **DIMMs são adicionados em Quads através de dois controladores de memória.**
- Dá suporte ao ECC avançado, à reserva de fila online e ao espelhamento.
- O suporte ao ECC de memória inclui a correção de falhas em chips do tipo x4 e x8.

#### Rede

- Adaptadores de rede Gigabit são recomendados como padrão. É mais provável que os adaptadores de rede de 1 Gigabit sejam um gargalo nesses sistemas avançados.
- Reduza o número total de Adaptadores de Rede necessários para alcançar o desempenho de rede necessário.
- Os adaptadores de rede de 10 Gigabit melhoraram significativamente os drivers de dispositivo e as opções de configuração do driver de dispositivo.
- O cartão de rede HP 10Gb NC550SFP (Intel) foi testado e provou ser de alto desempenho; ele requer um slot PCIe x8 nas Placas de E/S Principal ou Sub para alcançar o desempenho completo.
- O HP DL980s dá suporte a até 4 NICs de 10 GbE, como NC550SFP e NC523SFP (consulte documentos de especificações rápidas HP DL980 para obter informações atualizadas) com um número total de 8 portas de 10 GbE.
- Para fins de balanceamento de carga, placas de 10 Gigabit podem ser balanceadas entre as placas Principal e Sub-IO. (Por exemplo: 2 x NIC de porta dupla 10G na Placa Principal e 2 x Porta Dupla 10G no Sub-IO Board).
- Como o leitor perceberá no documento de dimensionamento do IIS, é recomendável habilitar o [Receive Side Scaling](https://technet.microsoft.com/network/dd277646) (RSS) nos adaptadores de rede mais modernos e nos drivers de dispositivo modernos. Os adaptadores de rede de 1 Gigabit geralmente só dão suporte a até 8 "Anéis" ou "Filas" RSS. Os adaptadores de 10 Gigabit dão suporte a pelo menos 16 anéis/queues. O Receive Side Scaling é um mecanismo para equilibrar o [descarregamento de DPC](https://download.microsoft.com/download/f/0/5/f05a42ce-575b-4c60-82d6-208d3754b2d6/NetworkDriverPerformance.ppt) em vários processadores lógicos. Isso evita o problema, às vezes, visto durante uma atividade de rede extremamente alta, em que o tempo de kernel alto é visto apenas em um processador lógico (geralmente processador lógico 0 ou 1, mas nem sempre). Observação: a implementação do RSS para Windows Server 2008 R2 abrange apenas processadores lógicos no primeiro KGROUP de processadores do Windows (KGROUP#0), mas essa restrição foi eliminada com o Windows Server 2012 e vários drivers de caixa de entrada dão suporte a ele na primeira instalação.

#### HBA e E/S

- Para aplicativos de E/S de alto armazenamento, instale pelo menos 2 x HBA de porta dupla, as configurações mais comuns são 4 x HBA de porta dupla.
- É importante que todas as portas HBA estejam conectadas e ativas. O software MUL MPIO deve ser instalado e configurado corretamente. O ALB (balanceamento automático de carga) é recomendado para o HP EVA series SAN.
- O HBA diferente tem configurações diferentes e diferentes modelos de SAN têm funcionalidades diferentes, no entanto, como uma orientação geral, é recomendável:
- Emulex – definir a Profundidade da Fila do HBA como cerca de 64-254 em "OC Manager/HBA Anywhere" na maioria das configurações
- QLogic – definir o Limite de Execução como 64-96 em "SanSurfer"
- Brocade – A profundidade da fila está documentada no [Guia de Administração do Brocade](http://www.brocade.com/downloads/documents/support_plans/HBA/Docs_v1/53_1000881_01_HCMAdmin.pdf)
- Os cartões HBA devem ser distribuídos nos três Hubs de E/S de acordo com suas características de interface PCIe. Sempre tendemos a colocar um cartão compatível com x8 em um slot x8 para se beneficiar de seus recursos completos e equilibrar a carga em todo o sistema.

**Observação especial em dispositivos FusionIO (geralmente aplicável a outros cartões SSD):**

FusionIO (placas aceleradoras de E/S HP) e OCZ fornecem acesso ultra-rápido (até 10.000 vezes mais rápido que discos mecânicos). Até agora, testes extensivos só foram realizados com cartões FusionIO. Os resultados foram excepcionais, dado o seguinte:

- No mínimo, use o driver de dispositivo FusionIO 2.2.3 ou posterior – K-Group Aware (disponível no site da FusionIO).
- Coloque o cartão FusionIO apenas no Quadro Principal ou SubIO: eles não são cartões de perfil baixo. Os slots de E/S recomendados são: 3, 5, 9 e 11.
- Se você usar mais de 4 aceleradores de E/S de HP, as modificações deverão ser feitas no BIOS para permitir mais resfriamento e você precisará considerar cabos de energia externos ou usar o recurso de substituição de energia do FusionIO com o VSL 3.x e permitir que a energia adicional seja originada do slot PCIe.
- A pilha atual do FusionIO ainda precisa de melhorias na escalabilidade, e o FusionIO ainda está trabalhando nelas. Enquanto isso, observe que, com um número maior de Fusion IO cards neste sistema, alcançamos mais de 1 milhão de IOPs e 16 GB/s. Com a implementação atual do driver FusionIO, você pode encontrar:

  - Utilização muito alta do processador em um subconjunto dos processadores lógicos. Isso está relacionado ao fato de que os HBAs atuais do FusionIO não dão suporte a MSI-X e cada HBA envia interrupções para um único processador lógico. Além disso, a implementação atual dá suporte a um thread de trabalho de conclusão DPC e FusionIO somente para cada HBA. Para cargas de trabalho de E/S altamente exigentes, espera-se quase que o usuário identifique esses processadores lógicos verificando se a utilização da CPU está em 100% ou quase 100% nesses processadores lógicos específicos. FusionIO disponibilizou parâmetros de configuração para atenuar parcialmente isso, permitindo a especificação de quais processadores lógicos dedicar para essas tarefas. Em períodos de alta utilização de IO, você pode configurar uma máscara de afinidade no nível do aplicativo para evitar esses processadores lógicos.
  - Desequilíbrios de desempenho de E/S. O melhor desempenho de E/S é obtido gerando solicitações de leitura/gravação no mesmo soquete em que o thread de conclusão do FusionIO é executado. A BIOS do DL980 G7 fornece NUMA-IO para o sistema operacional Windows e seus componentes de E/S: Storport e NDIS/NetIO, para que seus miniports possam utilizar e ajustar.
  - Modificações na taxa de transferência devido ao impacto da otimização do SSD, problema visto com as gerações anteriores e atuais de SSDs.

#### BIOS

É recomendável alterar os seguintes valores padrão no BIOS DL980 G7 para IIS:

| **NOME DA CONFIGURAÇÃO** | **CONFIGURAÇÃO RECOMENDADA** | **CONFIGURAÇÃO PADRÃO** |
| --- | --- | --- |
| **Perfil do HP Power** | Personalizado | (Potência e Desempenho com Configuração Balanceada Padrão) |
| **Regulador de Energia HP** | Modo de controle do sistema operacional | (padrão Modo de Economia de Energia Dinâmica HP) |
| **Processador HyperThreading** | Consulte o parágrafo abaixo sobre o tipo de cargas de trabalho do IIS 8.0 e o impacto do HyperThreading | Habilitado |
| **Estado de Energia do Processador Ocioso Mínimo** | Nenhum C-States (sem ganhos de energia do processador) ***ou*** C1e (para ainda obter ganhos de energia do processador e desempenho adequado) | (estado C6 padrão) |
| **Limite de energia de memória** | Desactivado | (habilitado padrão) |
| **Controle de energia colaborativo** | Desactivado | (habilitado padrão) |
| **Modo de tabela MPS** | APIC Tabela Completa | (predefinição) |
| **Modo de Endereço de 44 bits** | Habilitado | (desabilitado por padrão) |
| **Configuração térmica** | aumento do resfriamento ou até mesmo "ventiladores no máximo -(blowout)", se estiver usando muitos aceleradores de E/S HP/Fusion IO HBAs. | (resfriamento ideal) |
| **Depuração do Windows: Status do ASR (desabilitado quando nenhum depurador está conectado)** | Desativado se o depurador do sistema operacional estiver conectado. | (habilitado padrão) |
| **Depuração do Windows: CLI do iLO (sessão iLO)** | Desabilitado se o depurador do sistema operacional estiver anexado. | (habilitado padrão) |

Plataformas DL980 G7 farão com que o Windows Server 2012 mude automaticamente os processadores e IOHs para o modo x2APIC e para o modo de entrega de interrupção física. Para habilitar o x2APIC no Windows Server 2008 R2 SP1 para melhorar o dimensionamento de E/S, diversos QFEs do Windows precisam ser instalados na plataforma, além de executar um comando BCDEDIT Opt-In adicional. Habilitar x2APIC e a especificação dos QFEs são apresentados no Banco de Dados de Conhecimento da Microsoft

#### Microprograma

É fundamental que o firmware dos componentes listados abaixo seja atualizado para a versão mais recente disponível, pois, por exemplo, muitas melhorias de E/S NUMA foram adicionadas na versão de outubro de 2012.

- Sistema DL980 G7
- Cartões HBA
- Cartões de Rede
- Cartões FusionIO (se usado)

É altamente recomendável verificar o firmware desses componentes no site de suporte do [HP DL980](https://support.hpe.com/hpesc/public/docDisplay?docLocale=en_US&docId=emr_na-c04011716#:%7E:text=Supports%20VMware%20vSphere%205.1%2C%20VMware%20vCenter%205.1.%20SUSE,Currently%20available%20for%20the%20DL980%201TB%20server%20configuration.).

#### Versões do Windows > Configuração

Como parte da oferta de Missão Crítica para clientes Windows, a HP tem um CD de Atualização Inteligente QFE para configurar e ajustar automaticamente o Windows com os QFEs críticos mais recentes da Microsoft: <https://www.hpe.com/us/en/servers/smart-update.html>. Essas atualizações e ajustes foram implementados com a Microsoft e validados no laboratório HP DL980. A HP recomenda que seus clientes executem essas atualizações.

- Windows Server 2012 – As configurações do IIS para modo kernel, gerenciamento de cache, gerenciamento de solicitações e conexões e modo de usuário não foram alteradas do Windows Server 2008 R2, consulte os ajustes específicos do IIS descritos no documento ["Diretrizes de Ajuste de Desempenho para Windows Server 2008 R2"](https://msdn.microsoft.com/windows/hardware/gg463392.aspx) . .
- Para Windows 2008 R2, SP1 ou superior é recomendável. Service Pack 1 contém muitas correções críticas de desempenho no suporte a 64 processadores lógicos.
- O Windows 2008 não pode dar suporte ao endereçamento de 44 bits corretamente e não deve ser instalado no DL980 G7. Se, por algum motivo, o Windows 2008 (versão não R2) for implantado no DL980 e a memória de 44 Bits precisar ser desabilitada, o sistema será limitado a 64 processadores lógicos e 1 TB de RAM. O Windows Server 2008 SP2 é a única versão do Windows Server 2008 Server com suporte no HP DL980 G7. Se o Windows Server 2008 ainda for necessário, consulte o site e a organização do Suporte HP para obter a lista completa de QFEs do Windows para Windows Server 2008 SP2 no HP DL980 G7.

## Metodologia de teste

### Cenário de teste

O objetivo deste teste é testar a escalabilidade do Servidor IIS ao aumentar o número de núcleos/soquetes de CPU no hardware compatível com NUMA.

- Uma página de teste dinâmica ASP.net simples é usada como conteúdo do site
- A Ferramenta de Análise de Capacidade da Web (WCAT) é usada para gerar solicitações HTTP
- Utiliza-se um utilitário HP Core Disable para redimensionar o servidor para baixo, desabilitando os núcleos e soquetes da CPU, respeitando a configuração de E/S.

O ambiente de teste demonstra como o aplicativo Web ASP.NET é dimensionado em um servidor com hardware NUMA executando o IIS 8.0. O objetivo é submeter o servidor a teste de estresse para determinar o número de solicitações por segundo que a implantação processou com, ou próximo de, 100% de uso de CPU.

*A configuração a seguir foi usada para medir o desempenho do IIS*

1. *Web Garden (1xN) – Pool de aplicativos único, um processo por soquete. Isso representa o cenário enterprise em que um único aplicativo precisa escalar verticalmente.*
2. *Hospedagem (Nx1) – Um pool de aplicativos por soquete, um processo por pool de aplicativos. Isso representa o cenário de hospedagem, em que vários aplicativos são hospedados em um único servidor.*
3. *Padrão (1x1) – um pool de aplicativos e um processo, independentemente do número de soquetes. Isso representa a configuração pronta para uso.*

Os testes foram repetidos para 20/40/80 núcleos (soquetes de processador 2/4/8). Também realizamos um teste adicional para 180 núcleos (Hyper Threading habilitado) para ver como o IIS se beneficia do HT.

### Configuração de teste

#### Servidores

Um total de 6 computadores foram usados para realizar o teste

- 4 computadores trabalhando como clientes WCAT (*Configurações do WCAT: 100 clientes virtuais por cliente físico)*
- 1 computador funcionando como controlador WCAT
- 1 HP9L980G7 como servidor do IIS 8.0

#### Rede

O ambiente de teste foi configurado com quatro computadores cliente e um servidor. Cada um dos computadores cliente usou quatro NICs de 1 Gb. O servidor usou dezesseis NICs de 1 Gb. Dezesseis sub-redes foram configuradas, emparelhando cada NIC do cliente com uma NIC de servidor exclusiva.

#### Configurações do RSS

O desempenho de rede no servidor foi otimizado usando as configurações do RSS.

Para garantir que o tráfego recebido em uma determinada NIC seja processado por um núcleo no mesmo Hub de E/S que a NIC, cada NIC foi associada a um nó NUMA no mesmo Hub de E/S usando a configuração NumaNode.

O número total de filas RSS em todas as NICs foi igual ao número total de processadores lógicos no computador. Isso foi feito definindo NumberOfReceiveQueues para cada NIC.

As filas RSS em cada NIC foram mapeadas para um conjunto específico de núcleos em seu nó NUMA atribuído usando as configurações BaseProcessorNumber e MaxProcessors.

## Conclusões

O grafo a seguir captura como o desempenho do IIS (número de solicitações processadas por segundo) muda com o aumento dos núcleos de CPU.

Número crescente de núcleos de CPU de 20 para 40 (2 soquetes a 4 soquetes):

Os números referentes a 20 núcleos são usados como referência. Quando o número de CPUs aumentou de 20 para 40, observamos 67% aumento na solicitação processada no cenário de hospedagem da Web, 41% aumento no cenário de jardim da Web e 2% diminuição no cenário padrão. Isso indica que os cenários de hospedagem e de jardim da Web são capazes de se beneficiar mais do aumento dos núcleos de CPU. A configuração padrão não é capaz de aproveitar o aumento das CPUs, pois o processo único não pode ser dimensionado para aproveitar o hardware NUMA.

### Comparação entre 80 núcleos e 40 núcleos

Uma tendência semelhante foi observada após o aumento do número de núcleos de 40 para 80. O cenário de hospedagem foi capaz de processar 64% mais solicitações e o cenário de jardim web processou 31% mais solicitações. A degradação do desempenho na configuração padrão aumentou em 3%.

![Um gráfico de colunas comparando o escalonamento de R P S entre núcleos de C P U de 80 versus 40 núcleos.](case-study-iis-80-scaling-on-an-hp-proliant-dl980-g7-8-processor-socket-system/_static/image7.png)

### Impacto do Hiperthreading

Depois de habilitar o Hyperthreading, a configuração de hospedagem processou 18% mais solicitações. A configuração do Web Garden processou 4% menos solicitações enquanto a configuração padrão processou 3% mais solicitações. Normalmente, o HT pode resultar em até 20% melhor desempenho. A configuração de hospedagem é capaz de aproveitar ao máximo o HT.

![Um gráfico de colunas comparando os resultados da habilitação do Hyperthreading.](case-study-iis-80-scaling-on-an-hp-proliant-dl980-g7-8-processor-socket-system/_static/image9.png)

## Resumo

O IIS 8.0 tem reconhecimento de hardware NUMA e consegue melhorar o desempenho em hardware NUMA, diferente das versões anteriores do IIS.

A taxa de transferência do IIS 8.0 aumentou 67% aumentando os soquetes de CPU de 2 para 4 e aumentou ainda mais em 64% no aumento de soquetes de CPU de 4 para 8. Habilitar o HyperThreading resultou em mais 18% taxa de transferência.

A HP Proliant DL980-G7 fornece uma plataforma sólida para implantar aplicativos IIS altamente exigentes, oferecendo escalabilidade de aplicativos com uma solução de consolidação de servidor em uma plataforma com maior confiabilidade, disponibilidade e capacidade de serviço do HW.

Os clientes que desejam dimensionar suas implantações do IIS devem considerar a implantação do IIS em hardware compatível com NUMA e se beneficiar das opções de expansão vertical e horizontal.

Mais caracterizações do IIS 8.0 com implantação do HyperV Server 2012 no HP DL980-G7 estão sendo consideradas e esses resultados também serão compartilhados.

## Apêndice

### PowerShell

#### Tela de fundo

Tradicionalmente, cada processador em um sistema de vários soquetes acessa a memória e a E/S por meio do mesmo barramento. Está se tornando cada vez mais comum que sistemas de grande escala usem NUMA (acesso à memória não uniforme) para evitar gargalos de ônibus. Nesse modelo, diferentes partes de E/S e memória são conectadas a soquetes diferentes, o que significa que o desempenho das operações de E/S e memória é afetado pelo quão próximo o soquete está conectado a algumas partes da memória e da E/S.

O RSS (Receive Side Scaling) permite o processamento da recepção na rede por múltiplos processadores.

#### Configurando a afinidade RSS

A partir do Windows Server 2012, é possível configurar a afinidade RSS para um determinado nó NUMA usando o PowerShell. A equipe do Core Networking fez um ótimo trabalho fornecendo um conjunto de cmdlets que fornecem controle total sobre a pilha RSS.

Mais especificamente, a afinidade NUMA pode ser configurada usando o seguinte cmdlet: Set-NetAdapterRSS. Esse cmdlet usa alguns parâmetros relacionados à topologia de hardware do servidor. Os parâmetros são: BaseProcessorGroup, BaseProcessorNumber, MaxProcessors e NumaNode.

Há duas maneiras de reunir os valores dessas propriedades: Manual e por meio do PowerShell.

Para definir corretamente as configurações de afinidade NUMA, é imperativo identificar a conexão física de um adaptador de rede com um determinado nó NUMA.

##### Coletando manualmente as informações de topologia

Atualmente, esse processo compreende as seguintes etapas:

1. Localize o adaptador de rede de destino usando o Painel de Controle\Rede e Internet\Conexões de Rede. A propriedade de interesse para a próxima etapa, "Nome do Dispositivo", conforme mostrado na captura de tela abaixo.  
   ![Captura de tela da guia Conexões de Rede no Painel de Controle. O campo nome do dispositivo está realçado. ](case-study-iis-80-scaling-on-an-hp-proliant-dl980-g7-8-processor-socket-system/_static/image11.png)
2. Localize a NIC por meio do Gerenciador de Dispositivos. Para isso, usamos a propriedade "Nome do Dispositivo" coletada na etapa anterior.  
   ![Captura de tela da janela Gerenciador do Servidor na guia Gerenciador de Dispositivos. O nome do dispositivo é realçado no menu expandido.](case-study-iis-80-scaling-on-an-hp-proliant-dl980-g7-8-processor-socket-system/_static/image13.png)
3. Invoque a caixa de diálogo propriedades para a NIC especificada. A guia "Geral" mostrará o slot, o dispositivo e os números de função para um NIC específico.  
   ![Captura de tela da caixa de diálogo Propriedades na guia Geral. A localização está realçada.](case-study-iis-80-scaling-on-an-hp-proliant-dl980-g7-8-processor-socket-system/_static/image15.png)
4. Com as informações do barramento em mãos, é possível identificar em qual nó NUMA a NIC está conectada correlacionando essas informações ao diagrama de topologia de hardware, conforme fornecido na "[Seção de Hardware](#hp-platform)" acima.

##### Coletando topologia de hardware por meio do PowerShell

As informações de topologia de hardware que podem ser usadas para definir os valores corretos de afinidade RSS podem ser obtidas usando o exemplo de Cmdlets do PowerShell de Gerenciamento de Dispositivos que está disponível na Galeria do TechNet (<https://gallery.technet.microsoft.com/Device-Management-7fad2388>). Este exemplo fornece cmdlets para enumerar, controlar e gerenciar dispositivos.

Atualmente, o módulo expõe os seguintes cmdlets:

- Get-Device
- Get-Driver
- Get-Numa
- Habilitar Dispositivo
- Desativar-Dispositivo

##### Listando informações de dispositivos e de topologia NUMA

Get-Device | Sort-Object -Property Nome | Ft Name, NumaNode, UINumber -AutoSize

##### Informação sobre o Processador Lógico e NUMA

Get-Numa

##### Tabelas de firmware

$hardwareTopology = Get-Numa; $hardwareTopology

### WCAT

A Ferramenta de Análise de Capacidade da Web (WCAT) é uma ferramenta leve de geração de carga HTTP projetada principalmente para medir o desempenho de um servidor Web em um ambiente controlado. O WCAT pode simular milhares de usuários simultâneos fazendo solicitações para um único site ou para vários sites da Web.

Ele pode ser encontrado em [https://www.iis.net/downloads/community/2007/05/wcat-63-(x86)](https://www.iis.net/downloads/community/2007/05/wcat-63-x86)

### Sobre

#### Grupo de Produtos do IIS

A equipe do IIS na **Microsoft** é responsável por enviar o servidor IIS como parte do Windows Server. Essa equipe também libera e mantém vários produtos relacionados encontrados @ <https://www.iis.net/downloads>.

#### Hewlett-Packard (HP)

**Hewlett-Packard Company** (**HP**) uma multinacional americana de tecnologia da informação com sede em Palo Alto, Califórnia, Estados Unidos. Fornece produtos, tecnologias, software, soluções e serviços para consumidores, pequenas e médias empresas e grandes empresas, incluindo clientes nos setores governamental, saúde e educação. A HP é a empresa líder mundial em receita e unidades do Microsoft Windows em todo o mundo (IDC Worldwide Quarterly Server Tracker para 2T12, agosto de 2012). Dentro de sua divisão HP Business Critical Server, o laboratório de Engenharia do Windows Crítico tem mais de uma década de engenharia conjunta para fornecer soluções robustas do Microsoft Windows e do SQL Server. Com esse projeto de dimensionamento do IIS, a equipe trabalhou em estreita colaboração com a equipe do Microsoft IIS para garantir a escalabilidade e o desempenho ideais.

#### CEE

O EEC (Enterprise Engineering Center) da Microsoft deve sua existência a uma ideia simples: fornecer aos Clientes da Microsoft o maior laboratório de validação e colaboração.

A EEC é equipada com hardware de classe mundial e conta com uma equipe incrivelmente talentosa e apaixonada. Como estamos localizados no campus de Redmond (no epicentro das equipes de desenvolvimento de produtos da Microsoft), podemos reunir clientes, parceiros e engenheiros de grupo de produtos da Microsoft para validar as soluções empresariais de amanhã.

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
  2026-03-28
