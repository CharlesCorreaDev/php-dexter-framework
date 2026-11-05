# Suporte ao protocolo WebSocket do IIS 8.0 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-websocket-protocol-support

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

# Suporte ao protocolo WebSocket do IIS 8.0

Comentários

pela [Microsoft](https://github.com/Microsoft)

## Compatibilidade

| Versão | Observações |
| --- | --- |
| IIS 8.0 | O Protocolo WebSocket foi introduzido no IIS 8.0. |
| IIS 7.5 | Não havia suporte para o Protocolo WebSocket no IIS 7.5. |
| IIS 7.0 | Não havia suporte para o Protocolo WebSocket no IIS 7.0. |

## Problema

Uma das limitações para HTTP é que ele foi projetado como um método unidirecional de comunicação. No entanto, muitos aplicativos modernos baseados na Web exigem comunicações bidirecionais em tempo real para funcionar de forma ideal.

## Solução

Com o lançamento do Windows Server 2012 e do Windows 8, o IIS (Serviços de Informações da Internet) 8.0 adicionou suporte para o Protocolo WebSocket.

O Protocolo WebSocket é um padrão aberto definido no [RFC 6455](https://go.microsoft.com/fwlink/?LinkID=252388) e os desenvolvedores podem usar essa funcionalidade para criar aplicativos que implementam comunicações bidirecionais pela Internet entre um cliente e um servidor. Para obter mais informações sobre o Protocolo WebSocket, consulte os seguintes artigos:

- **WebSockets**  
  <https://msdn.microsoft.com/hh673567.aspx>
- **WebSockets: estável e pronto para desenvolvedores**  
  <https://msdn.microsoft.com/hh969243.aspx>

## Instruções passo a passo

Para habilitar o suporte para o Protocolo WebSocket no Windows Server 2012, use as seguintes etapas:

1. Abra o **Server Manager**.
2. No menu **Gerenciar** , clique em **Adicionar Funções e Recursos**.
3. Selecione **Instalação baseada em função ou recurso** e clique em **Avançar**.
4. Selecione o servidor apropriado (o servidor local está selecionado por padrão) e clique em **Avançar**.
5. Expanda o **Servidor Web (IIS)** na árvore **Funções** , expanda o **Servidor Web** e expanda o **Desenvolvimento de Aplicativos**.
6. Selecione **o Protocolo WebSocket** e clique em **Avançar**.
7. Se nenhum recurso adicional for necessário, clique em **Avançar**.
8. Clique em **Instalar**.
9. Quando a instalação for concluída, clique em **Fechar** para sair do assistente.

## Problemas

## Desabilitar WebSocket ao usar socket.io no node.js

Se você estiver usando o suporte do WebSocket em socket.io no node.js em seu site, precisará desabilitar o módulo WebSocket padrão do IIS adicionando o snippet de código abaixo ao web.config ou applicationHost.config. Se isso não for feito, o módulo WebSocket do IIS tentará lidar com a comunicação WebSocket em vez de permitir que essa tarefa se destine ao node.js e, portanto, ao seu aplicativo. Isso resultará em erros inesperados quando você tentar acessar seu site.

```
<system.webServer>
    ...
    <webSocket enabled="false"/>
</system.webServer>
```

## Resumo

O IIS 8.0 adicionou suporte ao Protocolo WebSocket, que permite comunicações dinâmicas bidirecionais pela Internet. Informações adicionais podem ser encontradas nas seguintes URLs:

- **Introdução ao WebSockets no Windows 8**  
  <http://www.paulbatum.com/2011/09/getting-started-with-websockets-in.html>
- **IIS e Websockets**  
  <https://blogs.iis.net/jennylaw/archive/2012/09/05/iis-and-websockets.aspx>
- **System.Net.WebSockets Namespace**  
  [https://learn.microsoft.com/dotnet/api/system.net.websockets](https://learn.microsoft.com/pt-br/dotnet/api/system.net.websockets)

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
