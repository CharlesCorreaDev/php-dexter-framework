# Funções de Filesystem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.filesystem.php

---

# Funções de Filesystem

# Veja também

Para funções relacionadas, consulte também as seções [Diretório](ref.dir.md)
e [Execução de Programas](ref.exec.md).

Para obter uma lista e a descrição dos vários empacotadors de URL que podem ser
usados como arquivos remotos, veja também [Protocolos e empacotadores suportados](wrappers.md).

## Índice

- [basename](function.basename.md) — Retorna a última parte do caminho
- [chgrp](function.chgrp.md) — Altera o grupo do arquivo
- [chmod](function.chmod.md) — Modifica as permissões do arquivo
- [chown](function.chown.md) — Modifica o proprietário do arquivo
- [clearstatcache](function.clearstatcache.md) — Limpa o cache de estado de arquivos
- [copy](function.copy.md) — Copia arquivo
- [delete](function.delete.md) — Consulte unlink ou unset
- [dirname](function.dirname.md) — Retorna o caminho para o diretório pai
- [disk\_free\_space](function.disk-free-space.md) — Retorna o espaço disponível no sistema de arquivos ou partição de disco
- [disk\_total\_space](function.disk-total-space.md) — Retorna o tamanho total de um sistema de arquivos ou partição de disco
- [diskfreespace](function.diskfreespace.md) — Sinônimo de disk\_free\_space
- [fclose](function.fclose.md) — Fecha um ponteiro de arquivo aberto
- [fdatasync](function.fdatasync.md) — Sincroniza dados (mas não metadados) ao arquivo
- [feof](function.feof.md) — Testa pelo fim-de-arquivo em um ponteiro de arquivo
- [fflush](function.fflush.md) — Força a liberação do buffer para um arquivo
- [fgetc](function.fgetc.md) — Lê um caractere do ponteiro de arquivo
- [fgetcsv](function.fgetcsv.md) — Lê uma linha do ponteiro de arquivos e a interpreta como campos CSV
- [fgets](function.fgets.md) — Lê uma linha de um ponteiro de arquivo
- [fgetss](function.fgetss.md) — Ler uma linha de um ponteiro de arquivo e retira as tags HTML
- [file](function.file.md) — Lê todo o arquivo para um array
- [file\_exists](function.file-exists.md) — Verifica se um arquivo ou diretório existe
- [file\_get\_contents](function.file-get-contents.md) — Lê todo o conteúdo de um arquivo para uma string
- [file\_put\_contents](function.file-put-contents.md) — Escreve dados em um arquivo
- [fileatime](function.fileatime.md) — Obtém o último horário de acesso do arquivo
- [filectime](function.filectime.md) — Obtém o horário de modificação de inode do arquivo
- [filegroup](function.filegroup.md) — Lê o grupo do arquivo
- [fileinode](function.fileinode.md) — Lê o inode do arquivo
- [filemtime](function.filemtime.md) — Obtém o horário de modificação do arquivo
- [fileowner](function.fileowner.md) — Obtem o proprietário do arquivo
- [fileperms](function.fileperms.md) — Obtém permissões de arquivo
- [filesize](function.filesize.md) — Obtém o tamanho do arquivo
- [filetype](function.filetype.md) — Obtém o tipo do arquivo
- [flock](function.flock.md) — Travamento consultivo portável de arquivo
- [fnmatch](function.fnmatch.md) — Compara nome de arquivo com um padrão
- [fopen](function.fopen.md) — Abre um arquivo ou URL
- [fpassthru](function.fpassthru.md) — Imprime todos os dados restantes de um ponteiro de arquivo
- [fputcsv](function.fputcsv.md) — Formata a linha como CSV e a escreve em um ponteiro de arquivo
- [fputs](function.fputs.md) — Sinônimo de fwrite
- [fread](function.fread.md) — Leitura de arquivo segura para binário
- [fscanf](function.fscanf.md) — Interpreta a leitura de um arquivo de acordo com um formato
- [fseek](function.fseek.md) — Aponta para uma posição no arquivo
- [fstat](function.fstat.md) — Lê informações sobre um arquivo usando um ponteiro de arquivo aberto
- [fsync](function.fsync.md) — Sincroniza mudanças ao arquivo (incluindo metadados)
- [ftell](function.ftell.md) — Retorna a posição atual do ponteiro de leitura/gravação do arquivo
- [ftruncate](function.ftruncate.md) — Trunca um arquivo a um tamanho especificado
- [fwrite](function.fwrite.md) — Escrita binary-safe em arquivos
- [glob](function.glob.md) — Encontra caminhos que combinam com uma expressão
- [is\_dir](function.is-dir.md) — Diz se o caminho é um diretório
- [is\_executable](function.is-executable.md) — Diz se um arquivo é executável
- [is\_file](function.is-file.md) — Informa se o arquivo é um arquivo comum
- [is\_link](function.is-link.md) — Informa se o arquivo é uma ligação simbólica
- [is\_readable](function.is-readable.md) — Informa se um arquivo existe e se pode ser lido
- [is\_uploaded\_file](function.is-uploaded-file.md) — Informa se o arquivo foi enviado por POST HTTP
- [is\_writable](function.is-writable.md) — Informa se o arquivo pode ser escrito
- [is\_writeable](function.is-writeable.md) — Sinônimo de is\_writable
- [lchgrp](function.lchgrp.md) — Modifica o grupo de proprietário da ligação simbólica
- [lchown](function.lchown.md) — Modifica o proprietário da ligação simbólica
- [link](function.link.md) — Criando uma ligação rígida
- [linkinfo](function.linkinfo.md) — Obtém informação sobre uma ligação
- [lstat](function.lstat.md) — Obtém informações sobre um arquivo ou ligação simbólica
- [mkdir](function.mkdir.md) — Cria um diretório
- [move\_uploaded\_file](function.move-uploaded-file.md) — Move um arquivo enviado para uma nova localização
- [parse\_ini\_file](function.parse-ini-file.md) — Interpreta um arquivo de configuração
- [parse\_ini\_string](function.parse-ini-string.md) — Interpreta uma string de configuração
- [pathinfo](function.pathinfo.md) — Retorna informações sobre um caminho de arquivo
- [pclose](function.pclose.md) — Fecha o ponteiro de arquivo de processo
- [popen](function.popen.md) — Abre um processo como ponteiro de arquivo
- [readfile](function.readfile.md) — Exibe o conteúdo de um arquivo
- [readlink](function.readlink.md) — Retornar o alvo de uma ligação simbólica
- [realpath](function.realpath.md) — Retorna o path absoluto canonizado
- [realpath\_cache\_get](function.realpath-cache-get.md) — Obter entradas de cache do caminho absoluto
- [realpath\_cache\_size](function.realpath-cache-size.md) — Obter o tamanho do cache do caminho absoluto
- [rename](function.rename.md) — Renomeia um arquivo ou diretório
- [rewind](function.rewind.md) — Retrocede a posição de um ponteiro de arquivos
- [rmdir](function.rmdir.md) — Remove um diretório
- [set\_file\_buffer](function.set-file-buffer.md) — Sinônimo de stream\_set\_write\_buffer
- [stat](function.stat.md) — Obtém informações sobre um arquivo
- [symlink](function.symlink.md) — Cria uma ligação simbólica
- [tempnam](function.tempnam.md) — Cria arquivo com nome único
- [tmpfile](function.tmpfile.md) — Cria um arquivo temporário
- [touch](function.touch.md) — Define horário de acesso e de modificação de arquivo
- [umask](function.umask.md) — Modificar a umask atual
- [unlink](function.unlink.md) — Apaga um arquivo

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
