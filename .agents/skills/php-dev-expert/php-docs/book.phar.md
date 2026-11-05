# Phar

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.phar.php

---

# Phar

# Introdução

A extensão phar fornece uma maneira de colocar aplicações PHP inteiras em um único arquivo
chamado "phar" (Arquivo PHP) para fácil distribuição e instalação.
Além de fornecer este serviço, a extensão phar também fornece um método de abstração
de formato de arquivo para criar e manipular arquivos tar e zip através da classe
[PharData](class.phardata.md), assim como
o PDO fornece uma interface unificada para acessar diferentes bancos de dados. Ao contrário do PDO,
que não pode converter entre bancos de dados diferentes, o Phar também pode converter entre os formatos de arquivo tar,
zip e phar com uma única linha de código. Veja
[Phar::convertToExecutable()](phar.converttoexecutable.md) para um exemplo.

O que é phar? Arquivos phar são melhor caracterizados como uma maneira conveniente de agrupar
vários arquivos em um único arquivo. Assim, um arquivo phar fornece uma maneira de
distribuir uma aplicação PHP completa em um único arquivo e executá-la a partir desse arquivo
sem a necessidade de extraí-la para o disco. Além disso, arquivos phar podem ser
executados pelo PHP tão facilmente quanto qualquer outro arquivo, tanto na linha de comando quanto em
um servidor web. Phar é como um pen drive para aplicações PHP.

Phar implementa essa funcionalidade por meio de um [empacotador
de fluxo](book.stream.md). Normalmente, para usar um arquivo externo dentro de um script PHP, seria
usado [include](function.include.md):

**Exemplo #1 Using an external file**

```
<?php
 include '/caminho/para/arquivo/externo.php';
 ?>
```

Pode-se pensar que o PHP está, na verdade, traduzindo
`/caminho/para/arquivo/externo.php` em um
empacotador de fluxo como `arquivo:///caminho/para/arquivo/externo.php` e,
nos bastidores, ele de fato usa as funções do empacotador de fluxo de arquivo simples para
acessar todos os arquivos locais.

Para usar um arquivo chamado `arquivo.php` contido em um arquivo phar
`/caminho/para/meuphar.phar`,
a sintaxe é muito semelhante à sintaxe `file://` acima.

**Exemplo #2 Usando um arquivo dentro de um arquivo phar**

```
<?php
 include 'phar:///caminho/para/meuphar.phar/arquivo.php';
 ?>
```

De fato, é possível tratar um arquivo phar exatamente como se fosse um disco externo, usando
qualquer uma das funções relacionadas a [fopen()](function.fopen.md), [opendir()](function.opendir.md) e
funções relacionadas a [mkdir()](function.mkdir.md) para ler, alterar ou criar novos arquivos
e diretórios dentro do arquivo phar. Isso permite que aplicações PHP completas
sejam distribuídas em um único arquivo e executadas diretamente a partir dele.

O uso mais comum de um arquivo phar é distribuir uma aplicação completa
em um único arquivo. Por exemplo, o Instalador PEAR, que acompanha as versões do PHP
é distribuído como um arquivo phar. Para usar um arquivo phar distribuído
desta forma, o arquivo pode ser executado na linha de comando ou por meio de um servidor web.

Os arquivos Phar podem ser distribuídos como arquivos `tar`,
arquivos `zip` ou como o formato de arquivo `phar` personalizado
projetado especificamente para a extensão phar. Cada formato de arquivo tem vantagens
e desvantagens. Os formatos de arquivo tar e zip podem ser lidos ou extraídos por qualquer
ferramenta de terceiros que possa ler o formato, mas que requer a extensão phar para
executar com PHP. O formato de arquivo phar é personalizado e exclusivo para a extensão phar,
e só pode ser criado pela extensão phar ou pelo pacote PEAR
[» PHP\_Archive](https://pear.php.net/package/PHP_Archive), mas tem a
vantagem de que as aplicações criadas neste formato serão executadas mesmo se a extensão phar
não estiver habilitada.

Em outras palavras, mesmo com a extensão phar desabilitada, é possível executar ou incluir
um arquivo baseado em phar. Acessar arquivos individuais dentro de um arquivo phar só é
possível com a extensão phar, a menos que o arquivo phar tenha sido criado pelo PHP\_Archive.

A extensão phar também é capaz de converter um arquivo phar de tar para zip ou
para o formato de arquivo phar em um único comando:

**Exemplo #3 Convertendo um arquivo phar do formato phar para tar**

```
<?php
$phar = new Phar('meuphar.phar');
$pgz = $phar->convertToExecutable(Phar::TAR, Phar::GZ); // cria meuphar.phar.tar.gz
?>
```

O Phar pode compactar arquivos individuais ou um arquivo inteiro
usando a compactação [gzip](book.zlib.md) ou
[bzip2](book.bzip2.md), e pode verificar a integridade
do arquivo automaticamente por meio do uso de assinaturas MD5, SHA-1, SHA-256
ou SHA-512.

Por fim, a extensão Phar é voltada para a segurança e desabilita o acesso de gravação
aos arquivos Phar executáveis ​​por padrão, além de exigir a desativação, em nível de sistema, da configuração
`phar.readonly` do php.ini para criar ou
modificar arquivos Phar. Arquivos tar e zip normais sem um stub executável
sempre podem ser criados ou modificados usando a classe [PharData](class.phardata.md).

Se aplicações para distribuição estiverem sendo criadas, leia
[Como criar arquivos Phar](phar.creating.md). Se quiser
mais informações sobre as diferenças entre os três formatos de arquivo suportados pelo Phar,
leia [Phar, Tar e Zip](phar.fileformat.md).

Se aplicações Phar estiverem sendo usadas, há dicas úteis em
[Como usar os Arquivos Phar](phar.using.md).

A palavra `phar` é uma junção de `PHP` e
`Archive` e é vagamente baseada
no `jar` (Java Archive), familiar aos desenvolvedores Java.

A implementação para arquivos Phar é baseada no pacote PEAR
[» PHP\_Archive](https://pear.php.net/package/PHP_Archive), e
os detalhes de implementação são semelhantes, embora a extensão Phar
seja muito mais poderosa. Além disso, a extensão Phar permite que a maioria das aplicações PHP
sejam executadas sem modificações, enquanto os arquivos Phar baseados em PHP\_Archive
geralmente exigem modificações extensas para funcionar.

- [Instalação/Configuração](phar.setup.md)
  - [Dependências](phar.requirements.md)
  - [Instalação](phar.installation.md)
  - [Configurações de Execução](phar.configuration.md)
  - [Tipos de Recurso](phar.resources.md)
- [Constantes predefinidas](phar.constants.md)
- [Usando Arquivos Phar](phar.using.md)
  - [Usando Arquivos Phar: Introdução](phar.using.intro.md)
  - [Usando Arquivos Phar: o empacotador de fluxo phar](phar.using.stream.md)
  - [Usando Arquivos Phar: as classes Phar e PharData](phar.using.object.md)
- [Criando Arquivos Phar](phar.creating.md)
  - [Criando Arquivos Phar: Introdução](phar.creating.intro.md)
- [O que faz um phar ser um phar e não um tar ou um zip?](phar.fileformat.md)
  - [Ingredientes de todos os arquivos Phar, independentemente do formato do arquivo](phar.fileformat.ingredients.md)
  - [Stub de arquivo Phar](phar.fileformat.stub.md)
  - [Comparação direta de Phar, Tar e Zip](phar.fileformat.comparison.md)
  - [Phars baseados em Tar](phar.fileformat.tar.md)
  - [Phars baseados em Zip](phar.fileformat.zip.md)
  - [Formato de arquivo phar](phar.fileformat.phar.md)
  - [Sinalizadores globais Phar em mapa de bits](phar.fileformat.flags.md)
  - [Definição de entrada do arquivo de manifesto Phar](phar.fileformat.manifestfile.md)
  - [Formato de assinatura Phar](phar.fileformat.signature.md)
- [Phar](class.phar.md) — A classe Phar
  - [Phar::addEmptyDir](phar.addemptydir.md) — Adiciona um diretório vazio ao arquivo phar
  - [Phar::addFile](phar.addfile.md) — Adiciona um arquivo do sistema de arquivos ao arquivo phar
  - [Phar::addFromString](phar.addfromstring.md) — Adiciona um arquivo a partir de uma string ao arquivo phar
  - [Phar::apiVersion](phar.apiversion.md) — Retorna a versão da API
  - [Phar::buildFromDirectory](phar.buildfromdirectory.md) — Constrói um arquivo phar a partir dos arquivos dentro de um diretório
  - [Phar::buildFromIterator](phar.buildfromiterator.md) — Constrói um arquivo phar a partir de um iterador
  - [Phar::canCompress](phar.cancompress.md) — Retorna se a extensão phar suporta compactação usando zlib ou bzip2
  - [Phar::canWrite](phar.canwrite.md) — Retorna se a extensão phar suporta a escrita e criação de phars
  - [Phar::compress](phar.compress.md) — Compacta todo o arquivo Phar usando compactação Gzip ou Bzip2
  - [Phar::compressFiles](phar.compressfiles.md) — Compacta todos os arquivos no arquivo Phar atual
  - [Phar::\_\_construct](phar.construct.md) — Constrói um objeto de arquivo Phar
  - [Phar::convertToData](phar.converttodata.md) — Converte um arquivo phar em um arquivo tar ou zip não executável
  - [Phar::convertToExecutable](phar.converttoexecutable.md) — Converte um arquivo phar em outro formato de arquivo executável phar
  - [Phar::copy](phar.copy.md) — Copia um arquivo interno do arquivo phar para outro novo arquivo dentro do phar
  - [Phar::count](phar.count.md) — Retorna o número de entradas (arquivos) no arquivo Phar
  - [Phar::createDefaultStub](phar.createdefaultstub.md) — Cria um stup de formato específico de arquivo phar
  - [Phar::decompress](phar.decompress.md) — Descompacta todo o arquivo Phar
  - [Phar::decompressFiles](phar.decompressfiles.md) — Descompacta todos os arquivos no arquivo Phar atual
  - [Phar::delMetadata](phar.delmetadata.md) — Exclui os metadados globais do phar
  - [Phar::delete](phar.delete.md) — Exclui um arquivo dentro de um arquivo phar
  - [Phar::\_\_destruct](phar.destruct.md) — Destrói um objeto de arquivo Phar
  - [Phar::extractTo](phar.extractto.md) — Extrai o conteúdo de um arquivo phar para um diretório
  - [Phar::getAlias](phar.getalias.md) — Obtém o apelido para o Phar
  - [Phar::getMetadata](phar.getmetadata.md) — Retorna metadados do arquivo phar
  - [Phar::getModified](phar.getmodified.md) — Informa se o phar foi modificado
  - [Phar::getPath](phar.getpath.md) — Obtém o caminho real para o arquivo Phar no disco
  - [Phar::getSignature](phar.getsignature.md) — Retorna a assinatura MD5/SHA1/SHA256/SHA512/OpenSSL de um arquivo Phar
  - [Phar::getStub](phar.getstub.md) — Retorna o carregador PHP ou o stub de inicialização de um arquivo Phar
  - [Phar::getSupportedCompression](phar.getsupportedcompression.md) — Retorna um array de algoritmos de compactação suportados
  - [Phar::getSupportedSignatures](phar.getsupportedsignatures.md) — Retorna um array de tipos de assinatura suportados
  - [Phar::getVersion](phar.getversion.md) — Retorna informações da versão do arquivo Phar
  - [Phar::hasMetadata](phar.hasmetadata.md) — Informa se o phar tem metadados globais
  - [Phar::interceptFileFuncs](phar.interceptfilefuncs.md) — Instrui phar a interceptar fopen, file\_get\_contents, opendir e todas as funções relacionadas a stat
  - [Phar::isBuffering](phar.isbuffering.md) — Usado para determinar se as operações de gravação Phar estão sendo armazenadas em buffer ou estão sendo liberadas diretamente no disco
  - [Phar::isCompressed](phar.iscompressed.md) — Retorna Phar::GZ ou PHAR::BZ2 se todo o arquivo phar estiver compactado (.tar.gz/tar.bz e assim por diante)
  - [Phar::isFileFormat](phar.isfileformat.md) — Informa se o arquivo phar é baseado no formato de arquivo tar/phar/zip dependendo do parâmetro
  - [Phar::isValidPharFilename](phar.isvalidpharfilename.md) — Informa se o nome de arquivo fornecido é um nome de arquivo phar válido
  - [Phar::isWritable](phar.iswritable.md) — Informa se o arquivo phar pode ser modificado
  - [Phar::loadPhar](phar.loadphar.md) — Carrega qualquer arquivo phar com um apelido
  - [Phar::mapPhar](phar.mapphar.md) — Lê o arquivo atualmente em execução (um phar) e registra seu manifesto
  - [Phar::mount](phar.mount.md) — Monta um caminho externo ou arquivo em um local virtual dentro do arquivo phar
  - [Phar::mungServer](phar.mungserver.md) — Define uma lista de até 4 variáveis ​​$\_SERVER que devem ser modificadas para execução
  - [Phar::offsetExists](phar.offsetexists.md) — Determina se um arquivo existe no phar
  - [Phar::offsetGet](phar.offsetget.md) — Obtém um objeto PharFileInfo para um arquivo específico
  - [Phar::offsetSet](phar.offsetset.md) — Define o conteúdo de um arquivo interno para o de um arquivo externo
  - [Phar::offsetUnset](phar.offsetunset.md) — Remove um arquivo de um phar
  - [Phar::running](phar.running.md) — Retorna o caminho completo no disco ou a URL completa do arquivo Phar em execução no momento
  - [Phar::setAlias](phar.setalias.md) — Define o apelido para o arquivo Phar
  - [Phar::setDefaultStub](phar.setdefaultstub.md) — Usado para definir o carregador PHP ou o stub de bootstrap de um arquivo Phar para o carregador padrão
  - [Phar::setMetadata](phar.setmetadata.md) — Define metadados do arquivo phar
  - [Phar::setSignatureAlgorithm](phar.setsignaturealgorithm.md) — Define o algoritmo de assinatura para um phar e o aplica
  - [Phar::setStub](phar.setstub.md) — Usado para definir o carregador PHP ou o stub de inicialização de um arquivo Phar
  - [Phar::startBuffering](phar.startbuffering.md) — Inicia o buffer das operações de gravação Phar, não modifica o objeto Phar no disco
  - [Phar::stopBuffering](phar.stopbuffering.md) — Interrompe o buffer de solicitações de gravação no arquivo Phar e salva as alterações no disco
  - [Phar::unlinkArchive](phar.unlinkarchive.md) — Remove completamente um arquivo phar do disco e da memória
  - [Phar::webPhar](phar.webphar.md) — Encaminha uma solicitação de um navegador da web para um arquivo interno dentro do arquivo phar
- [PharData](class.phardata.md) — A classe PharData
  - [PharData::addEmptyDir](phardata.addemptydir.md) — Adiciona um diretório vazio ao arquivo tar/zip
  - [PharData::addFile](phardata.addfile.md) — Adiciona um arquivo do sistema de arquivos ao arquivo tar/zip
  - [PharData::addFromString](phardata.addfromstring.md) — Adiciona um arquivo de uma string ao arquivo tar/zip
  - [PharData::buildFromDirectory](phardata.buildfromdirectory.md) — Constrói um arquivo tar/zip a partir dos arquivos dentro de um diretório
  - [PharData::buildFromIterator](phardata.buildfromiterator.md) — Constrói um arquivo tar ou zip a partir de um iterador
  - [PharData::compress](phardata.compress.md) — Compacta todo o arquivo tar/zip usando Gzip ou Bzip2
  - [PharData::compressFiles](phardata.compressfiles.md) — Compacta todos os arquivos no arquivo tar/zip atual
  - [PharData::\_\_construct](phardata.construct.md) — Constrói um objeto de arquivo tar ou zip não executável
  - [PharData::convertToData](phardata.converttodata.md) — Converte um arquivo phar em um arquivo tar ou zip não executável
  - [PharData::convertToExecutable](phardata.converttoexecutable.md) — Converte um arquivo tar/zip não executável em um arquivo phar executável
  - [PharData::copy](phardata.copy.md) — Copia um arquivo interno do arquivo tar/zip para outro arquivo novo dentro do mesmo arquivo
  - [PharData::decompress](phardata.decompress.md) — Descompacta todo o arquivo Phar
  - [PharData::decompressFiles](phardata.decompressfiles.md) — Descompacta todos os arquivos no arquivo zip atual
  - [PharData::delMetadata](phardata.delmetadata.md) — Exclui os metadados globais de um arquivo zip
  - [PharData::delete](phardata.delete.md) — Exclui um arquivo dentro de um arquivo tar/zip
  - [PharData::\_\_destruct](phardata.destruct.md) — Destrói um objeto de arquivo tar ou zip não executável
  - [PharData::extractTo](phardata.extractto.md) — Extrai o conteúdo de um arquivo tar/zip para um diretório
  - [PharData::isWritable](phardata.iswritable.md) — Informa se o arquivo tar/zip pode ser modificado
  - [PharData::offsetSet](phardata.offsetset.md) — Define o conteúdo de um arquivo dentro do tar/zip para o de um arquivo externo ou string
  - [PharData::offsetUnset](phardata.offsetunset.md) — Remove um arquivo de um arquivo tar/zip
  - [PharData::setAlias](phardata.setalias.md) — Função fictícia (Phar::setAlias ​​não é válido para PharData)
  - [PharData::setDefaultStub](phardata.setdefaultstub.md) — Função fictícia (Phar::setDefaultStub não é válido para PharData)
  - [PharData::setMetadata](phardata.setmetadata.md) — Define metadados do arquivo phar
  - [PharData::setSignatureAlgorithm](phardata.setsignaturealgorithm.md) — Define o algoritmo de assinatura para um phar e o aplica
  - [PharData::setStub](phardata.setstub.md) — Função fictícia (Phar::setStub não é válido para PharData)
- [PharFileInfo](class.pharfileinfo.md) — A classe PharFileInfo
  - [PharFileInfo::chmod](pharfileinfo.chmod.md) — Define bits de permissão específicos do arquivo
  - [PharFileInfo::compress](pharfileinfo.compress.md) — Compacta a entrada Phar atual com zlib ou bzip2
  - [PharFileInfo::\_\_construct](pharfileinfo.construct.md) — Constrói um objeto de entrada Phar
  - [PharFileInfo::decompress](pharfileinfo.decompress.md) — Descompacta a entrada Phar atual dentro do phar
  - [PharFileInfo::delMetadata](pharfileinfo.delmetadata.md) — Exclui os metadados da entrada
  - [PharFileInfo::\_\_destruct](pharfileinfo.destruct.md) — Destrói um objeto de entrada Phar
  - [PharFileInfo::getCRC32](pharfileinfo.getcrc32.md) — Retorna o código CRC32 ou lança uma exceção se o CRC não tiver sido verificado
  - [PharFileInfo::getCompressedSize](pharfileinfo.getcompressedsize.md) — Retorna o tamanho real do arquivo (com compactação) dentro do arquivo Phar
  - [PharFileInfo::getContent](pharfileinfo.getcontent.md) — Obtém o conteúdo completo do arquivo de entrada
  - [PharFileInfo::getMetadata](pharfileinfo.getmetadata.md) — Retorna metadados específicos do arquivo salvos com um arquivo
  - [PharFileInfo::getPharFlags](pharfileinfo.getpharflags.md) — Retorna os sinalizadores de entrada do arquivo Phar
  - [PharFileInfo::hasMetadata](pharfileinfo.hasmetadata.md) — Retorna os metadados da entrada
  - [PharFileInfo::isCRCChecked](pharfileinfo.iscrcchecked.md) — Informa se a entrada do arquivo teve seu CRC verificado
  - [PharFileInfo::isCompressed](pharfileinfo.iscompressed.md) — Informa se a entrada está compactada
  - [PharFileInfo::setMetadata](pharfileinfo.setmetadata.md) — Define metadados específicos de arquivo salvos com um arquivo
- [PharException](class.pharexception.md) — A classe PharException

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
