# Fazer logon no Rastreamento de Eventos para Windows no IIS 8.5 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-85/logging-to-etw-in-iis-85

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

# Fazer logon no Rastreamento de Eventos para Windows no IIS 8.5

Comentários

por [Gary Ericson](https://github.com/garyericson)

> No IIS 8.5, o administrador tem a opção de enviar informações de log para o ETW (Rastreamento de Eventos para Windows).

## Compatibilidade

| Versão | Observações |
| --- | --- |
| IIS 8.5 e posterior | O registro em log no ETW foi introduzido no IIS 8.5. |
| IIS 8.0 e anterior | Antes do IIS 8.5, não havia suporte para log no ETW. |

## Problema

O IIS (Serviços de Informações da Internet) no Windows Server 2012 fornece recursos básicos de log. No entanto, como o IIS leva algum tempo para gravar logs no disco, os administradores não têm acesso às informações nos logs em tempo real. Além disso, os arquivos de log baseados em texto podem ser difíceis e demorados de processar.

## Solução

No IIS 8.5, o administrador tem a opção de enviar informações de log para o ETW (Rastreamento de Eventos para Windows). Essa opção oferece ao administrador a capacidade de usar ferramentas de consulta padrão ou criar ferramentas personalizadas para exibir informações de log em tempo real no ETW. Isso fornece uma vantagem significativa sobre a análise de arquivos de log baseados em texto que não são atualizados em tempo real. Para obter mais informações sobre ETW, consulte [Rastreamento de Eventos](https://go.microsoft.com/fwlink/p/?LinkID=256040).

## Instruções passo a passo

### Configurar o registro em log do ETW

1. Abra o **Gerenciador do IIS**.
2. Selecione o servidor ou site no painel **Conexões** e clique duas vezes em **Log**. Se você configurar o registro em log para um site, essa configuração se aplicará ao site independentemente de como você configura o registro em log no nível do servidor. Se você configurar o registro em log para o servidor, a configuração será aplicada a todos os sites recém-criados no servidor e a todos os sites para os quais você não configurou o registro em log no nível do site.
3. No campo **Formatar** , em **Arquivo de Log**, verifique se **o W3C** está selecionado.  
   ![Selecione o formato de arquivo de log W3c](logging-to-etw-in-iis-85/_static/image1.jpg)
4. Em **Destino de Evento de Log**, selecione **apenas o evento ETW** ou, se desejar que as informações de log sejam enviadas ao ETW e ao arquivo de log, selecione **o arquivo de log e o evento ETW**.  
   ![Selecionar o destino do log](logging-to-etw-in-iis-85/_static/image2.jpg)
5. Use qualquer uma das ferramentas disponíveis publicamente para consultar o ETW para eventos. Por exemplo, o Analisador de Mensagens pode ser usado configurando-o para consultar o provedor "Microsoft-Windows-IIS-Logging". Para obter mais informações sobre o Analisador de Mensagens, consulte o [blog MessageAnalyzer](https://learn.microsoft.com/pt-br/openspecs/blog/ms-winintbloglp/dd98b93c-0a75-4eb0-b92e-e760c502394f).

## Resumo

Neste guia, você configurou o IIS para registrar eventos no ETW ou no ETW e no arquivo de log. Você pode exibir eventos ETW usando várias ferramentas disponíveis publicamente.

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
