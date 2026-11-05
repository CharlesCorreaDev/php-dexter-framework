# Proteção de Acesso | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/overview/access-protection

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

# Proteção de Acesso

Comentários

Proteja seu servidor Web contra solicitações mal-intencionadas e acesso não autorizado com regras de autorização de URL e filtragem de solicitações internas.

O IIS fornece uma plataforma segura, confiável para hospedagem de aplicativos e serviços Web. O suporte para regras de autorização de URL e filtragem de solicitações fornece aos administradores controle refinado sobre o acesso ao conteúdo do site.

## Autorização de URL

O IIS armazena regras de autorização de URL no arquivo *web.config* de um aplicativo. As regras  *de autorizaçãoweb.config* que protegem contra acesso não autorizado permanecem com o conteúdo, mesmo quando o conteúdo é movido para um servidor diferente ou um novo domínio. O IIS também dá suporte à autorização de URL ASP.NET para todos os tipos de solicitações de conteúdo da Web no pipeline integrado.

## Filtragem de Solicitações Integrada

A Filtragem de Solicitações do IIS permite que os administradores implementem políticas de aceitação de URL globalmente e por URL. A filtragem de solicitações ajuda a proteger o servidor, garantindo que somente solicitações válidas sejam processadas. Os administradores podem aumentar a segurança do servidor Web fornecendo várias opções de filtragem. Várias opções de filtragem podem impedir que URLs mal-intencionadas ou incorretas sejam processadas. Por exemplo, usando a Filtragem de Solicitações, um administrador pode definir uma regra que impede a exibição de arquivos com extensões especificadas, por exemplo, *.ini* arquivos.

Para usuários do IIS 5.1 e do IIS 6.0, o IIS fornece a Verificação de URL 3.0 que, como a Filtragem de Solicitações do IIS, restringe os tipos de solicitações HTTP que o IIS processará. Ao bloquear solicitações HTTP específicas, a ferramenta de segurança de Verificação de URL 3.0 ajuda a evitar que solicitações potencialmente prejudiciais atinjam aplicativos no servidor. A Verificação de URL 3.0 exibe todas as solicitações de entrada para o servidor filtrando as solicitações com base nas regras. As regras de Verificação de URL 3.0 são definidas pelo administrador. A Verificação de URL 3.0 pode ser configurada para filtrar valores de cadeia de caracteres de consulta HTTP e outros cabeçalhos HTTP. A filtragem pode atenuar ataques de injeção de SQL contra aplicativos enquanto a causa raiz está sendo corrigida.

## Reescrita de URL

![Reescrita de URL](access-protection/_static/url-rewriter-small.png)

Os administradores podem usar o Regravador de URL para IIS para proteger aplicativos no servidor Web. O Regravador de URL permite a modificação dinâmica de URLs com base nas regras definidas pelo administrador do site. Por exemplo, podem ser criadas regras que impedem que outros sites façam hotlinking a imagens ou conteúdo de vídeo de um site. Desabilitar a *vinculação ativa* impede o roubo de conteúdo do servidor e a perda de largura de banda. Usando:

- Modelos de regra
- Reescrever mapas
- Outra funcionalidade integrada ao Gerenciador do IIS

Os administradores podem configurar regras para definir o comportamento de regravação de URL com base em cabeçalhos HTTP e variáveis de servidor.

## Segurança de Transporte Estrito HTTP (HSTS)

O IIS adiciona suporte ao [HTTP Strict Transport Security](get-started__whats-new-in-iis-10-version-1709__iis-10-version-1709-hsts.md) que instrui os navegadores de que o site especificado só deve ser acessado usando HTTPS (HTTP não é permitido).

## CORS (Compartilhamento de Recurso entre Origens)

Os navegadores geralmente aplicam restrições de mesma origem a solicitações de rede. Essas restrições impediriam uma página mal-intencionada de fazer uma solicitação de origem cruzada iniciada de dentro de um script. Para que esses cenários funcionem, você precisará configurar sua API para responder com cabeçalhos CORS apropriados.
[O módulo CORS do IIS](extensions__cors-module__cors-module-configuration-reference.md) fornece uma maneira para administradores da Web e autores de site da Web oferecerem suporte ao protocolo CORS delegando todo o tratamento de protocolo CORS para o módulo.

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
