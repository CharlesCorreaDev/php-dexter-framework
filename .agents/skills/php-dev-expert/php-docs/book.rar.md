# Arquivamento Rar

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.rar.php

---

# Arquivamento Rar

# Introdução

Rar é um arquivador poderoso e eficaz criado por Eugene Roshal.
Esta extensão dá a possibilidade de ler arquivos Rar, mas
não suporta a gravação de arquivos Rar, porque isso não é suportado
pela biblioteca UnRar e é diretamente proibido por sua licença.

Mais informações sobre Rar e UnRar pode ser encontrado em [» https://www.rarlabs.com/](https://www.rarlabs.com/).

- [Instalação/Configuração](rar.setup.md)
  - [Instalação](rar.installation.md)
  - [Tipos de Recurso](rar.resources.md)
- [Constantes predefinidas](rar.constants.md)
- [Examples](rar.examples.md)
- [Funções de Rar](ref.rar.md)
  - [rar\_wrapper\_cache\_stats](function.rar-wrapper-cache-stats.md) — Acertos e erros de cache para o empacotador de URL
- [RarArchive](class.rararchive.md) — A classe RarArchive
  - [RarArchive::close](rararchive.close.md) — Fecha o arquivo RAR e libera todos os recursos
  - [RarArchive::getComment](rararchive.getcomment.md) — Obtém o texto de comentário do arquivo RAR
  - [RarArchive::getEntries](rararchive.getentries.md) — Obtém a lista completa de entradas do arquivo RAR
  - [RarArchive::getEntry](rararchive.getentry.md) — Obtém o objeto de entrada do arquivo RAR
  - [RarArchive::isBroken](rararchive.isbroken.md) — Testa se um arquivo está quebrado (incompleto)
  - [RarArchive::isSolid](rararchive.issolid.md) — Verifica se o arquivo RAR é sólido
  - [RarArchive::open](rararchive.open.md) — Abre arquivo RAR
  - [RarArchive::setAllowBroken](rararchive.setallowbroken.md) — Se é permitido abrir arquivos quebrados
  - [RarArchive::\_\_toString](rararchive.tostring.md) — Obtém representação de texto
- [RarEntry](class.rarentry.md) — A classe RarEntry
  - [RarEntry::extract](rarentry.extract.md) — Extrai entrada do arquivo
  - [RarEntry::getAttr](rarentry.getattr.md) — Obtém atributos da entrada
  - [RarEntry::getCrc](rarentry.getcrc.md) — Obtém CRC da entrada
  - [RarEntry::getFileTime](rarentry.getfiletime.md) — Obtém hora da última modificação da entrada
  - [RarEntry::getHostOs](rarentry.gethostos.md) — Obtém sistema operacional host de entrada
  - [RarEntry::getMethod](rarentry.getmethod.md) — Obtém método pack da entrada
  - [RarEntry::getName](rarentry.getname.md) — Obtém o nome da entrada
  - [RarEntry::getPackedSize](rarentry.getpackedsize.md) — Obtém o tamanho compactado da entrada
  - [RarEntry::getStream](rarentry.getstream.md) — Obtém manipulador de arquivo para entrada
  - [RarEntry::getUnpackedSize](rarentry.getunpackedsize.md) — Obtém o tamanho descompactado da entrada
  - [RarEntry::getVersion](rarentry.getversion.md) — Obtém a versão mínima do programa RAR necessária para descompactar a entrada
  - [RarEntry::isDirectory](rarentry.isdirectory.md) — Testa se uma entrada representa um diretório
  - [RarEntry::isEncrypted](rarentry.isencrypted.md) — Testa se uma entrada está criptografada
  - [RarEntry::\_\_toString](rarentry.tostring.md) — Obtém representação em texto da entrada
- [RarException](class.rarexception.md) — A classe RarException
  - [RarException::isUsingExceptions](rarexception.isusingexceptions.md) — Verifica se o tratamento de erros com exceções está em uso
  - [RarException::setUsingExceptions](rarexception.setusingexceptions.md) — Ativa e desativa o tratamento de erros com exceções

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
