# Suporte para cabeçalhos de host curinga | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-10/wildcard-host-header-support

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

# Suporte ao cabeçalho do host curinga

Comentários

por [Andrew Westgarth](https://github.com/apwestgarth)

### Compatibilidade

| Versão | Observações |
| --- | --- |
| IIS 10.0 | O suporte ao cabeçalho curinga de Host foi introduzido no IIS 10.0 |
| IIS 8.5 e anterior | Havia uma falta de suporte para cabeçalhos de host wildcard antes do IIS 10.0 |

Aviso

Associações de curinga de nível superior (`http://*:80/` e `http://+:80`) **não** devem ser usadas. Associações de curinga de nível superior podem abrir o aplicativo para vulnerabilidades de segurança. Isso se aplica a curingas fortes e fracos. Use nomes de host explícitos em vez de curingas. Associações de curinga de subdomínio (por exemplo, `*.mysub.com`) não têm esse risco de segurança se você controlar o domínio pai completo (em vez de `*.com`, o qual é vulnerável). Consulte [a seção rfc7230-5.4](https://tools.ietf.org/html/rfc7230#section-5.4) para obter mais informações.

## Problema

Por bastante tempo, os clientes solicitaram que oferecêssemos suporte a cabeçalhos curinga de host no IIS. O IIS 10 agora dá suporte a cabeçalhos de host "Wildcard".

## Solução

Cabeçalhos de host curinga permitem que os administradores configurem um servidor Web para um domínio, por exemplo, contoso.com e, em seguida, fazer com que o servidor Web atenda solicitações para qualquer subdomínio. Por exemplo, todos os seguintes hosts seriam válidos:

- intranet.contoso.com
- private.contoso.com
- blogs.contoso.com

Curingas são permitidos apenas no subdomínio mais à esquerda do nome do host. Por exemplo, `http://*.service.contoso.com` é uma associação de host curinga legal, enquanto `http://service.*.contoso.com` não é permitida.

## Instruções passo a passo

### Adicionando um novo site com um cabeçalho de host coringa

Para adicionar um novo site com um cabeçalho de host curinga no IIS, você precisa seguir estas etapas simples:

1. Abra o Gerenciador de Serviços de Informações da Internet no servidor no qual seu site está hospedado:

   - Se você estiver usando o Windows Server Technical Preview:

     1. Na barra de tarefas, clique em **Gerenciador de Servidores**, clique em **Ferramentas** e, em seguida, clique no **Gerenciador de Serviços de Informações da Internet (IIS**).
   - Se você estiver usando o Windows Technical Preview

     1. Mantenha pressionada a tecla **Windows** , pressione a letra **X** e clique em **Painel de Controle**.
     2. Clique **em Ferramentas Administrativas** e clique duas vezes no **Gerenciador dos Serviços de Informações da Internet (IIS).**
2. Selecione o servidor no qual você deseja criar seu site, na lista em conexões.
3. Clique na opção **"Adicionar Site.."** no **Painel ações**  
   ![Novo Site no Gerenciador do IIS](wildcard-host-header-support/_static/image1.png)
4. Digite a configuração para o seu site na caixa de texto **nome do host**, insira o **cabeçalho curinga de host**, por exemplo, \*.contoso.com e clique em OK.  
   ![Novos detalhes do site](wildcard-host-header-support/_static/image2.png)
5. Seu novo site foi configurado com um **Wildcard Host Header**

### Adicionando um cabeçalho de host curinga a um site existente

Para configurar um site existente para usar um cabeçalho curinga de host no IIS, você precisa seguir estas etapas:

1. Abra o Gerenciador de Serviços de Informações da Internet no servidor no qual seu site está hospedado:

   - Se você estiver usando o Windows Server Technical Preview:

     1. Na barra de tarefas, clique em **Gerenciador de Servidores**, clique em **Ferramentas** e, em seguida, clique no **Gerenciador de Serviços de Informações da Internet (IIS**).
   - Se você estiver usando o Windows Technical Preview

     1. Mantenha pressionada a tecla **Windows** , pressione a letra **X** e clique em **Painel de Controle**.
     2. Clique **em Ferramentas Administrativas** e clique duas vezes no **Gerenciador dos Serviços de Informações da Internet (IIS).**
2. Selecione o servidor no qual seu site está implantado, na lista em conexões.
3. Selecione o site (por exemplo, Site Padrão) que você deseja configurar na lista de sites.
4. No painel Ações, selecione **Vinculações:  
   ![Editar site existente no Gerenciador do IIS](wildcard-host-header-support/_static/image3.png)**
5. Selecione a associação que você deseja editar (por exemplo, http) e clique em **Editar...**  
   ![Vinculações de Site](wildcard-host-header-support/_static/image4.png)
6. Na caixa de texto para o **nome do host**, insira o **cabeçalho coringa de host**, por exemplo, \*.contoso.com e clique em OK ![Adicionar/Editar Associação de Site](wildcard-host-header-support/_static/image5.png)
7. Agora você pode ver o valor do cabeçalho de host curinga na lista de bindings:  
   ![Vínculos de site atualizados](wildcard-host-header-support/_static/image6.png)
8. Clique em fechar para retornar ao Gerenciador do IIS.

### Testando um cabeçalho de host curinga

Depois de configurar um cabeçalho curinga de host, você precisará configurar o DNS para o domínio e, em seguida, poderá testar o tráfego para o seu site. Nas capturas de tela abaixo, usamos três subdomínios diferentes para direcionar ao site que configuramos com um cabeçalho curinga de host (\*.contoso.com). O aplicativo de demonstração asp.net que implantamos neste site renderiza o nome do host solicitado na página inicial.

![intranet.contoso.com](wildcard-host-header-support/_static/image7.png)
![private.contoso.com](wildcard-host-header-support/_static/image8.png)
![blogs.contoso.com](wildcard-host-header-support/_static/image9.png)

## Problemas

## Resumo

O IIS 10.0 adicionou suporte para cabeçalhos de host curinga em vinculações.

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
