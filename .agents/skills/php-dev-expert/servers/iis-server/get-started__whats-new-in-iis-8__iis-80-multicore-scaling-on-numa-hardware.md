# Dimensionamento multicore do IIS 8.0 no hardware NUMA | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-multicore-scaling-on-numa-hardware

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

# Dimensionamento multicore do IIS 8.0 no hardware NUMA

Comentários

por [Robert McMurray](https://github.com/rmcmurray)

### Compatibilidade

| Versão | Observações |
| --- | --- |
| IIS 8.0 | O dimensionamento multicore no NUMA foi introduzido no IIS 8.0. |
| IIS 7.5 | Não havia suporte para dimensionamento multicore no NUMA no IIS 7.5. |
| IIS 7.0 | Não havia suporte para dimensionamento multicore no NUMA no IIS 7.0. |

## Problema

De um modo geral, aumentar o número de núcleos deve resultar em um maior desempenho. No entanto, chega um ponto em que aumentar o número de núcleos pode resultar em degradação de desempenho porque o custo de sincronização de memória supera os benefícios no hardware NUMA com núcleos adicionais. O IIS 8.0 resolve esse problema distribuindo e criando afinidade inteligentemente seus processos em hardware de Acesso Não Uniforme à Memória (NUMA).

## Solução

O IIS (Serviços de Informações da Internet) no Windows Server 2012 tem reconhecimento de NUMA e fornece a configuração ideal para os administradores de TI. A seção a seguir descreve as diferentes opções de configuração para obter o melhor desempenho com o IIS 8.0 no hardware NUMA.

O IIS dá suporte a duas maneiras a seguir de particionar a carga de trabalho:

1. **Execute vários processos de trabalho em um pool de aplicativos (ou seja, jardim web)**: se você estiver usando esse modo, por padrão, o pool de aplicativos será configurado para executar um processo de trabalho. Para obter o desempenho máximo, você deve considerar a execução do mesmo número de processos de trabalho que existem nós NUMA, de modo que haja afinidade 1:1 entre os processos de trabalho e nós NUMA. Isso pode ser feito definindo "**Máximo de Processos de Trabalho"** AppPoolsetting como 0. Nessa configuração, o IIS determina quantos nós NUMA estão disponíveis no hardware e inicia o mesmo número de processos de trabalho.
2. **Execute vários pools de aplicativos em uma única carga de trabalho/site**: nesta configuração, a carga de trabalho/site é dividida em vários pools de aplicativos. Por exemplo, o site pode conter vários aplicativos configurados para serem executados em pools de aplicativos separados. Efetivamente, essa configuração resulta na execução de múltiplos processos de trabalho do IIS para a carga de trabalho ou site, e o IIS distribui e afina inteligentemente esses processos para alcançar o desempenho máximo.

Além disso, há duas maneiras diferentes de o IIS 8.0 identificar o nó NUMA mais ideal quando o processo de trabalho do IIS está prestes a ser iniciado.

1. **Memória Mais Disponível (padrão)**: a ideia por trás dessa abordagem é que o nó NUMA com a memória mais disponível é aquele mais adequado para assumir o processo de trabalho adicional do IIS que está prestes a ser iniciado. O IIS tem o conhecimento do consumo de memória por cada nó NUMA e usa essas informações para "balancear a carga" dos processos de trabalho do IIS.
2. **Windows**: O IIS também tem a opção de permitir que o sistema operacional Windows tome essa decisão. O sistema operacional Windows usa "round-robin".

Por fim, há duas maneiras diferentes de afinidade dos threads de um processo de trabalho do IIS para um nó NUMA.

1. **Afinidade Flexível (padrão)**: com afinidade flexível, se outros nós NUMA tiverem ciclos disponíveis, os threads de um processo de trabalho do IIS podem ser agendados para um nó NUMA sem afinidade. Essa abordagem ajuda a maximizar todos os recursos disponíveis no sistema como um todo.
2. **Afinidade Dura**: Com afinidade rígida, independentemente da carga em outros nós NUMA no sistema, todos os threads de um processo de trabalho do IIS são afinizados ao nó NUMA escolhido com base na configuração acima.

## Instruções passo a passo

### Pré-requisitos

- O IIS está instalado no Windows Server 2012.
- O modelo de processo do IIS faz parte da configuração do pool de aplicativos do IIS. Não há nenhum recurso específico do IIS que precise ser instalado do Gerenciador de Servidores.

### Soluções alternativas para bugs conhecidos

Não há bugs conhecidos para esse recurso no momento.

### Etapas de configuração

1. Abra o **Gerenciador do IIS**.
2. Selecione **Pools de Aplicativos** na janela de navegação à esquerda:  
   ![Captura de tela que mostra os Pools de Aplicativos selecionados.](iis-80-multicore-scaling-on-numa-hardware/_static/image1.png)
3. Selecione **o Pool de Aplicativos**:  
   ![Captura de tela que mostra o painel Pools de Aplicativos. A linha do Pool de Aplicativos Padrão está realçada.](iis-80-multicore-scaling-on-numa-hardware/_static/image3.png)
4. No painel **Ações** , selecione **Configurações Avançadas**:  
   ![Captura de tela que mostra o painel Ações com Configurações Avançadas realçadas.](iis-80-multicore-scaling-on-numa-hardware/_static/image5.png)
5. No grupo **Modelo de Processo** , localize a configuração **Máximo de Processos de Trabalho** .  
   ![Captura de tela que mostra o grupo Modelo de Processo. O máximo de processos de trabalho e seu valor de 1 está realçado.](iis-80-multicore-scaling-on-numa-hardware/_static/image7.png)
6. Defina esse valor como 0.

A lógica de seleção NUMA ideal, assim como o tipo de afinidade, são também encontradas em **Configurações Avançadas**. No entanto, eles aparecerão somente se o IIS estiver em execução no hardware NUMA.

### Cenários

Execute testes de desempenho no hardware NUMA antes e depois da atualização para o Windows Server 2012. Compare os resultados de desempenho para ver as melhorias.

## Resumo

Você explorou com êxito o dimensionamento multicore do IIS para o recurso de hardware NUMA no Windows Server 2012.

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
