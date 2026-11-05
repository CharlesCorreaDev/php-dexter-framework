# Ativação dinâmica do site no IIS 8.5 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-85/dynamic-site-activation-in-iis85

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

# Ativação dinâmica do site no IIS 8.5

Comentários

por [Gary Ericson](https://github.com/garyericson)

> No IIS 8.5, quando houver um grande número de sites configurados (100 ou mais, por padrão), o serviço não ativará nenhum dos sites quando o serviço for iniciado.

### Compatibilidade

| Versão | Observações |
| --- | --- |
| IIS 8.5 e posterior | A ativação dinâmica do site foi introduzida no IIS 8.5. |
| IIS 8.0 e anterior | Não havia suporte para a ativação dinâmica do site antes do IIS 8.5. |

## Problema

Quando o serviço IIS (Serviços de Informações da Internet) no Windows Server 2012 é iniciado na inicialização do sistema, ele ativa automaticamente todos os sites configurados. Isso significa que, na primeira vez que qualquer site for acessado, ele estará disponível e responderá rapidamente. No entanto, para um sistema com um grande número de sites configurados, não só leva muito tempo e recursos para ativar todos esses sites de uma só vez, mas os sites podem usar uma grande quantidade de memória. Se a maioria dos locais for acessada com pouca frequência, isso poderá ser um desperdício desnecessário de recursos do sistema.

Observe que a "ativação", nesse contexto, refere-se a um processo no qual o IIS registra um site com a pilha de protocolo HTTP (HTTP.SYS), que faz parte do sistema operacional Windows Server. Essa ativação não deve ser confundida com a ação de criar um processo de trabalho para um site.

## Solução

No IIS 8.5 e posterior, quando houver um grande número de sites configurados (100 ou mais, por padrão), o serviço não ativará nenhum dos sites quando o serviço for iniciado. Em vez disso, o IIS ativará cada site somente quando receber a primeira solicitação do site. Isso reduz a quantidade de recursos do sistema exigidos pelo IIS, especialmente se um grande número de sites for acessado com pouca frequência. A primeira solicitação para o site levará algum tempo à medida que o site é ativado, mas os acessos subsequentes responderão normalmente.

## Instruções passo a passo

### Configurar a ativação dinâmica do site

Por padrão, o IIS 8.5 e posterior usam um limite de 100 sites:

- Se houver menos de 100 sites configurados, o IIS ativará todos os sites na inicialização.
- Se houver 100 ou mais sites configurados, o IIS ativará cada site à medida que for acessado pela primeira vez.

Você pode alterar esse valor de limite usando o Editor de Configuração.

1. Abra o **Gerenciador do IIS**.
2. Selecione o servidor no painel **Conexões** e clique duas vezes no Editor de **Configuração**.  
   ![Selecionar Editor de Configuração](dynamic-site-activation-in-iis85/_static/image1.jpg)
3. Selecione a seção **system.applicationHost/webLimits**.  
   ![Selecionar WebLimits](dynamic-site-activation-in-iis85/_static/image2.jpg)
4. Defina o valor de **dynamicRegistrationThreshold** como o novo valor limite (o valor padrão é 100).  
   ![Set dynamicRegistrationThreshold](dynamic-site-activation-in-iis85/_static/image3.jpg)
5. Reinicie o IIS.

## Resumo

Neste guia, você modificou o valor de limite usado pelo IIS para determinar o limite sobre o qual os recursos de ativação de site dinâmico são eficazes.

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
