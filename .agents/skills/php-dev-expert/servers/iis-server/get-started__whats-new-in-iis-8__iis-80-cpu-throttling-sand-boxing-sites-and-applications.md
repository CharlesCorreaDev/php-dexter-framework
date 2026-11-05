# Limitação de CPU no IIS 8.0: Isolamento de Sites e Aplicativos | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-cpu-throttling-sand-boxing-sites-and-applications

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

# Limitação da CPU do IIS 8.0: Isolamento de sites e aplicativos

Comentários

por [Shaun Eagan](https://github.com/shauneagan)

### Compatibilidade

| Versão | Observações |
| --- | --- |
| IIS 8.0 | O controle de desempenho da CPU foi atualizado no IIS 8.0 para incluir opções de limitação adicionais. |
| IIS 7.5 | A limitação da CPU não foi modificada no IIS 7.5. |
| IIS 7.0 | O controle de frequência da CPU foi introduzido no IIS 7.0. |

## Problema

Em uma implantação multilocatária, como um ambiente de hospedagem compartilhada, é importante criar um sandbox para cada locatário. Sem a sandbox, um locatário pode afetar intencionalmente ou inadvertidamente outros locatários negativamente, acessando o conteúdo de outros locatários ou monopolizando recursos, como memória, CPU e largura de banda.

## Solução

No IIS (Serviços de Informações da Internet) no Windows Server 2012, a "sandbox" está delimitada a um pool de aplicativos do IIS. Ele oferece limites de segurança no nível do processo do Windows, executando cada usuário em uma identidade de usuário separada, e as limitações de recursos também são aplicadas no nível do processo.

No Windows Server 2012, o recurso de Limitação da CPU do IIS permite que os clientes limitem verdadeiramente a quantidade de CPU que cada locatário pode consumir como um percentual da CPU. Além disso, esse recurso é configurável por pool de aplicativos do IIS, o que significa que cada locatário pode ter limites diferentes, o que pode levar a um novo modelo de negócios no qual os locatários podem pagar mais por limites mais altos.

É importante esclarecer que a Limitação da CPU do IIS não é uma ***reserva*** de um recurso de CPU. Em vez disso, é uma maneira de ***limitar*** o uso máximo.

## Instruções passo a passo

#### Pré-requisitos:

- O IIS está instalado no Windows Server 2012.

  - Limitação de CPU do IIS faz parte da configuração do pool de aplicativos do IIS. Portanto, uma instalação padrão do IIS terá esse recurso instalado. Não há nenhum recurso específico do IIS que precise ser instalado do Gerenciador de Servidores.
- Há pelo menos um site com um pool de aplicativos do IIS correspondente.

  - Site padrão e DefaultAppPool podem ser usados para este exercício.

#### Soluções alternativas para bugs conhecidos:

Não há bugs conhecidos para esse recurso no momento.

### Configurar a limitação da CPU

1. Abra o **Gerenciador do IIS**.
2. Selecione **Pools de Aplicativos** na janela de navegação à esquerda:  
   ![Captura de tela mostrando o painel Conexões com Pools de Aplicativos realçados.](iis-80-cpu-throttling-sand-boxing-sites-and-applications/_static/image1.png)
3. Selecione **DefaultAppPool**:  
   ![Captura de tela mostrando a página Pools de Aplicativos com DefaultAppTool realçado.](iis-80-cpu-throttling-sand-boxing-sites-and-applications/_static/image3.png)
4. No painel **Ação** , selecione **Configurações Avançadas**:  
   ![Captura de tela do painel Ações com Configurações Avançadas realçadas.](iis-80-cpu-throttling-sand-boxing-sites-and-applications/_static/image5.png)
5. Em grupo **de CPU** , localize as seguintes configurações:  
   ![Captura de tela da caixa de diálogo Configurações Avançadas. A seção da CPU está realçada.](iis-80-cpu-throttling-sand-boxing-sites-and-applications/_static/image7.png)

   - **Limite**: indica o uso máximo da CPU (em 1000º de percentual) para esse pool de aplicativos. Se houver vários processos associados a esse pool de aplicativos, o limite será aplicado à ***soma*** total de todos os processos nesse pool de aplicativos.
   - **LimitAction**: indica que ação tomar quando o valor limite é atingido acima.

     - Para o Windows Server 8, novas ações, **Throttle** e **ThrottleUnderLoad** foram adicionadas:  
       ![Captura de tela da caixa de diálogo Configurações Avançadas. A Ação de Limite está definida como Estrangulamento.](iis-80-cpu-throttling-sand-boxing-sites-and-applications/_static/image9.png)
     - **Limitação**: o recurso limitará o consumo de CPU ao valor definido para **Limite**.
     - **ThrottleUnderLoad**: o recurso limitará o consumo de CPU ao valor definido para **Limite**, mas somente se houver uma contenção na CPU. Isso significa que o pool de aplicativos pode consumir mais atividade de CPU quando a CPU está ociosa.
   - **LimitInterval**: não usado para **Throttle** e **ThrottleUnderLoad**. Esse atributo de configuração é transferido de versões anteriores do Windows para compatibilidade com versões anteriores.
6. Para definir o limite máximo de 30%, insira:

   1. **Limite**: 30000 (30% em milésimo de por cento)
   2. **LimitAction: Limitação**  
      ![Captura de tela da caixa de diálogo Configurações Avançadas. O limite está realçado.](iis-80-cpu-throttling-sand-boxing-sites-and-applications/_static/image11.png)
7. É isso mesmo. Usando uma ferramenta de geração de carga, envie solicitações para o Site Padrão. Uma ferramenta como o WCAT pode ser usada ([https://www.iis.net/community/default.aspx?tabid=34& g=6&i=1467](https://www.iis.net/downloads/community/2007/05/wcat-63-x64)) para gerar tráfego.
8. Observe que as configurações em questão podem ser definidas como valores padrão para que não precisem ser configuradas individualmente por pool de aplicativos. Para configurar os padrões do pool de aplicativos, selecione **Definir Padrões do Pool de Aplicativos** no painel **Ações** :  
   ![Captura de tela do painel Ações. Definir Padrões do Pool de Aplicações está em destaque.](iis-80-cpu-throttling-sand-boxing-sites-and-applications/_static/image13.png)
9. As mesmas configurações são expostas lá para configurar os padrões do pool de aplicativos:  
   ![Captura de tela da caixa de diálogo dos Padrões do Pool de Aplicativos. O limite de CPU está realçado.](iis-80-cpu-throttling-sand-boxing-sites-and-applications/_static/image15.png)

### Cenários

Tente implantar os seguintes cenários:

- O recurso de Controle de Uso de CPU do IIS foi projetado para um ambiente com múltiplos inquilinos. Experimente essas configurações em um ambiente em que há milhares de sites e aplicativos, como uma implantação de hospedagem compartilhada.
- Defina limites diferentes para diferentes "grupos" de locatários para simular os clientes que têm permissão para consumir mais recursos de CPU do que outros.
- Defina **ThrottleUnderLoad** como **LimitAction** para observar o comportamento. Ele funciona como **Limitação**, se houver contenções na CPU. Se não houver contenções na CPU, o pool de aplicativos poderá usar mais recursos de CPU do que o valor definido para **Limite**.
- Crie uma área restrita com limites de memória e largura de banda, juntamente com o recurso de Limitação de CPU do IIS no Windows Server 2012. Os limites de memória e largura de banda não são discutidos especificamente nesta documentação porque esses recursos existem no Windows Server 2008 e no Windows Server 2008 R2.

## Resumo

Você explorou com êxito o recurso de Limitação da CPU do IIS no Windows Server 2012.

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
