# Zip

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.zip.php

---

# Zip

# Introdução

Esta extensão habilita você a ler ou escrever arquivos
ZIP e os arquivos compactados internamente.

- [Instalação/Configuração](zip.setup.md)
  - [Dependências](zip.requirements.md)
  - [Instalação](zip.installation.md)
  - [Tipos de Recurso](zip.resources.md)
- [Constantes predefinidas](zip.constants.md)
- [Examples](zip.examples.md)
- [ZipArchive](class.ziparchive.md) — A classe ZipArchive
  - [ZipArchive::addEmptyDir](ziparchive.addemptydir.md) — Adiciona um novo diretório
  - [ZipArchive::addFile](ziparchive.addfile.md) — Adiciona um arquivo a um arquivo ZIP a partir do caminho fornecido
  - [ZipArchive::addFromString](ziparchive.addfromstring.md) — Adiciona um arquivo a um arquivo ZIP usando seu conteúdo
  - [ZipArchive::addGlob](ziparchive.addglob.md) — Adicionar arquivos de um diretório por padrão glob
  - [ZipArchive::addPattern](ziparchive.addpattern.md) — Adiciona arquivos de um diretório por padrão PCRE
  - [ZipArchive::clearError](ziparchive.clearerror.md) — Limpa a mensagem de erro de status, mensagens do sistema e/ou do zip
  - [ZipArchive::close](ziparchive.close.md) — Fecha o arquivo de arquivo ativo (aberto ou recém-criado)
  - [ZipArchive::count](ziparchive.count.md) — Conta o número de arquivos no arquivo
  - [ZipArchive::deleteIndex](ziparchive.deleteindex.md) — Exclui uma entrada no arquivo usando seu índice
  - [ZipArchive::deleteName](ziparchive.deletename.md) — Exclui uma entrada no arquivo usando seu nome
  - [ZipArchive::extractTo](ziparchive.extractto.md) — Extrai o conteúdo do arquivo
  - [ZipArchive::getArchiveComment](ziparchive.getarchivecomment.md) — Retorna o comentário do arquivo Zip
  - [ZipArchive::getArchiveFlag](ziparchive.getarchiveflag.md) — Retorna o valor de uma opção global do arquivo Zip
  - [ZipArchive::getCommentIndex](ziparchive.getcommentindex.md) — Retorna o comentário de uma entrada usando o índice da entrada
  - [ZipArchive::getCommentName](ziparchive.getcommentname.md) — Retorna o comentário de uma entrada usando o nome da entrada
  - [ZipArchive::getExternalAttributesIndex](ziparchive.getexternalattributesindex.md) — Recupera os atributos externos de uma entrada definida pelo seu índice
  - [ZipArchive::getExternalAttributesName](ziparchive.getexternalattributesname.md) — Recupera os atributos externos de uma entrada definida pelo seu nome
  - [ZipArchive::getFromIndex](ziparchive.getfromindex.md) — Retorna o conteúdo da entrada usando seu índice
  - [ZipArchive::getFromName](ziparchive.getfromname.md) — Retorna o conteúdo da entrada usando seu nome
  - [ZipArchive::getNameIndex](ziparchive.getnameindex.md) — Retorna o nome de uma entrada usando seu índice
  - [ZipArchive::getStatusString](ziparchive.getstatusstring.md) — Retorna a mensagem de erro de status, mensagens do sistema e/ou zip
  - [ZipArchive::getStream](ziparchive.getstream.md) — Obtém um manipulador de arquivo para a entrada definida pelo seu nome (somente leitura)
  - [ZipArchive::getStreamIndex](ziparchive.getstreamindex.md) — Obtém um manipulador de arquivo para a entrada definida pelo seu índice (somente leitura)
  - [ZipArchive::getStreamName](ziparchive.getstreamname.md) — Obtém um manipulador de arquivo para a entrada definida pelo seu nome (somente leitura)
  - [ZipArchive::isCompressionMethodSupported](ziparchive.iscompressionmethoddupported.md) — Verifica se um método de compressão é suportado pelo libzip
  - [ZipArchive::isEncryptionMethodSupported](ziparchive.isencryptionmethoddupported.md) — Verifica se um método de criptografia é suportado pelo libzip
  - [ZipArchive::locateName](ziparchive.locatename.md) — Retorna o índice da entrada no arquivo compactado
  - [ZipArchive::open](ziparchive.open.md) — Abre um arquivo compactado ZIP
  - [ZipArchive::registerCancelCallback](ziparchive.registercancelcallback.md) — Registra um callback para permitir o cancelamento durante o fechamento do arquivo compactado.
  - [ZipArchive::registerProgressCallback](ziparchive.registerprogresscallback.md) — Registrar um callback para fornecer atualizações durante o fechamento do arquivo compactado.
  - [ZipArchive::renameIndex](ziparchive.renameindex.md) — Renomeia uma entrada definida pelo seu índice
  - [ZipArchive::renameName](ziparchive.renamename.md) — Renomeia uma entrada definida pelo seu nome
  - [ZipArchive::replaceFile](ziparchive.replacefile.md) — Substitui um arquivo no arquivo ZIP por um caminho fornecido
  - [ZipArchive::setArchiveComment](ziparchive.setarchivecomment.md) — Define o comentário de um arquivo ZIP
  - [ZipArchive::setArchiveFlag](ziparchive.setarchiveflag.md) — Define uma opção global de um arquivo ZIP
  - [ZipArchive::setCommentIndex](ziparchive.setcommentindex.md) — Define o comentário de uma entrada definida pelo seu índice
  - [ZipArchive::setCommentName](ziparchive.setcommentname.md) — Define o comentário de uma entrada definida pelo seu nome
  - [ZipArchive::setCompressionIndex](ziparchive.setcompressionindex.md) — Define o método de compressão de uma entrada definida pelo seu índice
  - [ZipArchive::setCompressionName](ziparchive.setcompressionname.md) — Define o método de compressão de uma entrada definida pelo seu nome
  - [ZipArchive::setEncryptionIndex](ziparchive.setencryptionindex.md) — Define o método de criptografia de uma entrada definida pelo seu índice
  - [ZipArchive::setEncryptionName](ziparchive.setencryptionname.md) — Define o método de criptografia de uma entrada definida pelo seu nome
  - [ZipArchive::setExternalAttributesIndex](ziparchive.setexternalattributesindex.md) — Define os atributos externos de uma entrada definida pelo seu índice
  - [ZipArchive::setExternalAttributesName](ziparchive.setexternalattributesname.md) — Define os atributos externos de uma entrada definida pelo seu nome
  - [ZipArchive::setMtimeIndex](ziparchive.setmtimeindex.md) — Define o tempo de modificação de uma entrada definida pelo seu índice
  - [ZipArchive::setMtimeName](ziparchive.setmtimename.md) — Define o tempo de modificação de uma entrada definida pelo seu nome
  - [ZipArchive::setPassword](ziparchive.setpassword.md) — Define a senha para o arquivo ZIP ativo
  - [ZipArchive::statIndex](ziparchive.statindex.md) — Obtenha os detalhes de uma entrada definida pelo seu índice
  - [ZipArchive::statName](ziparchive.statname.md) — Obtém os detalhes de uma entrada definida pelo seu nome
  - [ZipArchive::unchangeAll](ziparchive.unchangeall.md) — Desfaz todas as alterações feitas no arquivo
  - [ZipArchive::unchangeArchive](ziparchive.unchangearchive.md) — Reverte todas as alterações globais feitas no arquivo
  - [ZipArchive::unchangeIndex](ziparchive.unchangeindex.md) — Reverte todas as alterações feitas a uma entrada no índice fornecido
  - [ZipArchive::unchangeName](ziparchive.unchangename.md) — Reverte todas as alterações feitas a uma entrada com o nome fornecido
- [Funções Zip](ref.zip.md)
  - [zip\_close](function.zip-close.md) — Fecha um arquivo ZIP
  - [zip\_entry\_close](function.zip-entry-close.md) — Fecha o arquivo que está aberto
  - [zip\_entry\_compressedsize](function.zip-entry-compressedsize.md) — Obtém o tamanho comprimido do item
  - [zip\_entry\_compressionmethod](function.zip-entry-compressionmethod.md) — Recupera qual o método de compressão foi utilizado no arquivo
  - [zip\_entry\_filesize](function.zip-entry-filesize.md) — Retorna o tamanho de um item de diretório
  - [zip\_entry\_name](function.zip-entry-name.md) — Retorna o nome do arquivo
  - [zip\_entry\_open](function.zip-entry-open.md) — Abre um arquivo para leitura
  - [zip\_entry\_read](function.zip-entry-read.md) — Obtém dados de um arquivo
  - [zip\_open](function.zip-open.md) — Abre um arquivo ZIP
  - [zip\_read](function.zip-read.md) — Lê o próximo item em um arquivo ZIP

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
