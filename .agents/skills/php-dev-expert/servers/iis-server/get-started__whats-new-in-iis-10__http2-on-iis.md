# HTTP/2 no IIS | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-10/http2-on-iis

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

# HTTP/2 no IIS

Comentários

por [David So](https://github.com/davidso)

## Compatibilidade

| Versão | Observações |
| --- | --- |
| IIS 10.0 | O suporte a HTTP/2 foi introduzido no IIS 10.0 |
| IIS 8.5 e anterior | Não havia suporte para HTTP/2 antes do IIS 10.0 |

## O que é HTTP/2?

HTTP/2 é um retrabalho de como a semântica HTTP flui sobre conexões TCP e o suporte a HTTP/2 está presente no Windows 10 e no Windows Server 2016. HTTP/2 é uma atualização importante após quase duas décadas de uso http/1.1 e reduz o impacto da latência e da carga de conexão em servidores Web.

O principal avanço de HTTP/1.1 foi o uso de conexões persistentes para atender a várias solicitações em uma linha. Em HTTP/2, uma conexão persistente pode ser usada para atender a várias solicitações simultâneas. No processo, HTTP/2 apresenta vários recursos adicionais que melhoram a eficiência do HTTP na rede.

### Uma conexão para várias solicitações

Cada conexão TCP requer uma viagem de ida e volta para configurar. Se você estiver usando criptografia, o handshake do TLS realizará outras 1 a 2 viagens de ida e volta. Tudo isso acontece antes que o primeiro byte da primeira resposta possa ser enviado. Reutilizando uma conexão existente em vez de configurar uma nova, essa sobrecarga pode ser compartilhada por muitas solicitações. HTTP/2 reduz drasticamente a necessidade de uma solicitação aguardar enquanto uma nova conexão é estabelecida ou aguardar que uma conexão existente fique ociosa. Como uma única conexão é multiplexada entre muitas solicitações, a solicitação geralmente pode ser enviada imediatamente sem esperar que outras solicitações sejam concluídas.

### Compactação de cabeçalho com HPACK

O HTTP já suporta a compactação de dados há muito tempo. Os cabeçalhos, no entanto, são enviados como texto descompactado, com muita redundância entre solicitações. (Muitos dos cabeçalhos mais longos são enviados com exatamente o mesmo valor em cada solicitação!) HTTP/2 apresenta o HPACK, um esquema de compactação para cabeçalhos HTTP que reduz a redundância entre solicitações.

A compactação ajuda a multiplexação, pois as solicitações são menores. Isso permite que os clientes façam muitas solicitações em seus primeiros pacotes em uma conexão, enquanto as janelas de controle de fluxo TCP ainda são pequenas.

### Push do servidor

As solicitações vêm em padrões. Se um cliente solicitar um recurso, o servidor geralmente poderá prever que ele precisará de outros recursos referenciados na página. Em HTTP/1.1, o inlining foi usado para entregar esses recursos aos clientes como parte da primeira resposta. O inlining tem suas desvantagens – principalmente porque o recurso inserido não pode ser armazenado em cache para uso em outras páginas onde pode ser referenciado.

HTTP/2 apresenta o conceito de "push" – o servidor responde a solicitações que o cliente ainda não fez, mas prevê que fará. Isso permite que os servidores continuem fornecendo os benefícios de latência da incorporação direta, mas em uma forma que o cliente pode armazenar em cache e reutilizar os recursos em outras páginas.

## Como posso usar HTTP/2?

Talvez você já esteja! Como quase todos os navegadores já dão suporte a HTTP/2 em sua versão mais atual, e os dados atuais mostram que mais [de 50% de usuários](http://caniuse.com/#feat=http2) já estão em navegadores compatíveis com HTTP/2.

No servidor, o IIS em execução no Windows 10 ou no Windows Server 2016 dá suporte a HTTP/2.

Atualmente, o IIS dá suporte a HTTP/2 apenas por TLS. Ao fazer uma conexão HTTPS com um servidor Web executando o IIS no Windows 10, HTTP/2 será usado se o cliente e o servidor derem suporte a ele. No IIS, implementamos HTTP/2 da forma mais transparente possível: você não deve precisar alterar nada em seu aplicativo para que HTTP/2 funcione. Algumas otimizações HTTP/1.1 (fragmentação de domínio, sublinhado etc.) não são mais recomendadas em HTTP/2, portanto, você deve planejar removê-las no futuro.

### E quanto ao push?

Como o Push do Servidor é um novo recurso em HTTP/2, há novas APIs que você precisa chamar para tirar proveito dele. Ao chamar a [API PushPromise](https://learn.microsoft.com/pt-br/dotnet/api/system.web.httpresponse.pushpromise) em ASP.NET ou a API [HttpDeclarePush](https://learn.microsoft.com/pt-br/windows/desktop/api/http/nf-http-httpdeclarepush) de um módulo nativo do IIS, você fornece a URL e os cabeçalhos de solicitação opcionais para a solicitação que você antecipa a criação do cliente. Se houver suporte para push pela conexão subjacente, duas coisas acontecerão:

- Um PUSH\_PROMISE é enviado ao cliente, para que o cliente possa verificar se o recurso já existe no cache
- Uma nova solicitação é adicionada à fila de solicitação para o recurso enviado por push

Se a conexão subjacente não oferecer suporte a push (cliente com push desabilitado ou cliente HTTP/1.1), a chamada não faz nada e retorna êxito, permitindo que você chame a API com segurança, sem se preocupar se o push é permitido.

## Configurações do IIS

Não há novas configurações do IIS específicas para HTTP/2.

No Windows Server 2016 Tech Preview, houve uma menção à definição de uma chave do Registro 'DuoEnabled'. Isso não é mais necessário. Conforme mencionado acima, desde que a configuração de cliente e servidor dê suporte a HTTP/2, o IIS usará HTTP/2 (ou fallback para HTTP/1.1, se não possível).

### Versão do Protocolo de Log

O registro em log do IIS tem um campo "Versão do protocolo" que está desativado por padrão. Habilitar esse campo será útil se você quiser acompanhar quais solicitações estão sendo realizadas via HTTP/2, HTTP/1.1 etc.

Na interface do usuário do Gerenciador de Serviços de Internet, isso pode ser encontrado no recurso **Logging**, por meio da opção **Selecionar Campos**.

![Imagem da página IIS Logging exibindo a lista suspensa Selecionar Campos com a Versão do Protocolo CS selecionada no menu Campos de Log do W 3 C.](http2-on-iis/_static/image1.png)

Depois de fazer as alterações, clique em **Aplicar** no painel **Ações** na extrema direita.

Aqui está a saída do arquivo de log de exemplo com o campo Versão do Protocolo habilitado:

```
#Software: Microsoft Internet Information Services 10.0
#Version: 1.0
#Date: 2015-08-13 18:46:11
#Fields: date time s-ip cs-method cs-uri-stem cs-uri-query s-port cs-username c-ip cs-version cs(User-Agent) cs(Referer) sc-status sc-substatus sc-win32-status time-taken
2015-08-13 18:46:11 ::1 GET / - 443 - ::1 HTTP/2.0 Mozilla/5.0+(Windows+NT+10.0;+WOW64;+Trident/7.0;+Touch;+rv:11.0)+like+Gecko - 200 0 0 391
2015-08-13 18:46:11 ::1 GET /iisstart.png - 443 - ::1 HTTP/2.0 Mozilla/5.0+(Windows+NT+10.0;+WOW64;+Trident/7.0;+Touch;+rv:11.0)+like+Gecko https://localhost/ 200 0 0 100
```

## Passo a passo de demonstração do IIS com HTTP/2

1. Se você estiver executando o Windows 10, isso pode ser encontrado em **Programas e Recursos**, depois **Ativar ou desativar os recursos do Windows**, e ativar **Serviços de Informações da Internet**. Se você estiver executando o Windows Server 2016, inicie o **Gerenciador de Servidores**, **adicione funções e recursos** no painel e selecione **o Servidor Web (IIS)** na lista.

   ![Imagem da página Ativar ou desativar recursos do Windows com os Serviços de Informações da Internet selecionados e realçados.](http2-on-iis/_static/image2.png)
2. Após a conclusão da instalação, inicie o Gerenciador de Serviços de Internet e crie um certificado autoassinado selecionando a opção **Certificados do Servidor** na exibição **Recursos** do servidor. Observe que o uso de um certificado autoassinado neste exemplo é apenas para fins de demonstração/teste (não recomendado para proteger seus sites de produção).

   ![Imagem da exibição de Recursos do Servidor na página do Gerenciador de Serviços de Internet com Certificados de Servidor destacados.](http2-on-iis/_static/image3.png)

   ![Imagem da caixa de diálogo do Certificado Autoassinado exibindo a caixa De nome com a opção Criar Certificado Autoassinado realçada.](http2-on-iis/_static/image4.png)
3. Vá para o site padrão e, em **Associações**, crie uma nova associação TLS com o certificado autoassinado que você acabou de criar.

   ![Captura de tela da caixa de diálogo Adicionar Associação de Site com o Tipo de Endereço IP realçado e o Servidor IIS Local selecionado na lista suspensa.](http2-on-iis/_static/image5.png)
4. Inicie seu navegador do computador Windows 10 ou Windows Server 2016 e clique em F12 (ou vá para **Configurações** e habilite **as Ferramentas de Desenvolvedor F12**) e alterne para a guia **Rede** . Navegue até `https://localhost` e voila, você está em HTTP/2!

   ![Captura de tela das Ferramentas de Desenvolvedor F 12 do Painel de Host Local com a guia Rede exibida e H T T P 2 selecionado.](http2-on-iis/_static/image6.png)

## Quando HTTP/2 não tem suporte?

Em alguns casos, HTTP/2 não pode ser usado em combinação com outros recursos. Nessas situações, o Windows fará fallback para HTTP/1.1 e continuará a transação. Isso pode envolver negociar HTTP/1.1 durante o handshake ou enviar um código de erro para o cliente instruindo-o a tentar novamente uma conexão HTTP/1.1.

- A autenticação do Windows (NTLM/Kerberos/Negotiate) não tem suporte com HTTP/2. Nesse caso, o IIS retornará ao HTTP/1.1.
- Texto claro – conforme mencionado acima, o IIS atualmente só dá suporte a HTTP/2 por TLS. Novamente, o IIS retornará ao HTTP/1.1.
- Limitação de largura de banda – IIS tem um recurso para limitar a largura de banda (no Inetmgr, selecione o site, 'Limites' em Configuração do painel de ações). Isso se aplica a HTTP/1.1, mas não é imposto para HTTP/2 (continuará sem erros ou limitação de largura de banda).

## Para obter mais informações

Consulte a conversa do Build 2015 HTTP/2 no Windows 10: Navegador, Aplicativos e Servidor Web para obter uma discussão mais detalhada sobre HTTP/2 e as implementações de cliente e servidor no Windows.

Autores: Mike Bishop, David So (com contribuições e reconhecimentos para Rob Trace, Baris Caglar, Nazim Lala)

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
