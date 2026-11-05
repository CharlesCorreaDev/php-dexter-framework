# Construindo / Compilando a Partir da Fonte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi.build.php

---

## Construindo / Compilando a Partir da Fonte

Considerations for compiling this extension from source.

- O nome da extensão é 'mysql\_xdevapi', portanto use `--enable-mysql-xdevapi`.
- Boost: requerido, opcionalmente use a opção de configuração --with-boost=DIR
  ou defina a variável de ambiente MYSQL\_XDEVAPI\_BOOST\_ROOT. Somente os arquivos de cabeçalho
  Boost são necessários, não os binários.
- Google Protocol Buffers (protobuf): requerido, opcionalmente use a opção de configuração
  --with-protobuf=DIR ou defina a variável de ambiente MYSQL\_XDEVAPI\_PROTOBUF\_ROOT.

  Opcionamente, use `make protobufs` para gerar arquivos protobuf (\*.pb.cc/.h),
  e `make clean-protobufs` para remover os arquivos protobuf gerados.

  Nota do protobuf específica para Windows: dependendo do ambiente,
  a biblioteca estática com um DLL multi-thread pode ser necessária.
  Para preparar, use as seguintes opções:
  *-Dprotobuf\_MSVC\_STATIC\_RUNTIME=OFF -Dprotobuf\_BUILD\_SHARED\_LIBS=OFF*
- Google Protocol Buffers / compilador de protocolo (protoc): requerido, deve-se garantir que
  o 'protoc' apropriado esteja disponível na variável de ambiente PATH durante a construção. É especialmente
  importante porque os scripts em lote do Windows PHP SDK podem sobrescrever o ambiente.
- Bison: requerido, e disponível a partir do PATH.

  Nota do bison específica para o Windows: recomenda-se fortemente o uso do bison fornecido com o
  SDK do PHP escolhido, ou pode resultar em um erro similar a "zend\_globals\_macros.h(39):
  error C2375: 'zendparse': redefinition; different linkage
  Zend/zend\_language\_parser.h(214): note: see declaration of 'zendparse'".
  Além disso, os scripts em lote do Windows PHP SDK podem sobrescrever o ambiente.
- Notas específicas para Windows: Para preparar o ambiente, consulte a documentação de compilação
  oficial do Windows para
  [» o SDK atual](https://wiki.php.net/internals/windows/stepbystepbuild_sdk_2).

  Recomenda-se usar a barra invertida '\\' ao invés da barra normal '/' para todos os caminhos.

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
