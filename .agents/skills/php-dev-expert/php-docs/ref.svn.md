# Funções de SVN

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.svn.php

---

# Funções de SVN

## Índice

- [svn\_add](function.svn-add.md) — Agenda a adição de um item em um diretório de trabalho
- [svn\_auth\_get\_parameter](function.svn-auth-get-parameter.md) — Recupera o parâmetro de autenticação
- [svn\_auth\_set\_parameter](function.svn-auth-set-parameter.md) — Define um parâmetro de autenticação
- [svn\_blame](function.svn-blame.md) — Obtém os responsáveis pelas alterações SVN de um arquivo
- [svn\_cat](function.svn-cat.md) — Retorna o conteúdo de um arquivo em um repositório
- [svn\_checkout](function.svn-checkout.md) — Obtém uma cópia de trabalho do repositório
- [svn\_cleanup](function.svn-cleanup.md) — Limpa recursivamente um diretório de cópia de trabalho, concluindo operações incompletas e removendo bloqueios
- [svn\_client\_version](function.svn-client-version.md) — Retorna a versão das bibliotecas do cliente SVN
- [svn\_commit](function.svn-commit.md) — Envia alterações da cópia de trabalho local para o repositório
- [svn\_delete](function.svn-delete.md) — Exclui itens de uma cópia de trabalho ou repositório
- [svn\_diff](function.svn-diff.md) — Diferencia recursivamente dois caminhos
- [svn\_export](function.svn-export.md) — Exporta o conteúdo de um diretório SVN
- [svn\_fs\_abort\_txn](function.svn-fs-abort-txn.md) — Aborta uma transação
- [svn\_fs\_apply\_text](function.svn-fs-apply-text.md) — Cria e retorna um fluxo que será usado para substituir o conteúdo de um arquivo
- [svn\_fs\_begin\_txn2](function.svn-fs-begin-txn2.md) — Cria uma nova transação
- [svn\_fs\_change\_node\_prop](function.svn-fs-change-node-prop.md) — Retorna verdadeiro se tudo estiver ok, falso caso contrário
- [svn\_fs\_check\_path](function.svn-fs-check-path.md) — Determina que tipo de item reside no caminho em um determinado repositório fsroot
- [svn\_fs\_contents\_changed](function.svn-fs-contents-changed.md) — Retorna verdadeiro se o conteúdo for diferente, falso caso contrário
- [svn\_fs\_copy](function.svn-fs-copy.md) — Copia um arquivo ou diretório
- [svn\_fs\_delete](function.svn-fs-delete.md) — Exclui um arquivo ou diretório
- [svn\_fs\_dir\_entries](function.svn-fs-dir-entries.md) — Enumera as entradas de diretório em caminho; retorna um hash de nomes de diretório para o tipo de arquivo
- [svn\_fs\_file\_contents](function.svn-fs-file-contents.md) — Retorna um fluxo para acessar o conteúdo de um arquivo de uma determinada versão do fs
- [svn\_fs\_file\_length](function.svn-fs-file-length.md) — Retorna o comprimento de um arquivo de uma determinada versão do fs
- [svn\_fs\_is\_dir](function.svn-fs-is-dir.md) — Determina se um caminho aponta para um diretório
- [svn\_fs\_is\_file](function.svn-fs-is-file.md) — Determina se um caminho aponta para um arquivo
- [svn\_fs\_make\_dir](function.svn-fs-make-dir.md) — Cria um novo diretório vazio
- [svn\_fs\_make\_file](function.svn-fs-make-file.md) — Cria um novo arquivo vazio
- [svn\_fs\_node\_created\_rev](function.svn-fs-node-created-rev.md) — Retorna a revisão na qual o caminho sob fsroot foi criado
- [svn\_fs\_node\_prop](function.svn-fs-node-prop.md) — Retorna o valor de uma propriedade para um nó
- [svn\_fs\_props\_changed](function.svn-fs-props-changed.md) — Retorna verdadeiro se as propriedades forem diferentes, falso caso contrário
- [svn\_fs\_revision\_prop](function.svn-fs-revision-prop.md) — Obtém o valor de uma propriedade nomeada
- [svn\_fs\_revision\_root](function.svn-fs-revision-root.md) — Obtém um identificador para uma versão específica da raiz do repositório
- [svn\_fs\_txn\_root](function.svn-fs-txn-root.md) — Cria e retorna uma raiz de transação
- [svn\_fs\_youngest\_rev](function.svn-fs-youngest-rev.md) — Retorna o número da revisão mais recente no sistema de arquivos
- [svn\_import](function.svn-import.md) — Importa um caminho não versionado para um repositório
- [svn\_log](function.svn-log.md) — Retorna as mensagens de registro de envios de uma URL de repositório
- [svn\_ls](function.svn-ls.md) — Retorna a lista de conteúdo do diretório na URL do repositório, opcionalmente no número de revisão
- [svn\_mkdir](function.svn-mkdir.md) — Cria um diretório em uma cópia de trabalho ou repositório
- [svn\_repos\_create](function.svn-repos-create.md) — Cria um novo repositório Subversion no caminho
- [svn\_repos\_fs](function.svn-repos-fs.md) — Obtém um identificador sobre o sistema de arquivos de um repositório
- [svn\_repos\_fs\_begin\_txn\_for\_commit](function.svn-repos-fs-begin-txn-for-commit.md) — Cria uma nova transação
- [svn\_repos\_fs\_commit\_txn](function.svn-repos-fs-commit-txn.md) — Confirma uma transação e retorna a nova revisão
- [svn\_repos\_hotcopy](function.svn-repos-hotcopy.md) — Faz uma cópia ativa dos repositórios em repospath; copia-a para destpath
- [svn\_repos\_open](function.svn-repos-open.md) — Abre um bloqueio compartilhado em um repositório
- [svn\_repos\_recover](function.svn-repos-recover.md) — Executa procedimentos de recuperação no repositório localizado no caminho
- [svn\_revert](function.svn-revert.md) — Reverte as alterações na cópia de trabalho
- [svn\_status](function.svn-status.md) — Retorna o status dos arquivos e diretórios da cópia de trabalho
- [svn\_update](function.svn-update.md) — Atualiza a cópia de trabalho

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
