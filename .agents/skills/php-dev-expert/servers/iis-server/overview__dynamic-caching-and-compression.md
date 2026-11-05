# Cache dinâmico e compactação | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/overview/dynamic-caching-and-compression

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

# Cache dinâmico e compactação

Comentários

Acelere seu site por meio de cache dinâmico interno e compactação aprimorada.

O IIS fornece o desempenho mais rápido para conteúdo da Web estático e dinâmico por meio de compactação HTTP avançada e integração mais profunda com o fornecimento de solicitações a partir do kernel do Windows para sites da Web SSL e autenticação do Windows.

## Compactação de largura de banda aprimorada

As melhorias de desempenho do IIS ajudam a reduzir o consumo de largura de banda para empresas. Habilitada por padrão, a compactação estática pré-compacta e salva conteúdo estático, como imagens em disco. Quando o conteúdo é solicitado por um cliente habilitado para compactação (praticamente todos os navegadores de área de trabalho), o IIS atende ao conteúdo pré-compactado sem a necessidade de executar a etapa de compactar o conteúdo após a solicitação do cliente. Os administradores também podem ativar a compactação dinâmica, que compacta uma resposta em tempo real para ASP.NET, PHP, ASP e outras estruturas de aplicativos. O IIS coloca controle adicional nas mãos da administração oferecendo a capacidade de definir a força de compactação em relação ao uso da CPU.

## Cache de Saída Dinâmica

Para melhorar ainda mais o desempenho de aplicativos dinâmicos, o cache de saída do IIS oferece aos administradores a capacidade de armazenar em cache conteúdo dinâmico (saída de um ASP.NET, ASP Clássico, PHP ou outras páginas dinâmicas) na memória, o que fornece ganhos significativos de desempenho removendo a etapa de execução do script usado para gerar a saída dinâmica para cada solicitação. Os administradores podem configurar a saída armazenada em cache com base em valores de cadeia de caracteres de consulta, bem como cabeçalhos HTTP enviados do cliente para o servidor. O cache de saída, juntamente com a autenticação do SSL e do Windows, é profundamente integrado ao modo kernel do Windows, fornecendo a experiência mais rápida possível.

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
