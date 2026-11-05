# Noções básicas sobre o dimensionamento multicore no hardware NUMA com o IIS 8 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/planning-your-iis-architecture/understanding-multicore-scaling-on-numa-hardware-with-iis-8

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

# Noções básicas sobre o dimensionamento multicore no hardware NUMA com o IIS 8

Comentários

por Kaori Sawada

O NUMA (acesso à memória não uniforme) é um design moderno para acesso à memória do computador, que foi projetado para superar os limites de escalabilidade da arquitetura SMP (Multiprocessador Simétrico). No SMP, cada núcleo acessa seu próprio barramento e seu próprio hub de E/S. O SMP não funciona bem com um grande número de CPUs (ou núcleos de CPU) porque eles competem pelo acesso ao barramento compartilhado.

O NUMA foi projetado para aliviar esses gargalos limitando quantas CPUs poderiam estar em qualquer barramento de memória e conectando-as a uma interconexão de alta velocidade. Para utilizar esses recursos, o IIS 8 (que faz parte do Windows Server 2012) e acima oferece recursos para melhorar o desempenho no hardware NUMA. Isso permite que o IIS afinitize inteligentemente os processos de trabalho aos nós NUMA para melhor utilizar as CPUs.

## Novas opções relacionadas ao NUMA no IIS 8

Para fornecer ao administrador um alto grau de controle, o IIS 8 tem os quatro novos recursos/opções a seguir que entram em jogo em servidores que dão suporte ao hardware NUMA:

- Afinidade do Processador
- Modo de Afinidade
- Seleção ideal de NUMA
- Jardins da Web

## Afinidade do Processador

A afinidade do processador não é um recurso novo, mas foi aprimorada no IIS 8. Os atributos **smpProcessorAffinityMask** e **smpProcessorAffinityMask2** estão disponíveis desde o IIS 7 e permitem ao administrador afinitizar um Pool de Aplicativos com um núcleo específico. Sua finalidade permanece a mesma com o IIS 8, mas os seguintes novos elementos de esquema foram introduzidos no IIS 8 para dar suporte a mais de 64 LPs (processadores lógicos):

```
<element name="cpu">
 ...
 <attribute name="smpAffinitized" type="bool" defaultValue="false"/>
 <attribute name="smpProcessorAffinityMask" type="uint" defaultValue="4294967295"/>
 <attribute name="smpProcessorAffinityMask2" type="uint" defaultValue="4294967295"/>
 <attribute name="processorGroup" type="int" defaultValue="0" validationType="integerRange"
 validationParameter="0,2147483647"/>
 ...
</element>
```

\* As alterações do IIS 8 estão realçadas

Observação

Para dar suporte a mais de 64 LPs, foi introduzido um novo conceito: **grupo de processadores**. Qualquer computador com mais de 64 LPs tem mais de um grupo de processadores por necessidade. Um único grupo de processadores é um conjunto estático de LPs e é tratado como uma única entidade de agendamento. Quando o sistema operacional é iniciado, ele cria os grupos de processadores e atribui processadores lógicos a eles. Os grupos de processadores são numerados a partir de 0.

Como **smpProcessorAffinityMask** e **smpProcessorAffinityMask2** oferecem 64bits (32 cada), o atributo **processorGroup** pode ser usado para afinidade de Pools de Aplicativos em um sistema com up-to 64 núcleos. As duas Máscaras de Afinidade são usadas para configurar a máscara de processador decimal e a máscara de processador decimal indica a qual CPU os processos de trabalho em um pool de aplicativos devem ser associados. Por exemplo, se você tiver um computador com 64 processadores e quiser habilitar o 8º, 15º, 26º, 32º, 40º, 48º e 60º processadores, você calculará a máscara de processador hexadecimal da seguinte maneira.

A identificação do processador começa em 0, da direita para a esquerda, portanto, em binário, você identificaria os processadores 8, 15, 26 e 32 para os primeiros 32 processadores como:

**1000 0010 0000 0000 0100 0000 1000 0000**

Esse número, convertido em decimal, é seu smpProcessorAffinityMask:

**0x82004080**

Você também identificaria os processadores 40, 48 e 60 para o segundo conjunto de 32 processadores como:

**0000 1000 0000 0000 1000 0000 1000 0000**

Esse número, convertido em decimal, é seu smpProcessorAffinityMask2:

**0x8008080**

Como o tipo dessas duas Máscaras de Afinidade é ***uint***, que é inteiro sem sinal de 32 bits, elas oferecem 64 bits endereçáveis no total, permitindo que você especifique até 64 processadores. Para dar suporte à afinidade do Pool de Aplicativos com mais de 1 grupo de processadores ou há mais de 64 processadores, um atributo **processorGroup** representa para essas situações. Se você se referir a um **processorGroup** numerado 0, os valores affinityMask correspondentes se aplicam ao primeiro grupo, que é numerado de 0 a 63. Se você se referir ao **processorGroup** 1, os valores de máscara se aplicam ao segundo, que é numerado de 64 a 127. Você pode especificar apenas um grupo de processadores para associar o Pool de Aplicativos aos LPs. O exemplo abaixo mostra que os valores de máscara se aplicam apenas ao segundo grupo de processadores, que é o grupo 1. Qualquer processo de trabalho neste Pool de Aplicativos nunca é executado em LPs no primeiro grupo de processadores, que é o grupo 0.

Veja abaixo o exemplo a ser configurado para o applicationHost.config.

```
<applicationPools>
   <add name="DefaultAppPool">
      <cpu smpAffinitized="true" smpProcessorAffinityMask="82004080" 
      smpProcessorAffinityMask2="8008080" processorGroup="1" />
   </add>
</appricationPools>
```

Observação

Você pode configurar mais de 2 grupos de processadores mesmo quando há menos processadores do que 64 LPs.

<https://msdn.microsoft.com/library/ff542298(VS.85).aspx>

Nesse cenário, alguns bits de atributos smpProcessorAffinityMask e smpProcessorAffinityMask2 serão ignorados.

A imagem abaixo mostra como você pode configurar a máscara na caixa de diálogo de configuração avançada do pool de aplicativos.

![Captura de tela que mostra a caixa de diálogo Configurações Avançadas. Máscara de Afinidade do Processador e Grupo de Processadores são realçados.](understanding-multicore-scaling-on-numa-hardware-with-iis-8/_static/image1.png)

Quando essa configuração é usada, os ApplicationPools têm *afinidade rígida*, o que significa que não há nenhum impacto em outros nós NUMA. Em testes, mostrou-se que a afinidade rígida oferece maior taxa de transferência do que a afinidade suave, conforme medido em RPS (Solicitações por Segundo).

Observação

O processorGroup é respeitado somente quando é usado com AffinityMasks para definir manualmente a afinidade de um processo com um núcleo.

## MODO de afinidade

Quando se trata de afinitizar um processo a um núcleo ou nó NUMA, dois modos de afinidade são possíveis:

1. **Afinidade Dura.** Um processo está afinado a um núcleo (ou núcleos que compõem um nó NUMA) e todos os threads do processo são executados pelo núcleo afinado. Os threads não podem ser executados pelos outros núcleos no sistema, independentemente de os outros núcleos terem ciclos extras de CPU ou não. Os threads estão contidos no núcleo afinidadedo.
2. **Afinidade Suave** Um processo é afinado a um núcleo (ou aos núcleos que compõem um nó NUMA) como o "núcleo preferido". Quando um thread está prestes a ser agendado para ser executado, o "núcleo preferencial" é considerado primeiro, no entanto, dependendo da carga e da disponibilidade dos outros núcleos no sistema, o thread talvez seja agendado nos outros núcleos do sistema. Esse comportamento geralmente é descrito como um efeito de "transbordamento", no qual os threads estão "transbordando" para outros núcleos não afinados suavemente.

O novo elemento de esquema a seguir foi introduzido no IIS 8 para configurar os modos de afinidade:

```
<element name="cpu">
 ...
 <attribute name="numaNodeAffinityMode" type="enum" defaultValue="Soft">
 <enum name="Soft" value="0" />
 <enum name="Hard" value="1" />
 </attribute>
</element>
```

O administrador também pode configurar o atributo **numaNodeAffinityMode** usando o Gerenciador de Serviços de Internet.

![Captura de tela que mostra a caixa de diálogo Configurações Avançadas. O modo de afinidade de nó NUMA é definido como Soft e está realçado.](understanding-multicore-scaling-on-numa-hardware-with-iis-8/_static/image2.png)

Por padrão, os Pools de Aplicativos têm afinidade leve porque é uma configuração mais "indulgente" para a maioria dos cenários. Se você for avançado o suficiente para ser capaz de configurar de forma inteligente os atributos **smpProcessorAffinityMask** e **smpProcessorAffinityMask2** , configurar a afinidade hard/soft de acordo com o layout do nó do sistema pode melhorar o desempenho.

## Seleção ideal de NUMA

Por padrão, o Windows atribui cada processo ao próximo nó NUMA no sistema usando um algoritmo simples de "round robin". Isso garante que os threads de qualquer processo determinado sejam executados no mesmo nó NUMA por padrão sempre que possível. No entanto, o IIS 8 permite que outro algoritmo de agendamento minimize o acesso à memória em nós NUMA remotos. A seleção ideal de NUMA refere-se a uma funcionalidade na qual o IIS 8 seleciona um nó NUMA que deve fornecer melhor desempenho para um processo de trabalho que está para ser instanciado. Há duas opções no IIS 8 para esta configuração:

1. **MaiorMemóriaDisponível** O algoritmo de agendamento para processos de trabalho iniciados pelo WAS, que agendará o processo no nó com mais memória disponível. Isso ajuda a minimizar o acesso à memória em um nó NUMA remoto. O primeiro processo de trabalho é selecionado com base em qual nó NUMA tem mais memória livre disponível. O resto dos processos de trabalho são afinizados de forma round-robin.

   Observação

   O atributo **numaNodeAffinityMode** é aplicável somente com **MostAvailableMemory**.
2. **WindowsScheduling.** O sistema operacional, por padrão, atribui cada processo ao próximo nó NUMA no sistema, usando o algoritmo "round robin" em um sistema NUMA. Os processos de trabalho são distribuídos uniformemente porque o Windows escolhe o nó NUMA com base no algoritmo "round-robin" e cria uma afinidade suave dos processos com nós NUMA.

   Observação

   O atributo **numaNodeAffinityMode** não é aplicável ao **WindowsScheduling** porque esta não é uma implementação do IIS, mas a implementação do Windows como ela mesma.

A configuração dessas opções é feita usando novas opções de esquema:

```
<element name="cpu">
 ... 
 <attribute name="numaNodeAssignment" type="enum"   defaultValue="MostAvailableMemory">
 <enum name="MostAvailableMemory" value="0"/>
 <enum name="WindowsScheduling" value="1"/>
 </attribute >
 ... 
</element>
```

O administrador também pode configurar o atributo **numaNodeAssignment usando o Gerenciador de Serviços** de Internet.

![Captura de tela que mostra a caixa de diálogo Configurações Avançadas. A Atribuição de Nó NUMA está realçada.](understanding-multicore-scaling-on-numa-hardware-with-iis-8/_static/image3.png)

## Como isso funciona?

Considere uma configuração na qual há 8 nós NUMA e um web garden de 4 processos. Se o **atributo numaNodeAssignment** estiver definido como **MostAvailableMemory** e NUMA Node 2 é escolhido como o nó NUMA ideal para o primeiro dos 4 processos e tiver afinidade, os subsequentes serão afinados com NUMA Node 3, Node 4 e Node 5 na sequência:

| NUMA0 | NUMA1 | NUMA2 | NUMA3 | NUMA4 | NUMA5 | NUMA6 | NUMA7 |
| --- | --- | --- | --- | --- | --- | --- | --- |
|  |  | IIS w3wp | IIS w3wp | IIS w3wp | IIS w3wp |  |  |

Da mesma forma, se o Nó NUMA 6 for escolhido para o primeiro dos 4 processos, os seguintes serão afinados com os Nós NUMA 7, 0 e 1 em sequência.

| NUMA0 | NUMA1 | NUMA2 | NUMA3 | NUMA4 | NUMA5 | NUMA6 | NUMA7 |
| --- | --- | --- | --- | --- | --- | --- | --- |
| IIS w3wp | IIS w3wp |  |  |  |  | IIS w3wp | IIS w3wp |

## Jardins da Web

O comportamento do Web garden no IIS 8 e versões posteriores também mudou um pouco. No IIS 7.5 (que foi fornecido com o Windows Server 2008 R2), o valor do atributo **maxProcesses** começou a partir de 1 e, com o IIS 8, esse valor agora começa em 0 (embora o valor padrão ainda seja 1!). É assim que ele fica no esquema:

```
<element name="processModel">
 ...
 <attribute name="maxProcesses" type="uint" defaultValue="1" validationType="integerRange"
 validationParameter="0,2147483647" />
 ... 
</element>
```

Naturalmente, isso também é configurável com a GUI:

![Captura de tela que mostra a caixa de diálogo Configurações Avançadas. O máximo de processos de trabalho é definido como 1 e está realçado.](understanding-multicore-scaling-on-numa-hardware-with-iis-8/_static/image4.png)

Quando essa configuração é definida como 0 em hardware não NUMA, o valor padrão de 1 é usado. Quando estiver definido como 0 no hardware NUMA, o IIS iniciará tantos processos de trabalho quanto houver nós NUMA no sistema para que haja uma afinidade 1:1 entre os processos de trabalho e os nós NUMA. Nesses sistemas, você deve definir o valor **maxProcesses** como 0 para obter o desempenho máximo.

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
